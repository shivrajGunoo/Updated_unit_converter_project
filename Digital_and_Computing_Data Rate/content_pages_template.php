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
                    <h3>Popular Digital & Computing	Data Storage Conversions</h3>
                    <ul>
                        <li><a href="bps-to-kbps.php">bits per second (bps) to kilobits per second (kbps)</a></li>
                        <li><a href="kbps-to-mbps.php">kilobits per second (kbps) to megabits per second (Mbps)</a></li>
                        <li><a href="mbps-to-gbps.php">megabits per second (Mbps) to gigabits per second (Gbps)</a></li>
                        <li><a href="gbps-to-tbps.php">gigabits per second (Gbps) to terabits per second (Tbps)</a></li>
                        <li><a href="kbps-to-bps.php">kilobits per second (kbps) to bits per second (bps)</a></li>
                        <li><a href="mbps-to-kbps.php">megabits per second (Mbps) to kilobits per second (kbps)</a></li>
                        <li><a href="gbps-to-mbps.php">gigabits per second (Gbps) to megabits per second (Mbps)</a></li>
                        <li><a href="tbps-to-gbps.php">terabits per second (Tbps) to gigabits per second (Gbps)</a></li>
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