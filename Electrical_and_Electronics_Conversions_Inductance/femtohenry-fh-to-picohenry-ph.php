
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Femtohenry (fH) to Picohenry (pH) accurately using official standards. Easy online inductance converter for Femtohenry to Picohenry."/>
    <meta name="keywords" content="femtohenry to picohenry, fh to ph, convert femtohenry to picohenry, femtohenry to picohenry calculator, how many picohenry in a femtohenry, femtohenry in picohenry, fh to ph converter, femtohenry to picohenry formula, femtohenry to picohenry chart, inductance conversion femtohenry to picohenry, femtohenry to picohenry online converter"/>
    <title>Femtohenry to Picohenry Conversion (fH to pH)</title>
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
                    <h2>Femtohenry to Picohenry Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Enter Femtohenry (fH)</label>
                            <input id="from-value" oninput="performConversion('femtohenry-fh-to-picohenry-ph')" placeholder="fH" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='picohenry-ph-to-femtohenry-fh.php'" title="Swap fH and pH">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">pH</label>
                            <input id="to-value" placeholder="pH" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('femtohenry-fh-to-picohenry-ph')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Femtohenry to Picohenry Conversion (fH to pH)</h3>
                        <p>Learn how to convert Femtohenry (fH) to Picohenry (pH) using a precise conversion factor sourced from standards like NIST and BIPM.</p>
                        <p><strong>Formula:</strong> Convert 1 Femtohenry to Picohenry | 1 × 0.001 = 0.001 pH</p>
                        <!--<p><strong>Example:</strong> Convert 1 Femtohenry to Picohenry | 1 × 0.001 = 0.001 pH</p>!-->
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
                    <h3>Convert Femtohenry to Other Inductance Units</h3>
                    <ul><li><a href="femtohenry-fh-to-henry-h.php">Femtohenry to Henry (H)</a></li><li><a href="femtohenry-fh-to-millihenry-mh.php">Femtohenry to Millihenry (mH)</a></li><li><a href="femtohenry-fh-to-microhenry-µh.php">Femtohenry to Microhenry (µH)</a></li><li><a href="femtohenry-fh-to-nanohenry-nh.php">Femtohenry to Nanohenry (nH)</a></li><li><a href="femtohenry-fh-to-abhenry-abh.php">Femtohenry to Abhenry (abH)</a></li></ul>
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
