
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Ampere (A) to Kiloampere (kA) accurately with our online converter. Get the exact formula, example, and conversion chart for Ampere to Kiloampere."/>
    <meta name="keywords" content="ampere to kiloampere, a to ka, convert ampere to kiloampere, ampere to kiloampere calculator, how many kiloampere in a ampere, ampere in kiloampere, a to ka converter, ampere to kiloampere formula, ampere to kiloampere chart, electric current conversion ampere to kiloampere, ampere to kiloampere online converter"/>
    <title>Ampere to Kiloampere Converter - A to kA Online Calculator</title>
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
                    <h2>Ampere to Kiloampere Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Ampere (A)</label>
                            <input id="from-value" oninput="performConversion('ampere-a-to-kiloampere-ka')" placeholder="Enter value in Ampere" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='kiloampere-ka-to-ampere-a.php'" title="Swap Ampere and Kiloampere">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Kiloampere (kA)</label>
                            <input id="to-value" placeholder="Kiloampere (kA)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('ampere-a-to-kiloampere-ka')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Ampere to Kiloampere Converter - A to kA Online Calculator</h3>
                        <p>Learn how to convert Ampere to Kiloampere, including the exact formula and example. Understand the relationship between A and kA as per SI units.</p>
                        <p><strong>Formula:</strong> 1 Ampere = 0.001 Kiloampere | Formula: Kiloampere = Ampere × 0.001  </p>
                        <!--<p><strong>Example:</strong> Convert 1 Ampere to Kiloampere: 1 × 1000.0 = 1000.0 Kiloampere</p>!-->
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
                    <h3>Convert Ampere to Other Electric Current Units</h3>
                    <ul><li><a href="ampere-a-to-milliampere-ma.php">Ampere to Milliampere (mA)</a></li><li><a href="ampere-a-to-microampere-µa.php">Ampere to Microampere (µA)</a></li><li><a href="ampere-a-to-nanoampere-na.php">Ampere to Nanoampere (nA)</a></li><li><a href="ampere-a-to-picoampere-pa.php">Ampere to Picoampere (pA)</a></li><li><a href="ampere-a-to-femtoampere-fa.php">Ampere to Femtoampere (fA)</a></li><li><a href="ampere-a-to-attoampere-aa.php">Ampere to Attoampere (aA)</a></li><li><a href="ampere-a-to-abampere-aba.php">Ampere to Abampere (abA)</a></li></ul>
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
