
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Footlambert (fL) to Nit (nt) easily using our accurate illuminance unit converter. Includes formula, example & quick result."/>
    <meta name="keywords" content="footlambert to nit, fL to nt, convert footlambert to nit, footlambert to nit calculator, how many nit in a footlambert, footlambert in nit, fL to nt converter, footlambert to nit formula, footlambert to nit chart, illuminance conversion footlambert to nit, footlambert to nit online converter"/>
    <title>Footlambert to Nit (fL to nt) Conversion Calculator</title>
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
                    <h2>Footlambert to Nit Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Footlambert (fL)</label>
                            <input id="from-value" oninput="performConversion('footlambert-fl-to-nit-nt')" placeholder="Enter Footlambert" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='nit-nt-to-footlambert-fl.php'" title="Swap Nit to Footlambert">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Nit Value</label>
                            <input id="to-value" placeholder="Nit Value" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('footlambert-fl-to-nit-nt')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Footlambert to Nit (fL to nt) Conversion Calculator</h3>
                        <p>Convert Footlambert (fL) to Nit (nt) easily using our accurate illuminance unit converter. Includes formula, example & quick result.</p>
                        <p><strong>Formula:</strong> nt=fL×0.2919nt=fL×0.2919</p>
                        <!--<p><strong>Example:</strong> Convert 1 Footlambert to Nit: 1 × 0.2919 = 0.2919 Nit</p>!-->
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
                    <h3>Convert Footlambert to Other Illuminance Units</h3>
                    <ul><li><a href="footlambert-fl-to-lux-lx.php">Footlambert to Lux (lx)</a></li><li><a href="footlambert-fl-to-foot-candle-fc.php">Footlambert to Foot-candle (fc)</a></li><li><a href="footlambert-fl-to-phot-ph.php">Footlambert to Phot (ph)</a></li><li><a href="footlambert-fl-to-lambert-l.php">Footlambert to Lambert (L)</a></li></ul>
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
