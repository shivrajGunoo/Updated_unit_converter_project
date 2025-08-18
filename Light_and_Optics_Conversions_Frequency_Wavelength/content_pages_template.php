
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="##DESCRIPTION"/>
    <meta name="keywords" content="##KEYWORDS"/>
    <title>##TITLE</title>
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
                    <h2>##CONTENT_TITLE</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">##LABLE</label>
                            <input id="from-value" oninput="performConversion('##JAVASCRIPT_CONSTANT')" placeholder="##INPUT_FROM_VALUE" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='##SWAP_LINK'" title="##SWAP_BTN_TITLE">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">##OUTPUT_TO_VALUE</label>
                            <input id="to-value" placeholder="##OUTPUT_TO_VALUE" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('##JAVASCRIPT_CONSTANT')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About ##TITLE</h3>
                        <p>##ABOUT_DESCRIPTION</p>
                        <p><strong>Formula:</strong> ##FORMULA</p>
                        <!--<p><strong>Example:</strong> ##EXAMPLE</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Light & Optics Conversions Wavelength</h3>
                    <ul>
<li><a href="micrometer-µm-to-gigahertz-ghz.php">Micrometer (µm) to Gigahertz (GHz)</a></li>
<li><a href="micrometer-µm-to-megahertz-mhz.php">Micrometer (µm) to Megahertz (MHz)</a></li>
<li><a href="micrometer-µm-to-hertz-hz.php">Micrometer (µm) to Hertz (Hz)</a></li>
<li><a href="nanometer-nm-to-hertz-hz.php">Nanometer (nm) to Hertz (Hz)</a></li>
<li><a href="angstrom-å-to-gigahertz-ghz.php">Angstrom (Å) to Gigahertz (GHz)</a></li>
<li><a href="gigahertz-ghz-to-nanometer-nm.php">Gigahertz (GHz) to Nanometer (nm)</a></li>


                    </ul>
                </div>

                <div class="info-section">
                    <h3>##CONVERT_TITLE</h3>
                    ##BACKLINKS
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