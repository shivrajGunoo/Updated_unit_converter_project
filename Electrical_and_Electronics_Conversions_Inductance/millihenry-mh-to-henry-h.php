
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Millihenry (mH) to Henry (H) accurately using official standards. Easy online inductance converter for Millihenry to Henry."/>
    <meta name="keywords" content="millihenry to henry, mh to h, convert millihenry to henry, millihenry to henry calculator, how many henry in a millihenry, millihenry in henry, mh to h converter, millihenry to henry formula, millihenry to henry chart, inductance conversion millihenry to henry, millihenry to henry online converter"/>
    <title>Millihenry to Henry Conversion (mH to H)</title>
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
                    <h2>Millihenry to Henry Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Enter Millihenry (mH)</label>
                            <input id="from-value" oninput="performConversion('millihenry-mh-to-henry-h')" placeholder="mH" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='henry-h-to-millihenry-mh.php'" title="Swap mH and H">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">H</label>
                            <input id="to-value" placeholder="H" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('millihenry-mh-to-henry-h')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Millihenry to Henry Conversion (mH to H)</h3>
                        <p>Learn how to convert Millihenry (mH) to Henry (H) using a precise conversion factor sourced from standards like NIST and BIPM.</p>
                        <p><strong>Formula:</strong> Convert 1 Millihenry to Henry | 1 × 0.001 = 0.001 H</p>
                        <!--<p><strong>Example:</strong> Convert 1 Millihenry to Henry | 1 × 0.001 = 0.001 H</p>!-->
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
                    <h3>Convert Millihenry to Other Inductance Units</h3>
                    <ul><li><a href="millihenry-mh-to-microhenry-µh.php">Millihenry to Microhenry (µH)</a></li><li><a href="millihenry-mh-to-nanohenry-nh.php">Millihenry to Nanohenry (nH)</a></li><li><a href="millihenry-mh-to-picohenry-ph.php">Millihenry to Picohenry (pH)</a></li><li><a href="millihenry-mh-to-femtohenry-fh.php">Millihenry to Femtohenry (fH)</a></li><li><a href="millihenry-mh-to-abhenry-abh.php">Millihenry to Abhenry (abH)</a></li></ul>
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
