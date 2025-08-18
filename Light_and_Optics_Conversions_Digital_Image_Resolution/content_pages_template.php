
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
                    <h3>Popular Light & Optics Conversions Digital Image Resolution</h3>
                    <ul>
                    <li><a href="pixel-per-inch-ppi-to-dots-per-inch-dpi.php">Pixel per Inch (ppi) to Dots per Inch (dpi)</a></li>
                    <li><a href="dots-per-inch-dpi-to-pixels-per-inch-ppi.php">Dots per Inch (dpi) to Pixels per Inch (ppi)</a></li>
                    <li><a href="pixel-per-inch-ppi-to-pixels-per-centimeter-ppcm.php">Pixel per Inch (ppi) to Pixels per Centimeter (ppcm)</a></li>
                    <li><a href="pixels-per-centimeter-ppcm-to-pixel-per-inch-ppi.php">Pixels per Centimeter (ppcm) to Pixel per Inch (ppi)</a></li>
                    <li><a href="dots-per-inch-dpi-to-pixels-per-centimeter-ppcm.php">Dots per Inch (dpi) to Pixels per Centimeter (ppcm)</a></li>
                    <li><a href="pixels-per-centimeter-ppcm-to-dots-per-inch-dpi.php">Pixels per Centimeter (ppcm) to Dots per Inch (dpi)</a></li>



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