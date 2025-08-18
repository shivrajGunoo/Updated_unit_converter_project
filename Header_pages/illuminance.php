<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Illuminance Converter | Lux, Foot-Candle, Nit, Phot, Lambert, Foot-Lambert</title>

<meta name="description" content="Free Illuminance Converter for lighting, photometry, and physics. Instantly convert between lux (lx), foot-candle (fc), nit (nt), phot (ph), lambert (L), and foot-lambert (fL). Includes formulas, examples, and a calculator for engineers and designers." />

<meta name="keywords" content="illuminance converter, lux, lx, foot-candle, fc, nit, nt, phot, ph, lambert, L, foot-lambert, fL, lighting unit converter, photometry calculator, brightness converter, light intensity conversion" />

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
        <h2>Light and Optics Illuminance</h2>
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
            <h3>Popular Illuminance Conversions</h3>  
            <ul>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lux-lx-to-foot-candle-fc.php">Lux (lx) to Foot-candle (fc)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lux-lx-to-phot-ph.php">Lux (lx) to Phot (ph)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lux-lx-to-lambert-l.php">Lux (lx) to Lambert (L)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lux-lx-to-footlambert-fl.php">Lux (lx) to Foot-lambert (fL)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/foot-candle-fc-to-lux-lx.php">Foot-candle (fc) to Lux (lx)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/foot-candle-fc-to-phot-ph.php">Foot-candle (fc) to Phot (ph)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/foot-candle-fc-to-lambert-l.php">Foot-candle (fc) to Lambert (L)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/nit-nt-to-phot-ph.php">Nit (nt) to Phot (ph)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/nit-nt-to-lambert-l.php">Nit (nt) to Lambert (L)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/nit-nt-to-footlambert-fl.php">Nit (nt) to Foot-lambert (fL)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/phot-ph-to-lux-lx.php">Phot (ph) to Lux (lx)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/phot-ph-to-foot-candle-fc.php">Phot (ph) to Foot-candle (fc)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/phot-ph-to-nit-nt.php">Phot (ph) to Nit (nt)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/phot-ph-to-lambert-l.php">Phot (ph) to Lambert (L)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lambert-l-to-lux-lx.php">Lambert (L) to Lux (lx)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lambert-l-to-foot-candle-fc.php">Lambert (L) to Foot-candle (fc)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lambert-l-to-nit-nt.php">Lambert (L) to Nit (nt)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/lambert-l-to-phot-ph.php">Lambert (L) to Phot (ph)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/footlambert-fl-to-lux-lx.php">Foot-lambert (fL) to Lux (lx)</a></li>
                <li><a href="../Light_and_Optics_Conversions_Illuminance/footlambert-fl-to-nit-nt.php">Foot-lambert (fL) to Nit (nt)</a></li>
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
  ['Lux (lx)', 'lux-lx'],
  ['Foot-Candle (fc)', 'foot-candle-fc'],
  ['Nit (nt)', 'nit-nt'],
  ['Phot (ph)', 'phot-ph'],
  ['Lambert (L)', 'lambert-l'],
  ['Foot-Lambert (fL)', 'footlambert-fl']
];



const HUB = 'lux-lx';
const conversionFactors = {
  // Lux (lx) conversions
  'lux-lx-to-foot-candle-fc': 0.092903,
  'lux-lx-to-phot-ph': 0.0001,
  'lux-lx-to-lambert-l': 0.0003183,
  'lux-lx-to-footlambert-fl': 0.2919,

  // Foot-candle (fc) conversions
  'foot-candle-fc-to-lux-lx': 10.7639,
  'foot-candle-fc-to-phot-ph': 0.001076,
  'foot-candle-fc-to-lambert-l': 0.003426,

  // Nit (nt) conversions
  'nit-nt-to-phot-ph': 0.0001,
  'nit-nt-to-lambert-l': 0.0003183,
  'nit-nt-to-footlambert-fl': 0.2919,

  // Phot (ph) conversions
  'phot-ph-to-lux-lx': 10000,
  'phot-ph-to-foot-candle-fc': 929.03,
  'phot-ph-to-nit-nt': 10000,
  'phot-ph-to-lambert-l': 3.183,

  // Lambert (L) conversions
  'lambert-l-to-lux-lx': 3183.1,
  'lambert-l-to-foot-candle-fc': 318.31,
  'lambert-l-to-nit-nt': 3183.1,
  'lambert-l-to-phot-ph': 0.3142,

  // Footlambert (fl) conversions
  'footlambert-fl-to-lux-lx': 3.4263,
  'footlambert-fl-to-nit-nt': 0.2919
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
