<?php
  $title = "Temperature Converter";
  $meta_desc = "Convert temperatures between Celsius, Fahrenheit, Kelvin, Rankine, Delisle, Newton, Réaumur, and Rømer with accurate offset-aware formulas.";
  $meta_keys = "temperature converter,Celsius to Fahrenheit,Fahrenheit to Celsius,Kelvin,Rankine,Delisle,Newton,Reaumur,Romer";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>" />
  <meta name="keywords" content="<?php echo htmlspecialchars($meta_keys); ?>" />
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
        <h2>Temperature Converter</h2>
        <div class="converter-tool">
          <div class="input-group">
            <label for="value">Value</label>
            <input id="value" type="number" inputmode="decimal" step="any" value="0" />
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
            <h3>Popular Temperature Conversions</h3>
            <ul>
                <li><a href="../temperature/celsius-c-to-fahrenheit-f.php">Celsius to Fahrenheit ((°F))</a></li>
                <li><a href="../temperature/celsius-c-to-kelvin-k.php">Celsius to Kelvin ((K))</a></li>
                <li><a href="../temperature/fahrenheit-f-to-kelvin-k.php">Fahrenheit to Kelvin ((K))</a></li>
                <li><a href="../temperature/kelvin-k-to-rankine-r.php">Kelvin to Rankine ((°R))</a></li>
                <li><a href="../temperature/celsius-c-to-reaumur-re.php">Celsius to Reaumur ((°Ré))</a></li>
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
  ['Celsius (°C)','c'],
  ['Fahrenheit (°F)','f'],
  ['Kelvin (K)','k'],
  ['Rankine (°R)','r'],
  ['Delisle (°De)','de'],
  ['Newton (°N)','n'],
  ['Réaumur (°Ré)','re'],
  ['Rømer (°Rø)','ro']
];
const toK = {
  'c': x => x + 273.15,
  'f': x => (x + 459.67) * 5/9,
  'k': x => x,
  'r': x => x * 5/9,
  'de': x => 373.15 - x * 2/3,
  'n': x => (x * 100/33) + 273.15,
  're': x => (x * 5/4) + 273.15,
  'ro': x => ((x - 7.5) * 40/21) + 273.15
};
const fromK = {
  'c': k => k - 273.15,
  'f': k => k * 9/5 - 459.67,
  'k': k => k,
  'r': k => k * 9/5,
  'de': k => (373.15 - k) * 3/2,
  'n': k => (k - 273.15) * 33/100,
  're': k => (k - 273.15) * 4/5,
  'ro': k => (k - 273.15) * 21/40 + 7.5
};
const $ = s => document.querySelector(s);
const tbody = document.getElementById("tbody");
function populateOptions(){
  const from = document.getElementById("fromUnit"), to = document.getElementById("toUnit");
  UNITS.forEach(([label, token])=>{ from.add(new Option(label, token)); to.add(new Option(label, token)); });
  from.selectedIndex = 0; to.selectedIndex = 0;
}
function fnum(x){
  if(!Number.isFinite(x)) return "—";
  return new Intl.NumberFormat(undefined,{maximumFractionDigits:6}).format(x);
}
function convert(val, fromSlug, toSlug){
  if(fromSlug === toSlug) return val;
  const tk = toK[fromSlug], fk = fromK[toSlug];
  if(!tk || !fk) return null;
  const K = tk(val);
  return fk(K);
}
function render(){
  const val = parseFloat(document.getElementById("value").value);
  const from = document.getElementById("fromUnit").value;
  const to = document.getElementById("toUnit").value;
  const out = document.getElementById("result");
  out.value = "";
  if(Number.isFinite(val)){
    const y = convert(val, from, to);
    out.value = y==null ? "—" : fnum(y);
  } else out.value = "—";
  const q = (document.getElementById("filter").value||"").toLowerCase();
  if(!Number.isFinite(val)){ tbody.innerHTML='<tr><td colspan="2">Waiting for input…</td></tr>'; return; }
  const rows = [];
  for(const [label, slug] of UNITS){
    if(slug===from) continue;
    if(q && !label.toLowerCase().includes(q)) continue;
    const y = convert(val, from, slug);
    rows.push(`<tr><td>${label}</td><td>${y==null?'—':fnum(y)}</td></tr>`);
  }
  tbody.innerHTML = rows.join("") || '<tr><td colspan="2">No matches.</td></tr>';
}
document.addEventListener("DOMContentLoaded", ()=>{
  populateOptions();
  render();
  document.getElementById("value").addEventListener("input", render);
  document.getElementById("fromUnit").addEventListener("change", render);
  document.getElementById("toUnit").addEventListener("change", render);
  document.getElementById("filter").addEventListener("input", render);
  document.getElementById("swap").addEventListener("click", ()=>{ const f = document.getElementById("fromUnit"), t = document.getElementById("toUnit"); const a = f.value; f.value = t.value; t.value = a; render(); });
});
</script>
</body>
</html>
