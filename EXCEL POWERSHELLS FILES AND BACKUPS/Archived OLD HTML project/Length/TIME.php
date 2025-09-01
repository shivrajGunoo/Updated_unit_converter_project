<?php
/**
 * length-converter-structured.php
 * Single-page converter that:
 *  - Preserves main_template.php markup and classes exactly (no structural edits)
 *  - Loads ordered unit labels from Conversions.xlsx → Sheet1 → "Sub-Header (Unit)"
 *  - Uses conversion_javascript.js (window.conversionFactors) as the ONLY math source
 *  - Injects minimal CSS/JS just before </body>
 *
 * Place this file alongside:
 *   - main_template.php
 *   - Conversions.xlsx
 *   - conversion_javascript.js
 */

// ---------- Helpers: read XLSX without external libraries ----------
function lc_cellRefToColRow($ref) {
    // e.g., "BC12" -> [colIndexStartingAt1, rowIndexStartingAt1]
    if (!preg_match('/^([A-Z]+)([0-9]+)$/', strtoupper($ref), $m)) return [0,0];
    $letters = $m[1]; $row = intval($m[2]);
    $col = 0;
    for ($i = 0; $i < strlen($letters); $i++) {
        $col = $col * 26 + (ord($letters[$i]) - 64);
    }
    return [$col, $row];
}

function lc_readSharedStrings($zip) {
    $sharedStrings = [];
    $path = 'xl/sharedStrings.xml';
    if ($zip->locateName($path) === false) return $sharedStrings;
    $xml = new DOMDocument();
    $xml->loadXML($zip->getFromName($path));
    foreach ($xml->getElementsByTagName('si') as $si) {
        // concatenate all t nodes inside this si
        $text = '';
        foreach ($si->getElementsByTagName('t') as $t) {
            $text .= $t->textContent;
        }
        $sharedStrings[] = $text;
    }
    return $sharedStrings;
}

function lc_readSheetByName($zip, $sheetName='Sheet1') {
    // Map sheet name to sheetX.xml via workbook.xml
    $workbookPath = 'xl/workbook.xml';
    if ($zip->locateName($workbookPath) === false) return null;
    $wb = new DOMDocument();
    $wb->loadXML($zip->getFromName($workbookPath));
    $relsMap = [];
    // workbook relationships to resolve r:id -> worksheet path
    $relsPath = 'xl/_rels/workbook.xml.rels';
    if ($zip->locateName($relsPath) !== false) {
        $rels = new DOMDocument();
        $rels->loadXML($zip->getFromName($relsPath));
        foreach ($rels->getElementsByTagName('Relationship') as $rel) {
            $relsMap[$rel->getAttribute('Id')] = $rel->getAttribute('Target');
        }
    }
    $target = null;
    foreach ($wb->getElementsByTagName('sheet') as $s) {
        if ($s->getAttribute('name') === $sheetName) {
            $rid = $s->getAttribute('r:id');
            if ($rid && isset($relsMap[$rid])) {
                $target = 'xl/' . ltrim($relsMap[$rid], '/');
                break;
            }
        }
    }
    if (!$target || $zip->locateName($target) === false) return null;
    $sheetXml = new DOMDocument();
    $sheetXml->loadXML($zip->getFromName($target));
    return $sheetXml;
}

function lc_getColumnIndexByHeader($sheetXml, $sharedStrings, $headerText) {
    // Find the first row (r=1) and map columns by header
    foreach ($sheetXml->getElementsByTagName('row') as $row) {
        if ($row->getAttribute('r') == '1') {
            $map = [];
            foreach ($row->getElementsByTagName('c') as $c) {
                $ref = $c->getAttribute('r');
                list($colIndex, $rowIndex) = lc_cellRefToColRow($ref);
                $t = $c->getAttribute('t');
                $vNode = $c->getElementsByTagName('v')->item(0);
                $val = $vNode ? $vNode->textContent : '';
                if ($t === 's') {
                    $idx = intval($val);
                    $val = isset($sharedStrings[$idx]) ? $sharedStrings[$idx] : '';
                }
                $val = trim($val);
                $map[$colIndex] = $val;
            }
            foreach ($map as $col => $text) {
                if (mb_strtolower($text) === mb_strtolower($headerText)) {
                    return $col;
                }
            }
            return 0;
        }
    }
    return 0;
}

function lc_readColumnValues($sheetXml, $sharedStrings, $targetColIndex) {
    $values = [];
    foreach ($sheetXml->getElementsByTagName('row') as $row) {
        $r = intval($row->getAttribute('r'));
        if ($r === 1) continue; // skip header
        $rowVals = [];
        foreach ($row->getElementsByTagName('c') as $c) {
            $ref = $c->getAttribute('r');
            list($colIndex, $rowIndex) = lc_cellRefToColRow($ref);
            if ($colIndex !== $targetColIndex) continue;
            $t = $c->getAttribute('t');
            $vNode = $c->getElementsByTagName('v')->item(0);
            $val = $vNode ? $vNode->textContent : '';
            if ($t === 's') {
                $idx = intval($val);
                $val = isset($sharedStrings[$idx]) ? $sharedStrings[$idx] : '';
            }
            $val = trim($val);
            if ($val !== '') $values[] = $val;
            break;
        }
        // If the cell was missing entirely, we push nothing (sparse rows allowed)
    }
    return $values;
}

function lc_loadUnitLabelsFromExcel($xlsxPath) {
    $units = [];
    if (!class_exists('ZipArchive')) { return $units; }
    $zip = new ZipArchive();
    if ($zip->open($xlsxPath) !== true) { return $units; }

    $shared = lc_readSharedStrings($zip);
    $sheet = lc_readSheetByName($zip, 'Sheet1');
    if (!$sheet) { $zip->close(); return $units; }
    $colIndex = lc_getColumnIndexByHeader($sheet, $shared, 'Sub-Header (Unit)');
    if ($colIndex === 0) { $zip->close(); return $units; }
    $units = lc_readColumnValues($sheet, $shared, $colIndex);
    $zip->close();
    return $units;
}

// ---------- Load ordered unit labels from Conversions.xlsx ----------
$excelPath = __DIR__ . '/Conversions.xlsx';
$unitLabels = lc_loadUnitLabelsFromExcel($excelPath);

// Fallback: if Excel missing or empty, keep array empty (UI will still render gracefully)
if (!is_array($unitLabels)) { $unitLabels = []; }

// ---------- Render template and inject CSS/JS just before </body> ----------
ob_start();
include __DIR__ . '/main_template.php';
$templateHtml = ob_get_clean();

$injected = <<<HTML
    <!-- Minimal CSS for drawer and grid layout (desktop only) -->
    <style>
        @media (min-width: 992px) {
            .content-section {
                display: grid;
                grid-template-columns: 1fr 340px;
                gap: 24px;
                align-items: start;
            }
            .info-section {
                grid-column: 2;
                position: sticky;
                top: 16px;
            }
        }
    </style>

    <!-- Ensure conversion_javascript.js is present exactly once -->
    <script>
    (function ensureConversionJS(){
        if (!window.conversionFactors) {
            var s = document.createElement('script');
            s.src = 'conversion_javascript.js';
            s.defer = true;
            document.currentScript.parentNode.insertBefore(s, document.currentScript);
        }
    })();
    </script>

    <script>
    (function(){
        // ====== Excel-derived labels from server (authoritative order) ======
        var UNIT_LABELS = <?php echo json_encode($unitLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;

        // ====== DOM handles expected by the template ======
        var fromSelect = document.querySelector('#from-unit');
        var toSelect   = document.querySelector('#to-unit');
        var fromInput  = document.querySelector('#from-value');
        var toOutput   = document.querySelector('#to-value');
        var eqContainer = document.querySelector('#equivalent-lengths'); // expected section

        // Remove "About Length Conversion" section by heading text (no markup changes)
        (function removeAboutSection(){
            var headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6');
            [].forEach.call(headings, function(h){
                if ((h.textContent || '').trim().toLowerCase() === 'about length conversion') {
                    var sec = h.closest('section, .section, article, div');
                    if (sec && sec.parentNode) sec.parentNode.removeChild(sec);
                }
            });
        })();

        // ====== Label -> token resolver ======
        function normalizeLabelToToken(label) {
            if (!label) return '';
            var t = label.trim().toLowerCase();

            // Replace µ with 'micro'
            t = t.replace(/µ/g, 'micro');

            // Drop parenthetical suffixes (keep the inside as needed in synonyms)
            // but first, normalize some known patterns with parentheses
            var original = t;
            // Remove punctuation except hyphens and spaces and slashes
            t = t.replace(/[.,]|[\u2018\u2019\u201C\u201D'"]/g, '');
            // Remove content in parentheses entirely
            t = t.replace(/\([^)]*\)/g, '').trim();

            // Hyphenate spaces and collapse
            t = t.replace(/[\s/]+/g, '-').replace(/-+/g, '-');

            // Synonym map (expandable)
            var map = {
                'micron': 'micrometer',
                'mile-roman': 'roman-mile',
                'fathom-us-survey': 'fathom-us-survey',
                'inch-us-survey': 'inch-us-survey',
                'foot-us-survey': 'foot-us-survey',
                'link-us-survey': 'link-us-survey',
                'chain-us-survey': 'chain-us-survey',
                'furlong-us-survey': 'furlong-us-survey',
                'rod-us-survey': 'rod-us-survey',
                'perch-pole': 'rod',
                'nautical-mile-uk': 'nautical-mile-uk',
                'nautical-mile-international': 'nautical-mile-international',
                'league-statute': 'league-statute',
                'planck-length': 'planck-length',
                'electron-radius-classical': 'classical-electron-radius',
                'bohr-radius': 'bohr-radius'
            };

            if (map[t]) return map[t];

            return t;
        }

        // Build a bidirectional resolution table from labels to tokens
        var LABEL_TO_TOKEN = {};
        UNIT_LABELS.forEach(function(lbl){
            LABEL_TO_TOKEN[lbl] = normalizeLabelToToken(lbl);
        });

        // ====== Populate dropdowns from Excel labels ======
        function buildOptionsHtml(labels) {
            return labels.map(function(lbl){
                var token = LABEL_TO_TOKEN[lbl] || '';
                var valAttr = token ? ' value=\"' + token + '\"' : ' value=\"\"';
                return '<option' + valAttr + '>' + lbl + '</option>';
            }).join('');
        }

        function ensureSelects() {
            if (!fromSelect || !toSelect) return;
            var html = buildOptionsHtml(UNIT_LABELS);
            fromSelect.innerHTML = html;
            toSelect.innerHTML = html;

            // Defaults: From=Meter, To=Foot
            function selectByLabel(sel, want) {
                var opts = sel ? sel.options : [];
                for (var i=0; i<opts.length; i++) {
                    if ((opts[i].text || '').trim().toLowerCase() === want) {
                        sel.selectedIndex = i;
                        return;
                    }
                }
            }
            selectByLabel(fromSelect, 'meter');
            selectByLabel(toSelect, 'foot');
        }

        // ====== Conversion core (uses window.conversionFactors only) ======
        function getFactor(A, B) {
            // Try direct
            var key = A + '-to-' + B;
            if (window.conversionFactors && (key in window.conversionFactors)) {
                return window.conversionFactors[key];
            }
            // Try inverse
            var keyInv = B + '-to-' + A;
            if (window.conversionFactors && (keyInv in window.conversionFactors)) {
                var v = window.conversionFactors[keyInv];
                if (typeof v === 'number' && v !== 0) return 1 / v;
            }
            // Try via meter
            var M = 'meter';
            var a2m = getFactor(A, M);
            var m2b = getFactor(M, B);
            if (typeof a2m === 'number' && typeof m2b === 'number') {
                return a2m * m2b;
            }
            return null;
        }

        function convertValue(val, fromToken, toToken) {
            if (!fromToken || !toToken) return null;
            var f = getFactor(fromToken, toToken);
            if (typeof f === 'number') {
                var n = parseFloat(val);
                if (!isFinite(n)) return null;
                return n * f;
            }
            return null;
        }

        // ====== UI wiring ======
        function updateMainResult() {
            if (!fromSelect || !toSelect || !fromInput || !toOutput) return;
            var fromToken = fromSelect.value;
            var toToken = toSelect.value;
            var val = fromInput.value;
            var res = convertValue(val, fromToken, toToken);
            toOutput.value = (res === null ? '—' : String(res));
        }

        function renderEquivalents() {
            if (!eqContainer || !fromSelect || !fromInput) return; // only if the section exists
            var baseToken = fromSelect.value;
            var baseVal = fromInput.value;
            var html = '';
            html += '<table class=\"equivalents-table\"><thead><tr><th>Unit</th><th>Value</th></tr></thead><tbody>';
            for (var i=0; i<UNIT_LABELS.length; i++) {
                var lbl = UNIT_LABELS[i];
                var tok = LABEL_TO_TOKEN[lbl] || '';
                var v = (tok ? convertValue(baseVal, baseToken, tok) : null);
                html += '<tr><td>' + lbl + '</td><td>' + (v === null ? '—' : String(v)) + '</td></tr>';
            }
            html += '</tbody></table>';
            eqContainer.innerHTML = html;
        }

        function wireEvents() {
            if (fromInput) {
                fromInput.addEventListener('input', function(){ updateMainResult(); renderEquivalents(); });
            }
            if (fromSelect) {
                fromSelect.addEventListener('change', function(){ updateMainResult(); renderEquivalents(); });
            }
            if (toSelect) {
                toSelect.addEventListener('change', function(){ updateMainResult(); });
            }
        }

        function ensureDefaults() {
            if (fromInput && (fromInput.value === '' || fromInput.value == null)) {
                fromInput.value = '1';
            }
        }

        // Run after DOM is ready
        function ready(fn){ if (document.readyState !== 'loading') fn(); else document.addEventListener('DOMContentLoaded', fn); }
        ready(function(){
            ensureSelects();
            ensureDefaults();
            wireEvents();
            updateMainResult();
            renderEquivalents();
        });
    })();
    </script>
HTML;

$final = $templateHtml;

// Inject before </body> if present; otherwise append
if (stripos($final, '</body>') !== false) {
    $final = preg_replace('/<\/body>/i', $injected . "\n</body>", $final, 1);
} else {
    $final .= $injected;
}

// Output final page
echo $final;
?>
