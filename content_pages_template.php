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
                    <h2>##TITLE_CONTENT</h2>
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
                        <h3>##TITLE_ABOUT</h3>
                        <p>##ABOUT_DESCRIPTION</p>
                        <p><strong>Formula:</strong> ##FORMULA</p>
                        <!--<p><strong>Example:</strong> ##EXAMPLE</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>##TITLE_H3</h3>
                    <ul>
                        <li><a href="pound-lb-to-kilogram-kg.php">Pound (lb) to Kilogram (kg)</a></li>
                        <li><a href="gram-g-to-milligram-mg.php">Gram (g) to Milligram (mg)</a></li>
                        <li><a href="kilogram-kg-to-pound-lb.php">Kilogram (kg) to Pound (lb)</a></li>
                        <li><a href="milligram-mg-to-microgram-ug.php">Milligram (mg) to Microgram (µg)</a></li>
                        <li><a href="stone-st-to-pound-lb.php">Stone (st) to Pound (lb)</a></li>
                        <li><a href="carat-ct-to-gram-g.php">Carat (ct) to Gram (g)</a></li>
                        <li><a href="us-ton-short-ton-to-kilogram-kg.php">US Ton (short ton) to Kilogram (kg)</a></li>
                        <li><a href="uk-ton-long-ton-to-kilogram-kg.php">UK Ton (long ton) to Kilogram (kg)</a></li>
                        <li><a href="tonne-metric-ton-to-kilogram-kg.php">Tonne (metric ton) to Kilogram (kg)</a></li>
                        <li><a href="grain-gr-to-milligram-mg.php">Grain (gr) to Milligram (mg)</a></li>
                        <li><a href="troy-ounce-oz-t-to-gram-g.php">Troy ounce (oz t) to Gram (g)</a></li>
                        <li><a href="troy-pound-lb-t-to-troy-ounce-oz-t.php">Troy pound (lb t) to Troy ounce (oz t)</a></li>
                        <li><a href="momme-to-gram-g.php">Momme to Gram (g)</a></li>
                        <li><a href="kan-japanese-to-kilogram-kg.php">Kan (Japanese) to Kilogram (kg)</a></li>
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