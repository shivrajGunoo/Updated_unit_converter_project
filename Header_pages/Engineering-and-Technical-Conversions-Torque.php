
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 <title>Torque Converter | Convert Newton Meter (N·m) to Pound-Force Foot (lbf·ft)</title>

<meta name="description" content="Use our Torque Converter to easily convert Newton meter (N·m) to pound-force foot (lbf·ft). Get instant results with formulas, examples, and step-by-step torque calculations for engineering and mechanical applications." />

<meta name="keywords" content="torque converter, convert N·m to lbf·ft, Newton meter to pound-force foot, Nm to lb ft, torque conversion calculator, mechanical torque converter, engineering torque formulas, instant torque calculator" />

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
        <h2>Torque Conversions</h2>
        <div class="converter-tool">
          <div class="input-group">
            <label for="value">Value</label>
            <input id="value" type="number" inputmode="decimal" step="any" value="100" />
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
        <div class="description-section">
          <div class="info-section">
            <h3>Popular Torque Conversions</h3>
          <ul>
              <li><a href="../Engineering_and_Technical _Conversions_Torque/newton-meter-nm-to-pound-force-foot-lbfft.php">Newton Meter to Pound-force Foot</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Torque/pound-force-foot-lbfft-to-newton-meter-nm.php">Pound-force Foot to Newton Meter</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Torque/newton-meter-nm-to-kilogram-force-meter.php">Newton Meter to Kilogram-force Meter</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Torque/kilogram-force-meter-to-newton-meter-nm.php">Kilogram-force Meter to Newton Meter</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Torque/newton-meter-nm-to-ounce-force-inch-ozfin.php">Newton Meter to Ounce-force Inch</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Torque/ounce-force-inch-ozfin-to-newton-meter-nm.php">Ounce-force Inch to Newton Meter</a></li>
          </ul>
          </div>
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
  ['Newton Meter', 'newton-meter-nm'],
  ['Newton Centimeter', 'newton-centimeter-ncm'],
  ['Newton Millimeter', 'newton-millimeter-nmm'],
  ['Kilonewton Meter', 'kilonewton-meter-knm'],
  ['Dyne Meter', 'dyne-meter-dynm'],
  ['Dyne Centimeter', 'dyne-centimeter-dyncm'],
  ['Dyne Millimeter', 'dyne-millimeter-dynmm'],
  ['Kilogram-Force Meter', 'kilogram-force-meter'],
  ['Kilogram-Force Centimeter', 'kilogram-force-centimeter'],
  ['Kilogram-Force Millimeter', 'kilogram-force-millimeter'],
  ['Gram-Force Meter', 'gram-force-meter-gfm'],
  ['Gram-Force Centimeter', 'gram-force-centimeter'],
  ['Gram-Force Millimeter', 'gram-force-millimeter'],
  ['Ounce-Force Foot', 'ounce-force-foot-ozfft'],
  ['Ounce-Force Inch', 'ounce-force-inch-ozfin'],
  ['Pound-Force Foot', 'pound-force-foot-lbfft'],
  ['Pound-Force Inch', 'pound-force-inch-lbfin']
];




const conversionFactors = {
 'newton-meter-nm-to-newton-centimeter-ncm':100,
'newton-meter-nm-to-newton-millimeter-nmm':1000,
'newton-meter-nm-to-kilonewton-meter-knm':0.001,
'newton-meter-nm-to-dyne-meter-dynm':100000,
'newton-meter-nm-to-dyne-centimeter-dyncm':10000000,
'newton-meter-nm-to-dyne-millimeter-dynmm':100000000,
'newton-meter-nm-to-kilogram-force-meter':0.101971621298,
'newton-meter-nm-to-kilogram-force-centimeter':10.1971621298,
'newton-meter-nm-to-kilogram-force-millimeter':101.971621298,
'newton-meter-nm-to-gram-force-meter-gfm':101.971621298,
'newton-meter-nm-to-gram-force-centimeter':10197.1621298,
'newton-meter-nm-to-gram-force-millimeter':101971.621298,
'newton-meter-nm-to-ounce-force-foot-ozfft':11.8009943565,
'newton-meter-nm-to-ounce-force-inch-ozfin':141.611928936,
'newton-meter-nm-to-pound-force-foot-lbfft':0.737562149458,
'newton-meter-nm-to-pound-force-inch-lbfin':8.85074579349,
'newton-centimeter-ncm-to-newton-meter-nm':0.01,
'newton-centimeter-ncm-to-newton-millimeter-nmm':10,
'newton-centimeter-ncm-to-kilonewton-meter-knm':1e-05,
'newton-centimeter-ncm-to-dyne-meter-dynm':1000,
'newton-centimeter-ncm-to-dyne-centimeter-dyncm':100000,
'newton-centimeter-ncm-to-dyne-millimeter-dynmm':1000000,
'newton-centimeter-ncm-to-kilogram-force-meter':0.00101971621298,
'newton-centimeter-ncm-to-kilogram-force-centimeter':0.101971621298,
'newton-centimeter-ncm-to-kilogram-force-millimeter':1.01971621298,
'newton-centimeter-ncm-to-gram-force-meter-gfm':1.01971621298,
'newton-centimeter-ncm-to-gram-force-centimeter':101.971621298,
'newton-centimeter-ncm-to-gram-force-millimeter':1019.71621298,
'newton-centimeter-ncm-to-ounce-force-foot-ozfft':0.118009943565,
'newton-centimeter-ncm-to-ounce-force-inch-ozfin':1.41611928936,
'newton-centimeter-ncm-to-pound-force-foot-lbfft':0.00737562149458,
'newton-centimeter-ncm-to-pound-force-inch-lbfin':0.0885074579349,
'newton-millimeter-nmm-to-newton-meter-nm':0.001,
'newton-millimeter-nmm-to-newton-centimeter-ncm':0.1,
'newton-millimeter-nmm-to-kilonewton-meter-knm':1e-06,
'newton-millimeter-nmm-to-dyne-meter-dynm':100,
'newton-millimeter-nmm-to-dyne-centimeter-dyncm':10000,
'newton-millimeter-nmm-to-dyne-millimeter-dynmm':100000,
'newton-millimeter-nmm-to-kilogram-force-meter':0.000101971621298,
'newton-millimeter-nmm-to-kilogram-force-centimeter':0.0101971621298,
'newton-millimeter-nmm-to-kilogram-force-millimeter':0.101971621298,
'newton-millimeter-nmm-to-gram-force-meter-gfm':0.101971621298,
'newton-millimeter-nmm-to-gram-force-centimeter':10.1971621298,
'newton-millimeter-nmm-to-gram-force-millimeter':101.971621298,
'newton-millimeter-nmm-to-ounce-force-foot-ozfft':0.0118009943565,
'newton-millimeter-nmm-to-ounce-force-inch-ozfin':0.141611928936,
'newton-millimeter-nmm-to-pound-force-foot-lbfft':0.000737562149458,
'newton-millimeter-nmm-to-pound-force-inch-lbfin':0.00885074579349,
'kilonewton-meter-knm-to-newton-meter-nm':1000,
'kilonewton-meter-knm-to-newton-centimeter-ncm':100000,
'kilonewton-meter-knm-to-newton-millimeter-nmm':1000000,
'kilonewton-meter-knm-to-dyne-meter-dynm':100000000,
'kilonewton-meter-knm-to-dyne-centimeter-dyncm':10000000000,
'kilonewton-meter-knm-to-dyne-millimeter-dynmm':100000000000,
'kilonewton-meter-knm-to-kilogram-force-meter':101.971621298,
'kilonewton-meter-knm-to-kilogram-force-centimeter':10197.1621298,
'kilonewton-meter-knm-to-kilogram-force-millimeter':101971.621298,
'kilonewton-meter-knm-to-gram-force-meter-gfm':101971.621298,
'kilonewton-meter-knm-to-gram-force-centimeter':10197162.1298,
'kilonewton-meter-knm-to-gram-force-millimeter':101971621.298,
'kilonewton-meter-knm-to-ounce-force-foot-ozfft':11800.9943565,
'kilonewton-meter-knm-to-ounce-force-inch-ozfin':141611.928936,
'kilonewton-meter-knm-to-pound-force-foot-lbfft':737.562149458,
'kilonewton-meter-knm-to-pound-force-inch-lbfin':8850.74579349,
'dyne-meter-dynm-to-newton-meter-nm':1e-05,
'dyne-meter-dynm-to-newton-centimeter-ncm':0.001,
'dyne-meter-dynm-to-newton-millimeter-nmm':0.01,
'dyne-meter-dynm-to-kilonewton-meter-knm':1e-08,
'dyne-meter-dynm-to-dyne-centimeter-dyncm':100,
'dyne-meter-dynm-to-dyne-millimeter-dynmm':1000,
'dyne-meter-dynm-to-kilogram-force-meter':1.01971621298e-06,
'dyne-meter-dynm-to-kilogram-force-centimeter':0.000101971621298,
'dyne-meter-dynm-to-kilogram-force-millimeter':0.00101971621298,
'dyne-meter-dynm-to-gram-force-meter-gfm':0.00101971621298,
'dyne-meter-dynm-to-gram-force-centimeter':0.101971621298,
'dyne-meter-dynm-to-gram-force-millimeter':1.01971621298,
'dyne-meter-dynm-to-ounce-force-foot-ozfft':0.000118009943565,
'dyne-meter-dynm-to-ounce-force-inch-ozfin':0.00141611928936,
'dyne-meter-dynm-to-pound-force-foot-lbfft':7.37562149458e-06,
'dyne-meter-dynm-to-pound-force-inch-lbfin':8.85074579349e-05,
'dyne-centimeter-dyncm-to-newton-meter-nm':1e-07,
'dyne-centimeter-dyncm-to-newton-centimeter-ncm':1e-05,
'dyne-centimeter-dyncm-to-newton-millimeter-nmm':0.0001,
'dyne-centimeter-dyncm-to-kilonewton-meter-knm':1e-10,
'dyne-centimeter-dyncm-to-dyne-meter-dynm':0.01,
'dyne-centimeter-dyncm-to-dyne-millimeter-dynmm':10,
'dyne-centimeter-dyncm-to-kilogram-force-meter':1.01971621298e-08,
'dyne-centimeter-dyncm-to-kilogram-force-centimeter':1.01971621298e-06,
'dyne-centimeter-dyncm-to-kilogram-force-millimeter':1.01971621298e-05,
'dyne-centimeter-dyncm-to-gram-force-meter-gfm':1.01971621298e-05,
'dyne-centimeter-dyncm-to-gram-force-centimeter':0.00101971621298,
'dyne-centimeter-dyncm-to-gram-force-millimeter':0.0101971621298,
'dyne-centimeter-dyncm-to-ounce-force-foot-ozfft':1.18009943565e-06,
'dyne-centimeter-dyncm-to-ounce-force-inch-ozfin':1.41611928936e-05,
'dyne-centimeter-dyncm-to-pound-force-foot-lbfft':7.37562149458e-08,
'dyne-centimeter-dyncm-to-pound-force-inch-lbfin':8.85074579349e-07,
'dyne-millimeter-dynmm-to-newton-meter-nm':1e-08,
'dyne-millimeter-dynmm-to-newton-centimeter-ncm':1e-06,
'dyne-millimeter-dynmm-to-newton-millimeter-nmm':1e-05,
'dyne-millimeter-dynmm-to-kilonewton-meter-knm':1e-11,
'dyne-millimeter-dynmm-to-dyne-meter-dynm':0.001,
'dyne-millimeter-dynmm-to-dyne-centimeter-dyncm':0.1,
'dyne-millimeter-dynmm-to-kilogram-force-meter':1.01971621298e-09,
'dyne-millimeter-dynmm-to-kilogram-force-centimeter':1.01971621298e-07,
'dyne-millimeter-dynmm-to-kilogram-force-millimeter':1.01971621298e-06,
'dyne-millimeter-dynmm-to-gram-force-meter-gfm':1.01971621298e-06,
'dyne-millimeter-dynmm-to-gram-force-centimeter':0.000101971621298,
'dyne-millimeter-dynmm-to-gram-force-millimeter':0.00101971621298,
'dyne-millimeter-dynmm-to-ounce-force-foot-ozfft':1.18009943565e-07,
'dyne-millimeter-dynmm-to-ounce-force-inch-ozfin':1.41611928936e-06,
'dyne-millimeter-dynmm-to-pound-force-foot-lbfft':7.37562149458e-09,
'dyne-millimeter-dynmm-to-pound-force-inch-lbfin':8.85074579349e-08,
'kilogram-force-meter-to-newton-meter-nm':9.80665,
'kilogram-force-meter-to-newton-centimeter-ncm':980.665,
'kilogram-force-meter-to-newton-millimeter-nmm':9806.65,
'kilogram-force-meter-to-kilonewton-meter-knm':0.00980665,
'kilogram-force-meter-to-dyne-meter-dynm':980665,
'kilogram-force-meter-to-dyne-centimeter-dyncm':98066500,
'kilogram-force-meter-to-dyne-millimeter-dynmm':980665000,
'kilogram-force-meter-to-kilogram-force-centimeter':100,
'kilogram-force-meter-to-kilogram-force-millimeter':1000,
'kilogram-force-meter-to-gram-force-meter-gfm':1000,
'kilogram-force-meter-to-gram-force-centimeter':100000,
'kilogram-force-meter-to-gram-force-millimeter':1000000,
'kilogram-force-meter-to-ounce-force-foot-ozfft':115.728221306,
'kilogram-force-meter-to-ounce-force-inch-ozfin':1388.7386229,
'kilogram-force-meter-to-pound-force-foot-lbfft':7.23301385298,
'kilogram-force-meter-to-pound-force-inch-lbfin':86.7961662357,
'kilogram-force-centimeter-to-newton-meter-nm':0.0980665,
'kilogram-force-centimeter-to-newton-centimeter-ncm':9.80665,
'kilogram-force-centimeter-to-newton-millimeter-nmm':98.0665,
'kilogram-force-centimeter-to-kilonewton-meter-knm':9.80665e-05,
'kilogram-force-centimeter-to-dyne-meter-dynm':9806.65,
'kilogram-force-centimeter-to-dyne-centimeter-dyncm':980665,
'kilogram-force-centimeter-to-dyne-millimeter-dynmm':9806650,
'kilogram-force-centimeter-to-kilogram-force-meter':0.01,
'kilogram-force-centimeter-to-kilogram-force-millimeter':10,
'kilogram-force-centimeter-to-gram-force-meter-gfm':10,
'kilogram-force-centimeter-to-gram-force-centimeter':1000,
'kilogram-force-centimeter-to-gram-force-millimeter':10000,
'kilogram-force-centimeter-to-ounce-force-foot-ozfft':1.15728221306,
'kilogram-force-centimeter-to-ounce-force-inch-ozfin':13.887386229,
'kilogram-force-centimeter-to-pound-force-foot-lbfft':0.0723301385298,
'kilogram-force-centimeter-to-pound-force-inch-lbfin':0.867961662357,
'kilogram-force-millimeter-to-newton-meter-nm':0.00980665,
'kilogram-force-millimeter-to-newton-centimeter-ncm':0.980665,
'kilogram-force-millimeter-to-newton-millimeter-nmm':9.80665,
'kilogram-force-millimeter-to-kilonewton-meter-knm':9.80665e-06,
'kilogram-force-millimeter-to-dyne-meter-dynm':980.665,
'kilogram-force-millimeter-to-dyne-centimeter-dyncm':98066.5,
'kilogram-force-millimeter-to-dyne-millimeter-dynmm':980665,
'kilogram-force-millimeter-to-kilogram-force-meter':0.001,
'kilogram-force-millimeter-to-kilogram-force-centimeter':0.1,
'kilogram-force-millimeter-to-gram-force-meter-gfm':1,
'kilogram-force-millimeter-to-gram-force-centimeter':100,
'kilogram-force-millimeter-to-gram-force-millimeter':1000,
'kilogram-force-millimeter-to-ounce-force-foot-ozfft':0.115728221306,
'kilogram-force-millimeter-to-ounce-force-inch-ozfin':1.3887386229,
'kilogram-force-millimeter-to-pound-force-foot-lbfft':0.00723301385298,
'kilogram-force-millimeter-to-pound-force-inch-lbfin':0.0867961662357,
'gram-force-meter-gfm-to-newton-meter-nm':0.00980665,
'gram-force-meter-gfm-to-newton-centimeter-ncm':0.980665,
'gram-force-meter-gfm-to-newton-millimeter-nmm':9.80665,
'gram-force-meter-gfm-to-kilonewton-meter-knm':9.80665e-06,
'gram-force-meter-gfm-to-dyne-meter-dynm':980.665,
'gram-force-meter-gfm-to-dyne-centimeter-dyncm':98066.5,
'gram-force-meter-gfm-to-dyne-millimeter-dynmm':980665,
'gram-force-meter-gfm-to-kilogram-force-meter':0.001,
'gram-force-meter-gfm-to-kilogram-force-centimeter':0.1,
'gram-force-meter-gfm-to-kilogram-force-millimeter':1,
'gram-force-meter-gfm-to-gram-force-centimeter':100,
'gram-force-meter-gfm-to-gram-force-millimeter':1000,
'gram-force-meter-gfm-to-ounce-force-foot-ozfft':0.115728221306,
'gram-force-meter-gfm-to-ounce-force-inch-ozfin':1.3887386229,
'gram-force-meter-gfm-to-pound-force-foot-lbfft':0.00723301385298,
'gram-force-meter-gfm-to-pound-force-inch-lbfin':0.0867961662357,
'gram-force-centimeter-to-newton-meter-nm':9.80665e-05,
'gram-force-centimeter-to-newton-centimeter-ncm':0.00980665,
'gram-force-centimeter-to-newton-millimeter-nmm':0.0980665,
'gram-force-centimeter-to-kilonewton-meter-knm':9.80665e-08,
'gram-force-centimeter-to-dyne-meter-dynm':9.80665,
'gram-force-centimeter-to-dyne-centimeter-dyncm':980.665,
'gram-force-centimeter-to-dyne-millimeter-dynmm':9806.65,
'gram-force-centimeter-to-kilogram-force-meter':1e-05,
'gram-force-centimeter-to-kilogram-force-centimeter':0.001,
'gram-force-centimeter-to-kilogram-force-millimeter':0.01,
'gram-force-centimeter-to-gram-force-meter-gfm':0.01,
'gram-force-centimeter-to-gram-force-millimeter':10,
'gram-force-centimeter-to-ounce-force-foot-ozfft':0.00115728221306,
'gram-force-centimeter-to-ounce-force-inch-ozfin':0.013887386229,
'gram-force-centimeter-to-pound-force-foot-lbfft':7.23301385298e-05,
'gram-force-centimeter-to-pound-force-inch-lbfin':0.000867961662357,
'gram-force-millimeter-to-newton-meter-nm':9.80665e-06,
'gram-force-millimeter-to-newton-centimeter-ncm':0.000980665,
'gram-force-millimeter-to-newton-millimeter-nmm':0.00980665,
'gram-force-millimeter-to-kilonewton-meter-knm':9.80665e-09,
'gram-force-millimeter-to-dyne-meter-dynm':0.980665,
'gram-force-millimeter-to-dyne-centimeter-dyncm':98.0665,
'gram-force-millimeter-to-dyne-millimeter-dynmm':980.665,
'gram-force-millimeter-to-kilogram-force-meter':1e-06,
'gram-force-millimeter-to-kilogram-force-centimeter':0.0001,
'gram-force-millimeter-to-kilogram-force-millimeter':0.001,
'gram-force-millimeter-to-gram-force-meter-gfm':0.001,
'gram-force-millimeter-to-gram-force-centimeter':0.1,
'gram-force-millimeter-to-ounce-force-foot-ozfft':0.000115728221306,
'gram-force-millimeter-to-ounce-force-inch-ozfin':0.0013887386229,
'gram-force-millimeter-to-pound-force-foot-lbfft':7.23301385298e-06,
'gram-force-millimeter-to-pound-force-inch-lbfin':8.67961662357e-05,
'ounce-force-foot-ozfft-to-newton-meter-nm':0.084738622,
'ounce-force-foot-ozfft-to-newton-centimeter-ncm':8.4738622,
'ounce-force-foot-ozfft-to-newton-millimeter-nmm':84.738622,
'ounce-force-foot-ozfft-to-kilonewton-meter-knm':8.4738622e-05,
'ounce-force-foot-ozfft-to-dyne-meter-dynm':8473.8622,
'ounce-force-foot-ozfft-to-dyne-centimeter-dyncm':847386.22,
'ounce-force-foot-ozfft-to-dyne-millimeter-dynmm':8473862.2,
'ounce-force-foot-ozfft-to-kilogram-force-meter':0.00864093467188,
'ounce-force-foot-ozfft-to-kilogram-force-centimeter':0.864093467188,
'ounce-force-foot-ozfft-to-kilogram-force-millimeter':8.64093467188,
'ounce-force-foot-ozfft-to-gram-force-meter-gfm':8.64093467188,
'ounce-force-foot-ozfft-to-gram-force-centimeter':864.093467188,
'ounce-force-foot-ozfft-to-gram-force-millimeter':8640.93467188,
'ounce-force-foot-ozfft-to-ounce-force-inch-ozfin':11.9999997168,
'ounce-force-foot-ozfft-to-pound-force-foot-lbfft':0.0625000001844,
'ounce-force-foot-ozfft-to-pound-force-inch-lbfin':0.750000002213,
'ounce-force-inch-ozfin-to-newton-meter-nm':0.007061552,
'ounce-force-inch-ozfin-to-newton-centimeter-ncm':0.7061552,
'ounce-force-inch-ozfin-to-newton-millimeter-nmm':7.061552,
'ounce-force-inch-ozfin-to-kilonewton-meter-knm':7.061552e-06,
'ounce-force-inch-ozfin-to-dyne-meter-dynm':706.1552,
'ounce-force-inch-ozfin-to-dyne-centimeter-dyncm':70615.52,
'ounce-force-inch-ozfin-to-dyne-millimeter-dynmm':706155.2,
'ounce-force-inch-ozfin-to-kilogram-force-meter':0.000720077906319,
'ounce-force-inch-ozfin-to-kilogram-force-centimeter':0.0720077906319,
'ounce-force-inch-ozfin-to-kilogram-force-millimeter':0.720077906319,
'ounce-force-inch-ozfin-to-gram-force-meter-gfm':0.720077906319,
'ounce-force-inch-ozfin-to-gram-force-centimeter':72.0077906319,
'ounce-force-inch-ozfin-to-gram-force-millimeter':720.077906319,
'ounce-force-inch-ozfin-to-ounce-force-foot-ozfft':0.0833333353002,
'ounce-force-inch-ozfin-to-pound-force-foot-lbfft':0.00520833347163,
'ounce-force-inch-ozfin-to-pound-force-inch-lbfin':0.0625000016595,
'pound-force-foot-lbfft-to-newton-meter-nm':1.355817948,
'pound-force-foot-lbfft-to-newton-centimeter-ncm':135.5817948,
'pound-force-foot-lbfft-to-newton-millimeter-nmm':1355.817948,
'pound-force-foot-lbfft-to-kilonewton-meter-knm':0.001355817948,
'pound-force-foot-lbfft-to-dyne-meter-dynm':135581.7948,
'pound-force-foot-lbfft-to-dyne-centimeter-dyncm':13558179.48,
'pound-force-foot-lbfft-to-dyne-millimeter-dynmm':135581794.8,
'pound-force-foot-lbfft-to-kilogram-force-meter':0.138254954342,
'pound-force-foot-lbfft-to-kilogram-force-centimeter':13.8254954342,
'pound-force-foot-lbfft-to-kilogram-force-millimeter':138.254954342,
'pound-force-foot-lbfft-to-gram-force-meter-gfm':138.254954342,
'pound-force-foot-lbfft-to-gram-force-centimeter':13825.4954342,
'pound-force-foot-lbfft-to-gram-force-millimeter':138254.954342,
'pound-force-foot-lbfft-to-ounce-force-foot-ozfft':15.9999999528,
'pound-force-foot-lbfft-to-ounce-force-inch-ozfin':191.999994902,
'pound-force-foot-lbfft-to-pound-force-inch-lbfin':12,
'pound-force-inch-lbfin-to-newton-meter-nm':0.112984829,
'pound-force-inch-lbfin-to-newton-centimeter-ncm':11.2984829,
'pound-force-inch-lbfin-to-newton-millimeter-nmm':112.984829,
'pound-force-inch-lbfin-to-kilonewton-meter-knm':0.000112984829,
'pound-force-inch-lbfin-to-dyne-meter-dynm':11298.4829,
'pound-force-inch-lbfin-to-dyne-centimeter-dyncm':1129848.29,
'pound-force-inch-lbfin-to-dyne-millimeter-dynmm':11298482.9,
'pound-force-inch-lbfin-to-kilogram-force-meter':0.0115212461952,
'pound-force-inch-lbfin-to-kilogram-force-centimeter':1.15212461952,
'pound-force-inch-lbfin-to-kilogram-force-millimeter':11.5212461952,
'pound-force-inch-lbfin-to-gram-force-meter-gfm':11.5212461952,
'pound-force-inch-lbfin-to-gram-force-centimeter':1152.12461952,
'pound-force-inch-lbfin-to-gram-force-millimeter':11521.2461952,
'pound-force-inch-lbfin-to-ounce-force-foot-ozfft':1.3333333294,
'pound-force-inch-lbfin-to-ounce-force-inch-ozfin':15.9999995752,
'pound-force-inch-lbfin-to-pound-force-foot-lbfft':0.0833333333333
};

const HUB = "newton-meter";
const baseTo = new Map(), toBase = new Map();
for (const [k,v] of Object.entries(conversionFactors)){
  const parts = k.split("-to-");
  if(parts.length!==2) continue;
  const A = parts[0], B = parts[1];
  if (A===HUB) baseTo.set(B, v);
  if (B===HUB) toBase.set(A, v);
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

  const q = ($("#filter").value||"").toLowerCase();
  if(!Number.isFinite(val)){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }
  const rows = [];
  for(const [label,tok] of UNITS){
    if(tok===from) continue;
    if(q && !label.toLowerCase().includes(q)) continue;
    const f = factor(from,tok);
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
    const f = $("#fromUnit"), t = $("#toUnit");
    const a = f.value; f.value = t.value; t.value = a;
    render();
  });
});
</script>
</body>
</html>
