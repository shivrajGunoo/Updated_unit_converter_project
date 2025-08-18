
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Nit (nt) to Phot (ph) easily using our accurate illuminance unit converter. Includes formula, example & quick result."/>
    <meta name="keywords" content="nit to phot, nt to ph, convert nit to phot, nit to phot calculator, how many phot in a nit, nit in phot, nt to ph converter, nit to phot formula, nit to phot chart, illuminance conversion nit to phot, nit to phot online converter"/>
    <title>Nit to Phot (nt to ph) Conversion Calculator</title>
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
                    <h2>Nit to Phot Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Nit (nt)</label>
                            <input id="from-value" oninput="performConversion('nit-nt-to-phot-ph')" placeholder="Enter Nit" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='phot-ph-to-nit-nt.php'" title="Swap Phot to Nit">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Phot Value</label>
                            <input id="to-value" placeholder="Phot Value" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('nit-nt-to-phot-ph')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Nit to Phot (nt to ph) Conversion Calculator</h3>
                        <p>Convert Nit (nt) to Phot (ph) easily using our accurate illuminance unit converter. Includes formula, example & quick result.</p>
                        <p><strong>Formula:</strong> ph=nt×0.0001ph=nt×0.0001</p>
                        <!--<p><strong>Example:</strong> Convert 1 Nit to Phot: 1 × 0.00314 = 0.00314 Phot</p>!-->
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
                    <h3>Convert Nit to Other Illuminance Units</h3>
                    <ul><li><a href="nit-nt-to-lux-lx.php">Nit to Lux (lx)</a></li><li><a href="nit-nt-to-foot-candle-fc.php">Nit to Foot-candle (fc)</a></li><li><a href="nit-nt-to-lambert-l.php">Nit to Lambert (L)</a></li><li><a href="nit-nt-to-footlambert-fl.php">Nit to Footlambert (fL)</a></li></ul>
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
