<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mass Flux Density Converter | kg/(s·m²), kg/(h·m²), lb/(h·ft²), g/(s·m²) – Fluids</title>
  <meta name="description" content="Convert mass flux density between SI and US units: kg/(s·m²), kg/(h·m²), kg/(h·ft²), g/(s·m²), g/(s·cm²), lb/(h·ft²), lb/(s·ft²) and more. Instant results with an equivalents table for engineers.">
  <meta name="keywords" content="mass flux density converter, kg per second per square meter, kg/(h·m²) to kg/(s·m²), lb/(h·ft²) to kg/(h·m²), g/(s·cm²) to g/(s·m²), pound per second per square foot, mass flux unit conversion, fluids converters mass flux">
  <!-- Your site stylesheet -->
  <link href="../css/sub_main_pages.css" rel="stylesheet"/>

   <style>
    
    .converter-tool{
      display:grid;
      grid-template-columns:1fr 44px 1fr;
      grid-template-rows:auto auto;
      gap:15px;
      align-items:end;
    }
    .cell-value {grid-column:1;grid-row:1}
    .cell-result{grid-column:3;grid-row:1}
    .cell-to    {grid-column:3;grid-row:2}
    .cell-from  {grid-column:1;grid-row:2}

    .swap-btn{
      grid-column:2;grid-row:1 / span 2;
      width:44px;height:44px;border-radius:6px;
      background:var(--light-bg);border:1px solid var(--border-color);
      display:flex;align-items:center;justify-content:center;cursor:pointer;
    }
    .swap-btn:hover{background:var(--border-color)}

    
    .ad-section{position:sticky;top:16px;overflow:visible}

    
    @media (max-width:768px){
      .converter-tool{grid-template-columns:1fr;grid-template-rows:auto auto auto auto auto}
      .swap-btn{grid-column:1;grid-row:3;transform:rotate(90deg);margin:0 auto}
      .cell-value{grid-row:1}.cell-result{grid-row:2}.cell-to{grid-row:4}.cell-from{grid-row:5}
    }
    </style>
</head>
<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <div class="main-wrapper">
      <!-- LEFT: content -->
      <section class="content-section">

        <div class="converter-section">
          <h2>Mass Flux Density Conversions</h2>

          <div class="converter-tool">
            <!-- Row 1 -->
            <div class="input-group cell-value">
              <label for="value">Value</label>
              <input id="value" type="number" inputmode="decimal" step="any" placeholder="100" value="100" />
            </div>

            <button id="swap" class="swap-btn" title="Swap units">↔</button>

            <div class="input-group cell-result">
              <label for="result">Result</label>
              <input id="result" type="text" readonly placeholder="—" />
            </div>

            <!-- Row 2 -->
            <div class="input-group cell-to">
              <label for="toUnit">To Unit</label>
              <select id="toUnit"></select>
            </div>

            <div class="input-group cell-from">
              <label for="fromUnit">From Unit</label>
              <select id="fromUnit"></select>
            </div>
          </div>

          <!-- Filter for the equivalents list -->
          <div class="input-group" style="margin-top:16px">
            <label for="filter">Filter units</label>
            <input id="filter" type="text" placeholder="Search units…">
          </div>

          <table class="conversion-table" style="margin-top:10px">
            <thead><tr><th style="width:48%">Unit</th><th>Value</th></tr></thead>
            <tbody id="tbody"><tr><td colspan="2">Waiting for input…</td></tr></tbody>
          </table>
        </div>

        <div class="description-section">
          <div class="info-section">
            <h3>Popular Mass Flux Density Conversions</h3>
            <ul>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-hour-square-meter-to-kilogram-second-square-meter.php">kilogram/hour/square meter to kilogram/second/square meter Converter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-second-square-meter-to-kilogram-hour-square-meter.php">kilogram/second/square meter to kilogram/hour/square meter Converter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/pound-hour-square-foot-to-kilogram-hour-square-meter.php">pound/hour/square foot to kilogram/hour/square meter Converter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-hour-square-meter-to-pound-hour-square-foot.php">kilogram/hour/square meter to pound/hour/square foot Converter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/pound-second-square-foot-to-kilogram-second-square-meter.php">pound/second/square foot to kilogram/second/square meter Converter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-second-square-meter-to-pound-second-square-foot.php">kilogram/second/square meter to pound/second/square foot Converter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/gram-second-sq--centimeter-to-gram-second-square-meter.php">gram/second/sq. centimeter to gram/second/square meter Converter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/gram-second-square-meter-to-gram-second-sq--centimeter.php">gram/second/square meter to gram/second/sq. centimeter Converter</a></li>
            </ul>
          </div>
        </div>

      </section>

      <!-- RIGHT: sticky rail -->
      <aside class="ad-section">
        <h3>Advertisement</h3>
        <div class="ad-placeholder">Ad Space (350x280)</div>
        <?php include '../drawer_menu.php'; ?>
      </aside>
    </div>

   
  </div>
 <?php include '../footer.php'; ?>
<script>
/* =========================
   ACCELERATION — units list
   ========================= */
const UNITS = [
  ['Gram per second per square meter (g/(s·m²))','gram-second-square-meter'],
  ['Kilogram per hour per square meter (kg/(h·m²))','kilogram-hour-square-meter'],
  ['Kilogram per hour per square foot (kg/(h·ft²))','kilogram-hour-square-foot'],
  ['Kilogram per second per square meter (kg/(s·m²))','kilogram-second-square-meter'],
  ['Gram per second per square centimeter (g/(s·cm²))','gram-second-sq--centimeter'],
  ['Pound per hour per square foot (lb/(h·ft²))','pound-hour-square-foot'],
  ['Pound per second per square foot (lb/(s·ft²))','pound-second-square-foot']
];

/* =========================
   Conversion factors (ACCELERATION)
   Keys must match the tokens above.
   Using kg/(s·m²) as the hub.
   ========================= */
const conversionFactors = {
  // SI multiples (↔ m/s²)
econd-square-meter-to-kilogram-hour-square-meter' :3.5999999997,
'gram-second-square-meter-to-kilogram-hour-square-foot' :0.3344509438,
'gram-second-square-meter-to-kilogram-second-square-meter' :0.001,
'gram-second-square-meter-to-gram-second-sq--centimeter' :0.0001,
'gram-second-square-meter-to-pound-hour-square-foot' :0.7373381093,
'gram-second-square-meter-to-pound-second-square-foot' :0.0002048161,
'kilogram-hour-square-meter-to-gram-second-square-meter' :0.2777777778,
'kilogram-hour-square-meter-to-kilogram-hour-square-foot' :0.09290304,
'kilogram-hour-square-meter-to-kilogram-second-square-meter' :0.0002777778,
'kilogram-hour-square-meter-to-gram-second-sq--centimeter' :0.0000277778,
'kilogram-hour-square-meter-to-pound-hour-square-foot' :0.2048161415,
'kilogram-hour-square-meter-to-pound-second-square-foot' :0.0000568934,
'kilogram-hour-square-foot-to-gram-second-square-meter' :2.9899751173,
'kilogram-hour-square-foot-to-kilogram-hour-square-meter' :10.763910421,
'kilogram-hour-square-foot-to-kilogram-second-square-meter' :0.0029899751,
'kilogram-hour-square-foot-to-gram-second-sq--centimeter' :0.0002989975,
'kilogram-hour-square-foot-to-pound-hour-square-foot' :2.2046226,
'kilogram-hour-square-foot-to-pound-second-square-foot' :0.0006123952,
'kilogram-second-square-meter-to-gram-second-square-meter' :1000,
'kilogram-second-square-meter-to-kilogram-hour-square-meter' :3599.9999997,
'kilogram-second-square-meter-to-kilogram-hour-square-foot' :334.45094383,
'kilogram-second-square-meter-to-gram-second-sq--centimeter' :0.1,
'kilogram-second-square-meter-to-pound-hour-square-foot' :737.33810934,
'kilogram-second-square-meter-to-pound-second-square-foot' :0.2048161415,
'gram-second-sq--centimeter-to-gram-second-square-meter' :10000,
'gram-second-sq--centimeter-to-kilogram-hour-square-meter' :35999.999997,
'gram-second-sq--centimeter-to-kilogram-hour-square-foot' :3344.5094383,
'gram-second-sq--centimeter-to-kilogram-second-square-meter' :10,
'gram-second-sq--centimeter-to-pound-hour-square-foot' :7373.3810934,
'gram-second-sq--centimeter-to-pound-second-square-foot' :2.0481614149,
'pound-hour-square-foot-to-gram-second-square-meter' :1.3562299132,
'pound-hour-square-foot-to-kilogram-hour-square-meter' :4.882427687,
'pound-hour-square-foot-to-kilogram-hour-square-foot' :0.4535923745,
'pound-hour-square-foot-to-kilogram-second-square-meter' :0.0013562299,
'pound-hour-square-foot-to-gram-second-sq--centimeter' :0.000135623,
'pound-hour-square-foot-to-pound-second-square-foot' :0.0002777778,
'pound-second-square-foot-to-gram-second-square-meter' :4882.4276873,
'pound-second-square-foot-to-kilogram-hour-square-meter' :17576.739673,
'pound-second-square-foot-to-kilogram-hour-square-foot' :1632.9325482,
'pound-second-square-foot-to-kilogram-second-square-meter' :4.8824276873,
'pound-second-square-foot-to-gram-second-sq--centimeter' :0.4882427687,
'pound-second-square-foot-to-pound-hour-square-foot' :3599.9999999
};

/* ===== Build helpers via the hub (m/s²) ===== */
const HUB = 'kilogram-second-square-meter';
const baseTo = new Map(), toBase = new Map();
for (const [k, f] of Object.entries(conversionFactors)){
  const [A,B] = k.split('-to-');
  if (!A || !B) continue;
  if (A === HUB) baseTo.set(B, f);
  if (B === HUB) toBase.set(A, f);
}
baseTo.set(HUB,1); toBase.set(HUB,1);

/* ===== UI wiring ===== */
const $ = s => document.querySelector(s);
const tbody = $('#tbody');

function populateOptions(){
  const from = $('#fromUnit'), to = $('#toUnit');
  for (const [label, token] of UNITS){
    from.add(new Option(label, token));
    to.add(new Option(label, token));
  }
  // Defaults (To on left, From on right)
  to.value   = 'meter-square-second';
  from.value = 'kilometer-square-second';

  // If same, pick next for "from"
  if (from.value === to.value){
    const second = from.querySelector('option:nth-child(2)');
    if (second) from.value = second.value;
  }
}

function formatNumber(x){
  if (!Number.isFinite(x)) return '—';
  const ax = Math.abs(x);
  if (x !== 0 && (ax >= 1e9 || ax < 1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(x);
}

/* Factor: direct, inverse, or via hub */
function factor(fromTok, toTok){
  if (fromTok === toTok) return 1;

  const direct = conversionFactors[`${fromTok}-to-${toTok}`];
  if (direct != null) return direct;

  const inv = conversionFactors[`${toTok}-to-${fromTok}`];
  if (inv != null && inv !== 0) return 1 / inv;

  const a = toBase.get(fromTok) ?? conversionFactors[`${fromTok}-to-${HUB}`];
  const b = baseTo.get(toTok)   ?? conversionFactors[`${HUB}-to-${toTok}`];
  if (a != null && b != null) return a * b;

  return null;
}

function render(){
  const val = parseFloat($('#value').value);
  const fromTok = $('#fromUnit').value;
  const toTok   = $('#toUnit').value;
  const out = $('#result');

  out.value = '';
  if (Number.isFinite(val)){
    const f = factor(fromTok, toTok);
    out.value = f == null ? '—' : formatNumber(val * f);
  } else out.value = '—';

  if (!Number.isFinite(val)){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }

  const rows = [];
  for (const [label, tok] of UNITS){
    if (tok === fromTok) continue;
    const f = factor(fromTok, tok);
    rows.push(`<tr class="row-unit"><td class="unit-label">${label}</td><td>${f == null ? '—' : formatNumber(val * f)}</td></tr>`);
  }
  tbody.innerHTML = rows.join('');
  applyFilter($('#filter').value);
}

function applyFilter(q){
  const term = (q || '').trim().toLowerCase();
  const all = tbody.querySelectorAll('.row-unit');
  if (!term){ all.forEach(tr => tr.style.display = ''); return; }
  all.forEach(tr => {
    const label = tr.querySelector('.unit-label')?.textContent?.toLowerCase() || '';
    tr.style.display = label.includes(term) ? '' : 'none';
  });
}

document.addEventListener('DOMContentLoaded', ()=>{
  populateOptions();
  render();
  $('#value').addEventListener('input', render);
  $('#fromUnit').addEventListener('change', render);
  $('#toUnit').addEventListener('change', render);
  $('#swap').addEventListener('click', ()=>{
    const f = $('#fromUnit'), t = $('#toUnit');
    const a = f.value; f.value = t.value; t.value = a;
    render();
  });
  $('#filter').addEventListener('input', e => applyFilter(e.target.value));
});
</script>
</body>
</html>
