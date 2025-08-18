
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Nanometer (nm) to Micrometer (µm) instantly with accurate formulas and examples. Try our free online converter now!"/>
    <meta name="keywords" content="nanometer to micrometer, nm to µm, convert nanometer to micrometer, nanometer to micrometer calculator, how many micrometer in a nanometer, nanometer in micrometer, nm to µm converter, nanometer to micrometer formula, nanometer to micrometer chart, light converters conversion nanometer to micrometer, nanometer to micrometer online converter"/>
    <title>Nanometer to Micrometer Converter (nm to µm)</title>
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
                    <h2>Nanometer to Micrometer Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Nanometer (nm)</label>
                            <input id="from-value" oninput="performConversion('nm-to-µm')" placeholder="Enter value in Nanometer" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='µm-to-nm.php'" title="Convert Micrometer to Nanometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Micrometer (µm)</label>
                            <input id="to-value" placeholder="Micrometer (µm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('nm-to-µm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Nanometer to Micrometer Converter (nm to µm)</h3>
                        <p>This tool helps you convert Nanometer (nm) to Micrometer (µm) using verified conversion formulas based on international standards.</p>
                        <p><strong>Formula:</strong> 1 Nanometer = 0.001 Micrometer | Formula: Micrometer = Nanometer × 0.001</p>
                        <!--<p><strong>Example:</strong> Convert 1 nanometer to micrometer: 1 × 0.001000 = 0.001000 Micrometer</p>!-->
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
                    <h3>Convert Nanometer to Other Units</h3>
                    <ul>
  <li><a href="nm-to-hz.php">Hertz to Hz</a></li>
  <li><a href="nm-to-khz.php">Kilohertz to kHz</a></li>
  <li><a href="nm-to-mhz.php">Megahertz to MHz</a></li>
  <li><a href="nm-to-ghz.php">Gigahertz to GHz</a></li>
  <li><a href="nm-to-µm.php">Micrometer to µm</a></li>
  <li><a href="nm-to-å.php">Angstrom to Å</a></li>
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
