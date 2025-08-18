<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Concentration Solution Converter | kg/L, g/L, mg/L, ppm, lb/gal & More</title>

<meta name="description" content="Free concentration converter for chemistry, fluids, and water treatment. Instantly convert between kilogram per liter (kg/L), gram per liter (g/L), milligram per liter (mg/L), parts per million (ppm), grain per gallon (US & UK), pound per gallon (US & UK), pound per million gallons, and pound per cubic foot. Includes formulas, examples, and calculator." />

<meta name="keywords" content="concentration converter, kg/L, kilogram per liter, g/L, gram per liter, mg/L, milligram per liter, ppm, parts per million, grain per gallon US, grain per gallon UK, lb/gal US, lb/gal UK, pound per million gallons, lb/ft³, pound per cubic foot, chemistry concentration calculator, water treatment converter, solution concentration" />

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
        <h2>Fluids: Solution Concentration</h2>
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
            <h3>Popular Concentration Solution Conversions</h3>
            <ul>
              <li><a href="../Fluids_Converters_Concentration_Solution/kilogram-liter-to-gram-liter.php">kilogram/liter to gram/liter</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/gram-liter-to-kilogram-liter.php">gram/liter to kilogram/liter</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/gram-liter-to-milligram-liter.php">gram/liter to milligram/liter</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/milligram-liter-to-gram-liter.php">milligram/liter to gram/liter</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/part-million-ppm-to-milligram-liter.php">part/million (ppm) to milligram/liter</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/milligram-liter-to-part-million-ppm.php">milligram/liter to part/million (ppm)</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/pound-gallon-us-to-kilogram-liter.php">pound/gallon (US) to kilogram/liter</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/kilogram-liter-to-pound-gallon-us.php">kilogram/liter to pound/gallon (US)</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/pound-cubic-foot-to-gram-liter.php">pound/cubic foot to gram/liter</a></li>
              <li><a href="../Fluids_Converters_Concentration_Solution/gram-liter-to-pound-cubic-foot.php">gram/liter to pound/cubic foot</a></li>
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
  ['Kilogram per Liter (kg/L)', 'kilogram-liter'],
  ['Gram per Liter (g/L)', 'gram-liter'],
  ['Milligram per Liter (mg/L)', 'milligram-liter'],
  ['Part per Million (ppm)', 'part-million-ppm'],
  ['Grain per Gallon (US)', 'grain-gallon-us'],
  ['Grain per Gallon (UK)', 'grain-gallon-uk'],
  ['Pound per Gallon (US)', 'pound-gallon-us'],
  ['Pound per Gallon (UK)', 'pound-gallon-uk'],
  ['Pound per Million Gallons (US)', 'pound-million-gallon-us'],
  ['Pound per Million Gallons (UK)', 'pound-million-gallon-uk'],
  ['Pound per Cubic Foot (lb/ft³)', 'pound-cubic-foot']
];

const HUB = 'kg-m3';
const conversionFactors = {
  'kilogram-liter-to-gram-liter':	1000,
'kilogram-liter-to-milligram-liter':	1000000,
'kilogram-liter-to-part-million-ppm':	1001142.303,
'kilogram-liter-to-grain-gallon-us':	58417.8306,
'kilogram-liter-to-grain-gallon-uk':	70156.88929,
'kilogram-liter-to-pound-gallon-us':	8.345404374,
'kilogram-liter-to-pound-gallon-uk':	10.02241276,
'kilogram-liter-to-pound-million-gallon-us':	8345404.374,
'kilogram-liter-to-pound-million-gallon-uk':	10022412.76,
'kilogram-liter-to-pound-cubic-foot':	62.42796,
'gram-liter-to-kilogram-liter':	0.001,
'gram-liter-to-milligram-liter':	1000,
'gram-liter-to-part-million-ppm':	1001.142303,
'gram-liter-to-grain-gallon-us':	58.4178306,
'gram-liter-to-grain-gallon-uk':	70.15688929,
'gram-liter-to-pound-gallon-us':	0.0083454044,
'gram-liter-to-pound-gallon-uk':	0.0100224128,
'gram-liter-to-pound-million-gallon-us':	8345.404374,
'gram-liter-to-pound-million-gallon-uk':	10022.41276,
'gram-liter-to-pound-cubic-foot':	0.06242796,
'milligram-liter-to-kilogram-liter':	0.000001,
'milligram-liter-to-gram-liter':	0.001,
'milligram-liter-to-part-million-ppm':	1.001142303,
'milligram-liter-to-grain-gallon-us':	0.0584178306,
'milligram-liter-to-grain-gallon-uk':	0.0701568893,
'milligram-liter-to-pound-gallon-us':	0.0000083454,
'milligram-liter-to-pound-gallon-uk':	0.0000100224,
'milligram-liter-to-pound-million-gallon-us':	8.345404374,
'milligram-liter-to-pound-million-gallon-uk':	10.02241276,
'milligram-liter-to-pound-cubic-foot':	0.000062428,
'part-million-ppm-to-kilogram-liter':	0.0000009988590003,
'part-million-ppm-to-gram-liter':	0.000998859,
'part-million-ppm-to-milligram-liter':	0.9988590004,
'part-million-ppm-to-grain-gallon-us':	0.0583511759,
'part-million-ppm-to-grain-gallon-uk':	0.0700768403,
'part-million-ppm-to-pound-gallon-us':	0.0000083359,
'part-million-ppm-to-pound-gallon-uk':	0.000010011,
'part-million-ppm-to-pound-million-gallon-us':	8.3358822707,
'part-million-ppm-to-pound-million-gallon-uk':	10.010977191,
'part-million-ppm-to-pound-cubic-foot':	0.0000623567,
'grain-gallon-us-to-kilogram-liter':	0.0000171181,
'grain-gallon-us-to-gram-liter':	0.0171180612,
'grain-gallon-us-to-milligram-liter':	17.118061211,
'grain-gallon-us-to-part-million-ppm':	17.137615223,
'grain-gallon-us-to-grain-gallon-uk':	1.2009499252,
'grain-gallon-us-to-pound-gallon-us':	0.0001428571,
'grain-gallon-us-to-pound-gallon-uk':	0.0001715643,
'grain-gallon-us-to-pound-million-gallon-us':	142.8571429,
'grain-gallon-us-to-pound-million-gallon-uk':	171.5642751,
'grain-gallon-us-to-pound-cubic-foot':	0.0010686456,
'grain-gallon-uk-to-kilogram-liter':	0.0000142538,
'grain-gallon-uk-to-gram-liter':	0.0142537677,
'grain-gallon-uk-to-milligram-liter':	14.253767664,
'grain-gallon-uk-to-part-million-ppm':	14.270049786,
'grain-gallon-uk-to-grain-gallon-us':	0.8326741848,
'grain-gallon-uk-to-pound-gallon-us':	0.0001189535,
'grain-gallon-uk-to-pound-gallon-uk':	0.0001428571,
'grain-gallon-uk-to-pound-million-gallon-us':	118.95345501,
'grain-gallon-uk-to-pound-million-gallon-uk':	142.85714292,
'grain-gallon-uk-to-pound-cubic-foot':	0.0008898336,
'pound-gallon-us-to-kilogram-liter':	0.1198264284,
'pound-gallon-us-to-gram-liter':	119.82642844,
'pound-gallon-us-to-milligram-liter':	119826.42844,
'pound-gallon-us-to-part-million-ppm':	119963.30653,
'pound-gallon-us-to-grain-gallon-us':	6999.9999978,
'pound-gallon-us-to-grain-gallon-uk':	8406.6494739,
'pound-gallon-us-to-pound-gallon-uk':	1.2009499254,
'pound-gallon-us-to-pound-million-gallon-us':	1000000,
'pound-gallon-us-to-pound-million-gallon-uk':	1200949.9254,
'pound-gallon-us-to-pound-cubic-foot':	7.4805194814,
'pound-gallon-uk-to-kilogram-liter':	0.0997763736,
'pound-gallon-uk-to-gram-liter':	99.776373608,
'pound-gallon-uk-to-milligram-liter':	99776.373608,
'pound-gallon-uk-to-part-million-ppm':	99890.348459,
'pound-gallon-uk-to-grain-gallon-us':	5828.7192913,
'pound-gallon-uk-to-grain-gallon-uk':	6999.999997,
'pound-gallon-uk-to-pound-gallon-us':	0.8326741847,
'pound-gallon-uk-to-pound-million-gallon-us':	832674.18473,
'pound-gallon-uk-to-pound-million-gallon-uk':	1000000,
'pound-gallon-uk-to-pound-cubic-foot':	6.2288354606,
'pound-million-gallon-us-to-kilogram-liter':	0.0000001198264284,
'pound-million-gallon-us-to-gram-liter':	0.0001198264,
'pound-million-gallon-us-to-milligram-liter':	0.1198264284,
'pound-million-gallon-us-to-part-million-ppm':	0.1199633065,
'pound-million-gallon-us-to-grain-gallon-us':	0.007,
'pound-million-gallon-us-to-grain-gallon-uk':	0.0084066495,
'pound-million-gallon-us-to-pound-gallon-us':	0.000001,
'pound-million-gallon-us-to-pound-gallon-uk':	0.0000012009,
'pound-million-gallon-us-to-pound-million-gallon-uk':	1.2009499254,
'pound-million-gallon-us-to-pound-cubic-foot':	0.0000074805,
'pound-million-gallon-uk-to-kilogram-liter':	0.0000000997763736,
'pound-million-gallon-uk-to-gram-liter':	0.0000997764,
'pound-million-gallon-uk-to-milligram-liter':	0.0997763736,
'pound-million-gallon-uk-to-part-million-ppm':	0.0998903485,
'pound-million-gallon-uk-to-grain-gallon-us':	0.0058287193,
'pound-million-gallon-uk-to-grain-gallon-uk':	0.007,
'pound-million-gallon-uk-to-pound-gallon-us':	0.0000008326741847,
'pound-million-gallon-uk-to-pound-gallon-uk':	0.000001,
'pound-million-gallon-uk-to-pound-million-gallon-us':	0.8326741847,
'pound-million-gallon-uk-to-pound-cubic-foot':	0.0000062288,
'pound-cubic-foot-to-kilogram-liter':	0.0160184635,
'pound-cubic-foot-to-gram-liter':	16.018463522,
'pound-cubic-foot-to-milligram-liter':	16018.463522,
'pound-cubic-foot-to-part-million-ppm':	16036.761461,
'pound-cubic-foot-to-grain-gallon-us':	935.76388849,
'pound-cubic-foot-to-grain-gallon-uk':	1123.8055719,
'pound-cubic-foot-to-pound-gallon-us':	0.1336805555,
'pound-cubic-foot-to-pound-gallon-uk':	0.1605436532,
'pound-cubic-foot-to-pound-million-gallon-us':	133680.55554,
'pound-cubic-foot-to-pound-million-gallon-uk':	160543.6532
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
