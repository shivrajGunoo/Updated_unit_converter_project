<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Surface Tension Converter | N/m, dyn/cm, gf/cm & More</title>

<meta name="description" content="Free Surface Tension Converter for chemistry, physics, and fluid science. Instantly convert between newton per meter (N/m), millinewton per meter (mN/m), gram-force per centimeter (gf/cm), dyne per centimeter (dyn/cm), erg/cm², erg/mm², poundal/inch, and pound-force/inch. Includes formulas, examples, and calculator." />

<meta name="keywords" content="surface tension converter, convert N/m, newton per meter, millinewton per meter, mN/m, gram-force per centimeter, gf/cm, dyne per centimeter, dyn/cm, erg per square centimeter, erg/cm², erg per square millimeter, erg/mm², poundal per inch, lbal/in, pound-force per inch, lbf/in, surface tension calculator, fluid surface tension conversion" />

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
        <h2>Surface Tension Converter</h2>
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
            <h3>Popular Surface tension Concentration Conversions</h3>
          <ul>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/newton-meter-to-millinewton-meter.php">newton/meter to millinewton/meter Converter</a></li>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/newton-meter-to-gram-force-centimeter.php">newton/meter to gram-force/centimeter Converter</a></li>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/newton-meter-to-dyne-centimeter.php">newton/meter to dyne/centimeter Converter</a></li>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/newton-meter-to-pound-force-inch.php">newton/meter to pound-force/inch Converter</a></li>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/millinewton-meter-to-newton-meter.php">millinewton/meter to newton/meter Converter</a></li>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/gram-force-centimeter-to-newton-meter.php">gram-force/centimeter to newton/meter Converter</a></li>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/dyne-centimeter-to-newton-meter.php">dyne/centimeter to newton/meter Converter</a></li>
            <li><a href="../Fluids_Converters_flow_surface-tension-converter/pound-force-inch-to-newton-meter.php">pound-force/inch to newton/meter Converter</a></li>
   
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
  ['Newton Meter (N·m)', 'newton-meter'],
  ['Newton Meter (N·m)', 'newton-meter'],
  ['Millinewton Meter (mN·m)', 'millinewton-meter'],
  ['Gram-Force Centimeter (gf·cm)', 'gram-force-centimeter'],
  ['Dyne Centimeter (dyn·cm)', 'dyne-centimeter'],
  ['Erg Square Centimeter (erg·cm²)', 'erg-squarecentimeter'],
  ['Erg Square Millimeter (erg·mm²)', 'erg-squaremillimeter'],
  ['Poundal Inch (pdl·in)', 'poundal-inch'],
  ['Pound-Force Inch (lbf·in)', 'pound-force-inch']
];

const HUB = 'n-per-m';
const conversionFactors = {
   'newton-meter-to-millinewton-meter' :1000,
'newton-meter-to-gram-force-centimeter' :1.019716213,
'newton-meter-to-dyne-centimeter' :1000,
'newton-meter-to-erg-squarecentimeter' :1000,
'newton-meter-to-erg-squaremillimeter' :10,
'newton-meter-to-poundal-inch' :0.1837185501,
'newton-meter-to-pound-force-inch' :0.0057101471,
'millinewton-meter-to-newton-meter' :0.001,
'millinewton-meter-to-gram-force-centimeter' :0.0010197162,
'millinewton-meter-to-dyne-centimeter' :1,
'millinewton-meter-to-erg-squarecentimeter' :1,
'millinewton-meter-to-erg-squaremillimeter' :0.01,
'millinewton-meter-to-poundal-inch' :0.0001837186,
'millinewton-meter-to-pound-force-inch' :0.0000057101,
'gram-force-centimeter-to-newton-meter' :0.980665,
'gram-force-centimeter-to-millinewton-meter' :980.66499998,
'gram-force-centimeter-to-dyne-centimeter' :980.66499998,
'gram-force-centimeter-to-erg-squarecentimeter' :980.66499998,
'gram-force-centimeter-to-erg-squaremillimeter' :9.8066499998,
'gram-force-centimeter-to-poundal-inch' :0.1801663519,
'gram-force-centimeter-to-pound-force-inch' :0.0055997414,
'dyne-centimeter-to-newton-meter' :0.001,
'dyne-centimeter-to-millinewton-meter' :1,
'dyne-centimeter-to-gram-force-centimeter' :0.0010197162,
'dyne-centimeter-to-erg-squarecentimeter' :1,
'dyne-centimeter-to-erg-squaremillimeter' :0.01,
'dyne-centimeter-to-poundal-inch' :0.0001837186,
'dyne-centimeter-to-pound-force-inch' :0.0000057101,
'erg-squarecentimeter-to-newton-meter' :0.001,
'erg-squarecentimeter-to-millinewton-meter' :1,
'erg-squarecentimeter-to-gram-force-centimeter' :0.0010197162,
'erg-squarecentimeter-to-dyne-centimeter' :1,
'erg-squarecentimeter-to-erg-squaremillimeter' :0.01,
'erg-squarecentimeter-to-poundal-inch' :0.0001837186,
'erg-squarecentimeter-to-pound-force-inch' :0.0000057101,
'erg-squaremillimeter-to-newton-meter' :0.1,
'erg-squaremillimeter-to-millinewton-meter' :100,
'erg-squaremillimeter-to-gram-force-centimeter' :0.1019716213,
'erg-squaremillimeter-to-dyne-centimeter' :100,
'erg-squaremillimeter-to-erg-squarecentimeter' :100,
'erg-squaremillimeter-to-poundal-inch' :0.018371855,
'erg-squaremillimeter-to-pound-force-inch' :0.0005710147,
'poundal-inch-to-newton-meter' :5.443108491,
'poundal-inch-to-millinewton-meter' :5443.108491,
'poundal-inch-to-gram-force-centimeter' :5.5504259774,
'poundal-inch-to-dyne-centimeter' :5443.108491,
'poundal-inch-to-erg-squarecentimeter' :5443.108491,
'poundal-inch-to-erg-squaremillimeter' :54.43108491,
'poundal-inch-to-pound-force-inch' :0.0310809502,
'pound-force-inch-to-newton-meter' :175.12683699,
'pound-force-inch-to-millinewton-meter' :175126.83699,
'pound-force-inch-to-gram-force-centimeter' :178.57967501,
'pound-force-inch-to-dyne-centimeter' :175126.83699,
'pound-force-inch-to-erg-squarecentimeter' :175126.83699,
'pound-force-inch-to-erg-squaremillimeter' :1751.2683699,
'pound-force-inch-to-poundal-inch' :32.174048575
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
