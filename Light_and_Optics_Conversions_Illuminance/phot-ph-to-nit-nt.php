
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Phot (ph) to Nit (nt) easily using our accurate illuminance unit converter. Includes formula, example & quick result."/>
    <meta name="keywords" content="phot to nit, ph to nt, convert phot to nit, phot to nit calculator, how many nit in a phot, phot in nit, ph to nt converter, phot to nit formula, phot to nit chart, illuminance conversion phot to nit, phot to nit online converter"/>
    <title>Phot to Nit (ph to nt) Conversion Calculator</title>
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
                    <h2>Phot to Nit Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Phot (ph)</label>
                            <input id="from-value" oninput="performConversion('phot-ph-to-nit-nt')" placeholder="Enter Phot" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='nit-nt-to-phot-ph.php'" title="Swap Nit to Phot">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Nit Value</label>
                            <input id="to-value" placeholder="Nit Value" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('phot-ph-to-nit-nt')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Phot to Nit (ph to nt) Conversion Calculator</h3>
                        <p>Convert Phot (ph) to Nit (nt) easily using our accurate illuminance unit converter. Includes formula, example & quick result.</p>
                        <p><strong>Formula:</strong> nt=ph×10000nt=ph×10000</p>
                        <!--<p><strong>Example:</strong> Convert 1 Phot to Nit: 1 × 318.3 = 318.3 Nit</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Light & Optics Conversions Illuminance</h3>
                    <ul>
<li><a href="lux-lx-to-foot-candle-fc.php">Lux to Foot-candle (fc)</a></li>
<li><a href="foot-candle-fc-to-lux-lx.php">Foot-candle to Lux (lx)</a></li>
<li><a href="lux-lx-to-phot-ph.php">Lux to Phot (ph)</a></li>
<li><a href="phot-ph-to-lux-lx.php">Phot to Lux (lx)</a></li>
<li><a href="lux-lx-to-lambert-l.php">Lux to Lambert (L)</a></li>
<li><a href="lambert-l-to-lux-lx.php">Lambert to Lux (lx)</a></li>

                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert Phot to Other Illuminance Units</h3>
                    <ul><li><a href="phot-ph-to-lux-lx.php">Phot to Lux (lx)</a></li><li><a href="phot-ph-to-foot-candle-fc.php">Phot to Foot-candle (fc)</a></li><li><a href="phot-ph-to-lambert-l.php">Phot to Lambert (L)</a></li><li><a href="phot-ph-to-footlambert-fl.php">Phot to Footlambert (fL)</a></li></ul>
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
