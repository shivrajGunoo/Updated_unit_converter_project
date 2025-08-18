<?php
  $pageTitle = "Engineering & Technical Conversions: Area Conversions";
  $metaDescription = "Convert between square meters, square feet, acres, hectares, square miles, and more with our fast Engineering & Technical Area converter.";
  $metaKeywords = "area converter,square meter to square foot,acres to square meters,hectares,cm² to m²,km²,in²,ft²,yd²,mi²,barn,circular inch,square mil";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $metaDescription; ?>" />
<meta name="keywords" content="<?php echo $metaKeywords; ?>" />
<link rel="stylesheet" href="../css/sub_main_pages.css" />
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
      
      <section class="content-section">

        <div class="converter-section">
          <h2>Engineering Area Conversions</h2>

          <div class="converter-tool">
            
            <div class="input-group cell-value">
              <label for="value">Value</label>
              <input id="value" type="number" inputmode="decimal" step="any" placeholder="100" value="100" />
            </div>

            <button id="swap" class="swap-btn" title="Swap units">↔</button>

            <div class="input-group cell-result">
              <label for="result">Result</label>
              <input id="result" type="text" readonly placeholder="—" />
            </div>

            
            <div class="input-group cell-to">
              <label for="toUnit">To Unit</label>
              <select id="toUnit"></select>
            </div>

            <div class="input-group cell-from">
              <label for="fromUnit">From Unit</label>
              <select id="fromUnit"></select>
            </div>
          </div>

          
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
            <h3>Popular Area Conversions</h3>
            <ul>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-meter-m²-to-square-foot-ft².php">square meter m² to square foot ft²</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-foot-ft²-to-square-meter-m².php">square foot ft² to square meter m²</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/acre-ac-to-square-meter-m².php">acre ac to square meter m²</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-meter-m²-to-acre-ac.php">square meter m² to acre ac</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/hectare-ha-to-acre-ac.php">hectare ha to acre ac</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/acre-ac-to-hectare-ha.php">acre ac to hectare ha</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-mile-mi²-to-acre-ac.php">square mile mi² to acre ac</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/acre-ac-to-square-mile-mi².php">acre ac to square mile mi²</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-meter-m²-to-square-kilometer-km².php">square meter m² to square kilometer km²</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-kilometer-km²-to-square-meter-m².php">square kilometer km² to square meter m²</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-centimeter-cm²-to-square-inch-in².php">square centimeter cm² to square inch in²</a></li>
  <li><a href="../Engineering_and_Technical Conversions_Area/square-inch-in²-to-square-centimeter-cm².php">square inch in² to square centimeter cm²</a></li>


            </ul>
          </div>
        </div>

      </section>

      
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
  ["Square nanometer (nm²)", "square-nanometer-nm²"],
  ["Square micrometer (µm²)", "square-micrometer-µm²"],
  ["Square millimeter (mm²)", "square-millimeter-mm²"],
  ["Square centimeter (cm²)", "square-centimeter-cm²"],
  ["Square decimeter (dm²)", "square-decimeter-dm²"],
  ["Square meter (m²)", "square-meter-m²"],
  ["Square dekameter (dam²)", "square-dekameter-dam²"],
  ["Square hectometer (hm²)", "square-hectometer-hm²"],
  ["Square kilometer (km²)", "square-kilometer-km²"],
  ["Are (a)", "are-a"],
  ["Hectare (ha)", "hectare-ha"],
  ["Barn (b)", "barn-b"],
  ["Acre (ac)", "acre-ac"],
  ["Square inch (in²)", "square-inch-in²"],
  ["Square foot (ft²)", "square-foot-ft²"],
  ["Square yard (yd²)", "square-yard-yd²"],
  ["Square mile (mi²)", "square-mile-mi²"],
  ["Square rod", "square-rod-"],
  ["Square chain", "square-chain-"],
  ["Square perch", "square-perch-"],
  ["Square pole", "square-pole-"],
  ["Square league", "square-league-"],
  ["Circular inch", "circular-inch-"],
  ["Square mil", "square-mil-"],
  ["Circular mil", "circular-mil-"],
  ["Townships", "townships-"],
  ["Sections", "sections-"],
  ["Sabin", "sabin-"],
  ["Homestead", "homestead-"],
  ["Electron cross section", "electron-cross-section-"]
];

const TOKEN_MAP = new Map(UNITS.map(([label, slug]) => [slug, slug]));

const conversionFactors = {
  'square-nanometer-nm²-to-square-meter-m²': 1e-18,
  'square-meter-m²-to-square-nanometer-nm²': 9.999999999999999e+17,
  'square-micrometer-µm²-to-square-meter-m²': 1e-12,
  'square-meter-m²-to-square-micrometer-µm²': 1000000000000.0,
  'square-millimeter-mm²-to-square-meter-m²': 1e-06,
  'square-meter-m²-to-square-millimeter-mm²': 1000000.0,
  'square-centimeter-cm²-to-square-meter-m²': 0.0001,
  'square-meter-m²-to-square-centimeter-cm²': 10000.0,
  'square-decimeter-dm²-to-square-meter-m²': 0.01,
  'square-meter-m²-to-square-decimeter-dm²': 100.0,
  'square-meter-m²-to-square-meter-m²': 1.0,
  'square-dekameter-dam²-to-square-meter-m²': 100.0,
  'square-meter-m²-to-square-dekameter-dam²': 0.01,
  'square-hectometer-hm²-to-square-meter-m²': 10000.0,
  'square-meter-m²-to-square-hectometer-hm²': 0.0001,
  'square-kilometer-km²-to-square-meter-m²': 1000000.0,
  'square-meter-m²-to-square-kilometer-km²': 1e-06,
  'are-a-to-square-meter-m²': 100,
  'square-meter-m²-to-are-a': 0.01,
  'hectare-ha-to-square-meter-m²': 10000,
  'square-meter-m²-to-hectare-ha': 0.0001,
  'barn-b-to-square-meter-m²': 1e-28,
  'square-meter-m²-to-barn-b': 1e+28,
  'square-inch-in²-to-square-meter-m²': 0.00064516,
  'square-meter-m²-to-square-inch-in²': 1550.0031000062002,
  'square-foot-ft²-to-square-meter-m²': 0.09290304,
  'square-meter-m²-to-square-foot-ft²': 10.763910416709722,
  'square-yard-yd²-to-square-meter-m²': 0.83612736,
  'square-meter-m²-to-square-yard-yd²': 1.1959900463010802,
  'square-mile-mi²-to-square-meter-m²': 2589988.110336,
  'square-meter-m²-to-square-mile-mi²': 3.861021585424458e-07,
  'acre-ac-to-square-meter-m²': 4046.8564224,
  'square-meter-m²-to-acre-ac': 0.0002471053814671653,
  'square-rod--to-square-meter-m²': 25.292852640000003,
  'square-meter-m²-to-square-rod-': 0.03953686103474645,
  'square-chain--to-square-meter-m²': 404.68564224000005,
  'square-meter-m²-to-square-chain-': 0.002471053814671653,
  'square-perch--to-square-meter-m²': 25.292852640000003,
  'square-meter-m²-to-square-perch-': 0.03953686103474645,
  'square-pole--to-square-meter-m²': 25.292852640000003,
  'square-meter-m²-to-square-pole-': 0.03953686103474645,
  'square-league--to-square-meter-m²': 23309892.993024003,
  'square-meter-m²-to-square-league-': 4.2900239838049535e-08,
  'circular-inch--to-square-meter-m²': 0.0005067074790974977,
  'square-meter-m²-to-circular-inch-': 1973.5252413899852,
  'square-mil--to-square-meter-m²': 6.451600000000001e-10,
  'square-meter-m²-to-square-mil-': 1550003100.0061998,
  'circular-mil--to-square-meter-m²': 5.067074790974978e-10,
  'square-meter-m²-to-circular-mil-': 1973525241.3899846,
  'townships--to-square-meter-m²': 93239571.972096,
  'square-meter-m²-to-townships-': 1.0725059959512385e-08,
  'sections--to-square-meter-m²': 2589988.110336,
  'square-meter-m²-to-sections-': 3.861021585424458e-07,
  'sabin--to-square-meter-m²': 0.09290304,
  'square-meter-m²-to-sabin-': 10.763910416709722,
  'homestead--to-square-meter-m²': 647497.027584,
  'square-meter-m²-to-homestead-': 1.5444086341697833e-06,
  'electron-cross-section--to-square-meter-m²': 6.6524587321e-29,
  'square-meter-m²-to-electron-cross-section-': 1.503203612785625e+28,
};

const HUB = 'square-meter-m²';
const $ = s => document.querySelector(s);
const tbody = $('#tbody');

function populateOptions(){
  const f = $('#fromUnit'), t = $('#toUnit');
  UNITS.forEach(([label, slug]) => {
    f.add(new Option(label, slug));
    t.add(new Option(label, slug));
  });
  f.selectedIndex = 0;
  t.selectedIndex = 0;
}

function formatNumber(x){
  if (!Number.isFinite(x)) return '—';
  const ax = Math.abs(x);
  if (x !== 0 && (ax >= 1e9 || ax < 1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined, { maximumSignificantDigits: 12 }).format(x);
}

function getToHub(token){
  const a = conversionFactors[`${token}-to-${HUB}`];
  if (a != null) return a;
  const inv = conversionFactors[`${HUB}-to-${token}`];
  if (inv != null) return 1/inv;
  return null;
}
function getFromHub(token){
  const b = conversionFactors[`${HUB}-to-${token}`];
  if (b != null) return b;
  const inv = conversionFactors[`${token}-to-${HUB}`];
  if (inv != null) return 1/inv;
  return null;
}

function factor(fromSlug, toSlug){
  if (fromSlug === toSlug) return 1;
  const A = fromSlug, B = toSlug;
  const direct = conversionFactors[`${A}-to-${B}`];
  if (direct != null) return direct;
  const inv = conversionFactors[`${B}-to-${A}`];
  if (inv != null && inv !== 0) return 1 / inv;
  const a = getToHub(A);
  const b = getFromHub(B);
  if (a != null && b != null) return a * b;
  return null;
}

function render(){
  const val = parseFloat($('#value').value);
  const from = $('#fromUnit').value;
  const to = $('#toUnit').value;
  const out = $('#result');
  out.value = '';
  if (Number.isFinite(val) && from && to){
    const f = factor(from, to);
    out.value = (f == null ? '—' : formatNumber(val * f));
  } else {
    out.value = '—';
  }

  const q = $('#filter').value.trim().toLowerCase();
  const rows = [];
  if (Number.isFinite(val) && from){
    for (const [label, slug] of UNITS){
      if (slug === from) continue;
      if (q && !label.toLowerCase().includes(q)) continue;
      const f = factor(from, slug);
      rows.push(`<tr><td>${label}</td><td>${f == null ? '—' : formatNumber(val * f)}</td></tr>`);
    }
  }
  tbody.innerHTML = rows.length ? rows.join('') : '<tr><td colspan="2">Waiting for input…</td></tr>';
}

document.addEventListener('DOMContentLoaded', () => {
  populateOptions();
  render();
  $('#value').addEventListener('input', render);
  $('#filter').addEventListener('input', render);
  $('#fromUnit').addEventListener('change', render);
  $('#toUnit').addEventListener('change', render);
  $('#swap').addEventListener('click', () => {
    const f = $('#fromUnit'), t = $('#toUnit');
    const a = f.value; f.value = t.value; t.value = a;
    render();
  });
});
</script>
</body>
</html>
