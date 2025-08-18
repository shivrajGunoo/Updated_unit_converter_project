
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Lambert (L) to Foot-candle (fc) easily using our accurate illuminance unit converter. Includes formula, example & quick result."/>
    <meta name="keywords" content="lambert to foot-candle, L to fc, convert lambert to foot-candle, lambert to foot-candle calculator, how many foot-candle in a lambert, lambert in foot-candle, L to fc converter, lambert to foot-candle formula, lambert to foot-candle chart, illuminance conversion lambert to foot-candle, lambert to foot-candle online converter"/>
    <title>Lambert to Foot-candle (L to fc) Conversion Calculator</title>
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
                    <h2>Lambert to Foot-candle Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Lambert (L)</label>
                            <input id="from-value" oninput="performConversion('lambert-l-to-foot-candle-fc')" placeholder="Enter Lambert" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='foot-candle-fc-to-lambert-l.php'" title="Swap Foot-candle to Lambert">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Foot-candle Value</label>
                            <input id="to-value" placeholder="Foot-candle Value" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('lambert-l-to-foot-candle-fc')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Lambert to Foot-candle (L to fc) Conversion Calculator</h3>
                        <p>Convert Lambert (L) to Foot-candle (fc) easily using our accurate illuminance unit converter. Includes formula, example & quick result.</p>
                        <p><strong>Formula:</strong> fc=L×318.31fc=L×318.31</p>
                        <!--<p><strong>Example:</strong> Convert 1 Lambert to Foot-candle: 1 × 107.64 = 107.64 Foot-candle</p>!-->
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
                    <h3>Convert Lambert to Other Illuminance Units</h3>
                    <ul><li><a href="lambert-l-to-lux-lx.php">Lambert to Lux (lx)</a></li><li><a href="lambert-l-to-nit-nt.php">Lambert to Nit (nt)</a></li><li><a href="lambert-l-to-phot-ph.php">Lambert to Phot (ph)</a></li><li><a href="lambert-l-to-footlambert-fl.php">Lambert to Footlambert (fL)</a></li></ul>
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
