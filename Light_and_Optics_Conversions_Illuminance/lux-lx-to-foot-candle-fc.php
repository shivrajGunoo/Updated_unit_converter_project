
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Lux (lx) to Foot-candle (fc) easily using our accurate illuminance unit converter. Includes formula, example & quick result."/>
    <meta name="keywords" content="lux to foot-candle, lx to fc, convert lux to foot-candle, lux to foot-candle calculator, how many foot-candle in a lux, lux in foot-candle, lx to fc converter, lux to foot-candle formula, lux to foot-candle chart, illuminance conversion lux to foot-candle, lux to foot-candle online converter"/>
    <title>Lux to Foot-candle (lx to fc) Conversion Calculator</title>
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
                    <h2>Lux to Foot-candle Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Lux (lx)</label>
                            <input id="from-value" oninput="performConversion('lux-lx-to-foot-candle-fc')" placeholder="Enter Lux" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='foot-candle-fc-to-lux-lx.php'" title="Swap Foot-candle to Lux">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Foot-candle Value</label>
                            <input id="to-value" placeholder="Foot-candle Value" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('lux-lx-to-foot-candle-fc')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Lux to Foot-candle (lx to fc) Conversion Calculator</h3>
                        <p>Convert Lux (lx) to Foot-candle (fc) easily using our accurate illuminance unit converter. Includes formula, example & quick result.</p>
                        <p><strong>Formula:</strong> fc=lx×0.092903fc=lx×0.092903</p>
                        <!--<p><strong>Example:</strong> Convert 1 Lux to Foot-candle: 1 × 0.092903 = 0.092903 Foot-candle</p>!-->
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
                    <h3>Convert Lux to Other Illuminance Units</h3>
                    <ul><li><a href="lux-lx-to-nit-nt.php">Lux to Nit (nt)</a></li><li><a href="lux-lx-to-phot-ph.php">Lux to Phot (ph)</a></li><li><a href="lux-lx-to-lambert-l.php">Lux to Lambert (L)</a></li><li><a href="lux-lx-to-footlambert-fl.php">Lux to Footlambert (fL)</a></li></ul>
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
