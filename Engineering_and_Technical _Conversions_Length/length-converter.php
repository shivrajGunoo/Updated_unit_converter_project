<?php
// Auto-generated Length conversions page
// Optionally include your template wrapper:
// require_once __DIR__ . '/content_pages_template.php';
// Assumptions: JS factors from conversion_javascript.js; CSS sub_main_pages.css; template includes generic header/footer.

$page_title = "Length Converter – All units on one page";
$meta_description = "Convert between meter, kilometer, centimeter, millimeter, micrometer, nanometer, mile, yard, foot, inch and more on a single fast page. Type once and see results everywhere.";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>{ $page_title ?? 'Length Converter' }</title>
<meta name="description" content="{ $meta_description ?? '' }"/>
<link rel="stylesheet" href="/css/sub_main_pages.css" />
<script src="/js/conversion_javascript.js" defer></script>

<style>
:root{
  --bg:#ffffff;
  --fg:#0f172a;
  --muted:#64748b;
  --primary:#2563eb;
  --primary-cta:#1d4ed8;
  --card:#f8fafc;
  --border:#e2e8f0;
  --ring:#93c5fd;
}
*{box-sizing:border-box}
body.sub-main-page{margin:0;background:var(--bg);color:var(--fg);font:16px/1.5 system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Arial, sans-serif}
a{color:var(--primary);text-decoration:none}
a:hover{text-decoration:underline}
.converter-wrapper{max-width:1100px;margin:0 auto;padding:24px}
.page-header{margin-bottom:16px}
.page-header h1{font-size:32px;margin:0 0 8px}
.page-header p{color:var(--muted);margin:0}

.toolbar{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:12px;margin:16px 0}
@media (max-width:860px){.toolbar{grid-template-columns:1fr 1fr}}
@media (max-width:520px){.toolbar{grid-template-columns:1fr}}

.field{background:var(--card);border:1px solid var(--border);border-radius:14px;padding:12px}
.field label{display:block;font-size:12px;color:var(--muted);margin-bottom:6px}
.field input,.field select{width:100%;padding:10px 12px;border:1px solid var(--border);border-radius:10px;outline:none}
.field input:focus,.field select:focus{border-color:var(--primary);box-shadow:0 0 0 3px var(--ring)}

.actions{display:flex;gap:8px;flex-wrap:wrap;margin-top:8px}
.btn{display:inline-flex;align-items:center;gap:8px;background:var(--primary);color:#fff;padding:10px 14px;border-radius:12px;border:0;cursor:pointer}
.btn:hover{background:var(--primary-cta)}

.section{margin:24px 0}
.section h2{font-size:22px;margin:0 0 12px}

.results-table{width:100%;border-collapse:collapse;background:#fff;border:1px solid var(--border);border-radius:12px;overflow:hidden}
.results-table th,.results-table td{padding:10px 12px;border-bottom:1px solid var(--border);text-align:left}
.results-table thead th{background:#f1f5f9;font-weight:600}
.results-table tbody tr:hover{background:#f8fafc}

.common-grid{display:grid;grid-template-columns:repeat(3, minmax(0,1fr));gap:10px}
@media (max-width:900px){.common-grid{grid-template-columns:repeat(2, minmax(0,1fr))}}
@media (max-width:520px){.common-grid{grid-template-columns:1fr}}
.common-link{display:flex;justify-content:space-between;align-items:center;background:var(--card);border:1px solid var(--border);padding:12px 14px;border-radius:12px}
.common-link span{color:var(--muted);font-size:12px}

.backlinks ul{list-style:none;padding:0;margin:0;display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:10px}
.backlinks li a{display:block;border:1px solid var(--border);background:var(--card);padding:10px 12px;border-radius:12px}
@media (max-width:860px){.backlinks ul{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (max-width:520px){.backlinks ul{grid-template-columns:1fr}}

.small-note{font-size:12px;color:var(--muted);margin-top:6px}
</style>

</head>
<body class="sub-main-page">
<div class="converter-wrapper">

    <header class="page-header">
        <h1>Length Converter</h1>
        <p>Enter a value, choose a unit, and instantly see the equivalent in every other length unit.</p>
    </header>

    <section class="grid" id="primary-inputs">
        <div class="unit-card">
            <label for="fromValue">Input</label>
            <input type="number" id="fromValue" value="1" step="any" />
        </div>
        <div class="unit-card">
            <label for="toValue">Output</label>
            <input type="text" id="toValue" value="" readonly />
        </div>
        <div class="unit-card">
            <label for="fromUnit">From unit</label>
            <select id="fromUnit">
                <option value="meter">Meter</option>
<option value="kilometer">Kilometer</option>
<option value="centimeter">Centimeter</option>
<option value="millimeter">Millimeter</option>
<option value="micrometer">Micrometer</option>
<option value="nanometer">Nanometer</option>
<option value="mile">Mile</option>
<option value="yard">Yard</option>
<option value="foot">Foot</option>
<option value="inch">Inch</option>
<option value="light-year">Light-Year</option>
            </select>
        </div>
        <div class="unit-card">
            <label for="toUnit">To unit</label>
            <select id="toUnit">
                <option value="meter">Meter</option>
<option value="kilometer">Kilometer</option>
<option value="centimeter">Centimeter</option>
<option value="millimeter">Millimeter</option>
<option value="micrometer">Micrometer</option>
<option value="nanometer">Nanometer</option>
<option value="mile">Mile</option>
<option value="yard">Yard</option>
<option value="foot">Foot</option>
<option value="inch">Inch</option>
<option value="light-year">Light-Year</option>
            </select>
        </div>
    </section>

    <section id="all-results">
        <h2>All conversions</h2>
        <table class="results-table" id="resultsTable">
            <thead>
                <tr><th>Unit</th><th>Value</th></tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>

    
<section id="common-conversions">
  <h2>Most Popular Length Conversions</h2>
  <ul class="common-list">
    
  </ul>
</section>


    <section class="section" id="common-conversions">
        <h2>Common conversions</h2>
        <div class="common-grid">
            <?php foreach ($common as $c): ?>
                <a class="common-link" href="<?= htmlspecialchars($c['href']) ?>">
                    <strong><?= htmlspecialchars($c['title']) ?></strong>
                    <span>›</span>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="small-note">Curated from Excel_config_php_parameters.xlsx (##COMMON_CONVERTIONS).</div>
    </section>


    <nav class="backlinks">
        <h2>Related pages</h2>
        <ul id="relatedLinks">
            <!-- Links populated by PHP below if available -->
            <?php
            // Example: derive from Excel_config_php_parameters.xlsx (pre-exported to a JSON cache offline)
            $related = [
  ['title' => 'meter-to-kilometer.php', 'href' => '/kilometer-to-meter.php'],
  ['title' => 'meter-to-decimeter.php', 'href' => '/decimeter-to-meter.php'],
  ['title' => 'meter-to-centimeter.php', 'href' => '/centimeter-to-meter.php'],
  ['title' => 'meter-to-millimeter.php', 'href' => '/millimeter-to-meter.php'],
  ['title' => 'meter-to-micrometer.php', 'href' => '/micrometer-to-meter.php'],
  ['title' => 'meter-to-nanometer.php', 'href' => '/nanometer-to-meter.php'],
  ['title' => 'meter-to-mile.php', 'href' => '/mile-to-meter.php'],
  ['title' => 'meter-to-yard.php', 'href' => '/yard-to-meter.php'],
  ['title' => 'meter-to-foot.php', 'href' => '/foot-to-meter.php'],
  ['title' => 'meter-to-inch.php', 'href' => '/inch-to-meter.php'],
  ['title' => 'meter-to-light-year.php', 'href' => '/light-year-to-meter.php'],
  ['title' => 'meter-to-break.php', 'href' => '/break-to-meter.php'],
  ['title' => 'meter-to-exameter.php', 'href' => '/exameter-to-meter.php'],
  ['title' => 'meter-to-petameter.php', 'href' => '/petameter-to-meter.php'],
  ['title' => 'meter-to-terameter.php', 'href' => '/terameter-to-meter.php'],
  ['title' => 'meter-to-gigameter.php', 'href' => '/gigameter-to-meter.php'],
  ['title' => 'meter-to-megameter.php', 'href' => '/megameter-to-meter.php'],
  ['title' => 'meter-to-hectometer.php', 'href' => '/hectometer-to-meter.php'],
  ['title' => 'meter-to-dekameter.php', 'href' => '/dekameter-to-meter.php'],
  ['title' => 'meter-to-micron.php', 'href' => '/micron-to-meter.php'],
  ['title' => 'meter-to-picometer.php', 'href' => '/picometer-to-meter.php'],
  ['title' => 'meter-to-femtometer.php', 'href' => '/femtometer-to-meter.php'],
  ['title' => 'meter-to-attometer.php', 'href' => '/attometer-to-meter.php'],
  ['title' => 'meter-to-megaparsec.php', 'href' => '/megaparsec-to-meter.php'],
  ['title' => 'meter-to-kiloparsec.php', 'href' => '/kiloparsec-to-meter.php'],
];

$common = [
  ['title' => 'meter-to-foot.php', 'href' => '/foot-to-meter.php'],
  ['title' => 'meter-to-inch.php', 'href' => '/inch-to-meter.php'],
  ['title' => 'centimeter-to-inch.php', 'href' => '/inch-to-centimeter.php'],
  ['title' => 'kilometer-to-mile.php', 'href' => '/mile-to-kilometer.php'],
  ['title' => 'meter-to-yard.php', 'href' => '/yard-to-meter.php'],
  ['title' => 'millimeter-to-inch.php', 'href' => '/inch-to-millimeter.php'],
  ['title' => 'meter-to-centimeter.php', 'href' => '/centimeter-to-meter.php'],
  ['title' => 'meter-to-millimeter.php', 'href' => '/millimeter-to-meter.php'],
  ['title' => 'meter-to-kilometer.php', 'href' => '/kilometer-to-meter.php'],
  ['title' => 'foot-to-inch.php', 'href' => '/inch-to-foot.php'],
];
            // You may populate $related as [['href'=>'/converters/area.php','title'=>'Area Converter'], ...]
            foreach ($related as $link) { 
                echo '<li><a href="'.htmlspecialchars($link['href']).'">'.htmlspecialchars($link['title']).'</a></li>'; 
            }
            ?>
        </ul>
    </nav>

</div>

<script>
// Minimal runtime glue using conversion_javascript.js's conversionFactors
(function() {
    function normalize(name) {
        return name.trim().toLowerCase().replace(/\s+/g,'-').replace(/\./g,'').replace(/[,()]/g,'');
    }
    const fromValue = document.getElementById('fromValue');
    const toValue = document.getElementById('toValue');
    const fromUnit = document.getElementById('fromUnit');
    const toUnit = document.getElementById('toUnit');
    const tbody = document.querySelector('#resultsTable tbody');

    function convert(v, fromU, toU) {
        const key = normalize(fromU) + '-to-' + normalize(toU);
        if (fromU === toU) return v;
        if (conversionFactors[key] != null) return v * conversionFactors[key];
        // try reverse if available
        const rev = normalize(toU) + '-to-' + normalize(fromU);
        if (conversionFactors[rev] != null) return v / conversionFactors[rev];
        return NaN;
    }

    function renderAll() {
        const v = parseFloat(fromValue.value);
        const fu = fromUnit.value;
        const tu = toUnit.value;
        const result = convert(v, fu, tu);
        toValue.value = isFinite(result) ? result : '';
        tbody.innerHTML = '';
        for (const opt of fromUnit.options) {
            const u = opt.value;
            if (!u) continue;
            const val = convert(v, fu, u);
            const tr = document.createElement('tr');
            const tdU = document.createElement('td');
            const tdV = document.createElement('td');
            tdU.textContent = u;
            tdV.textContent = isFinite(val) ? val : '—';
            tr.appendChild(tdU); tr.appendChild(tdV);
            tbody.appendChild(tr);
        }
    }

    fromValue.addEventListener('input', renderAll);
    fromUnit.addEventListener('change', renderAll);
    toUnit.addEventListener('change', renderAll);

    renderAll();
})();
</script>

</body>
</html>
