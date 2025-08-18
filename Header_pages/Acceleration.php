<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
<title>Acceleration Converter: m/s², cm/s², gal, ft/s², g & More</title>

<meta name="description" content="Free acceleration converter for physics, engineering, and science. Instantly convert meter per square second (m/s²), centimeter per square second (cm/s²), gal, galileo, mile/s², yard/s², foot/s², inch/s², acceleration of gravity (g), and more — fast results with formulas and examples." />

<meta name="keywords" content="acceleration converter, m/s², meter per square second, decimeter per square second, kilometer per square second, hectometer per square second, dekameter per square second, centimeter per square second, millimeter per square second, micrometer per square second, nanometer per square second, picometer per square second, femtometer per square second, attometer per square second, gal, galileo, mile per square second, yard per square second, foot per square second, inch per square second, acceleration of gravity, physics acceleration calculator" />

  <!-- Site stylesheet -->
  <link href="../css/sub_main_pages.css" rel="stylesheet"/>

  <!-- Page-specific layout to mirror your screenshot -->
  <style>
    /* 2 rows × 3 cols: left | swap | right; swap spans both rows */
    .converter-tool{
      display:grid;
      grid-template-columns:1fr 44px 1fr;
      grid-template-rows:auto auto;
      gap:15px;
      align-items:end;
    }
    .cell-value {grid-column:1;grid-row:1}
    .cell-result{grid-column:3;grid-row:1}
    .cell-to    {grid-column:1;grid-row:2}
    .cell-from  {grid-column:3;grid-row:2}

    .swap-btn{
      grid-column:2;grid-row:1 / span 2;
      width:44px;height:44px;border-radius:6px;
      background:var(--light-bg);border:1px solid var(--border-color);
      display:flex;align-items:center;justify-content:center;cursor:pointer;
    }
    .swap-btn:hover{background:var(--border-color)}

    /* Sticky right rail (no inner scroll) */
    .ad-section{position:sticky;top:16px}

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
          <h2>Acceleration Conversions</h2>

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

          <h3 style="margin-top:20px">Equivalent Accelerations</h3>
          <table class="conversion-table">
            <thead><tr><th style="width:48%">Unit</th><th>Value</th></tr></thead>
            <tbody id="tbody"><tr><td colspan="2">Waiting for input…</td></tr></tbody>
          </table>
        </div>

        <div class="description-section">
          <div class="info-section">
            <h3>Popular Acceleration Conversions</h3>
            <ul>
              <li><a href="../Engineering_and_Technical _Conversions_Acceleration/meter-square-second-to-foot-square-second.php">meter/square second to foot/square second</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Acceleration/meter-square-second-to-acceleration-of-gravity.php">meter/square second to Acceleration of gravity</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Acceleration/foot-square-second-to-meter-square-second.php">foot/square second to meter/square second</a></li>
              <li><a href="../Engineering_and_Technical _Conversions_Acceleration/acceleration-of-gravity-to-meter-square-second.php">Acceleration of gravity to meter/square second</a></li>
            </ul>
          </div>
        </div>

      </section>

      <!-- RIGHT: sticky rail -->
      <div class="ad-section">
        <h3>Advertisement</h3>
        <div class="ad-placeholder">Ad Space (350x280)</div>
        <?php include '../drawer_menu.php'; ?>
     </div>
    </div>


  </div>
    <?php include '../footer.php'; ?>
<script>
/* =========================
   ACCELERATION — units list
   Tokens match your factor keys, e.g. 'meter-square-second'.
   ========================= */
const UNITS = [
  ['Meter per second² (m/s²)','meter-square-second'],
  ['Kilometer per second² (km/s²)','kilometer-square-second'],
  ['Hectometer per second² (hm/s²)','hectometer-square-second'],
  ['Dekameter per second² (dam/s²)','dekameter-square-second'],
  ['Decimeter per second² (dm/s²)','decimeter-square-second'],
  ['Centimeter per second² (cm/s²)','centimeter-square-second'],
  ['Millimeter per second² (mm/s²)','millimeter-square-second'],
  ['Micrometer per second² (µm/s²)','micrometer-square-second'],
  ['Nanometer per second² (nm/s²)','nanometer-square-second'],
  ['Picometer per second² (pm/s²)','picometer-square-second'],
  ['Femtometer per second² (fm/s²)','femtometer-square-second'],
  ['Attometer per second² (am/s²)','attometer-square-second'],
  ['Mile per second² (mi/s²)','mile-square-second'],
  ['Yard per second² (yd/s²)','yard-square-second'],
  ['Foot per second² (ft/s²)','foot-square-second'],
  ['Inch per second² (in/s²)','inch-square-second'],
  ['Gal','gal'],
  ['Galileo','galileo'],
  ['Acceleration of gravity (g)','acceleration-of-gravity']
];

/* =========================
   Conversion factors
   Replace this demo subset with YOUR full object
   (the long list like 'meter-square-second-to-gal', etc.)
   ========================= */
const conversionFactors = {
'meter-square-second-to-decimeter-square-second' :10,
'meter-square-second-to-kilometer-square-second' :0.001,
'meter-square-second-to-hectometer-square-second' :0.01,
'meter-square-second-to-dekameter-square-second' :0.1,
'meter-square-second-to-centimeter-square-second' :100,
'meter-square-second-to-millimeter-square-second' :1000,
'meter-square-second-to-micrometer-square-second' :1000000,
'meter-square-second-to-nanometer-square-second' :1000000000,
'meter-square-second-to-picometer-square-second' :1000000000000,
'meter-square-second-to-femtometer-square-second' :1000000000000000,
'meter-square-second-to-attometer-square-second' :1000000000000000000,
'meter-square-second-to-gal' :100,
'meter-square-second-to-galileo' :100,
'meter-square-second-to-mile-square-second' :0.0006213712,
'meter-square-second-to-yard-square-second' :1.0936132983,
'meter-square-second-to-foot-square-second' :3.280839895,
'meter-square-second-to-inch-square-second' :39.37007874,
'meter-square-second-to-acceleration-of-gravity' :0.1019716213,
'decimeter-square-second-to-meter-square-second' :0.1,
'decimeter-square-second-to-kilometer-square-second' :0.0001,
'decimeter-square-second-to-hectometer-square-second' :0.001,
'decimeter-square-second-to-dekameter-square-second' :0.01,
'decimeter-square-second-to-centimeter-square-second' :10,
'decimeter-square-second-to-millimeter-square-second' :100,
'decimeter-square-second-to-micrometer-square-second' :100000,
'decimeter-square-second-to-nanometer-square-second' :100000000,
'decimeter-square-second-to-picometer-square-second' :100000000000,
'decimeter-square-second-to-femtometer-square-second' :100000000000000,
'decimeter-square-second-to-attometer-square-second' :100000000000000000,
'decimeter-square-second-to-gal' :10,
'decimeter-square-second-to-galileo' :10,
'decimeter-square-second-to-mile-square-second' :0.0000621371,
'decimeter-square-second-to-yard-square-second' :0.1093613298,
'decimeter-square-second-to-foot-square-second' :0.3280839895,
'decimeter-square-second-to-inch-square-second' :3.937007874,
'decimeter-square-second-to-acceleration-of-gravity' :0.0101971621,
'kilometer-square-second-to-meter-square-second' :1000,
'kilometer-square-second-to-decimeter-square-second' :10000,
'kilometer-square-second-to-hectometer-square-second' :10,
'kilometer-square-second-to-dekameter-square-second' :100,
'kilometer-square-second-to-centimeter-square-second' :100000,
'kilometer-square-second-to-millimeter-square-second' :1000000,
'kilometer-square-second-to-micrometer-square-second' :1000000000,
'kilometer-square-second-to-nanometer-square-second' :1000000000000,
'kilometer-square-second-to-picometer-square-second' :1000000000000000,
'kilometer-square-second-to-femtometer-square-second' :1000000000000000000,
'kilometer-square-second-to-attometer-square-second' :1E+21,
'kilometer-square-second-to-gal' :100000,
'kilometer-square-second-to-galileo' :100000,
'kilometer-square-second-to-mile-square-second' :0.6213711922,
'kilometer-square-second-to-yard-square-second' :1093.6132983,
'kilometer-square-second-to-foot-square-second' :3280.839895,
'kilometer-square-second-to-inch-square-second' :39370.07874,
'kilometer-square-second-to-acceleration-of-gravity' :101.9716213,
'hectometer-square-second-to-meter-square-second' :100,
'hectometer-square-second-to-decimeter-square-second' :1000,
'hectometer-square-second-to-kilometer-square-second' :0.1,
'hectometer-square-second-to-dekameter-square-second' :10,
'hectometer-square-second-to-centimeter-square-second' :10000,
'hectometer-square-second-to-millimeter-square-second' :100000,
'hectometer-square-second-to-micrometer-square-second' :100000000,
'hectometer-square-second-to-nanometer-square-second' :100000000000,
'hectometer-square-second-to-picometer-square-second' :100000000000000,
'hectometer-square-second-to-femtometer-square-second' :100000000000000000,
'hectometer-square-second-to-attometer-square-second' :1E+20,
'hectometer-square-second-to-gal' :10000,
'hectometer-square-second-to-galileo' :10000,
'hectometer-square-second-to-mile-square-second' :0.0621371192,
'hectometer-square-second-to-yard-square-second' :109.36132983,
'hectometer-square-second-to-foot-square-second' :328.0839895,
'hectometer-square-second-to-inch-square-second' :3937.007874,
'hectometer-square-second-to-acceleration-of-gravity' :10.19716213,
'dekameter-square-second-to-meter-square-second' :10,
'dekameter-square-second-to-decimeter-square-second' :100,
'dekameter-square-second-to-kilometer-square-second' :0.01,
'dekameter-square-second-to-hectometer-square-second' :0.1,
'dekameter-square-second-to-centimeter-square-second' :1000,
'dekameter-square-second-to-millimeter-square-second' :10000,
'dekameter-square-second-to-micrometer-square-second' :10000000,
'dekameter-square-second-to-nanometer-square-second' :10000000000,
'dekameter-square-second-to-picometer-square-second' :10000000000000,
'dekameter-square-second-to-femtometer-square-second' :10000000000000000,
'dekameter-square-second-to-attometer-square-second' :10000000000000000000,
'dekameter-square-second-to-gal' :1000,
'dekameter-square-second-to-galileo' :1000,
'dekameter-square-second-to-mile-square-second' :0.0062137119,
'dekameter-square-second-to-yard-square-second' :10.936132983,
'dekameter-square-second-to-foot-square-second' :32.80839895,
'dekameter-square-second-to-inch-square-second' :393.7007874,
'dekameter-square-second-to-acceleration-of-gravity' :1.019716213,
'centimeter-square-second-to-meter-square-second' :0.01,
'centimeter-square-second-to-decimeter-square-second' :0.1,
'centimeter-square-second-to-kilometer-square-second' :0.00001,
'centimeter-square-second-to-hectometer-square-second' :0.0001,
'centimeter-square-second-to-dekameter-square-second' :0.001,
'centimeter-square-second-to-millimeter-square-second' :10,
'centimeter-square-second-to-micrometer-square-second' :10000,
'centimeter-square-second-to-nanometer-square-second' :10000000,
'centimeter-square-second-to-picometer-square-second' :10000000000,
'centimeter-square-second-to-femtometer-square-second' :10000000000000,
'centimeter-square-second-to-attometer-square-second' :10000000000000000,
'centimeter-square-second-to-gal' :1,
'centimeter-square-second-to-galileo' :1,
'centimeter-square-second-to-mile-square-second' :0.0000062137,
'centimeter-square-second-to-yard-square-second' :0.010936133,
'centimeter-square-second-to-foot-square-second' :0.032808399,
'centimeter-square-second-to-inch-square-second' :0.3937007874,
'centimeter-square-second-to-acceleration-of-gravity' :0.0010197162,
'millimeter-square-second-to-meter-square-second' :0.001,
'millimeter-square-second-to-decimeter-square-second' :0.01,
'millimeter-square-second-to-kilometer-square-second' :0.000001,
'millimeter-square-second-to-hectometer-square-second' :0.00001,
'millimeter-square-second-to-dekameter-square-second' :0.0001,
'millimeter-square-second-to-centimeter-square-second' :0.1,
'millimeter-square-second-to-micrometer-square-second' :1000,
'millimeter-square-second-to-nanometer-square-second' :1000000,
'millimeter-square-second-to-picometer-square-second' :1000000000,
'millimeter-square-second-to-femtometer-square-second' :1000000000000,
'millimeter-square-second-to-attometer-square-second' :1000000000000000,
'millimeter-square-second-to-gal' :0.1,
'millimeter-square-second-to-galileo' :0.1,
'millimeter-square-second-to-mile-square-second' :0.0000006213711922,
'millimeter-square-second-to-yard-square-second' :0.0010936133,
'millimeter-square-second-to-foot-square-second' :0.0032808399,
'millimeter-square-second-to-inch-square-second' :0.0393700787,
'millimeter-square-second-to-acceleration-of-gravity' :0.0001019716,
'micrometer-square-second-to-meter-square-second' :0.000001,
'micrometer-square-second-to-decimeter-square-second' :0.00001,
'micrometer-square-second-to-kilometer-square-second' :0.000000001,
'micrometer-square-second-to-hectometer-square-second' :0.00000001,
'micrometer-square-second-to-dekameter-square-second' :0.0000001,
'micrometer-square-second-to-centimeter-square-second' :0.0001,
'micrometer-square-second-to-millimeter-square-second' :0.001,
'micrometer-square-second-to-nanometer-square-second' :1000,
'micrometer-square-second-to-picometer-square-second' :1000000,
'micrometer-square-second-to-femtometer-square-second' :1000000000,
'micrometer-square-second-to-attometer-square-second' :1000000000000,
'micrometer-square-second-to-gal' :0.0001,
'micrometer-square-second-to-galileo' :0.0001,
'micrometer-square-second-to-mile-square-second' :6.213711922E-10,
'micrometer-square-second-to-yard-square-second' :0.0000010936,
'micrometer-square-second-to-foot-square-second' :0.0000032808,
'micrometer-square-second-to-inch-square-second' :0.0000393701,
'micrometer-square-second-to-acceleration-of-gravity' :0.0000001019716212,
'nanometer-square-second-to-meter-square-second' :0.000000001,
'nanometer-square-second-to-decimeter-square-second' :0.00000001,
'nanometer-square-second-to-kilometer-square-second' :0.000000000001,
'nanometer-square-second-to-hectometer-square-second' :0.00000000001,
'nanometer-square-second-to-dekameter-square-second' :0.0000000001,
'nanometer-square-second-to-centimeter-square-second' :0.0000001,
'nanometer-square-second-to-millimeter-square-second' :0.000001,
'nanometer-square-second-to-micrometer-square-second' :0.001,
'nanometer-square-second-to-picometer-square-second' :1000,
'nanometer-square-second-to-femtometer-square-second' :1000000,
'nanometer-square-second-to-attometer-square-second' :1000000000,
'nanometer-square-second-to-gal' :0.0000001,
'nanometer-square-second-to-galileo' :0.0000001,
'nanometer-square-second-to-mile-square-second' :6.213711922E-13,
'nanometer-square-second-to-yard-square-second' :0.000000001093613298,
'nanometer-square-second-to-foot-square-second' :0.000000003280839895,
'nanometer-square-second-to-inch-square-second' :0.00000003937007874,
'nanometer-square-second-to-acceleration-of-gravity' :1.019716212E-10,
'picometer-square-second-to-meter-square-second' :0.000000000001,
'picometer-square-second-to-decimeter-square-second' :0.00000000001,
'picometer-square-second-to-kilometer-square-second' :0.000000000000001,
'picometer-square-second-to-hectometer-square-second' :0.00000000000001,
'picometer-square-second-to-dekameter-square-second' :0.0000000000001,
'picometer-square-second-to-centimeter-square-second' :0.0000000001,
'picometer-square-second-to-millimeter-square-second' :0.000000001,
'picometer-square-second-to-micrometer-square-second' :0.000001,
'picometer-square-second-to-nanometer-square-second' :0.001,
'picometer-square-second-to-femtometer-square-second' :1000,
'picometer-square-second-to-attometer-square-second' :1000000,
'picometer-square-second-to-gal' :0.0000000001,
'picometer-square-second-to-galileo' :0.0000000001,
'picometer-square-second-to-mile-square-second' :6.213711922E-16,
'picometer-square-second-to-yard-square-second' :1.093613298E-12,
'picometer-square-second-to-foot-square-second' :3.280839895E-12,
'picometer-square-second-to-inch-square-second' :3.937007874E-11,
'picometer-square-second-to-acceleration-of-gravity' :1.019716212E-13,
'femtometer-square-second-to-meter-square-second' :0.000000000000001,
'femtometer-square-second-to-decimeter-square-second' :0.00000000000001,
'femtometer-square-second-to-kilometer-square-second' :0.000000000000000001,
'femtometer-square-second-to-hectometer-square-second' :0.00000000000000001,
'femtometer-square-second-to-dekameter-square-second' :0.0000000000000001,
'femtometer-square-second-to-centimeter-square-second' :0.0000000000001,
'femtometer-square-second-to-millimeter-square-second' :0.000000000001,
'femtometer-square-second-to-micrometer-square-second' :0.000000001,
'femtometer-square-second-to-nanometer-square-second' :0.000001,
'femtometer-square-second-to-picometer-square-second' :0.001,
'femtometer-square-second-to-attometer-square-second' :1000,
'femtometer-square-second-to-gal' :0.0000000000001,
'femtometer-square-second-to-galileo' :0.0000000000001,
'femtometer-square-second-to-mile-square-second' :6.213711922E-19,
'femtometer-square-second-to-yard-square-second' :1.093613298E-15,
'femtometer-square-second-to-foot-square-second' :3.280839895E-15,
'femtometer-square-second-to-inch-square-second' :3.937007874E-14,
'femtometer-square-second-to-acceleration-of-gravity' :1.019716212E-16,
'attometer-square-second-to-meter-square-second' :0.000000000000000001,
'attometer-square-second-to-decimeter-square-second' :0.00000000000000001,
'attometer-square-second-to-kilometer-square-second' :1E-21,
'attometer-square-second-to-hectometer-square-second' :1E-20,
'attometer-square-second-to-dekameter-square-second' :1E-19,
'attometer-square-second-to-centimeter-square-second' :0.0000000000000001,
'attometer-square-second-to-millimeter-square-second' :0.000000000000001,
'attometer-square-second-to-micrometer-square-second' :0.000000000001,
'attometer-square-second-to-nanometer-square-second' :0.000000001,
'attometer-square-second-to-picometer-square-second' :0.000001,
'attometer-square-second-to-femtometer-square-second' :0.001,
'attometer-square-second-to-gal' :0.0000000000000001,
'attometer-square-second-to-galileo' :0.0000000000000001,
'attometer-square-second-to-mile-square-second' :6.213711922E-22,
'attometer-square-second-to-yard-square-second' :1.093613298E-18,
'attometer-square-second-to-foot-square-second' :3.280839895E-18,
'attometer-square-second-to-inch-square-second' :3.937007874E-17,
'attometer-square-second-to-acceleration-of-gravity' :1.019716212E-19,
'gal-to-meter-square-second' :0.01,
'gal-to-decimeter-square-second' :0.1,
'gal-to-kilometer-square-second' :0.00001,
'gal-to-hectometer-square-second' :0.0001,
'gal-to-dekameter-square-second' :0.001,
'gal-to-centimeter-square-second' :1,
'gal-to-millimeter-square-second' :10,
'gal-to-micrometer-square-second' :10000,
'gal-to-nanometer-square-second' :10000000,
'gal-to-picometer-square-second' :10000000000,
'gal-to-femtometer-square-second' :10000000000000,
'gal-to-attometer-square-second' :10000000000000000,
'gal-to-galileo' :1,
'gal-to-mile-square-second' :0.0000062137,
'gal-to-yard-square-second' :0.010936133,
'gal-to-foot-square-second' :0.032808399,
'gal-to-inch-square-second' :0.3937007874,
'gal-to-acceleration-of-gravity' :0.0010197162,
'galileo-to-meter-square-second' :0.01,
'galileo-to-decimeter-square-second' :0.1,
'galileo-to-kilometer-square-second' :0.00001,
'galileo-to-hectometer-square-second' :0.0001,
'galileo-to-dekameter-square-second' :0.001,
'galileo-to-centimeter-square-second' :1,
'galileo-to-millimeter-square-second' :10,
'galileo-to-micrometer-square-second' :10000,
'galileo-to-nanometer-square-second' :10000000,
'galileo-to-picometer-square-second' :10000000000,
'galileo-to-femtometer-square-second' :10000000000000,
'galileo-to-attometer-square-second' :10000000000000000,
'galileo-to-gal' :1,
'galileo-to-mile-square-second' :0.0000062137,
'galileo-to-yard-square-second' :0.010936133,
'galileo-to-foot-square-second' :0.032808399,
'galileo-to-inch-square-second' :0.3937007874,
'galileo-to-acceleration-of-gravity' :0.0010197162,
'mile-square-second-to-meter-square-second' :1609.344,
'mile-square-second-to-decimeter-square-second' :16093.44,
'mile-square-second-to-kilometer-square-second' :1.609344,
'mile-square-second-to-hectometer-square-second' :16.09344,
'mile-square-second-to-dekameter-square-second' :160.9344,
'mile-square-second-to-centimeter-square-second' :160934.4,
'mile-square-second-to-millimeter-square-second' :1609344,
'mile-square-second-to-micrometer-square-second' :1609344000,
'mile-square-second-to-nanometer-square-second' :1609344000000,
'mile-square-second-to-picometer-square-second' :1609344000000010,
'mile-square-second-to-femtometer-square-second' :1609344000000010000,
'mile-square-second-to-attometer-square-second' :1.609344E+21,
'mile-square-second-to-gal' :160934.4,
'mile-square-second-to-galileo' :160934.4,
'mile-square-second-to-yard-square-second' :1760,
'mile-square-second-to-foot-square-second' :5280,
'mile-square-second-to-inch-square-second' :63360,
'mile-square-second-to-acceleration-of-gravity' :164.10741691,
'yard-square-second-to-meter-square-second' :0.9144,
'yard-square-second-to-decimeter-square-second' :9.144,
'yard-square-second-to-kilometer-square-second' :0.0009144,
'yard-square-second-to-hectometer-square-second' :0.009144,
'yard-square-second-to-dekameter-square-second' :0.09144,
'yard-square-second-to-centimeter-square-second' :91.44,
'yard-square-second-to-millimeter-square-second' :914.4,
'yard-square-second-to-micrometer-square-second' :914400,
'yard-square-second-to-nanometer-square-second' :914400000,
'yard-square-second-to-picometer-square-second' :914400000000,
'yard-square-second-to-femtometer-square-second' :914400000000007,
'yard-square-second-to-attometer-square-second' :914400000000006000,
'yard-square-second-to-gal' :91.44,
'yard-square-second-to-galileo' :91.44,
'yard-square-second-to-mile-square-second' :0.0005681818,
'yard-square-second-to-foot-square-second' :3,
'yard-square-second-to-inch-square-second' :36,
'yard-square-second-to-acceleration-of-gravity' :0.0932428505,
'foot-square-second-to-meter-square-second' :0.3048,
'foot-square-second-to-decimeter-square-second' :3.048,
'foot-square-second-to-kilometer-square-second' :0.0003048,
'foot-square-second-to-hectometer-square-second' :0.003048,
'foot-square-second-to-dekameter-square-second' :0.03048,
'foot-square-second-to-centimeter-square-second' :30.48,
'foot-square-second-to-millimeter-square-second' :304.8,
'foot-square-second-to-micrometer-square-second' :304800,
'foot-square-second-to-nanometer-square-second' :304800000,
'foot-square-second-to-picometer-square-second' :304800000000,
'foot-square-second-to-femtometer-square-second' :304800000000002,
'foot-square-second-to-attometer-square-second' :304800000000002000,
'foot-square-second-to-gal' :30.48,
'foot-square-second-to-galileo' :30.48,
'foot-square-second-to-mile-square-second' :0.0001893939,
'foot-square-second-to-yard-square-second' :0.3333333333,
'foot-square-second-to-inch-square-second' :12,
'foot-square-second-to-acceleration-of-gravity' :0.0310809502,
'inch-square-second-to-meter-square-second' :0.0254,
'inch-square-second-to-decimeter-square-second' :0.254,
'inch-square-second-to-kilometer-square-second' :0.0000254,
'inch-square-second-to-hectometer-square-second' :0.000254,
'inch-square-second-to-dekameter-square-second' :0.00254,
'inch-square-second-to-centimeter-square-second' :2.54,
'inch-square-second-to-millimeter-square-second' :25.4,
'inch-square-second-to-micrometer-square-second' :25400,
'inch-square-second-to-nanometer-square-second' :25400000,
'inch-square-second-to-picometer-square-second' :25400000000,
'inch-square-second-to-femtometer-square-second' :25400000000000,
'inch-square-second-to-attometer-square-second' :25400000000000300,
'inch-square-second-to-gal' :2.54,
'inch-square-second-to-galileo' :2.54,
'inch-square-second-to-mile-square-second' :0.0000157828,
'inch-square-second-to-yard-square-second' :0.0277777778,
'inch-square-second-to-foot-square-second' :0.0833333333,
'inch-square-second-to-acceleration-of-gravity' :0.0025900792,
'acceleration-of-gravity-to-meter-square-second' :9.80665,
'acceleration-of-gravity-to-decimeter-square-second' :98.0665,
'acceleration-of-gravity-to-kilometer-square-second' :0.00980665,
'acceleration-of-gravity-to-hectometer-square-second' :0.0980665,
'acceleration-of-gravity-to-dekameter-square-second' :0.980665,
'acceleration-of-gravity-to-centimeter-square-second' :980.665,
'acceleration-of-gravity-to-millimeter-square-second' :9806.65,
'acceleration-of-gravity-to-micrometer-square-second' :9806650,
'acceleration-of-gravity-to-nanometer-square-second' :9806650000,
'acceleration-of-gravity-to-picometer-square-second' :9806650000000,
'acceleration-of-gravity-to-femtometer-square-second' :9806650000000270,
'acceleration-of-gravity-to-attometer-square-second' :9806650000000270000,
'acceleration-of-gravity-to-gal' :980.665,
'acceleration-of-gravity-to-galileo' :980.665,
'acceleration-of-gravity-to-mile-square-second' :0.0060935698,
'acceleration-of-gravity-to-yard-square-second' :10.724682852,
'acceleration-of-gravity-to-foot-square-second' :32.174048556,
'acceleration-of-gravity-to-inch-square-second' :386.08858268
};

/* ============ Hub maps via m/s² ============ */
const HUB = 'meter-square-second';
const baseTo = new Map(), toBase = new Map();
for (const [k, f] of Object.entries(conversionFactors)){
  const [A,B] = k.split('-to-');
  if (!A || !B) continue;
  if (A === HUB) baseTo.set(B, f);
  if (B === HUB) toBase.set(A, f);
}
baseTo.set(HUB,1); toBase.set(HUB,1);

/* =========================
   UI plumbing
   ========================= */
const $ = s => document.querySelector(s);
const tbody = $('#tbody');

function populateOptions(){
  const from = $('#fromUnit'), to = $('#toUnit');
  for (const [label, token] of UNITS){
    from.add(new Option(label, token));
    to.add(new Option(label, token));
  }
  // Nice defaults like your earlier layout
  from.value = 'kilometer-square-second';
  to.value   = 'meter-square-second';
}

function fmt(n){
  if (!Number.isFinite(n)) return '—';
  const a = Math.abs(n);
  if (n !== 0 && (a >= 1e9 || a < 1e-6)) return n.toExponential(6);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(n);
}

/* direct, inverse, or via hub (m/s²) */
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
    out.value = f == null ? '—' : fmt(val * f);
  } else out.value = '—';

  if (!Number.isFinite(val)){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }

  const rows = [];
  for (const [label, tok] of UNITS){
    if (tok === fromTok) continue;
    const f = factor(fromTok, tok);
    rows.push(`<tr><td>${label}</td><td>${f == null ? '—' : fmt(val * f)}</td></tr>`);
  }
  tbody.innerHTML = rows.join('');
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
});
</script>
</body>
</html>
