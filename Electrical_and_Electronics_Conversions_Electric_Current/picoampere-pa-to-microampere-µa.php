
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Picoampere (pA) to Microampere (µA) accurately with our online converter. Get the exact formula, example, and conversion chart for Picoampere to Microampere."/>
    <meta name="keywords" content="picoampere to microampere, pa to µa, convert picoampere to microampere, picoampere to microampere calculator, how many microampere in a picoampere, picoampere in microampere, pa to µa converter, picoampere to microampere formula, picoampere to microampere chart, electric current conversion picoampere to microampere, picoampere to microampere online converter"/>
    <title>Picoampere to Microampere Converter - pA to µA Online Calculator</title>
    <link href="../css/sub_main_pages.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <script src="conversion_javascript.js"></script>
</head>
<body>
    <?php include '../header.php'; ?>
    <div class="container">
        <div class="main-wrapper">
            <div class="content-section">
                <div class="converter-section">
                    <h2>Picoampere to Microampere Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Picoampere (pA)</label>
                            <input id="from-value" oninput="performConversion('picoampere-pa-to-microampere-µa')" placeholder="Enter value in Picoampere" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='microampere-µa-to-picoampere-pa.php'" title="Swap Picoampere and Microampere">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Microampere (µA)</label>
                            <input id="to-value" placeholder="Microampere (µA)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('picoampere-pa-to-microampere-µa')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Picoampere to Microampere Converter - pA to µA Online Calculator</h3>
                        <p>Learn how to convert Picoampere to Microampere, including the exact formula and example. Understand the relationship between pA and µA as per SI units.</p>
                        <p><strong>Formula:</strong> 1 Picoampere = 0.000001 Microampere | Formula: Microampere = Picoampere × 0.000001  </p>
                        <!--<p><strong>Example:</strong> Convert 1 Picoampere to Microampere: 1 × 1000000.0 = 1000000.0 Microampere</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Electrical & Electronics Conversions Electric Current Conversions</h3>
                    <ul>
                        <ul>
  <li><a href="ampere-a-to-milliampere-ma.php">Ampere to Milliampere (mA)</a></li>
  <li><a href="milliampere-ma-to-microampere-µa.php">Milliampere to Microampere (µA)</a></li>
  <li><a href="ampere-a-to-kiloampere-ka.php">Ampere to Kiloampere (kA)</a></li>
  <li><a href="ampere-a-to-microampere-µa.php">Ampere to Microampere (µA)</a></li>
  <li><a href="ampere-a-to-nanoampere-na.php">Ampere to Nanoampere (nA)</a></li>
  <li><a href="milliampere-ma-to-ampere-a.php">Milliampere to Ampere (A)</a></li>
  <li><a href="microampere-µa-to-ampere-a.php">Microampere to Ampere (A)</a></li>
  <li><a href="ampere-a-to-abampere-aba.php">Ampere to Abampere (abA)</a></li>
</ul> 
                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert Picoampere to Other Electric Current Units</h3>
                    <ul><li><a href="picoampere-pa-to-ampere-a.php">Picoampere to Ampere (A)</a></li><li><a href="picoampere-pa-to-milliampere-ma.php">Picoampere to Milliampere (mA)</a></li><li><a href="picoampere-pa-to-kiloampere-ka.php">Picoampere to Kiloampere (kA)</a></li><li><a href="picoampere-pa-to-nanoampere-na.php">Picoampere to Nanoampere (nA)</a></li><li><a href="picoampere-pa-to-femtoampere-fa.php">Picoampere to Femtoampere (fA)</a></li><li><a href="picoampere-pa-to-attoampere-aa.php">Picoampere to Attoampere (aA)</a></li><li><a href="picoampere-pa-to-abampere-aba.php">Picoampere to Abampere (abA)</a></li></ul>
                </div>
            </div>
            <div class="ad-section">
                <h3>Advertisement</h3>
                <div class="ad-placeholder">Ad Space (350x280)</div>
                <?php include '../drawer_menu.php'; ?>
            </div>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>
</html>
