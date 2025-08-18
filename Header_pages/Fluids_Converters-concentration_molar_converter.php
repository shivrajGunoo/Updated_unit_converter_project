<?php
  $title = "Fluids Molar Concentration Converter";
  $meta_desc = "Convert between mol/m³, mol/L, mol/cm³, mol/mm³ and their kilo- and milli- variants quickly and accurately.";
  $meta_keys = "molar concentration converter,mol per cubic meter,mol per liter,kmol/m3,mmol/L,mol/cm3,mol/mm3";
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
        <h2>Fluids Molar Concentration</h2>
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
            <h3>Popular Molar Concentration Conversions</h3>
            <ul>
              <li><a href="../Fluids_Converters_concentration_molar_converter/mol-cubicmeter-to-mol-liter.php">mol/cubic meter to mol/liter</a></li>
              <li><a href="../Fluids_Converters_concentration_molar_converter/mol-liter-to-mol-cubicmeter.php">mol/liter to mol/cubic meter</a></li>
              <li><a href="../Fluids_Converters_concentration_molar_converter/millimol-liter-to-mol-liter.php">millimol/liter to mol/liter</a></li>
              <li><a href="../Fluids_Converters_concentration_molar_converter/kilomol-cubicmeter-to-mol-liter.php">kilomol/cubic meter to mol/liter</a></li>
              <li><a href="../Fluids_Converters_concentration_molar_converter/mol-liter-to-millimol-liter.php">mol/liter to millimol/liter</a></li>
              <li><a href="../Fluids_Converters_concentration_molar_converter/kilomol-liter-to-mol-liter.php">kilomol/liter to mol/liter</a></li>
              <li><a href="../Fluids_Converters_concentration_molar_converter/mol-liter-to-kilomol-liter.php">mol/liter to kilomol/liter</a></li>
              <li><a href="../Fluids_Converters_concentration_molar_converter/mol-cubiccentimeter-to-mol-liter.php">mol/cubic centimeter to mol/liter</a></li>
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
  ['Mole per Cubic Meter (mol/m³)', 'mol-cubicmeter'],
  ['Mole per Liter (mol/L)', 'mol-liter'],
  ['Mole per Cubic Centimeter (mol/cm³)', 'mol-cubiccentimeter'],
  ['Mole per Cubic Millimeter (mol/mm³)', 'mol-cubicmillimeter'],
  ['Kilomole per Cubic Meter (kmol/m³)', 'kilomol-cubicmeter'],
  ['Kilomole per Liter (kmol/L)', 'kilomol-liter'],
  ['Kilomole per Cubic Centimeter (kmol/cm³)', 'kilomol-cubiccentimeter'],
  ['Kilomole per Cubic Millimeter (kmol/mm³)', 'kilomol-cubicmillimeter'],
  ['Millimole per Cubic Meter (mmol/m³)', 'millimol-cubicmeter'],
  ['Millimole per Liter (mmol/L)', 'millimol-liter'],
  ['Millimole per Cubic Centimeter (mmol/cm³)', 'millimol-cubiccentimeter'],
  ['Millimole per Cubic Millimeter (mmol/mm³)', 'millimol-cubicmillimeter']
];


const HUB = 'mol-per-m3';
const conversionFactors = {
  'mol-cubicmeter-to-mol-liter' :0.001,
'mol-cubicmeter-to-mol-cubiccentimeter' :0.000001,
'mol-cubicmeter-to-mol-cubicmillimeter' :0.000000001,
'mol-cubicmeter-to-kilomol-cubicmeter' :0.001,
'mol-cubicmeter-to-kilomol-liter' :0.000001,
'mol-cubicmeter-to-kilomol-cubiccentimeter' :0.000000001,
'mol-cubicmeter-to-kilomol-cubicmillimeter' :0.000000000001,
'mol-cubicmeter-to-millimol-cubicmeter' :1000,
'mol-cubicmeter-to-millimol-liter' :1,
'mol-cubicmeter-to-millimol-cubiccentimeter' :0.001,
'mol-cubicmeter-to-millimol-cubicmillimeter' :0.000001,
'mol-liter-to-mol-cubicmeter' :1000,
'mol-liter-to-mol-cubiccentimeter' :0.001,
'mol-liter-to-mol-cubicmillimeter' :0.000001,
'mol-liter-to-kilomol-cubicmeter' :1,
'mol-liter-to-kilomol-liter' :0.001,
'mol-liter-to-kilomol-cubiccentimeter' :0.000001,
'mol-liter-to-kilomol-cubicmillimeter' :0.000000001,
'mol-liter-to-millimol-cubicmeter' :1000000,
'mol-liter-to-millimol-liter' :1000,
'mol-liter-to-millimol-cubiccentimeter' :1,
'mol-liter-to-millimol-cubicmillimeter' :0.001,
'mol-cubiccentimeter-to-mol-cubicmeter' :1000000,
'mol-cubiccentimeter-to-mol-liter' :1000,
'mol-cubiccentimeter-to-mol-cubicmillimeter' :0.001,
'mol-cubiccentimeter-to-kilomol-cubicmeter' :1000,
'mol-cubiccentimeter-to-kilomol-liter' :1,
'mol-cubiccentimeter-to-kilomol-cubiccentimeter' :0.001,
'mol-cubiccentimeter-to-kilomol-cubicmillimeter' :0.000001,
'mol-cubiccentimeter-to-millimol-cubicmeter' :1000000000,
'mol-cubiccentimeter-to-millimol-liter' :1000000,
'mol-cubiccentimeter-to-millimol-cubiccentimeter' :1000,
'mol-cubiccentimeter-to-millimol-cubicmillimeter' :1,
'mol-cubicmillimeter-to-mol-cubicmeter' :1000000000,
'mol-cubicmillimeter-to-mol-liter' :1000000,
'mol-cubicmillimeter-to-mol-cubiccentimeter' :1000,
'mol-cubicmillimeter-to-kilomol-cubicmeter' :1000000,
'mol-cubicmillimeter-to-kilomol-liter' :1000,
'mol-cubicmillimeter-to-kilomol-cubiccentimeter' :1,
'mol-cubicmillimeter-to-kilomol-cubicmillimeter' :0.001,
'mol-cubicmillimeter-to-millimol-cubicmeter' :1000000000000,
'mol-cubicmillimeter-to-millimol-liter' :1000000000,
'mol-cubicmillimeter-to-millimol-cubiccentimeter' :1000000,
'mol-cubicmillimeter-to-millimol-cubicmillimeter' :1000,
'kilomol-cubicmeter-to-mol-cubicmeter' :1000,
'kilomol-cubicmeter-to-mol-liter' :1,
'kilomol-cubicmeter-to-mol-cubiccentimeter' :0.001,
'kilomol-cubicmeter-to-mol-cubicmillimeter' :0.000001,
'kilomol-cubicmeter-to-kilomol-liter' :0.001,
'kilomol-cubicmeter-to-kilomol-cubiccentimeter' :0.000001,
'kilomol-cubicmeter-to-kilomol-cubicmillimeter' :0.000000001,
'kilomol-cubicmeter-to-millimol-cubicmeter' :1000000,
'kilomol-cubicmeter-to-millimol-liter' :1000,
'kilomol-cubicmeter-to-millimol-cubiccentimeter' :1,
'kilomol-cubicmeter-to-millimol-cubicmillimeter' :0.001,
'kilomol-liter-to-mol-cubicmeter' :1000000,
'kilomol-liter-to-mol-liter' :1000,
'kilomol-liter-to-mol-cubiccentimeter' :1,
'kilomol-liter-to-mol-cubicmillimeter' :0.001,
'kilomol-liter-to-kilomol-cubicmeter' :1000,
'kilomol-liter-to-kilomol-cubiccentimeter' :0.001,
'kilomol-liter-to-kilomol-cubicmillimeter' :0.000001,
'kilomol-liter-to-millimol-cubicmeter' :1000000000,
'kilomol-liter-to-millimol-liter' :1000000,
'kilomol-liter-to-millimol-cubiccentimeter' :1000,
'kilomol-liter-to-millimol-cubicmillimeter' :1,
'kilomol-cubiccentimeter-to-mol-cubicmeter' :1000000000,
'kilomol-cubiccentimeter-to-mol-liter' :1000000,
'kilomol-cubiccentimeter-to-mol-cubiccentimeter' :1000,
'kilomol-cubiccentimeter-to-mol-cubicmillimeter' :1,
'kilomol-cubiccentimeter-to-kilomol-cubicmeter' :1000000,
'kilomol-cubiccentimeter-to-kilomol-liter' :1000,
'kilomol-cubiccentimeter-to-kilomol-cubicmillimeter' :0.001,
'kilomol-cubiccentimeter-to-millimol-cubicmeter' :1000000000000,
'kilomol-cubiccentimeter-to-millimol-liter' :1000000000,
'kilomol-cubiccentimeter-to-millimol-cubiccentimeter' :1000000,
'kilomol-cubiccentimeter-to-millimol-cubicmillimeter' :1000,
'kilomol-cubicmillimeter-to-mol-cubicmeter' :1000000000000,
'kilomol-cubicmillimeter-to-mol-liter' :1000000000,
'kilomol-cubicmillimeter-to-mol-cubiccentimeter' :1000000,
'kilomol-cubicmillimeter-to-mol-cubicmillimeter' :1000,
'kilomol-cubicmillimeter-to-kilomol-cubicmeter' :1000000000,
'kilomol-cubicmillimeter-to-kilomol-liter' :1000000,
'kilomol-cubicmillimeter-to-kilomol-cubiccentimeter' :1000,
'kilomol-cubicmillimeter-to-millimol-cubicmeter' :1000000000000000,
'kilomol-cubicmillimeter-to-millimol-liter' :1000000000000,
'kilomol-cubicmillimeter-to-millimol-cubiccentimeter' :1000000000,
'kilomol-cubicmillimeter-to-millimol-cubicmillimeter' :1000000,
'millimol-cubicmeter-to-mol-cubicmeter' :0.001,
'millimol-cubicmeter-to-mol-liter' :0.000001,
'millimol-cubicmeter-to-mol-cubiccentimeter' :0.000000001,
'millimol-cubicmeter-to-mol-cubicmillimeter' :0.000000000001,
'millimol-cubicmeter-to-kilomol-cubicmeter' :0.000001,
'millimol-cubicmeter-to-kilomol-liter' :0.000000001,
'millimol-cubicmeter-to-kilomol-cubiccentimeter' :0.000000000001,
'millimol-cubicmeter-to-kilomol-cubicmillimeter' :0.000000000000001,
'millimol-cubicmeter-to-millimol-liter' :0.001,
'millimol-cubicmeter-to-millimol-cubiccentimeter' :0.000001,
'millimol-cubicmeter-to-millimol-cubicmillimeter' :0.000000001,
'millimol-liter-to-mol-cubicmeter' :1,
'millimol-liter-to-mol-liter' :0.001,
'millimol-liter-to-mol-cubiccentimeter' :0.000001,
'millimol-liter-to-mol-cubicmillimeter' :0.000000001,
'millimol-liter-to-kilomol-cubicmeter' :0.001,
'millimol-liter-to-kilomol-liter' :0.000001,
'millimol-liter-to-kilomol-cubiccentimeter' :0.000000001,
'millimol-liter-to-kilomol-cubicmillimeter' :0.000000000001,
'millimol-liter-to-millimol-cubicmeter' :1000,
'millimol-liter-to-millimol-cubiccentimeter' :0.001,
'millimol-liter-to-millimol-cubicmillimeter' :0.000001,
'millimol-cubiccentimeter-to-mol-cubicmeter' :1000,
'millimol-cubiccentimeter-to-mol-liter' :1,
'millimol-cubiccentimeter-to-mol-cubiccentimeter' :0.001,
'millimol-cubiccentimeter-to-mol-cubicmillimeter' :0.000001,
'millimol-cubiccentimeter-to-kilomol-cubicmeter' :1,
'millimol-cubiccentimeter-to-kilomol-liter' :0.001,
'millimol-cubiccentimeter-to-kilomol-cubiccentimeter' :0.000001,
'millimol-cubiccentimeter-to-kilomol-cubicmillimeter' :0.000000001,
'millimol-cubiccentimeter-to-millimol-cubicmeter' :1000000,
'millimol-cubiccentimeter-to-millimol-liter' :1000,
'millimol-cubiccentimeter-to-millimol-cubicmillimeter' :0.001,
'millimol-cubicmillimeter-to-mol-cubicmeter' :1000000,
'millimol-cubicmillimeter-to-mol-liter' :1000,
'millimol-cubicmillimeter-to-mol-cubiccentimeter' :1,
'millimol-cubicmillimeter-to-mol-cubicmillimeter' :0.001,
'millimol-cubicmillimeter-to-kilomol-cubicmeter' :1000,
'millimol-cubicmillimeter-to-kilomol-liter' :1,
'millimol-cubicmillimeter-to-kilomol-cubiccentimeter' :0.001,
'millimol-cubicmillimeter-to-kilomol-cubicmillimeter' :0.000001,
'millimol-cubicmillimeter-to-millimol-cubicmeter' :1000000000,
'millimol-cubicmillimeter-to-millimol-liter' :1000000,
'millimol-cubicmillimeter-to-millimol-cubiccentimeter' :1000
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
