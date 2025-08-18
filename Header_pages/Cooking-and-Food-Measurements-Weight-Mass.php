<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kitchen Weight Converter | oz, lb, g, kg, mg, µg, stone, carat – Cooking & Food</title>
  <meta name="description" content="Convert cooking and food weights instantly: ounce (oz), pound (lb), gram (g), kilogram (kg), milligram (mg), microgram (µg), stone (st), carat (ct), US ton, UK ton, metric tonne, dram, grain, troy ounce/pound, momme, and kan. Accurate kitchen & baking conversions with a results table.">
  <meta name="keywords" content="kitchen weight converter, cooking weight conversion, oz to g, g to oz, lb to kg, kg to lb, baking conversions grams ounces, stone to kg, carat to gram, dram to gram, grain to gram, troy ounce to gram, momme kan conversion">
  <!-- Your site stylesheet -->
  <link href="../css/sub_main_pages.css" rel="stylesheet"/>

  <!-- Page-specific tweaks to match your template & screenshot -->
  <style>
    /* Tool grid to match your screenshot:
       row 1:  [Value]  [↔]  [Result]
       row 2:  [From]   [↔]  [To]  */
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

    /* Sticky right rail; no internal scrolling */
    .ad-section{position:sticky;top:16px;overflow:visible}

    /* Mobile stack */
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
          <h2>Cooking & Food: Weight / Mass Conversions</h2>

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
            <h3>Popular Kitchen Weight Conversions</h3>
            <ul>
              <li><a href="../Cooking_N_Food_Measurements/ounce-oz-to-gram-g.php">Ounce (oz) to Gram (g)</a></li>
              <li><a href="../Cooking_N_Food_Measurements/gram-g-to-ounce-oz.php">Gram (g) to Ounce (oz)</a></li>
              <li><a href="../Cooking_N_Food_Measurements/pound-lb-to-kilogram-kg.php">Pound (lb) to Kilogram (kg)</a></li>
              <li><a href="../Cooking_N_Food_Measurements/kilogram-kg-to-pound-lb.php">Kilogram (kg) to Pound (lb)</a></li>
              <li><a href="../Cooking_N_Food_Measurements/gram-g-to-milligram-mg.php">Gram (g) to Milligram (mg)</a></li>
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
  ['Ounce (oz)','ounce-oz'],
  ['Pound (lb)','pound-lb'],
  ['Gram (g)','gram-g'],
  ['Kilogram (kg)','kilogram-kg'],
  ['Milligram (mg)','milligram-mg'],
  ['Microgram (µg)','microgram-µg'],
  ['Stone (st)','stone-st'],
  ['Carat (ct)','carat-ct'],
  ['US Ton (short ton)','us-ton-short ton'],
  ['UK Ton (long ton)','uk-ton-long ton'],
  ['Tonne (metric ton)','tonne-metric ton'],
  ['Dram (dr)','dram-dr'],
  ['Grain (gr)','grain-gr'],
  ['Troy ounce (oz t)','troy-ounce-oz t'],
  ['Troy pound (lb t)','troy-pound-lb t'],
  ['Momme (Japanese)','momme-japanese'],
  ['Kan (Japanese)','kan-japanese']
];

/* =========================
   Conversion factors (ACCELERATION)
   Keys must match the tokens above.
   Using grams as the hub.
   ========================= */
const conversionFactors = {
'ounce-oz-to-pound-lb': 16,
'ounce-oz-to-gram-g': 0.035274,
'ounce-oz-to-kilogram-kg': 35.274,
'ounce-oz-to-milligram-mg': 0.000035274,
'ounce-oz-to-microgram-µg': 0.000000035274,
'ounce-oz-to-stone-st': 224,
'ounce-oz-to-carat-ct': 0.00705479,
'ounce-oz-to-us-ton-short ton': 32000,
'ounce-oz-to-uk-ton-long ton': 35840,
'ounce-oz-to-tonne-metric ton': 35273.96,
'ounce-oz-to-dram-dr': 0.0625,
'ounce-oz-to-grain-gr': 0.00228571,
'ounce-oz-to-troy-ounce-oz t': 1.09714,
'ounce-oz-to-troy-pound-lb t': 13.1657,
'ounce-oz-to-momme-japanese': 0.132277,
'ounce-oz-to-kan-japanese': 0.00755987,
'pound-lb-to-ounce-oz': 0.0625,
'pound-lb-to-gram-g': 0.00220462,
'pound-lb-to-kilogram-kg': 2.20462,
'pound-lb-to-milligram-mg': 0.00000220462,
'pound-lb-to-microgram-µg': 0.00000000220462,
'pound-lb-to-stone-st': 14,
'pound-lb-to-carat-ct': 0.000440925,
'pound-lb-to-us-ton-short ton': 2000,
'pound-lb-to-uk-ton-long ton': 2240,
'pound-lb-to-tonne-metric ton': 2204.62,
'pound-lb-to-dram-dr': 0.00390625,
'pound-lb-to-grain-gr': 0.000142857,
'pound-lb-to-troy-ounce-oz t': 0.0685714,
'pound-lb-to-troy-pound-lb t': 0.822857,
'pound-lb-to-momme-japanese': 0.00826733,
'pound-lb-to-kan-japanese': 0.000120958,
'gram-g-to-ounce-oz': 28.3495,
'gram-g-to-pound-lb': 453.592,
'gram-g-to-kilogram-kg': 1000,
'gram-g-to-milligram-mg': 0.001,
'gram-g-to-microgram-µg': 0.000001,
'gram-g-to-stone-st': 6350.29,
'gram-g-to-carat-ct': 0.2,
'gram-g-to-us-ton-short ton': 907185,
'gram-g-to-uk-ton-long ton': 1016050,
'gram-g-to-tonne-metric ton': 1000000,
'gram-g-to-dram-dr': 1.77185,
'gram-g-to-grain-gr': 0.0647989,
'gram-g-to-troy-ounce-oz t': 31.1035,
'gram-g-to-troy-pound-lb t': 373.242,
'gram-g-to-momme-japanese': 3.75,
'gram-g-to-kan-japanese': 3750,
'kilogram-kg-to-ounce-oz': 35.273962,
'kilogram-kg-to-pound-lb': 2.204623,
'kilogram-kg-to-gram-g': 1000,
'kilogram-kg-to-milligram-mg': 1000000,
'kilogram-kg-to-microgram-µg': 1000000000,
'kilogram-kg-to-stone-st': 0.157473,
'kilogram-kg-to-carat-ct': 5000,
'kilogram-kg-to-us-ton-short ton': 0.00110231,
'kilogram-kg-to-uk-ton-long ton': 0.00098421,
'kilogram-kg-to-tonne-metric ton': 0.001,
'kilogram-kg-to-dram-dr': 564.383391,
'kilogram-kg-to-grain-gr': 15432.358353,
'kilogram-kg-to-troy-ounce-oz t': 32.150747,
'kilogram-kg-to-troy-pound-lb t': 2.679229,
'kilogram-kg-to-momme-japanese': 266.666667,
'kilogram-kg-to-kan-japanese': 0.266667,
'milligram-mg-to-ounce-oz': 0.000035274,
'milligram-mg-to-pound-lb': 0.00000220462,
'milligram-mg-to-gram-g': 0.001,
'milligram-mg-to-kilogram-kg': 0.000001,
'milligram-mg-to-microgram-µg': 1000,
'milligram-mg-to-stone-st': 0.000000157473,
'milligram-mg-to-carat-ct': 0.005,
'milligram-mg-to-us-ton-short ton': 0.00000000110231,
'milligram-mg-to-uk-ton-long ton': 0.000000000984207,
'milligram-mg-to-tonne-metric ton': 0.000000001,
'milligram-mg-to-dram-dr': 0.000564383,
'milligram-mg-to-grain-gr': 0.015432358,
'milligram-mg-to-troy-ounce-oz t': 0.0000321507,
'milligram-mg-to-troy-pound-lb t': 0.00000267923,
'milligram-mg-to-momme-japanese': 0.000266667,
'milligram-mg-to-kan-japanese': 0.000000266667,
'microgram-µg-to-ounce-oz': 0.000000035274,
'microgram-µg-to-pound-lb': 0.00000000220462,
'microgram-µg-to-gram-g': 0.000001,
'microgram-µg-to-kilogram-kg': 0.000000001,
'microgram-µg-to-milligram-mg': 0.001,
'microgram-µg-to-stone-st': 0.000000000157473,
'microgram-µg-to-carat-ct': 0.000005,
'microgram-µg-to-us-ton-short ton': 0.00000000000110231,
'microgram-µg-to-uk-ton-long ton': 0.000000000000984207,
'microgram-µg-to-tonne-metric ton': 0.000000000001,
'microgram-µg-to-dram-dr': 0.000000564383,
'microgram-µg-to-grain-gr': 0.0000154324,
'microgram-µg-to-troy-ounce-oz t': 0.0000000321507,
'microgram-µg-to-troy-pound-lb t': 0.00000000267923,
'microgram-µg-to-momme-japanese': 0.000000266667,
'microgram-µg-to-kan-japanese': 0.000000000266667,
'stone-st-to-ounce-oz': 224,
'stone-st-to-pound-lb': 14,
'stone-st-to-gram-g': 6350.29318,
'stone-st-to-kilogram-kg': 6.350293,
'stone-st-to-milligram-mg': 6350293.18,
'stone-st-to-microgram-µg': 6350293180,
'stone-st-to-carat-ct': 31751.4659,
'stone-st-to-us-ton-short ton': 0.007,
'stone-st-to-uk-ton-long ton': 0.00625,
'stone-st-to-tonne-metric ton': 0.00635029,
'stone-st-to-dram-dr': 3584,
'stone-st-to-grain-gr': 98000,
'stone-st-to-troy-ounce-oz t': 204.166667,
'stone-st-to-troy-pound-lb t': 17.013889,
'stone-st-to-momme-japanese': 1693.41152,
'stone-st-to-kan-japanese': 1.69341152,
'carat-ct-to-ounce-oz': 0.00705479,
'carat-ct-to-pound-lb': 0.000440925,
'carat-ct-to-gram-g': 0.2,
'carat-ct-to-kilogram-kg': 0.0002,
'carat-ct-to-milligram-mg': 200,
'carat-ct-to-microgram-µg': 200000,
'carat-ct-to-stone-st': 0.0000314946,
'carat-ct-to-us-ton-short ton': 0.000000220462,
'carat-ct-to-uk-ton-long ton': 0.000000196841,
'carat-ct-to-tonne-metric ton': 0.0000002,
'carat-ct-to-dram-dr': 0.112877,
'carat-ct-to-grain-gr': 3.086472,
'carat-ct-to-troy-ounce-oz t': 0.00643015,
'carat-ct-to-troy-pound-lb t': 0.000535846,
'carat-ct-to-momme-japanese': 0.0533333,
'carat-ct-to-kan-japanese': 0.0000533333,
'us-ton-short ton-to-ounce-oz': 32000,
'us-ton-short ton-to-pound-lb': 2000,
'us-ton-short ton-to-gram-g': 907184.74,
'us-ton-short ton-to-kilogram-kg': 907.18474,
'us-ton-short ton-to-milligram-mg': 907184740,
'us-ton-short ton-to-microgram-µg': 907184740000,
'us-ton-short ton-to-stone-st': 142.857143,
'us-ton-short ton-to-carat-ct': 4535923.7,
'us-ton-short ton-to-uk-ton-long ton': 0.892857,
'us-ton-short ton-to-tonne-metric ton': 0.907185,
'us-ton-short ton-to-dram-dr': 573440,
'us-ton-short ton-to-grain-gr': 14000000,
'us-ton-short ton-to-troy-ounce-oz t': 29166.666667,
'us-ton-short ton-to-troy-pound-lb t': 2430.555556,
'us-ton-short ton-to-momme-japanese': 241915.930667,
'us-ton-short ton-to-kan-japanese': 241.915931,
'uk-ton-long ton-to-ounce-oz': 35840,
'uk-ton-long ton-to-pound-lb': 2240,
'uk-ton-long ton-to-gram-g': 1016046.9088,
'uk-ton-long ton-to-kilogram-kg': 1016.046909,
'uk-ton-long ton-to-milligram-mg': 1016046908.8,
'uk-ton-long ton-to-microgram-µg': 1016046908800,
'uk-ton-long ton-to-stone-st': 160,
'uk-ton-long ton-to-carat-ct': 5080234.544,
'uk-ton-long ton-to-us-ton-short ton': 1.12,
'uk-ton-long ton-to-tonne-metric ton': 1.016047,
'uk-ton-long ton-to-dram-dr': 573440,
'uk-ton-long ton-to-grain-gr': 15680000,
'uk-ton-long ton-to-troy-ounce-oz t': 32666.666667,
'uk-ton-long ton-to-troy-pound-lb t': 2722.222222,
'uk-ton-long ton-to-momme-japanese': 270945.842133,
'uk-ton-long ton-to-kan-japanese': 270.945842,
'tonne-metric ton-to-ounce-oz': 35273.96195,
'tonne-metric ton-to-pound-lb': 2204.622622,
'tonne-metric ton-to-gram-g': 1000000,
'tonne-metric ton-to-kilogram-kg': 1000,
'tonne-metric ton-to-milligram-mg': 1000000000,
'tonne-metric ton-to-microgram-µg': 1000000000000,
'tonne-metric ton-to-stone-st': 157.473044,
'tonne-metric ton-to-carat-ct': 5000000,
'tonne-metric ton-to-us-ton-short ton': 1.102311,
'tonne-metric ton-to-uk-ton-long ton': 0.984207,
'tonne-metric ton-to-dram-dr': 564383.391193,
'tonne-metric ton-to-grain-gr': 15432358.352941,
'tonne-metric ton-to-troy-ounce-oz t': 32150.746569,
'tonne-metric ton-to-troy-pound-lb t': 2679.228881,
'tonne-metric ton-to-momme-japanese': 266666.666667,
'tonne-metric ton-to-kan-japanese': 266.666667,
'dram-dr-to-ounce-oz': 0.0625,
'dram-dr-to-pound-lb': 0.00390625,
'dram-dr-to-gram-g': 1.771845,
'dram-dr-to-kilogram-kg': 0.00177184,
'dram-dr-to-milligram-mg': 1771.845195,
'dram-dr-to-microgram-µg': 1771845.195,
'dram-dr-to-stone-st': 0.000279018,
'dram-dr-to-carat-ct': 8.85922598,
'dram-dr-to-us-ton-short ton': 0.00000195312,
'dram-dr-to-uk-ton-long ton': 0.00000174386,
'dram-dr-to-tonne-metric ton': 0.00000177185,
'dram-dr-to-grain-gr': 27.34375,
'dram-dr-to-troy-ounce-oz t': 0.05696615,
'dram-dr-to-troy-pound-lb t': 0.00474718,
'dram-dr-to-momme-japanese': 0.472492,
'dram-dr-to-kan-japanese': 0.000472492,
'grain-gr-to-ounce-oz': 0.00228571,
'grain-gr-to-pound-lb': 0.000142857,
'grain-gr-to-gram-g': 0.06479891,
'grain-gr-to-kilogram-kg': 0.000064799,
'grain-gr-to-milligram-mg': 64.79891,
'grain-gr-to-microgram-µg': 64798.91,
'grain-gr-to-stone-st': 0.0000102041,
'grain-gr-to-carat-ct': 0.323994,
'grain-gr-to-us-ton-short ton': 0.0000000714286,
'grain-gr-to-uk-ton-long ton': 0.0000000637755,
'grain-gr-to-tonne-metric ton': 0.0000000647989,
'grain-gr-to-dram-dr': 0.0365714,
'grain-gr-to-troy-ounce-oz t': 0.00208333,
'grain-gr-to-troy-pound-lb t': 0.000173611,
'grain-gr-to-momme-japanese': 0.0172797,
'grain-gr-to-kan-japanese': 0.0000172797,
'troy-ounce-oz t-to-ounce-oz': 1.097143,
'troy-ounce-oz t-to-pound-lb': 0.0685714,
'troy-ounce-oz t-to-gram-g': 31.1034768,
'troy-ounce-oz t-to-kilogram-kg': 0.03110348,
'troy-ounce-oz t-to-milligram-mg': 31103.4768,
'troy-ounce-oz t-to-microgram-µg': 31103476.8,
'troy-ounce-oz t-to-stone-st': 0.00489796,
'troy-ounce-oz t-to-carat-ct': 155.517384,
'troy-ounce-oz t-to-us-ton-short ton': 0.0000342857,
'troy-ounce-oz t-to-uk-ton-long ton': 0.0000306122,
'troy-ounce-oz t-to-tonne-metric ton': 0.0000311035,
'troy-ounce-oz t-to-dram-dr': 17.5542857,
'troy-ounce-oz t-to-grain-gr': 480,
'troy-ounce-oz t-to-troy-pound-lb t': 0.0833333,
'troy-ounce-oz t-to-momme-japanese': 8.29422,
'troy-ounce-oz t-to-kan-japanese': 0.00829422,
'troy-pound-lb t-to-ounce-oz': 13.165714,
'troy-pound-lb t-to-pound-lb': 0.822857,
'troy-pound-lb t-to-gram-g': 373.241722,
'troy-pound-lb t-to-kilogram-kg': 0.37324172,
'troy-pound-lb t-to-milligram-mg': 373241.722,
'troy-pound-lb t-to-microgram-µg': 373241722,
'troy-pound-lb t-to-stone-st': 0.0587755,
'troy-pound-lb t-to-carat-ct': 1866.20861,
'troy-pound-lb t-to-us-ton-short ton': 0.000411428,
'troy-pound-lb t-to-uk-ton-long ton': 0.000367347,
'troy-pound-lb t-to-tonne-metric ton': 0.000373242,
'troy-pound-lb t-to-dram-dr': 210.651429,
'troy-pound-lb t-to-grain-gr': 5760,
'troy-pound-lb t-to-troy-ounce-oz t': 12,
'troy-pound-lb t-to-momme-japanese': 99.53067,
'troy-pound-lb t-to-kan-japanese': 0.09953067,
'momme-japanese-to-ounce-oz': 0.132277,
'momme-japanese-to-pound-lb': 0.00826733,
'momme-japanese-to-gram-g': 3.75,
'momme-japanese-to-kilogram-kg': 0.00375,
'momme-japanese-to-milligram-mg': 3750,
'momme-japanese-to-microgram-µg': 3750000,
'momme-japanese-to-stone-st': 0.000590524,
'momme-japanese-to-carat-ct': 18.75,
'momme-japanese-to-us-ton-short ton': 0.00000413333,
'momme-japanese-to-uk-ton-long ton': 0.00000369037,
'momme-japanese-to-tonne-metric ton': 0.00000375,
'momme-japanese-to-dram-dr': 2.11644,
'momme-japanese-to-grain-gr': 57.871343,
'momme-japanese-to-troy-ounce-oz t': 0.120566,
'momme-japanese-to-troy-pound-lb t': 0.0100472,
'momme-japanese-to-kan-japanese': 0.001,
'kan-japanese-to-ounce-oz': 132.277357,
'kan-japanese-to-pound-lb': 8.26733481,
'kan-japanese-to-gram-g': 3750,
'kan-japanese-to-kilogram-kg': 3.75,
'kan-japanese-to-milligram-mg': 3750000,
'kan-japanese-to-microgram-µg': 3750000000,
'kan-japanese-to-stone-st': 0.590524,
'kan-japanese-to-carat-ct': 18750,
'kan-japanese-to-us-ton-short ton': 0.00413333,
'kan-japanese-to-uk-ton-long ton': 0.00369037,
'kan-japanese-to-tonne-metric ton': 0.00375,
'kan-japanese-to-dram-dr': 2116.43772,
'kan-japanese-to-grain-gr': 57871.3431,
'kan-japanese-to-troy-ounce-oz t': 120.5653,
'kan-japanese-to-troy-pound-lb t': 10.047108,
'kan-japanese-to-momme-japanese': 1000
};

/* ===== Build helpers via the hub (m/s²) ===== */
const HUB = 'gram-g';
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
  from.selectedIndex = 0;
  to.selectedIndex = 0;
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
