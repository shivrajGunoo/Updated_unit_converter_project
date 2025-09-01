<?php
// Auto-generated dynamic category converter (based on length.php)
// SEO meta from Excel_config_php_parameters.xlsx & structure from length.php

$MAIN_HEADER = "Engineering & Technical Conversions";
$SUB_MAIN_HEADER = "Length";
$UNITS = ["meter", "kilometer", "decimeter", "centimeter", "millimeter", "micrometer", "nanometer", "mile", "yard", "foot", "inch", "light-year", "break", "exameter", "petameter", "terameter", "gigameter", "megameter", "hectometer", "dekameter", "micron", "picometer", "femtometer", "attometer", "megaparsec", "kiloparsec", "parsec", "astronomical-unit", "league", "nautical-league-uk", "nautical-league-int.", "league-statute", "nautical-mile-uk", "nautical-mile-international", "mile-statute", "mile-us-survey", "kiloyard", "furlong", "furlong-us-survey", "chain", "chain-us-survey", "rope", "rod", "rod-us-survey", "perch", "pole", "fathom", "fathom-us-survey", "ell", "foot-us-survey", "link", "link-us-survey", "cubit-uk", "hand", "span-cloth", "finger-cloth", "nail-cloth", "inch-us-survey", "barleycorn", "mil", "microinch", "angstrom", "x-unit", "fermi", "arpent", "pica", "point", "twip", "aln", "famn", "caliber", "centiinch", "ken", "russian-archin", "roman-actus", "vara-de-tarea", "vara-conuquera", "vara-castellana", "cubit-greek", "long-reed", "reed", "long-cubit", "handbreadth", "fingerbreadth", "planck-length", "electron-radius-classical", "bohr-radius", "earths-equatorial-radius", "earths-polar-radius", "earths-distance-from", "mile-roman"]; // slugs for JS conversion keys
$UNIT_LABELS = ["Meter", "Kilometer", "Decimeter", "Centimeter", "Millimeter", "Micrometer", "Nanometer", "Mile", "Yard", "Foot", "Inch", "Light Year", "Break", "Exameter", "Petameter", "Terameter", "Gigameter", "Megameter", "Hectometer", "Dekameter", "Micron", "Picometer", "Femtometer", "Attometer", "Megaparsec", "Kiloparsec", "Parsec", "Astronomical Unit", "League", "Nautical League (UK)", "Nautical League (int.)", "League (statute)", "Nautical Mile (UK)", "Nautical Mile (international)", "Mile (statute)", "Mile (US Survey)", "Kiloyard", "Furlong", "Furlong (US Survey)", "Chain", "Chain (US Survey)", "Rope", "Rod", "Rod (US Survey)", "Perch", "Pole", "Fathom", "Fathom (US Survey)", "Ell", "Foot (US Survey)", "Link", "Link (US Survey)", "Cubit (UK)", "Hand", "Span (cloth)", "Finger (cloth)", "Nail (cloth)", "Inch (US Survey)", "Barleycorn", "Mil", "Microinch", "Angstrom", "X-unit", "Fermi", "Arpent", "Pica", "Point", "Twip", "Aln", "Famn", "Caliber", "Centiinch", "Ken", "Russian Archin", "Roman Actus", "Vara De Tarea", "Vara Conuquera", "Vara Castellana", "Cubit (Greek)", "Long Reed", "Reed", "Long Cubit", "Handbreadth", "Fingerbreadth", "Planck Length", "Electron Radius (classical)", "Bohr Radius", "Earth's Equatorial Radius", "Earth's Polar Radius", "Earth's Distance From", "Mile (Roman)"]; // display labels

$POPULAR_CONVERSIONS_HTML = "<ul>\n\t<li><a href=\"centimeter-to-inch.php\">Centimeter to Inch</a></li>\n\t<li><a href=\"inch-to-centimeter.php\">Inch to Centimeter</a></li>\n\t<li><a href=\"millimeter-to-inch.php\">Millimeter to Inch</a></li>\n\t<li><a href=\"inch-to-millimeter.php\">Inch to Millimeter</a></li>\n\t<li><a href=\"meter-to-foot.php\">Meter to Foot</a></li>\n\t<li><a href=\"foot-to-meter.php\">Foot to Meter</a></li>\n\t<li><a href=\"kilometer-to-mile.php\">Kilometer to Mile</a></li>\n\t<li><a href=\"mile-to-kilometer.php\">Mile to Kilometer</a></li>\n\t<li><a href=\"centimeter-to-foot.php\">Centimeter to Foot</a></li>\n\t<li><a href=\"foot-to-centimeter.php\">Foot to Centimeter</a></li>\n\t<li><a href=\"inch-to-foot.php\">Inch to Foot</a></li>\n\t<li><a href=\"foot-to-inch.php\">Foot to Inch</a></li>\n\t<li><a href=\"meter-to-yard.php\">Meter to Yard</a></li>\n\t<li><a href=\"yard-to-meter.php\">Yard to Meter</a></li>\n\t<li><a href=\"millimeter-to-centimeter.php\">Millimeter to Centimeter</a></li>\n\t<li><a href=\"centimeter-to-millimeter.php\">Centimeter to Millimeter</a></li>\n\t<li><a href=\"centimeter-to-kilometer.php\">Centimeter to Kilometer</a></li>\n\t<li><a href=\"kilometer-to-centimeter.php\">Kilometer to Centimeter</a></li>\n\t<li><a href=\"millimeter-to-foot.php\">Millimeter to Foot</a></li>\n\t<li><a href=\"foot-to-millimeter.php\">Foot to Millimeter</a></li>\n\t<li><a href=\"meter-to-mile.php\">Meter to Mile</a></li>\n\t<li><a href=\"mile-to-meter.php\">Mile to Meter</a></li>\n\t<li><a href=\"foot-to-mile.php\">Foot to Mile</a></li>\n\t<li><a href=\"mile-to-foot.php\">Mile to Foot</a></li>\n\t<li><a href=\"yard-to-foot.php\">Yard to Foot</a></li>\n\t<li><a href=\"foot-to-yard.php\">Foot to Yard</a></li>\n\t<li><a href=\"inch-to-meter.php\">Inch to Meter</a></li>\n\t<li><a href=\"meter-to-inch.php\">Meter to Inch</a></li>\n\t<li><a href=\"kilometer-to-millimeter.php\">Kilometer to Millimeter</a></li>\n\t<li><a href=\"millimeter-to-kilometer.php\">Millimeter to Kilometer</a></li>\n\t<li><a href=\"inch-to-yard.php\">Inch to Yard</a></li>\n\t<li><a href=\"yard-to-inch.php\">Yard to Inch</a></li>\n\t<li><a href=\"yard-to-mile.php\">Yard to Mile</a></li>\n\t<li><a href=\"mile-to-yard.php\">Mile to Yard</a></li>\n\t<li><a href=\"meter-to-kilometer.php\">Meter to Kilometer</a></li>\n\t<li><a href=\"micrometer-to-meter.php\">Micrometer to Meter</a></li>\n\t<li><a href=\"angstrom-to-nanometer.php\">Angstrom to Nanometer</a></li>\n\t<li><a href=\"light-year-to-kilometer.php\">Light Year to Kilometer</a></li>\n</ul>"; // from ##COMMON_CONVERTIONS

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Engineering & Technical Conversions - Length converter: instant, accurate, mobile-friendly.">
    <meta name="keywords" content="Length converter, unit converter, length conversions, Length to units">
    <title><?php echo htmlspecialchars($SUB_MAIN_HEADER); ?> Unit Converter | Free Online Conversion Tool</title>
    <link href="../../css/sub_main_pages.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <script src="conversion_javascript.js"></script>
    <style>
        /* small UX tweaks */
        .converter-card { background:#fff; border-radius:16px; box-shadow:0 6px 24px rgba(0,0,0,.06); padding:1rem; }
        .flex { display:flex; gap:.75rem; flex-wrap:wrap; align-items:flex-end; }
        .grid { display:grid; gap:1rem; }
        @media (min-width: 768px) { .grid-2 { grid-template-columns: 1fr 1fr; } }
        label { font-weight:600; font-size:.95rem; }
        select, input[type=number] { width:100%; padding:.6rem .75rem; border:1px solid #e5e7eb; border-radius:10px; }
        .swap-btn { background:#0f172a; color:#fff; border:0; border-radius:10px; padding:.6rem .8rem; cursor:pointer; }
        .section-title { margin:1.25rem 0 .5rem; }
        table { width:100%; border-collapse:collapse; }
        th, td { padding:.6rem; border-bottom:1px solid #f1f5f9; text-align:left; }
        .muted { color:#64748b; }
    </style>
</head>
<body>
    <?php /* Keep site-wide header/footer consistent */ ?>
    <?php include '../../header.php'; ?>

    <div class="container">
        <h1><?php echo htmlspecialchars($MAIN_HEADER); ?></h1>
        <h2><?php echo htmlspecialchars($SUB_MAIN_HEADER); ?> Converter</h2>

        <div class="converter-card grid">
            <div class="flex" style="gap:1rem;">
                <div style="flex:1 1 200px;">
                    <label for="from-value">Value</label>
                    <input type="number" id="from-value" value="1" step="0.01" placeholder="Enter value">
                </div>
                <div style="flex:1 1 220px;">
                    <label for="from-unit">From Unit</label>
                    <select id="from-unit"></select>
                </div>

                <button class="swap-btn" id="swap-btn" title="Swap units">
                    <i class="fas fa-exchange-alt"></i>
                </button>

                <div style="flex:1 1 200px;">
                    <label for="to-value">Result</label>
                    <input type="text" id="to-value" value="" readonly placeholder="Result">
                </div>
                <div style="flex:1 1 220px;">
                    <label for="to-unit">To Unit</label>
                    <select id="to-unit"></select>
                </div>
            </div>

            <p class="muted">Tip: start typing a unit name to filter the list.</p>
        </div>

        <div class="info-section">
            <h3 class="section-title">Equivalent <?php echo htmlspecialchars($SUB_MAIN_HEADER); ?> Values</h3>
            <p class="muted">Live equivalents for the entered value across all supported units.</p>
            <table>
                <thead>
                    <tr><th>Unit</th><th>Value</th></tr>
                </thead>
                <tbody id="equivalent-tbody">
                </tbody>
            </table>
        </div>

        <div class="info-section">
            <h3 class="section-title">Popular <?php echo htmlspecialchars($SUB_MAIN_HEADER); ?> Unit Conversions</h3>
            <?php echo $POPULAR_CONVERSIONS_HTML; ?>
        </div>
    </div>

    <?php include '../../footer.php'; ?>

<script>
(function() {
    const units = <?php echo json_encode($UNITS); ?>;
    const labels = <?php echo json_encode($UNIT_LABELS); ?>;

    const fromSel = document.getElementById('from-unit');
    const toSel   = document.getElementById('to-unit');
    const fromVal = document.getElementById('from-value');
    const toVal   = document.getElementById('to-value');
    const tbody   = document.getElementById('equivalent-tbody');

    // Populate selects
    function populateSelect(sel) {
        sel.innerHTML = '';
        units.forEach((slug, i) => {
            const opt = document.createElement('option');
            opt.value = slug;
            opt.textContent = labels[i] + ' (' + slug + ')';
            sel.appendChild(opt);
        });
    }
    populateSelect(fromSel);
    populateSelect(toSel);

    // Default selection
    if (units.length >= 2) { fromSel.value = units[0]; toSel.value = units[1]; }

    function buildKey(from, to) {
        return from + '-to-' + to;
    }

    function recalc() {
        const f = fromSel.value, t = toSel.value;
        const key = buildKey(f, t);
        performConversion(key); // updates #to-value via conversion_javascript.js

        // Build equivalents table
        tbody.innerHTML = '';
        units.forEach((u, i) => {
            const tr = document.createElement('tr');
            const name = labels[i];
            const k = buildKey(f, u);
            let v = convertUnit(k, parseFloat(fromVal.value));
            if (typeof v !== 'string') v = formatResult(v);
            const td1 = document.createElement('td'); td1.textContent = name;
            const td2 = document.createElement('td'); td2.textContent = v;
            tr.appendChild(td1); tr.appendChild(td2);
            tbody.appendChild(tr);
        });
    }

    // Event handlers
    ['input','change'].forEach(evt => {
        fromVal.addEventListener(evt, recalc);
        fromSel.addEventListener(evt, recalc);
        toSel.addEventListener(evt, recalc);
    });

    // Swap
    document.getElementById('swap-btn').addEventListener('click', function(e) {
        e.preventDefault();
        const a = fromSel.value, b = toSel.value;
        fromSel.value = b; toSel.value = a;
        recalc();
    });

    // Initial calc
    fromVal.value = 1;
    recalc();

})();
</script>

</body>
</html>
