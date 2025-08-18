
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Foot-candle (fc) to Lambert (L) easily using our accurate illuminance unit converter. Includes formula, example & quick result."/>
    <meta name="keywords" content="foot-candle to lambert, fc to L, convert foot-candle to lambert, foot-candle to lambert calculator, how many lambert in a foot-candle, foot-candle in lambert, fc to L converter, foot-candle to lambert formula, foot-candle to lambert chart, illuminance conversion foot-candle to lambert, foot-candle to lambert online converter"/>
    <title>Foot-candle to Lambert (fc to L) Conversion Calculator</title>
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
                    <h2>Foot-candle to Lambert Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Foot-candle (fc)</label>
                            <input id="from-value" oninput="performConversion('foot-candle-fc-to-lambert-l')" placeholder="Enter Foot-candle" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='lambert-l-to-foot-candle-fc.php'" title="Swap Lambert to Foot-candle">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Lambert Value</label>
                            <input id="to-value" placeholder="Lambert Value" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('foot-candle-fc-to-lambert-l')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Foot-candle to Lambert (fc to L) Conversion Calculator</h3>
                        <p>Convert Foot-candle (fc) to Lambert (L) easily using our accurate illuminance unit converter. Includes formula, example & quick result.</p>
                        <p><strong>Formula:</strong> L=fc×0.003426L=fc×0.003426</p>
                        <!--<p><strong>Example:</strong> Convert 1 Foot-candle to Lambert: 1 × 0.00929 = 0.00929 Lambert</p>!-->
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
                    <h3>Convert Foot-candle to Other Illuminance Units</h3>
                    <ul><li><a href="foot-candle-fc-to-lux-lx.php">Foot-candle to Lux (lx)</a></li><li><a href="foot-candle-fc-to-nit-nt.php">Foot-candle to Nit (nt)</a></li><li><a href="foot-candle-fc-to-phot-ph.php">Foot-candle to Phot (ph)</a></li><li><a href="foot-candle-fc-to-footlambert-fl.php">Foot-candle to Footlambert (fL)</a></li></ul>
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
