
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Abhenry (abH) to Microhenry (µH) accurately using official standards. Easy online inductance converter for Abhenry to Microhenry."/>
    <meta name="keywords" content="abhenry to microhenry, abh to µh, convert abhenry to microhenry, abhenry to microhenry calculator, how many microhenry in a abhenry, abhenry in microhenry, abh to µh converter, abhenry to microhenry formula, abhenry to microhenry chart, inductance conversion abhenry to microhenry, abhenry to microhenry online converter"/>
    <title>Abhenry to Microhenry Conversion (abH to µH)</title>
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
                    <h2>Abhenry to Microhenry Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Enter Abhenry (abH)</label>
                            <input id="from-value" oninput="performConversion('abhenry-abh-to-microhenry-µh')" placeholder="abH" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='microhenry-µh-to-abhenry-abh.php'" title="Swap abH and µH">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">µH</label>
                            <input id="to-value" placeholder="µH" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('abhenry-abh-to-microhenry-µh')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Abhenry to Microhenry Conversion (abH to µH)</h3>
                        <p>Learn how to convert Abhenry (abH) to Microhenry (µH) using a precise conversion factor sourced from standards like NIST and BIPM.</p>
                        <p><strong>Formula:</strong> Convert 1 Abhenry to Microhenry | 1 × 0.001 = 0.001 µH</p>
                        <!--<p><strong>Example:</strong> Convert 1 Abhenry to Microhenry | 1 × 0.001 = 0.001 µH</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Electrical & Electronics Conversions Inductance Conversions</h3>
                    <ul>
                        <ul>
<li><a href="henry-h-to-millihenry-mh.php">Henry to Millihenry (mH)</a></li>
<li><a href="henry-h-to-microhenry-µh.php">Henry to Microhenry (µH)</a></li>
<li><a href="henry-h-to-nanohenry-nh.php">Henry to Nanohenry (nH)</a></li>
<li><a href="henry-h-to-picohenry-ph.php">Henry to Picohenry (pH)</a></li>
<li><a href="henry-h-to-femtohenry-fh.php">Henry to Femtohenry (fH)</a></li>
<li><a href="henry-h-to-abhenry-abh.php">Henry to Abhenry (abH)</a></li>
<li><a href="millihenry-mh-to-henry-h.php">Millihenry to Henry (H)</a></li>
<li><a href="microhenry-µh-to-henry-h.php">Microhenry to Henry (H)</a></li>
<li><a href="nanohenry-nh-to-henry-h.php">Nanohenry to Henry (H)</a></li>
<li><a href="picohenry-ph-to-henry-h.php">Picohenry to Henry (H)</a></li>
<li><a href="femtohenry-fh-to-henry-h.php">Femtohenry to Henry (H)</a></li>
<li><a href="abhenry-abh-to-henry-h.php">Abhenry to Henry (H)</a></li>
</ul> 
                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert Abhenry to Other Inductance Units</h3>
                    <ul><li><a href="abhenry-abh-to-henry-h.php">Abhenry to Henry (H)</a></li><li><a href="abhenry-abh-to-millihenry-mh.php">Abhenry to Millihenry (mH)</a></li><li><a href="abhenry-abh-to-nanohenry-nh.php">Abhenry to Nanohenry (nH)</a></li><li><a href="abhenry-abh-to-picohenry-ph.php">Abhenry to Picohenry (pH)</a></li><li><a href="abhenry-abh-to-femtohenry-fh.php">Abhenry to Femtohenry (fH)</a></li></ul>
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
