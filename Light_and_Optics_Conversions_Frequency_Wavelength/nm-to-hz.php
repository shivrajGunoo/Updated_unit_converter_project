
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Nanometer (nm) to Hertz (Hz) instantly with accurate formulas and examples. Try our free online converter now!"/>
    <meta name="keywords" content="nanometer to hertz, nm to hz, convert nanometer to hertz, nanometer to hertz calculator, how many hertz in a nanometer, nanometer in hertz, nm to hz converter, nanometer to hertz formula, nanometer to hertz chart, light converters conversion nanometer to hertz, nanometer to hertz online converter"/>
    <title>Nanometer to Hertz Converter (nm to Hz)</title>
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
                    <h2>Nanometer to Hertz Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Nanometer (nm)</label>
                            <input id="from-value" oninput="performConversion('nm-to-hz')" placeholder="Enter value in Nanometer" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='hz-to-nm.php'" title="Convert Hertz to Nanometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Hertz (Hz)</label>
                            <input id="to-value" placeholder="Hertz (Hz)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('nm-to-hz')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Nanometer to Hertz Converter (nm to Hz)</h3>
                        <p>This tool helps you convert Nanometer (nm) to Hertz (Hz) using verified conversion formulas based on international standards.</p>
                        <p><strong>Formula:</strong> 1 Nanometer = 299792458000000000.0000 Hertz | Formula: Hertz = c / Nanometer</p>
                        <!--<p><strong>Example:</strong> Convert 1 nanometer to hertz: 1 × 299792458000000000.000000 = 299792458000000000.000000 Hertz</p>!-->
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
