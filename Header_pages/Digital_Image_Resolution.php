<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Image Resolution Converter | Convert Dots per Inch (DPI) to Pixels per Inch (PPI)</title>

<meta name="description" content="Easily convert dots per inch (DPI) to pixels per inch (PPI). Use our Image Resolution Converter with formulas, examples, and calculator for printing, imaging, and graphic design." />

<meta name="keywords" content="image resolution converter, convert DPI to PPI, dots per inch to pixels per inch, resolution calculator, DPI to PPI formula, image resolution unit converter" />

  <link href="../css/sub_main_pages.css" rel="stylesheet"/>
  <style>
    .ad-section{position:sticky;top:16px}
    .converter-tool{display:grid;grid-template-columns:1fr 48px 1fr;gap:15px;align-items:end}
    .swap-btn{background:#eef4ff;border:1px solid #dbeafe;border-radius:8px;width:48px;height:40px;display:flex;align-items:center;justify-content:center;cursor:pointer}
  </style>
</head>
<body>
<?php include '../header.php'; ?>
<div class="container">
  <div class="main-wrapper">
    <div class="content-section">
      <section class="converter-section">
        <h2>Digital Image Resolution Converter</h2>
        <div class="converter-tool">
          <div class="input-group">
            <label for="value">Value</label>
            <input id="value" type="number" inputmode="decimal" step="any" value="1" />
          </div>
          <div></div>
          <div class="input-group">
            <label for="result">Result</label>
            <input id="result" type="text" readonly placeholder="—" />
          </div>
          <div class="input-group">
            <label for="fromUnit">From Unit</label>
            <select id="fromUnit"></select>
          </div>
          <button id="swap" class="swap-btn" aria-label="Swap">↔</button>
          <div class="input-group">
            <label for="toUnit">To Unit</label>
            <select id="toUnit"></select>
          </div>
          <div class="input-group" style="grid-column:1 / -1">
            <label for="filter">Filter units</label>
            <input id="filter" type="text" placeholder="Search units..." />
          </div>
        </div>
        <table class="conversion-table" style="margin-top:12px">
          <thead><tr><th style="width:52%">Unit</th><th>Value</th></tr></thead>
          <tbody id="tbody"><tr><td colspan="2">Waiting for input…</td></tr></tbody>
        </table>
      </section>
          <section class="description-section">

          <div class="info-section">
            <h3>Popular Digital Image Resolution Conversions</h3>
          <ul>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/pixel-per-inch-ppi-to-dots-per-inch-dpi.php">Pixels/inch (PPI) to Dots/inch (DPI)</a></li>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/dots-per-inch-dpi-to-pixel-per-inch-ppi.php">Dots/inch (DPI) to Pixels/inch (PPI)</a></li>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/pixels-per-inch-ppi-to-dots-per-inch-dpi.php">Pixels/inch (PPI) to Dots/inch (DPI)</a></li>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/pixel-per-inch-ppi-to-pixels-per-centimeter-ppcm.php">Pixels/inch (PPI) to Pixels/centimeter (PPCM)</a></li>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/pixels-per-centimeter-ppcm-to-pixel-per-inch-ppi.php">Pixels/centimeter (PPCM) to Pixels/inch (PPI)</a></li>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/pixels-per-centimeter-ppcm-to-dots-per-inch-dpi.php">Pixels/centimeter (PPCM) to Dots/inch (DPI)</a></li>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/samples-per-inch-spi-to-pixel-per-inch-ppi.php">Samples/inch (SPI) to Pixels/inch (PPI)</a></li>
            <li><a href="../Light_and_Optics_Conversions_Digital_Image_Resolution/samples-per-inch-spi-to-dots-per-inch-dpi.php">Samples/inch (SPI) to Dots/inch (DPI)</a></li>

          </ul>
          </div>

      </section>
    </div>
    <aside class="ad-section">
      <h3>Advertisement</h3>
      <div class="ad-placeholder">Ad Space (350x280)</div>
      <?php include '../drawer_menu.php'; ?>
    </aside>
  </div>
</div>
<?php include '../footer.php'; ?>

<script>
const UNITS = [
  ['Pixel per Inch (ppi)', 'pixel-per-inch-ppi'],
  ['Dots per Inch (dpi)', 'dots-per-inch-dpi'],
  ['Pixels per Inch (ppi)', 'pixels-per-inch-ppi'],
  ['Pixels per Centimeter (ppcm)', 'pixels-per-centimeter-ppcm'],
  ['Samples per Inch (spi)', 'samples-per-inch-spi']
];


const HUB = 'n-per-m';
const conversionFactors = {  

    // Pixel per inch (ppi) conversions
  'pixel-per-inch-ppi-to-dots-per-inch-dpi': 1.0,
  'pixel-per-inch-ppi-to-pixels-per-inch-ppi': 1.0,
  'pixel-per-inch-ppi-to-pixels-per-centimeter-ppcm': 0.3937,
  'pixel-per-inch-ppi-to-samples-per-inch-spi': 1.0,

  // Dots per inch (dpi) conversions
  'dots-per-inch-dpi-to-pixel-per-inch-ppi': 1.0,
  'dots-per-inch-dpi-to-pixels-per-inch-ppi': 1.0,
  'dots-per-inch-dpi-to-pixels-per-centimeter-ppcm': 0.3937,
  'dots-per-inch-dpi-to-samples-per-inch-spi': 1.0,

  // Pixels per inch (ppi) conversions
  'pixels-per-inch-ppi-to-pixel-per-inch-ppi': 1.0,
  'pixels-per-inch-ppi-to-dots-per-inch-dpi': 1.0,
  'pixels-per-inch-ppi-to-samples-per-inch-spi': 1.0,

  // Pixels per centimeter (ppcm) conversions
  'pixels-per-centimeter-ppcm-to-pixel-per-inch-ppi': 2.54,
  'pixels-per-centimeter-ppcm-to-dots-per-inch-dpi': 2.54,
  'pixels-per-centimeter-ppcm-to-samples-per-inch-spi': 2.54,

  // Samples per inch (spi) conversions
  'samples-per-inch-spi-to-pixel-per-inch-ppi': 1.0,
  'samples-per-inch-spi-to-dots-per-inch-dpi': 1.0,
  'samples-per-inch-spi-to-pixels-per-inch-ppi': 1.0,
  'samples-per-inch-spi-to-pixels-per-centimeter-ppcm': 0.3937
};

const $ = s => document.querySelector(s);
const tbody = $("#tbody");

function populateOptions(){
  const from = $("#fromUnit"), to = $("#toUnit");
  UNITS.forEach(([label, token])=>{ from.add(new Option(label, token)); to.add(new Option(label, token)); });
  from.selectedIndex = 0; to.selectedIndex = 0;
}

function fnum(x){
  if(!Number.isFinite(x)) return "—";
  const ax = Math.abs(x);
  if(x!==0 && (ax>=1e9 || ax<1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(x);
}

function factor(fromSlug, toSlug){
  if(fromSlug === toSlug) return 1;
  const direct = conversionFactors[`${fromSlug}-to-${toSlug}`];
  if (direct != null) return direct;
  const inv = conversionFactors[`${toSlug}-to-${fromSlug}`];
  if (inv != null && inv !== 0) return 1 / inv;
  const a = conversionFactors[`${fromSlug}-to-${HUB}`] ?? (conversionFactors[`${HUB}-to-${fromSlug}`] ? 1/conversionFactors[`${HUB}-to-${fromSlug}`] : null);
  const b = conversionFactors[`${HUB}-to-${toSlug}`] ?? (conversionFactors[`${toSlug}-to-${HUB}`] ? 1/conversionFactors[`${toSlug}-to-${HUB}`] : null);
  if (a != null && b != null) return a * b;
  return null;
}

function render(){
  const val = parseFloat($("#value").value);
  const from = $("#fromUnit").value;
  const to = $("#toUnit").value;
  const out = $("#result");
  out.value = "";
  if(Number.isFinite(val)){
    const f = factor(from,to);
    out.value = f==null ? "—" : fnum(val*f);
  } else out.value = "—";
  const q = ($("#filter").value||"").toLowerCase();
  if(!Number.isFinite(val)){ tbody.innerHTML='<tr><td colspan="2">Waiting for input…</td></tr>'; return; }
  const rows = [];
  for(const [label, slug] of UNITS){
    if(slug===from) continue;
    if(q && !label.toLowerCase().includes(q)) continue;
    const f = factor(from, slug);
    rows.push(`<tr><td>${label}</td><td>${f==null?'—':fnum(val*f)}</td></tr>`);
  }
  tbody.innerHTML = rows.join("") || '<tr><td colspan="2">No matches.</td></tr>';
}

document.addEventListener("DOMContentLoaded", ()=>{
  populateOptions();
  render();
  $("#value").addEventListener("input", render);
  $("#fromUnit").addEventListener("change", render);
  $("#toUnit").addEventListener("change", render);
  $("#filter").addEventListener("input", render);
  $("#swap").addEventListener("click", ()=>{ const f = $("#fromUnit"), t = $("#toUnit"); const a = f.value; f.value = t.value; t.value = a; render(); });
});
</script>
</body>
</html>
