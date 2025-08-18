
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Microhenry (µH) to Nanohenry (nH) accurately using official standards. Easy online inductance converter for Microhenry to Nanohenry."/>
    <meta name="keywords" content="microhenry to nanohenry, µh to nh, convert microhenry to nanohenry, microhenry to nanohenry calculator, how many nanohenry in a microhenry, microhenry in nanohenry, µh to nh converter, microhenry to nanohenry formula, microhenry to nanohenry chart, inductance conversion microhenry to nanohenry, microhenry to nanohenry online converter"/>
    <title>Microhenry to Nanohenry Conversion (µH to nH)</title>
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
                    <h2>Microhenry to Nanohenry Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Enter Microhenry (µH)</label>
                            <input id="from-value" oninput="performConversion('microhenry-µh-to-nanohenry-nh')" placeholder="µH" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='nanohenry-nh-to-microhenry-µh.php'" title="Swap µH and nH">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">nH</label>
                            <input id="to-value" placeholder="nH" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('microhenry-µh-to-nanohenry-nh')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Microhenry to Nanohenry Conversion (µH to nH)</h3>
                        <p>Learn how to convert Microhenry (µH) to Nanohenry (nH) using a precise conversion factor sourced from standards like NIST and BIPM.</p>
                        <p><strong>Formula:</strong> Convert 1 Microhenry to Nanohenry | 1 × 1000 = 1000 nH</p>
                        <!--<p><strong>Example:</strong> Convert 1 Microhenry to Nanohenry | 1 × 1000 = 1000 nH</p>!-->
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
                    <h3>Convert Microhenry to Other Inductance Units</h3>
                    <ul><li><a href="microhenry-µh-to-henry-h.php">Microhenry to Henry (H)</a></li><li><a href="microhenry-µh-to-millihenry-mh.php">Microhenry to Millihenry (mH)</a></li><li><a href="microhenry-µh-to-picohenry-ph.php">Microhenry to Picohenry (pH)</a></li><li><a href="microhenry-µh-to-femtohenry-fh.php">Microhenry to Femtohenry (fH)</a></li><li><a href="microhenry-µh-to-abhenry-abh.php">Microhenry to Abhenry (abH)</a></li></ul>
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
