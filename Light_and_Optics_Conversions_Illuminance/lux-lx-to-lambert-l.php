
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Lux (lx) to Lambert (L) easily using our accurate illuminance unit converter. Includes formula, example & quick result."/>
    <meta name="keywords" content="lux to lambert, lx to L, convert lux to lambert, lux to lambert calculator, how many lambert in a lux, lux in lambert, lx to L converter, lux to lambert formula, lux to lambert chart, illuminance conversion lux to lambert, lux to lambert online converter"/>
    <title>Lux to Lambert (lx to L) Conversion Calculator</title>
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
                    <h2>Lux to Lambert Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Lux (lx)</label>
                            <input id="from-value" oninput="performConversion('lux-lx-to-lambert-l')" placeholder="Enter Lux" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='lambert-l-to-lux-lx.php'" title="Swap Lambert to Lux">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Lambert Value</label>
                            <input id="to-value" placeholder="Lambert Value" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('lux-lx-to-lambert-l')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Lux to Lambert (lx to L) Conversion Calculator</h3>
                        <p>Convert Lux (lx) to Lambert (L) easily using our accurate illuminance unit converter. Includes formula, example & quick result.</p>
                        <p><strong>Formula:</strong> L=lx×0.0003183L=lx×0.0003183</p>
                        <!--<p><strong>Example:</strong> Convert 1 Lux to Lambert: 1 × 0.0003183 = 0.000318 Lambert</p>!-->
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
                    <ul><li><a href="lux-lx-to-foot-candle-fc.php">Lux to Foot-candle (fc)</a></li><li><a href="lux-lx-to-nit-nt.php">Lux to Nit (nt)</a></li><li><a href="lux-lx-to-phot-ph.php">Lux to Phot (ph)</a></li><li><a href="lux-lx-to-footlambert-fl.php">Lux to Footlambert (fL)</a></li></ul>
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
