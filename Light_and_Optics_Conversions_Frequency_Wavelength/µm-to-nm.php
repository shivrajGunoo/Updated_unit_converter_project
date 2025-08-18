
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Micrometer (µm) to Nanometer (nm) instantly with accurate formulas and examples. Try our free online converter now!"/>
    <meta name="keywords" content="micrometer to nanometer, µm to nm, convert micrometer to nanometer, micrometer to nanometer calculator, how many nanometer in a micrometer, micrometer in nanometer, µm to nm converter, micrometer to nanometer formula, micrometer to nanometer chart, light converters conversion micrometer to nanometer, micrometer to nanometer online converter"/>
    <title>Micrometer to Nanometer Converter (µm to nm)</title>
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
                    <h2>Micrometer to Nanometer Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Micrometer (µm)</label>
                            <input id="from-value" oninput="performConversion('µm-to-nm')" placeholder="Enter value in Micrometer" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='nm-to-µm.php'" title="Convert Nanometer to Micrometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Nanometer (nm)</label>
                            <input id="to-value" placeholder="Nanometer (nm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('µm-to-nm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Micrometer to Nanometer Converter (µm to nm)</h3>
                        <p>This tool helps you convert Micrometer (µm) to Nanometer (nm) using verified conversion formulas based on international standards.</p>
                        <p><strong>Formula:</strong> 1 Micrometer = 1000.0 Nanometer | Formula: Nanometer = Micrometer × 1000.0</p>
                        <!--<p><strong>Example:</strong> Convert 1 micrometer to nanometer: 1 × 1000.000000 = 1000.000000 Nanometer</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Light & Optics Conversions Wavelength</h3>
                    <ul>
<li><a href="micrometer-Âµm-to-gigahertz-ghz.php">Micrometer (Âµm) to Gigahertz (GHz)</a></li>
<li><a href="micrometer-Âµm-to-megahertz-mhz.php">Micrometer (Âµm) to Megahertz (MHz)</a></li>
<li><a href="micrometer-Âµm-to-hertz-hz.php">Micrometer (Âµm) to Hertz (Hz)</a></li>
<li><a href="nanometer-nm-to-hertz-hz.php">Nanometer (nm) to Hertz (Hz)</a></li>
<li><a href="angstrom-Ã¥-to-gigahertz-ghz.php">Angstrom (Ã…) to Gigahertz (GHz)</a></li>
<li><a href="gigahertz-ghz-to-nanometer-nm.php">Gigahertz (GHz) to Nanometer (nm)</a></li>


                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert Micrometer to Other Units</h3>
                    <ul>
  <li><a href="µm-to-hz.php">Hertz to Hz</a></li>
  <li><a href="µm-to-khz.php">Kilohertz to kHz</a></li>
  <li><a href="µm-to-mhz.php">Megahertz to MHz</a></li>
  <li><a href="µm-to-ghz.php">Gigahertz to GHz</a></li>
  <li><a href="µm-to-nm.php">Nanometer to nm</a></li>
  <li><a href="µm-to-å.php">Angstrom to Å</a></li>
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
    <?php include '../footer.php'; ?>
</body>
</html>
