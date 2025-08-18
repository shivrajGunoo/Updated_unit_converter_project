<?php
  $title = "Engineering & Technical: Force Converter | Convert Newton (N), Dyne, Kilogram‑force (kgf), Pound‑force (lbf), kN, MN, kip, Ton‑force";
  $meta_desc = "Free online force converter for engineers and students. Convert between newton (N), dyne, kilogram‑force (kgf), pound‑force (lbf), kilonewton (kN), meganewton (MN), short/long/metric ton‑force, kip, ounce‑force, poundal and more.";
  $meta_keys = "force converter,newton to pound,kgf to N,dyne to newton,kip to lbf,ton-force converter,engineering unit conversion,mechanics units,kN MN kip stf ozf pdl";
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
<?php include '../header.php'; ?>
  <div class="container">
    <div class="main-wrapper">
      
      <section class="content-section">

        <div class="converter-section">
          <h2>Engineering Force Conversions</h2>

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
            <h3>Popular Force Conversions</h3>
            <ul>
              <li><a href="../Engineering_and_Technical Conversions_Force/newton-n-to-dyne.php">newton to dyne</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/newton-n-to-kilogram-force-kgf.php">newton to kilogram-force</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/newton-n-to-pound-force-lbf.php">newton to pound-force</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/kilogram-force-kgf-to-pound-force-lbf.php">kilogram-force to pound-force</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/pound-force-lbf-to-newton-n.php">pound-force to newton</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/pound-force-lbf-to-kilogram-force-kgf.php">pound-force to kilogram-force</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/kilogram-force-kgf-to-newton-n.php">kilogram-force to newton</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/kip-kip--1000-lbf-to-newton-n.php">kip to newton</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/newton-n-to-kilonewton-kn.php">newton to kilonewton</a></li>
              <li><a href="../Engineering_and_Technical Conversions_Force/kilonewton-kn-to-newton-n.php">kilonewton to newton</a></li>


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
  ['Dyne', 'dyne'],
  ['Dyne (centimeter)', 'dyne-centimeter-dyn-cm'],
  ['Dyne (millimeter)', 'dyne-millimeter-dyn-mm'],
  ['Gram-force', 'gram-force-gf'],
  ['Kilogram-force', 'kilogram-force-kgf'],
  ['Kilogramal', 'kilogramal-kgal'],
  ['Kilonewton', 'kilonewton-kn'],
  ['Kip-force', 'kip-force-kipf'],
  ['Kip (1000 lbf)', 'kip-kip--1000-lbf'],
  ['Meganewton', 'meganewton-mn'],
  ['Metric ton-force (tonne-force)', 'metric-ton-force-tonne-force-tf'],
  ['Milligram-force', 'milligram-force-mgf'],
  ['Newton (millimeter)', 'newton-millimeter-n-mm'],
  ['Newton', 'newton-n'],
  ['Ounce-force', 'ounce-force'],
  ['Ounce-force (ozf)', 'ounce-force-ozf'],
  ['Planck force', 'planck-force'],
  ['Pound-force (foot)', 'pound-force-foot-lbf-ft'],
  ['Pound-force (inch)', 'pound-force-inch-lbf-in'],
  ['Pound-force (lbf)', 'pound-force-lbf'],
  ['Poundal', 'poundal'],
  ['Poundal (pdl)', 'poundal-pdl'],
  ['Sthène', 'sthène-sn'],
  ['Stone-force', 'stone-force-stf'],
  ['Ton-force', 'ton-force'],
  ['Ton-force (long)', 'ton-force-long-ton-force'],
  ['Ton-force (short)', 'ton-force-short-ton-force'],
];


const conversionFactors = {
'newton-n-to-dyne':100000,
'newton-n-to-kilogram-force-kgf':0.1019716213,
'newton-n-to-pound-force-lbf':0.2248089431,
'newton-n-to-kilonewton-kn':0.001,
'newton-n-to-meganewton-mn':1e-06,
'newton-n-to-ton-force':0.00011240447,
'newton-n-to-ounce-force':3.5969430947,
'newton-n-to-poundal':7.2330138504,
'newton-n-to-gram-force-gf':101.9716212978,
'newton-n-to-milligram-force-mgf':101971.6212978,
'newton-n-to-ounce-force-ozf':3.5969430947,
'newton-n-to-kip-kip--1000-lbf':0.0002248089431,
'newton-n-to-ton-force-short-ton-force':0.00011240447,
'newton-n-to-metric-ton-force-tonne-force-tf':0.0001019716213,
'newton-n-to-poundal-pdl':7.2330138504,
'newton-n-to-sthène-sn':0.001,
'newton-n-to-kip-force-kipf':0.0002248089431,
'newton-n-to-ton-force-long-ton-force':0.00011240447,
'newton-n-to-kilogramal-kgal':0.1019716213,
'newton-n-to-planck-force':8.2644628099e-45,
'newton-n-to-stone-force-stf':0.0157473044,
'newton-n-to-dyne-centimeter-dyn-cm':10000000,
'newton-n-to-newton-millimeter-n-mm':1000,
'newton-n-to-pound-force-inch-lbf-in':8.8507457674,
'newton-n-to-pound-force-foot-lbf-ft':0.7375621493,
'newton-n-to-dyne-millimeter-dyn-mm':100000000,
'dyne-to-newton-n':1.019716213e-06,
'dyne-to-kilogram-force-kgf':2.248089431e-06,
'dyne-to-pound-force-lbf':1e-08,
'dyne-to-kilonewton-kn':1e-11,
'dyne-to-meganewton-mn':1.1240447155e-07,
'dyne-to-ton-force':3.5969430896e-05,
'dyne-to-ounce-force':7.2330138512e-05,
'dyne-to-poundal':0.0001019716213,
'dyne-to-gram-force-gf':0.1019716213,
'dyne-to-milligram-force-mgf':3.5969430896e-05,
'dyne-to-ounce-force-ozf':7.2330138512e-05,
'dyne-to-kip-kip--1000-lbf':1.1240447155e-07,
'dyne-to-ton-force-short-ton-force':3.5969430896e-05,
'dyne-to-metric-ton-force-tonne-force-tf':7.2330138512e-05,
'dyne-to-poundal-pdl':0.0001019716213,
'dyne-to-sthène-sn':2.248089431e-9,
'dyne-to-kip-force-kipf':1.1240447155e-07,
'dyne-to-ton-force-long-ton-force':3.5969430896e-05,
'dyne-to-kilogramal-kgal':8.2644628099e-50,
'dyne-to-planck-force':1.8083839e-10,
'dyne-to-stone-force-stf':1,
'dyne-to-dyne-centimeter-dyn-cm':1e-2,
'dyne-to-newton-millimeter-n-mm':1.650428427e-8,
'dyne-to-pound-force-inch-lbf-in':5.624820423e-9,
'dyne-to-pound-force-foot-lbf-ft':1000,
'dyne-to-dyne-millimeter-dyn-mm':9.80665,
'kilogram-force-kgf-to-newton-n':980665,
'kilogram-force-kgf-to-dyne':0.00980665,
'kilogram-force-kgf-to-pound-force-lbf':9.80665e-06,
'kilogram-force-kgf-to-kilonewton-kn':9.80665e-6,
'kilogram-force-kgf-to-meganewton-mn':0.0011023113109,
'kilogram-force-kgf-to-ton-force':35.2739619496,
'kilogram-force-kgf-to-ounce-force':70.932,
'kilogram-force-kgf-to-poundal':1000.0,
'kilogram-force-kgf-to-gram-force-gf':1e6,
'kilogram-force-kgf-to-milligram-force-mgf':35.2739619496,
'kilogram-force-kgf-to-ounce-force-ozf':70.932,
'kilogram-force-kgf-to-kip-kip--1000-lbf':0.0011023113109,
'kilogram-force-kgf-to-ton-force-short-ton-force':0.0011023113,
'kilogram-force-kgf-to-metric-ton-force-tonne-force-tf':70.932,
'kilogram-force-kgf-to-poundal-pdl':1000.0,
'kilogram-force-kgf-to-sthène-sn':0.0022046226218,
'kilogram-force-kgf-to-kip-force-kipf':0.0011023113109,
'kilogram-force-kgf-to-ton-force-long-ton-force':0.0009842065,
'kilogram-force-kgf-to-kilogramal-kgal':8.2644628099e-45,
'kilogram-force-kgf-to-planck-force':0.016058,
'kilogram-force-kgf-to-stone-force-stf':9806650,
'kilogram-force-kgf-to-dyne-centimeter-dyn-cm':9806.65,
'kilogram-force-kgf-to-newton-millimeter-n-mm':1.6189324e-4,
'kilogram-force-kgf-to-pound-force-inch-lbf-in':1.3491104e-5,
'kilogram-force-kgf-to-pound-force-foot-lbf-ft':4.4482216153,
'kilogram-force-kgf-to-dyne-millimeter-dyn-mm':4.448221615,
'pound-force-lbf-to-newton-n':444822.1625,
'pound-force-lbf-to-dyne':0.45359237,
'pound-force-lbf-to-kilogram-force-kgf':0.0044482216,
'pound-force-lbf-to-kilonewton-kn':4.4482216e-6,
'pound-force-lbf-to-meganewton-mn':0.0005,
'pound-force-lbf-to-ton-force':16,
'pound-force-lbf-to-ounce-force':32.174049,
'pound-force-lbf-to-poundal':453.59237,
'pound-force-lbf-to-gram-force-gf':453592.37,
'pound-force-lbf-to-milligram-force-mgf':16,
'pound-force-lbf-to-ounce-force-ozf':32.174049,
'pound-force-lbf-to-kip-kip--1000-lbf':0.0005,
'pound-force-lbf-to-ton-force-short-ton-force':16,
'pound-force-lbf-to-metric-ton-force-tonne-force-tf':32.174049,
'pound-force-lbf-to-poundal-pdl':453.59237,
'pound-force-lbf-to-sthène-sn':0.001,
'pound-force-lbf-to-kip-force-kipf':0.45359237,
'pound-force-lbf-to-ton-force-long-ton-force':16,
'pound-force-lbf-to-kilogramal-kgal':0.071429,
'pound-force-lbf-to-planck-force':4.4482216e7,
'pound-force-lbf-to-stone-force-stf':4448.2216,
'pound-force-lbf-to-dyne-centimeter-dyn-cm':12,
'pound-force-lbf-to-newton-millimeter-n-mm':1,
'pound-force-lbf-to-pound-force-inch-lbf-in':4.4482216e10,
'pound-force-lbf-to-pound-force-foot-lbf-ft':1000,
'pound-force-lbf-to-dyne-millimeter-dyn-mm':1e8,
'kilonewton-kn-to-newton-n':101.9716213,
'kilonewton-kn-to-dyne':0.001,
'kilonewton-kn-to-kilogram-force-kgf':112.4044719,
'kilonewton-kn-to-pound-force-lbf':359.69430896,
'kilonewton-kn-to-meganewton-mn':723.30138512,
'kilonewton-kn-to-ton-force':101971.6213,
'kilonewton-kn-to-ounce-force':1.019716213e8,
'kilonewton-kn-to-poundal':359.69430896,
'kilonewton-kn-to-gram-force-gf':0.2248089431,
'kilonewton-kn-to-milligram-force-mgf':112.4044719,
'kilonewton-kn-to-ounce-force-ozf':1.019716213e8,
'kilonewton-kn-to-kip-kip--1000-lbf':723.30138512,
'kilonewton-kn-to-ton-force-short-ton-force':101971.6213,
'kilonewton-kn-to-metric-ton-force-tonne-force-tf':224.8089431,
'kilonewton-kn-to-poundal-pdl':359.69430896,
'kilonewton-kn-to-sthène-sn':101971.6213,
'kilonewton-kn-to-kip-force-kipf':8.262e-3,
'kilonewton-kn-to-ton-force-long-ton-force':101971.6213,
'kilonewton-kn-to-kilogramal-kgal':1e10,
'kilonewton-kn-to-planck-force':1e6,
'kilonewton-kn-to-stone-force-stf':737.562,
'kilonewton-kn-to-dyne-centimeter-dyn-cm':83.376,
'kilonewton-kn-to-newton-millimeter-n-mm':1e13,
'kilonewton-kn-to-pound-force-inch-lbf-in':1000000,
'kilonewton-kn-to-pound-force-foot-lbf-ft':1e11,
'kilonewton-kn-to-dyne-millimeter-dyn-mm':101971.6213,
'meganewton-mn-to-newton-n':1000,
'meganewton-mn-to-dyne':112.4044715,
'meganewton-mn-to-kilogram-force-kgf':35969430.896,
'meganewton-mn-to-pound-force-lbf':723301.38512,
'meganewton-mn-to-kilonewton-kn':1e13,
'meganewton-mn-to-ton-force':1e9,
'meganewton-mn-to-ounce-force':737562,
'meganewton-mn-to-poundal':88507.5,
'meganewton-mn-to-gram-force-gf':1e16,
'meganewton-mn-to-milligram-force-mgf':8896.443230521,
'meganewton-mn-to-ounce-force-ozf':737562,
'meganewton-mn-to-kip-kip--1000-lbf':907.18474,
'meganewton-mn-to-ton-force-short-ton-force':1e9,
'meganewton-mn-to-metric-ton-force-tonne-force-tf':8.8964432305,
'meganewton-mn-to-poundal-pdl':88507.5,
'meganewton-mn-to-sthène-sn':32000,
'meganewton-mn-to-kip-force-kipf':64348.098,
'meganewton-mn-to-ton-force-long-ton-force':1e9,
'meganewton-mn-to-kilogramal-kgal':9.0718474e8,
'meganewton-mn-to-planck-force':224,
'meganewton-mn-to-stone-force-stf':0.90718474,
'meganewton-mn-to-dyne-centimeter-dyn-cm':8.8964432305,
'meganewton-mn-to-newton-millimeter-n-mm':907.18474,
'meganewton-mn-to-pound-force-inch-lbf-in':7.3613912e-41,
'meganewton-mn-to-pound-force-foot-lbf-ft':142.857,
'meganewton-mn-to-dyne-millimeter-dyn-mm':8.8964432305e10,
'ton-force-to-newton-n':0.0088964432,
'ton-force-to-dyne':32000,
'ton-force-to-kilogram-force-kgf':64348.098,
'ton-force-to-pound-force-lbf':907184.74,
'ton-force-to-kilonewton-kn':9.0718474e8,
'ton-force-to-meganewton-mn':32000,
'ton-force-to-ounce-force':224,
'ton-force-to-poundal':1,
'ton-force-to-gram-force-gf':0.90718474,
'ton-force-to-milligram-force-mgf':64348.098,
'ton-force-to-ounce-force-ozf':224,
'ton-force-to-kip-kip--1000-lbf':224,
'ton-force-to-ton-force-short-ton-force':1,
'ton-force-to-metric-ton-force-tonne-force-tf':907.18474,
'ton-force-to-poundal-pdl':1,
'ton-force-to-sthène-sn':142.857,
'ton-force-to-kip-force-kipf':8.8964432305e10,
'ton-force-to-ton-force-long-ton-force':1,
'ton-force-to-kilogramal-kgal':24000,
'ton-force-to-planck-force':2000,
'ton-force-to-stone-force-stf':8.8964432305e13,
'ton-force-to-dyne-centimeter-dyn-cm':27801.39,
'ton-force-to-newton-millimeter-n-mm':0.0283495,
'ton-force-to-pound-force-inch-lbf-in':0.0002780139,
'ton-force-to-pound-force-foot-lbf-ft':2.780139e-7,
'ton-force-to-dyne-millimeter-dyn-mm':3.125e-5,
'ounce-force-to-newton-n':2.0114,
'ounce-force-to-dyne':28.3495,
'ounce-force-to-kilogram-force-kgf':28349.5,
'ounce-force-to-pound-force-lbf':1,
'ounce-force-to-kilonewton-kn':0.00003125,
'ounce-force-to-meganewton-mn':3.125e-5,
'ounce-force-to-ton-force':2.83495e-5,
'ounce-force-to-poundal':2.0114,
'ounce-force-to-gram-force-gf':0.0002780139,
'ounce-force-to-milligram-force-mgf':0.00003125,
'ounce-force-to-ounce-force-ozf':3.125e-5,
'ounce-force-to-kip-kip--1000-lbf':0.0283495,
'ounce-force-to-ton-force-short-ton-force':2.83495e-5,
'ounce-force-to-metric-ton-force-tonne-force-tf':0.004464,
'ounce-force-to-poundal-pdl':2.0114,
'ounce-force-to-sthène-sn':278013.9,
'ounce-force-to-kip-force-kipf':0.75,
'ounce-force-to-ton-force-long-ton-force':2.83495e-5,
'ounce-force-to-kilogramal-kgal':2.780139e12,
'ounce-force-to-planck-force':0.014138,
'ounce-force-to-stone-force-stf':0.0001382549,
'ounce-force-to-dyne-centimeter-dyn-cm':1.382549544e-7,
'ounce-force-to-newton-millimeter-n-mm':4.827e-6,
'ounce-force-to-pound-force-inch-lbf-in':0.4973,
'ounce-force-to-pound-force-foot-lbf-ft':453.59237,
'ounce-force-to-dyne-millimeter-dyn-mm':453592.37,
'poundal-to-newton-n':0.4973,
'poundal-to-dyne':0.0004827,
'poundal-to-kilogram-force-kgf':4.827e-6,
'poundal-to-pound-force-lbf':0.00045359237,
'poundal-to-kilonewton-kn':1,
'poundal-to-meganewton-mn':0.001382549,
'poundal-to-ton-force':0.0004827,
'poundal-to-ounce-force':4.827e-6,
'poundal-to-gram-force-gf':0.014138,
'poundal-to-milligram-force-mgf':1.12046e-45,
'poundal-to-ounce-force-ozf':4.827e-6,
'poundal-to-kip-kip--1000-lbf':1.382549544e9,
'poundal-to-ton-force-short-ton-force':0.0004827,
'poundal-to-metric-ton-force-tonne-force-tf':1,
'poundal-to-poundal-pdl':0.0833333,
'poundal-to-sthène-sn':1.382549544e12,
'poundal-to-kip-force-kipf':980.665,
'poundal-to-ton-force-long-ton-force':0.0004827,
'poundal-to-kilogramal-kgal':9.80665e-6,
'poundal-to-planck-force':9.80665e-9,
'poundal-to-stone-force-stf':1.1023e-6,
'poundal-to-dyne-centimeter-dyn-cm':0.03527396,
'poundal-to-newton-millimeter-n-mm':0.031081,
'poundal-to-pound-force-inch-lbf-in':1000,
'poundal-to-pound-force-foot-lbf-ft':0.03527396,
'poundal-to-dyne-millimeter-dyn-mm':0.0011023,
'gram-force-gf-to-newton-n':1.1023e-6,
'gram-force-gf-to-dyne':0.001,
'gram-force-gf-to-kilogram-force-kgf':0.031081,
'gram-force-gf-to-pound-force-lbf':9.80665e-6,
'gram-force-gf-to-kilonewton-kn':0.0011023,
'gram-force-gf-to-meganewton-mn':1.1023e-6,
'gram-force-gf-to-ton-force':1,
'gram-force-gf-to-ounce-force':8.1744e-48,
'gram-force-gf-to-poundal':0.0001575,
'gram-force-gf-to-milligram-force-mgf':9.80665e8,
'gram-force-gf-to-ounce-force-ozf':8.1744e-48,
'gram-force-gf-to-kip-kip--1000-lbf':0.265,
'gram-force-gf-to-ton-force-short-ton-force':1,
'gram-force-gf-to-metric-ton-force-tonne-force-tf':9.80665e11,
'gram-force-gf-to-poundal-pdl':0.0001575,
'gram-force-gf-to-sthène-sn':1e-6,
'gram-force-gf-to-kip-force-kipf':9.80665e-9,
'gram-force-gf-to-ton-force-long-ton-force':1,
'gram-force-gf-to-kilogramal-kgal':1.1023e-9,
'gram-force-gf-to-planck-force':3.527396e-5,
'gram-force-gf-to-stone-force-stf':3.1081e-5,
'gram-force-gf-to-dyne-centimeter-dyn-cm':0.001,
'gram-force-gf-to-newton-millimeter-n-mm':3.527396e-5,
'gram-force-gf-to-pound-force-inch-lbf-in':1.1023e-6,
'gram-force-gf-to-pound-force-foot-lbf-ft':1.1023e-9,
'gram-force-gf-to-dyne-millimeter-dyn-mm':1e-6,
'milligram-force-mgf-to-newton-n':3.1081e-5,
'milligram-force-mgf-to-dyne':9.80665e-9,
'milligram-force-mgf-to-kilogram-force-kgf':1.1023e-6,
'milligram-force-mgf-to-pound-force-lbf':1.1023e-9,
'milligram-force-mgf-to-kilonewton-kn':0.001,
'milligram-force-mgf-to-meganewton-mn':8.1744e-51,
'milligram-force-mgf-to-ton-force':1.575e-7,
'milligram-force-mgf-to-ounce-force':9.80665e5,
'milligram-force-mgf-to-poundal':9.80665,
'milligram-force-mgf-to-gram-force-gf':0.000265,
'milligram-force-mgf-to-ounce-force-ozf':9.80665e5,
'milligram-force-mgf-to-kip-kip--1000-lbf':9.80665e8,
'milligram-force-mgf-to-ton-force-short-ton-force':1.575e-7,
'milligram-force-mgf-to-metric-ton-force-tonne-force-tf':0.0283495,
'milligram-force-mgf-to-poundal-pdl':9.80665,
'milligram-force-mgf-to-sthène-sn':2.780139e-7,
'milligram-force-mgf-to-kip-force-kipf':3.125e-5,
'milligram-force-mgf-to-ton-force-long-ton-force':1.575e-7,
'milligram-force-mgf-to-kilogramal-kgal':2.0114,
'milligram-force-mgf-to-planck-force':28.3495,
'milligram-force-mgf-to-stone-force-stf':28349.5,
'milligram-force-mgf-to-dyne-centimeter-dyn-cm':0.00003125,
'milligram-force-mgf-to-newton-millimeter-n-mm':3.125e-5,
'milligram-force-mgf-to-pound-force-inch-lbf-in':2.83495e-5,
'milligram-force-mgf-to-pound-force-foot-lbf-ft':2.0114,
'milligram-force-mgf-to-dyne-millimeter-dyn-mm':0.0002780139,
'ounce-force-ozf-to-newton-n':2.0114,
'ounce-force-ozf-to-dyne':28.3495,
'ounce-force-ozf-to-kilogram-force-kgf':28349.5,
'ounce-force-ozf-to-pound-force-lbf':1,
'ounce-force-ozf-to-kilonewton-kn':0.00003125,
'ounce-force-ozf-to-meganewton-mn':3.125e-5,
'ounce-force-ozf-to-ton-force':2.83495e-5,
'ounce-force-ozf-to-ounce-force':3.125e-5,
'ounce-force-ozf-to-poundal':2.0114,
'ounce-force-ozf-to-gram-force-gf':0.0002780139,
'ounce-force-ozf-to-milligram-force-mgf':0.00003125,
'ounce-force-ozf-to-kip-kip--1000-lbf':0.0283495,
'ounce-force-ozf-to-ton-force-short-ton-force':2.83495e-5,
'ounce-force-ozf-to-metric-ton-force-tonne-force-tf':0.004464,
'ounce-force-ozf-to-poundal-pdl':2.0114,
'ounce-force-ozf-to-sthène-sn':278013.9,
'ounce-force-ozf-to-kip-force-kipf':0.75,
'ounce-force-ozf-to-ton-force-long-ton-force':2.83495e-5,
'ounce-force-ozf-to-kilogramal-kgal':2.780139e12,
'ounce-force-ozf-to-planck-force':0.014138,
'ounce-force-ozf-to-stone-force-stf':0.0001382549,
'ounce-force-ozf-to-dyne-centimeter-dyn-cm':1.382549544e-7,
'ounce-force-ozf-to-newton-millimeter-n-mm':4.827e-6,
'ounce-force-ozf-to-pound-force-inch-lbf-in':0.4973,
'ounce-force-ozf-to-pound-force-foot-lbf-ft':453.59237,
'ounce-force-ozf-to-dyne-millimeter-dyn-mm':453592.37,
'kip-kip--1000-lbf-to-newton-n':0.5,
'kip-kip--1000-lbf-to-dyne':453.59237,
'kip-kip--1000-lbf-to-kilogram-force-kgf':3.6807e-41,
'kip-kip--1000-lbf-to-pound-force-lbf':71.429,
'kip-kip--1000-lbf-to-kilonewton-kn':4.4482216e10,
'kip-kip--1000-lbf-to-meganewton-mn':4448221.6,
'kip-kip--1000-lbf-to-ton-force':12000,
'kip-kip--1000-lbf-to-ounce-force':1000,
'kip-kip--1000-lbf-to-poundal':8896.4432305,
'kip-kip--1000-lbf-to-gram-force-gf':8.8964432305e8,
'kip-kip--1000-lbf-to-milligram-force-mgf':907.18474,
'kip-kip--1000-lbf-to-ounce-force-ozf':1000,
'kip-kip--1000-lbf-to-ton-force-short-ton-force':12000,
'kip-kip--1000-lbf-to-metric-ton-force-tonne-force-tf':0.0088964432,
'kip-kip--1000-lbf-to-poundal-pdl':8896.4432305,
'kip-kip--1000-lbf-to-sthène-sn':32000,
'kip-kip--1000-lbf-to-kip-force-kipf':64348.098,
'kip-kip--1000-lbf-to-ton-force-long-ton-force':12000,
'kip-kip--1000-lbf-to-kilogramal-kgal':9.0718474e8,
'kip-kip--1000-lbf-to-planck-force':32000,
'kip-kip--1000-lbf-to-stone-force-stf':224,
'kip-kip--1000-lbf-to-dyne-centimeter-dyn-cm':0.90718474,
'kip-kip--1000-lbf-to-newton-millimeter-n-mm':64348.098,
'kip-kip--1000-lbf-to-pound-force-inch-lbf-in':8.8964432305,
'kip-kip--1000-lbf-to-pound-force-foot-lbf-ft':224,
'kip-kip--1000-lbf-to-dyne-millimeter-dyn-mm':1,
'ton-force-short-ton-force-to-newton-n':0.0088964432,
'ton-force-short-ton-force-to-dyne':32000,
'ton-force-short-ton-force-to-kilogram-force-kgf':64348.098,
'ton-force-short-ton-force-to-pound-force-lbf':907184.74,
'ton-force-short-ton-force-to-kilonewton-kn':9.0718474e8,
'ton-force-short-ton-force-to-meganewton-mn':32000,
'ton-force-short-ton-force-to-ton-force':1,
'ton-force-short-ton-force-to-ounce-force':224,
'ton-force-short-ton-force-to-poundal':1,
'ton-force-short-ton-force-to-gram-force-gf':0.90718474,
'ton-force-short-ton-force-to-milligram-force-mgf':64348.098,
'ton-force-short-ton-force-to-ounce-force-ozf':224,
'ton-force-short-ton-force-to-kip-kip--1000-lbf':224,
'ton-force-short-ton-force-to-metric-ton-force-tonne-force-tf':907.18474,
'ton-force-short-ton-force-to-poundal-pdl':1,
'ton-force-short-ton-force-to-sthène-sn':142.857,
'ton-force-short-ton-force-to-kip-force-kipf':8.8964432305e10,
'ton-force-short-ton-force-to-ton-force-long-ton-force':1,
'ton-force-short-ton-force-to-kilogramal-kgal':24000,
'ton-force-short-ton-force-to-planck-force':2000,
'ton-force-short-ton-force-to-stone-force-stf':8.8964432305e13,
'ton-force-short-ton-force-to-dyne-centimeter-dyn-cm':27801.39,
'ton-force-short-ton-force-to-newton-millimeter-n-mm':0.0283495,
'ton-force-short-ton-force-to-pound-force-inch-lbf-in':0.0002780139,
'ton-force-short-ton-force-to-pound-force-foot-lbf-ft':2.780139e-7,
'ton-force-short-ton-force-to-dyne-millimeter-dyn-mm':3.125e-5,
'metric-ton-force-tonne-force-tf-to-newton-n':8.2741e-41,
'metric-ton-force-tonne-force-tf-to-dyne':157.52,
'metric-ton-force-tonne-force-tf-to-kilogram-force-kgf':9.80665e10,
'metric-ton-force-tonne-force-tf-to-pound-force-lbf':9806650,
'metric-ton-force-tonne-force-tf-to-kilonewton-kn':26455.78277,
'metric-ton-force-tonne-force-tf-to-meganewton-mn':2204.6226218,
'metric-ton-force-tonne-force-tf-to-ton-force':9.80665e13,
'metric-ton-force-tonne-force-tf-to-ounce-force':0.0140981,
'metric-ton-force-tonne-force-tf-to-poundal':0.0001382549544,
'metric-ton-force-tonne-force-tf-to-gram-force-gf':1.3825e-7,
'metric-ton-force-tonne-force-tf-to-milligram-force-mgf':1.5519e-5,
'metric-ton-force-tonne-force-tf-to-ounce-force-ozf':0.0140981,
'metric-ton-force-tonne-force-tf-to-kip-kip--1000-lbf':1,
'metric-ton-force-tonne-force-tf-to-ton-force-short-ton-force':9.80665e13,
'metric-ton-force-tonne-force-tf-to-poundal-pdl':0.0001382549544,
'metric-ton-force-tonne-force-tf-to-sthène-sn':0.496039,
'metric-ton-force-tonne-force-tf-to-kip-force-kipf':3.1081e-5,
'metric-ton-force-tonne-force-tf-to-ton-force-long-ton-force':9.80665e13,
'metric-ton-force-tonne-force-tf-to-kilogramal-kgal':1.4160e-5,
'metric-ton-force-tonne-force-tf-to-planck-force':1.3825e-4,
'metric-ton-force-tonne-force-tf-to-stone-force-stf':3.1081e-5,
'metric-ton-force-tonne-force-tf-to-dyne-centimeter-dyn-cm':1.5519e-5,
'metric-ton-force-tonne-force-tf-to-newton-millimeter-n-mm':0.0140981,
'metric-ton-force-tonne-force-tf-to-pound-force-inch-lbf-in':1.1511e-48,
'metric-ton-force-tonne-force-tf-to-pound-force-foot-lbf-ft':0.002214,
'metric-ton-force-tonne-force-tf-to-dyne-millimeter-dyn-mm':1.3825e9,
'poundal-pdl-to-newton-n':0.4973,
'poundal-pdl-to-dyne':0.0004827,
'poundal-pdl-to-kilogram-force-kgf':4.827e-6,
'poundal-pdl-to-pound-force-lbf':0.00045359237,
'poundal-pdl-to-kilonewton-kn':1,
'poundal-pdl-to-meganewton-mn':0.001382549,
'poundal-pdl-to-ton-force':0.0004827,
'poundal-pdl-to-ounce-force':4.827e-6,
'poundal-pdl-to-poundal':0.0833333,
'poundal-pdl-to-gram-force-gf':0.014138,
'poundal-pdl-to-milligram-force-mgf':1.12046e-45,
'poundal-pdl-to-ounce-force-ozf':4.827e-6,
'poundal-pdl-to-kip-kip--1000-lbf':1.382549544e9,
'poundal-pdl-to-ton-force-short-ton-force':0.0004827,
'poundal-pdl-to-metric-ton-force-tonne-force-tf':1,
'poundal-pdl-to-sthène-sn':1.382549544e12,
'poundal-pdl-to-kip-force-kipf':980.665,
'poundal-pdl-to-ton-force-long-ton-force':0.0004827,
'poundal-pdl-to-kilogramal-kgal':9.80665e-6,
'poundal-pdl-to-planck-force':9.80665e-9,
'poundal-pdl-to-stone-force-stf':1.1023e-6,
'poundal-pdl-to-dyne-centimeter-dyn-cm':0.03527396,
'poundal-pdl-to-newton-millimeter-n-mm':0.031081,
'poundal-pdl-to-pound-force-inch-lbf-in':1000,
'poundal-pdl-to-pound-force-foot-lbf-ft':0.03527396,
'poundal-pdl-to-dyne-millimeter-dyn-mm':0.0011023,
'sthène-sn-to-newton-n':737.562,
'sthène-sn-to-dyne':83.376,
'sthène-sn-to-kilogram-force-kgf':1e13,
'sthène-sn-to-pound-force-lbf':4448.2216,
'sthène-sn-to-kilonewton-kn':4.4482216e8,
'sthène-sn-to-meganewton-mn':453.59237,
'sthène-sn-to-ton-force':1000,
'sthène-sn-to-ounce-force':4.4482216,
'sthène-sn-to-poundal':0.0044482216,
'sthène-sn-to-gram-force-gf':0.5,
'sthène-sn-to-milligram-force-mgf':16000,
'sthène-sn-to-ounce-force-ozf':4.4482216,
'sthène-sn-to-kip-kip--1000-lbf':453592.37,
'sthène-sn-to-ton-force-short-ton-force':1000,
'sthène-sn-to-metric-ton-force-tonne-force-tf':16000,
'sthène-sn-to-poundal-pdl':0.0044482216,
'sthène-sn-to-kip-force-kipf':0.5,
'sthène-sn-to-ton-force-long-ton-force':1000,
'sthène-sn-to-kilogramal-kgal':32174.049,
'sthène-sn-to-planck-force':4.4482216,
'sthène-sn-to-stone-force-stf':0.5,
'sthène-sn-to-dyne-centimeter-dyn-cm':453.59237,
'sthène-sn-to-newton-millimeter-n-mm':3.6807e-41,
'sthène-sn-to-pound-force-inch-lbf-in':71.429,
'sthène-sn-to-pound-force-foot-lbf-ft':4.4482216e10,
'sthène-sn-to-dyne-millimeter-dyn-mm':4448221.6,
'kip-force-kipf-to-newton-n':12000,
'kip-force-kipf-to-dyne':1000,
'kip-force-kipf-to-kilogram-force-kgf':4.4482216e13,
'kip-force-kipf-to-pound-force-lbf':8.896443e10,
'kip-force-kipf-to-kilonewton-kn':1016.0469088,
'kip-force-kipf-to-meganewton-mn':2240,
'kip-force-kipf-to-ton-force':9.964016384,
'kip-force-kipf-to-ounce-force':0.009964016384,
'kip-force-kipf-to-poundal':1,
'kip-force-kipf-to-gram-force-gf':35840,
'kip-force-kipf-to-milligram-force-mgf':69688.8,
'kip-force-kipf-to-ounce-force-ozf':0.009964016384,
'kip-force-kipf-to-kip-kip--1000-lbf':1.0160469088e9,
'kip-force-kipf-to-ton-force-short-ton-force':9.964016384,
'kip-force-kipf-to-metric-ton-force-tonne-force-tf':1,
'kip-force-kipf-to-poundal-pdl':1,
'kip-force-kipf-to-sthène-sn':1.0160469088,
'kip-force-kipf-to-ton-force-long-ton-force':9.964016384,
'kip-force-kipf-to-kilogramal-kgal':0.008896443,
'kip-force-kipf-to-planck-force':1,
'kip-force-kipf-to-stone-force-stf':101.60469088,
'kip-force-kipf-to-dyne-centimeter-dyn-cm':3.326446e-7,
'kip-force-kipf-to-newton-millimeter-n-mm':157.473044,
'kip-force-kipf-to-pound-force-inch-lbf-in':8.896443e12,
'kip-force-kipf-to-pound-force-foot-lbf-ft':1e6,
'kip-force-kipf-to-dyne-millimeter-dyn-mm':19200,
'ton-force-long-ton-force-to-newton-n':0.0088964432,
'ton-force-long-ton-force-to-dyne':32000,
'ton-force-long-ton-force-to-kilogram-force-kgf':64348.098,
'ton-force-long-ton-force-to-pound-force-lbf':907184.74,
'ton-force-long-ton-force-to-kilonewton-kn':9.0718474e8,
'ton-force-long-ton-force-to-meganewton-mn':32000,
'ton-force-long-ton-force-to-ton-force':1,
'ton-force-long-ton-force-to-ounce-force':224,
'ton-force-long-ton-force-to-poundal':1,
'ton-force-long-ton-force-to-gram-force-gf':0.90718474,
'ton-force-long-ton-force-to-milligram-force-mgf':64348.098,
'ton-force-long-ton-force-to-ounce-force-ozf':224,
'ton-force-long-ton-force-to-kip-kip--1000-lbf':224,
'ton-force-long-ton-force-to-ton-force-short-ton-force':1,
'ton-force-long-ton-force-to-metric-ton-force-tonne-force-tf':907.18474,
'ton-force-long-ton-force-to-poundal-pdl':1,
'ton-force-long-ton-force-to-sthène-sn':142.857,
'ton-force-long-ton-force-to-kip-force-kipf':8.8964432305e10,
'ton-force-long-ton-force-to-kilogramal-kgal':24000,
'ton-force-long-ton-force-to-planck-force':2000,
'ton-force-long-ton-force-to-stone-force-stf':8.8964432305e13,
'ton-force-long-ton-force-to-dyne-centimeter-dyn-cm':27801.39,
'ton-force-long-ton-force-to-newton-millimeter-n-mm':0.0283495,
'ton-force-long-ton-force-to-pound-force-inch-lbf-in':0.0002780139,
'ton-force-long-ton-force-to-pound-force-foot-lbf-ft':2.780139e-7,
'ton-force-long-ton-force-to-dyne-millimeter-dyn-mm':3.125e-5,
'kilogramal-kgal-to-newton-n':2.2046226218,
'kilogramal-kgal-to-dyne':9.80665e6,
'kilogramal-kgal-to-kilogram-force-kgf':1.210295e44,
'kilogramal-kgal-to-pound-force-lbf':1.210295e49,
'kilogramal-kgal-to-kilonewton-kn':1.233043e43,
'kilogramal-kgal-to-meganewton-mn':2.720305e43,
'kilogramal-kgal-to-ton-force':1.210295e41,
'kilogramal-kgal-to-ounce-force':1.210295e38,
'kilogramal-kgal-to-poundal':1.361900e40,
'kilogramal-kgal-to-gram-force-gf':4.355340e44,
'kilogramal-kgal-to-milligram-force-mgf':8.752550e44,
'kilogramal-kgal-to-ounce-force-ozf':1.210295e38,
'kilogramal-kgal-to-kip-kip--1000-lbf':1.233606e49,
'kilogramal-kgal-to-ton-force-short-ton-force':1.210295e41,
'kilogramal-kgal-to-metric-ton-force-tonne-force-tf':1.232373e40,
'kilogramal-kgal-to-poundal-pdl':1.361900e40,
'kilogramal-kgal-to-sthène-sn':1.233606e40,
'kilogramal-kgal-to-kip-force-kipf':8.752550e44,
'kilogramal-kgal-to-ton-force-long-ton-force':1.210295e41,
'kilogramal-kgal-to-planck-force':1.232373e40,
'kilogramal-kgal-to-stone-force-stf':1.361900e40,
'kilogramal-kgal-to-dyne-centimeter-dyn-cm':3.057e41,
'kilogramal-kgal-to-newton-millimeter-n-mm':1.943918e42,
'kilogramal-kgal-to-pound-force-inch-lbf-in':1.210295e51,
'kilogramal-kgal-to-pound-force-foot-lbf-ft':1.210295e47,
'kilogramal-kgal-to-dyne-millimeter-dyn-mm':3.267439e43,
'planck-force-to-newton-n':2.269571e43,
'planck-force-to-dyne':1.210295e48,
'planck-force-to-kilogram-force-kgf':623.6891,
'planck-force-to-pound-force-lbf':6.236891e7,
'planck-force-to-kilonewton-kn':63.934009,
'planck-force-to-meganewton-mn':140,
'planck-force-to-ton-force':0.6236891,
'planck-force-to-ounce-force':6.236891e-4,
'planck-force-to-poundal':0.000687836,
'planck-force-to-gram-force-gf':2239.94,
'planck-force-to-milligram-force-mgf':868.0458,
'planck-force-to-ounce-force-ozf':6.236891e-4,
'planck-force-to-kip-kip--1000-lbf':6.2673834e7,
'planck-force-to-ton-force-short-ton-force':0.6236891,
'planck-force-to-metric-ton-force-tonne-force-tf':0.000687836,
'planck-force-to-poundal-pdl':0.000687836,
'planck-force-to-sthène-sn':0.0006989,
'planck-force-to-kip-force-kipf':868.0458,
'planck-force-to-ton-force-long-ton-force':0.6236891,
'planck-force-to-kilogramal-kgal':0.000687836,
'planck-force-to-stone-force-stf':0.000687836,
'planck-force-to-dyne-centimeter-dyn-cm':64.000569,
'planck-force-to-newton-millimeter-n-mm':3.319842269e31,
'planck-force-to-pound-force-inch-lbf-in':1,
'planck-force-to-pound-force-foot-lbf-ft':6.236891e9,
'planck-force-to-dyne-millimeter-dyn-mm':623689.1,
'stone-force-stf-to-newton-n':10668.94,
'stone-force-stf-to-dyne':1240.001,
'stone-force-stf-to-kilogram-force-kgf':6.236891e8,
'stone-force-stf-to-pound-force-lbf':1e-7,
'stone-force-stf-to-kilonewton-kn':1.019716e-8,
'stone-force-stf-to-meganewton-mn':2.248089e-7,
'stone-force-stf-to-ton-force':1e-10,
'stone-force-stf-to-ounce-force':1e-13,
'stone-force-stf-to-poundal':1.124045e-10,
'stone-force-stf-to-gram-force-gf':3.596942e-6,
'stone-force-stf-to-milligram-force-mgf':1.393736e-6,
'stone-force-stf-to-ounce-force-ozf':1e-13,
'stone-force-stf-to-kip-kip--1000-lbf':0.101972,
'stone-force-stf-to-ton-force-short-ton-force':1e-10,
'stone-force-stf-to-metric-ton-force-tonne-force-tf':1.124045e-10,
'stone-force-stf-to-poundal-pdl':1.124045e-10,
'stone-force-stf-to-sthène-sn':1.1441e-10,
'stone-force-stf-to-kip-force-kipf':1.393736e-6,
'stone-force-stf-to-ton-force-long-ton-force':1e-10,
'stone-force-stf-to-kilogramal-kgal':1.124045e-10,
'stone-force-stf-to-planck-force':1.124045e-10,
'stone-force-stf-to-dyne-centimeter-dyn-cm':1.019716e-5,
'stone-force-stf-to-newton-millimeter-n-mm':5.287264e18,
'stone-force-stf-to-pound-force-inch-lbf-in':1.60218e-9,
'stone-force-stf-to-pound-force-foot-lbf-ft':0.01,
'stone-force-stf-to-dyne-millimeter-dyn-mm':1.869376e-5,
'dyne-centimeter-dyn-cm-to-newton-n':1.558171e-6,
'dyne-centimeter-dyn-cm-to-dyne':1,
'dyne-centimeter-dyn-cm-to-kilogram-force-kgf':0.001,
'dyne-centimeter-dyn-cm-to-pound-force-lbf':100,
'dyne-centimeter-dyn-cm-to-kilonewton-kn':0.000101972,
'dyne-centimeter-dyn-cm-to-meganewton-mn':0.000224809,
'dyne-centimeter-dyn-cm-to-ton-force':1e-6,
'dyne-centimeter-dyn-cm-to-ounce-force':1e-9,
'dyne-centimeter-dyn-cm-to-poundal':1.124045e-6,
'dyne-centimeter-dyn-cm-to-gram-force-gf':0.03596942,
'dyne-centimeter-dyn-cm-to-milligram-force-mgf':0.01393736,
'dyne-centimeter-dyn-cm-to-ounce-force-ozf':1e-9,
'dyne-centimeter-dyn-cm-to-kip-kip--1000-lbf':101.9716,
'dyne-centimeter-dyn-cm-to-ton-force-short-ton-force':1e-6,
'dyne-centimeter-dyn-cm-to-metric-ton-force-tonne-force-tf':1.124045e-6,
'dyne-centimeter-dyn-cm-to-poundal-pdl':1.124045e-6,
'dyne-centimeter-dyn-cm-to-sthène-sn':1.1441e-6,
'dyne-centimeter-dyn-cm-to-kip-force-kipf':0.01393736,
'dyne-centimeter-dyn-cm-to-ton-force-long-ton-force':1e-6,
'dyne-centimeter-dyn-cm-to-kilogramal-kgal':1.124045e-6,
'dyne-centimeter-dyn-cm-to-planck-force':1.124045e-6,
'dyne-centimeter-dyn-cm-to-stone-force-stf':0.01019716,
'dyne-centimeter-dyn-cm-to-newton-millimeter-n-mm':5.287264e21,
'dyne-centimeter-dyn-cm-to-pound-force-inch-lbf-in':1.60218e-7,
'dyne-centimeter-dyn-cm-to-pound-force-foot-lbf-ft':100,
'dyne-centimeter-dyn-cm-to-dyne-millimeter-dyn-mm':0.08850757,
'newton-millimeter-n-mm-to-newton-n':0.00737563,
'newton-millimeter-n-mm-to-dyne':100,
'newton-millimeter-n-mm-to-kilogram-force-kgf':0.1129848,
'newton-millimeter-n-mm-to-pound-force-lbf':11298.48,
'newton-millimeter-n-mm-to-kilonewton-kn':0.011498,
'newton-millimeter-n-mm-to-meganewton-mn':1,
'newton-millimeter-n-mm-to-ton-force':0.0001129848,
'newton-millimeter-n-mm-to-ounce-force':1.129848e-7,
'newton-millimeter-n-mm-to-poundal':1.269699e-7,
'newton-millimeter-n-mm-to-gram-force-gf':3.596943,
'newton-millimeter-n-mm-to-milligram-force-mgf':1.393736,
'newton-millimeter-n-mm-to-ounce-force-ozf':1.129848e-7,
'newton-millimeter-n-mm-to-kip-kip--1000-lbf':10197.16,
'newton-millimeter-n-mm-to-ton-force-short-ton-force':0.0001129848,
'newton-millimeter-n-mm-to-metric-ton-force-tonne-force-tf':1.269699e-7,
'newton-millimeter-n-mm-to-poundal-pdl':1.269699e-7,
'newton-millimeter-n-mm-to-sthène-sn':1.29026e-7,
'newton-millimeter-n-mm-to-kip-force-kipf':1.393736,
'newton-millimeter-n-mm-to-ton-force-long-ton-force':0.0001129848,
'newton-millimeter-n-mm-to-kilogramal-kgal':1.269699e-7,
'newton-millimeter-n-mm-to-planck-force':1.269699e-7,
'newton-millimeter-n-mm-to-stone-force-stf':0.116218,
'newton-millimeter-n-mm-to-dyne-centimeter-dyn-cm':6.026273e22,
'newton-millimeter-n-mm-to-pound-force-inch-lbf-in':1.826387e-6,
'newton-millimeter-n-mm-to-pound-force-foot-lbf-ft':11298.48,
'newton-millimeter-n-mm-to-dyne-millimeter-dyn-mm':1.129848,
'pound-force-inch-lbf-in-to-newton-n':0.083333,
'pound-force-inch-lbf-in-to-dyne':1129848,
'pound-force-inch-lbf-in-to-kilogram-force-kgf':1.355818,
'pound-force-inch-lbf-in-to-pound-force-lbf':135581.8,
'pound-force-inch-lbf-in-to-kilonewton-kn':0.138255,
'pound-force-inch-lbf-in-to-meganewton-mn':1,
'pound-force-inch-lbf-in-to-ton-force':0.001355818,
'pound-force-inch-lbf-in-to-ounce-force':1.355818e-6,
'pound-force-inch-lbf-in-to-poundal':1.523639e-6,
'pound-force-inch-lbf-in-to-gram-force-gf':43.16332,
'pound-force-inch-lbf-in-to-milligram-force-mgf':16.08854,
'pound-force-inch-lbf-in-to-ounce-force-ozf':1.355818e-6,
'pound-force-inch-lbf-in-to-kip-kip--1000-lbf':117809.5,
'pound-force-inch-lbf-in-to-ton-force-short-ton-force':0.001355818,
'pound-force-inch-lbf-in-to-metric-ton-force-tonne-force-tf':1.523639e-6,
'pound-force-inch-lbf-in-to-poundal-pdl':1.523639e-6,
'pound-force-inch-lbf-in-to-sthène-sn':1.54831e-6,
'pound-force-inch-lbf-in-to-kip-force-kipf':16.08854,
'pound-force-inch-lbf-in-to-ton-force-long-ton-force':0.001355818,
'pound-force-inch-lbf-in-to-kilogramal-kgal':1.523639e-6,
'pound-force-inch-lbf-in-to-planck-force':1.523639e-6,
'pound-force-inch-lbf-in-to-stone-force-stf':1.394617,
'pound-force-inch-lbf-in-to-dyne-centimeter-dyn-cm':7.229264e23,
'pound-force-inch-lbf-in-to-newton-millimeter-n-mm':2.189182e-5,
'pound-force-inch-lbf-in-to-pound-force-foot-lbf-ft':135581.8,
'pound-force-inch-lbf-in-to-dyne-millimeter-dyn-mm':13.55818,
'pound-force-foot-lbf-ft-to-newton-n':12,
'pound-force-foot-lbf-ft-to-dyne':13558180,
'pound-force-foot-lbf-ft-to-kilogram-force-kgf':1e-5,
'pound-force-foot-lbf-ft-to-pound-force-lbf':1,
'pound-force-foot-lbf-ft-to-kilonewton-kn':1.019716e-6,
'pound-force-foot-lbf-ft-to-meganewton-mn':2.24809e-6,
'pound-force-foot-lbf-ft-to-ton-force':1e-8,
'pound-force-foot-lbf-ft-to-ounce-force':1e-11,
'pound-force-foot-lbf-ft-to-poundal':1.124045e-11,
'pound-force-foot-lbf-ft-to-gram-force-gf':0.0003596942,
'pound-force-foot-lbf-ft-to-milligram-force-mgf':0.0001393736,
'pound-force-foot-lbf-ft-to-ounce-force-ozf':1e-11,
'pound-force-foot-lbf-ft-to-kip-kip--1000-lbf':1.019716,
'pound-force-foot-lbf-ft-to-ton-force-short-ton-force':1e-8,
'pound-force-foot-lbf-ft-to-metric-ton-force-tonne-force-tf':1.124045e-11,
'pound-force-foot-lbf-ft-to-poundal-pdl':1.124045e-11,
'pound-force-foot-lbf-ft-to-sthène-sn':1.1441e-11,
'pound-force-foot-lbf-ft-to-kip-force-kipf':0.0001393736,
'pound-force-foot-lbf-ft-to-ton-force-long-ton-force':1e-8,
'pound-force-foot-lbf-ft-to-kilogramal-kgal':1.1441e-11,
'pound-force-foot-lbf-ft-to-planck-force':1.124045e-11,
'pound-force-foot-lbf-ft-to-stone-force-stf':1.019716e-6,
'pound-force-foot-lbf-ft-to-dyne-centimeter-dyn-cm':5.28636e22,
'pound-force-foot-lbf-ft-to-newton-millimeter-n-mm':1.601419e-7,
'pound-force-foot-lbf-ft-to-pound-force-inch-lbf-in':0.1,
'pound-force-foot-lbf-ft-to-dyne-millimeter-dyn-mm':0.001,
'dyne-millimeter-dyn-mm-to-newton-n':0.088184,
'dyne-millimeter-dyn-mm-to-dyne':0.007349,
'dyne-millimeter-dyn-mm-to-kilogram-force-kgf':1.019716e-6,
'dyne-millimeter-dyn-mm-to-pound-force-lbf':2.24809e-6,
'dyne-millimeter-dyn-mm-to-kilonewton-kn':1e-8,
'dyne-millimeter-dyn-mm-to-meganewton-mn':1e-11,
'dyne-millimeter-dyn-mm-to-ton-force':1.124045e-11,
'dyne-millimeter-dyn-mm-to-ounce-force':0.0003596942,
'dyne-millimeter-dyn-mm-to-poundal':0.0001393736,
'dyne-millimeter-dyn-mm-to-gram-force-gf':0.001019716,
'dyne-millimeter-dyn-mm-to-milligram-force-mgf':1.019716,
'dyne-millimeter-dyn-mm-to-ounce-force-ozf':0.0003596942,
'dyne-millimeter-dyn-mm-to-kip-kip--1000-lbf':1.124045e-11,
'dyne-millimeter-dyn-mm-to-ton-force-short-ton-force':1.124045e-11,
'dyne-millimeter-dyn-mm-to-metric-ton-force-tonne-force-tf':1.1441e-11,
'dyne-millimeter-dyn-mm-to-poundal-pdl':0.0001393736,
'dyne-millimeter-dyn-mm-to-sthène-sn':9.80665e-9,
'dyne-millimeter-dyn-mm-to-kip-force-kipf':1.1441e-11,
'dyne-millimeter-dyn-mm-to-ton-force-long-ton-force':1.124045e-11,
'dyne-millimeter-dyn-mm-to-kilogramal-kgal':1.019716e-6,
'dyne-millimeter-dyn-mm-to-planck-force':5.28636e22,
'dyne-millimeter-dyn-mm-to-stone-force-stf':1.601419e-7,
'dyne-millimeter-dyn-mm-to-dyne-centimeter-dyn-cm':0.1,
'dyne-millimeter-dyn-mm-to-newton-millimeter-n-mm':0.001,
'dyne-millimeter-dyn-mm-to-pound-force-inch-lbf-in':0.088184,
'dyne-millimeter-dyn-mm-to-pound-force-foot-lbf-ft':0.007349
};

function lbfToN(x){return x*4.4482216152605}

const HUB = "newton-n";
const baseTo = new Map(), toBase = new Map();
for(const [k,v] of Object.entries(conversionFactors)){
  const [a,b] = k.split("-to-");
  if(!a || !b) continue;
  if(a===HUB) baseTo.set(b,v);
  if(b===HUB) toBase.set(a,v);
}
baseTo.set(HUB,1); toBase.set(HUB,1);

const $ = s => document.querySelector(s);
const tbody = $("#tbody");

function populateOptions(){
  const from = $("#fromUnit"), to = $("#toUnit");
  UNITS.forEach(([label, token])=>{
    from.add(new Option(label, token));
    to.add(new Option(label, token));
  });
  from.selectedIndex = 0;
  to.selectedIndex = 0;
}

function fnum(x){
  if(!Number.isFinite(x)) return "—";
  const ax = Math.abs(x);
  if(x!==0 && (ax>=1e9 || ax<1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(x);
}

function factor(fromTok, toTok){
  if(fromTok===toTok) return 1;
  const direct = conversionFactors[`${fromTok}-to-${toTok}`];
  if(direct!=null) return direct;
  const inv = conversionFactors[`${toTok}-to-${fromTok}`];
  if(inv!=null && inv!==0) return 1/inv;
  const a = toBase.get(fromTok);
  const b = baseTo.get(toTok);
  if(a!=null && b!=null) return a*b;
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
  } else {
    out.value = "—";
  }

  if(!Number.isFinite(val)){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }
  const q = ($("#filter").value||"").toLowerCase();
  const rows = [];
  for(const [label, tok] of UNITS){
    if(tok===from) continue;
    if(q && !label.toLowerCase().includes(q)) continue;
    const f = factor(from, tok);
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
  $("#swap").addEventListener("click", ()=>{
    const f = $("#fromUnit"), t = $("#toUnit"); const a = f.value; f.value = t.value; t.value = a; render();
  });
});
</script>
</body>
</html>
