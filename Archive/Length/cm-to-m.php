<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Convert Centimeters to Meters easily with this free online conversion tool." />
  <meta name="keywords" content="cm to m, centimeter to meter, length conversion" />
  <title>Centimeters to Meters Converter</title>
  <link rel="stylesheet" href="../css/sub_main_pages.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
  <!-- Include header -->
  <?php include '../header.php'; ?>

  <div class="container">
    <div class="main-wrapper">
      <div class="content-section">
        <div class="converter-section">
          <h2>Centimeters to Meters</h2>
          <div class="converter-tool">
            <div class="input-group">
              <label for="from-value">Centimeters</label>
              <input type="number" id="from-value" value="100" step="0.01" placeholder="Enter cm" />
            </div>
            <button class="swap-btn" onclick="window.location.href='m-to-cm.php'" title="Convert Meters to Centimeters">
              <i class="fas fa-exchange-alt"></i>
            </button>
            <div class="input-group">
              <label for="to-value">Meters</label>
              <input type="text" id="to-value" readonly placeholder="Result in m" />
            </div>
          </div>
          <div class="button-group">
            <button onclick="convertCmToM()">Calculate</button>
            <button onclick="clearFields()">Clear</button>
          </div>
        </div>

        <div class="info-section">
          <h3>About cm to m Conversion</h3>
          <p>Centimeters and meters are metric units used to measure length. The conversion from cm to m is straightforward.</p>
          <p><strong>Formula:</strong> 1 cm = 0.01 m &nbsp;&nbsp;|&nbsp;&nbsp; 1 m = 100 cm</p>
          <p><strong>Example:</strong> Convert 150 cm to meters: 150 cm × 0.01 = 1.5 m</p>
        </div>

        <div class="info-section">
          <h3>Popular Length Unit Conversions</h3>
          <ul>
            <li><a href="cm-to-inches.php">cm to inches</a></li>
            <li><a href="inches-to-cm.php">inches to cm</a></li>
            <li><a href="mm-to-inches.php">mm to inches</a></li>
            <li><a href="inches-to-mm.php">inches to mm</a></li>
            <li><a href="meters-to-feet.php">meters to feet</a></li>
            <li><a href="feet-to-meters.php">feet to meters</a></li>
            <li><a href="km-to-miles.php">km to miles</a></li>
            <li><a href="miles-to-km.php">miles to km</a></li>
            <li><a href="cm-to-feet.php">cm to feet</a></li>
            <li><a href="feet-to-cm.php">feet to cm</a></li>
            <li><a href="inches-to-feet.php">inches to feet</a></li>
            <li><a href="feet-to-inches.php">feet to inches</a></li>
            <li><a href="meters-to-yards.php">meters to yards</a></li>
            <li><a href="yards-to-meters.php">yards to meters</a></li>
            <li><a href="mm-to-cm.php">mm to cm</a></li>
            <li><a href="cm-to-mm.php">cm to mm</a></li>
            <li><a href="cm-to-m.php">cm to m</a></li>
            <li><a href="m-to-cm.php">m to cm</a></li>
            <li><a href="cm-to-km.php">cm to km</a></li>
            <li><a href="km-to-cm.php">km to cm</a></li>
            <li><a href="mm-to-feet.php">mm to feet</a></li>
            <li><a href="feet-to-mm.php">feet to mm</a></li>
            <li><a href="meters-to-miles.php">meters to miles</a></li>
            <li><a href="miles-to-meters.php">miles to meters</a></li>
            <li><a href="feet-to-miles.php">feet to miles</a></li>
            <li><a href="miles-to-feet.php">miles to feet</a></li>
            <li><a href="yards-to-feet.php">yards to feet</a></li>
            <li><a href="feet-to-yards.php">feet to yards</a></li>
            <li><a href="inches-to-meters.php">inches to meters</a></li>
            <li><a href="meters-to-inches.php">meters to inches</a></li>
            <li><a href="mm-to-m.php">mm to m</a></li>
            <li><a href="m-to-mm.php">m to mm</a></li>
            <li><a href="km-to-m.php">km to m</a></li>
            <li><a href="m-to-km.php">m to km</a></li>
            <li><a href="inches-to-yards.php">inches to yards</a></li>
            <li><a href="yards-to-inches.php">yards to inches</a></li>
            <li><a href="yards-to-miles.php">yards to miles</a></li>
            <li><a href="miles-to-yards.php">miles to yards</a></li>
          </ul>
        </div>

        <div class="info-section">
          <h3>Convert Centimeter to Other Length Units</h3>
          <ul>
            <li><a href="cm-to-km.php">cm to km</a></li>
            <li><a href="cm-to-mm.php">cm to mm</a></li>
            <li><a href="cm-to-nanometer.php">cm to nanometer</a></li>
            <li><a href="cm-to-yard.php">cm to yard</a></li>
            <li><a href="cm-to-inches.php">cm to inches</a></li>
            <li><a href="cm-to-feet.php">cm to feet</a></li>
            <li><a href="cm-to-light-year.php">cm to light year</a></li>
            <li><a href="cm-to-break.php">cm to break</a></li>
            <li><a href="cm-to-gigameter.php">cm to gigameter</a></li>
            <li><a href="cm-to-megameter.php">cm to megameter</a></li>
          </ul>
        </div>
      </div>

      <div class="ad-section">
        <h3>Advertisement</h3>
        <div class="ad-placeholder">Ad Space (350x280)</div>
        <?php include '../drawer_menu.php'; ?>
      </div>
    </div>
  </div>

  <!-- Include footer -->
  <?php include '../footer.php'; ?>

  <script>
    function convertCmToM() {
      const cm = parseFloat(document.getElementById('from-value').value) || 0;
      document.getElementById('to-value').value = (cm * 0.01).toFixed(4);
    }

    function clearFields() {
      document.getElementById('from-value').value = '';
      document.getElementById('to-value').value = '';
    }

    document.addEventListener('DOMContentLoaded', convertCmToM);
  </script>
</body>
</html>
