<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Picometer (pm) to Micrometer (µm) accurately. Use our Light & Optics Conversions - Wavelength conversion tool online."/>
    <meta name="keywords" content="picometer to micrometer, pm to µm, convert picometer to micrometer, picometer to micrometer calculator, how many micrometers in a picometer, picometer in micrometer, pm to µm converter, picometer to micrometer formula, picometer to micrometer chart, light & optics conversions conversion picometer to micrometer, picometer to micrometer online converter"/>
    <title>Picometer to Micrometer Conversion (pm to µm)</title>
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
                    <h2>Picometer to Micrometer Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Picometer (pm)</label>
                            <input id="from-value" oninput="performConversion('picometer-pm-to-micrometer-µm')" placeholder="Enter Picometer (pm)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='micrometer-µm-to-picometer-pm.php'" title="Convert Micrometer to Picometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Micrometer (µm)</label>
                            <input id="to-value" placeholder="Micrometer (µm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('picometer-pm-to-micrometer-µm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Picometer to Micrometer Conversion (pm to µm)</h3>
                        <p>Learn how to convert Picometer to Micrometer with this precise tool. All values are based on standard SI definitions.</p>
                        <p><strong>Formula:</strong> 1 Picometer = 1e-06 Micrometer | Formula: Micrometer = Picometer × 1e-06</p>
                        <!--<p><strong>Example:</strong> Convert 1 picometer to micrometer: 1 × 1e-06 = 1e-06 Micrometer</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Light & Optics Conversions Wavelength</h3>
                    <ul>
                        <li><a href="nanometer-nm-to-micrometer-%C2%B5m.php">Nanometer to Micrometer (Âµm)</a></li>
                        <li><a href="micrometer-%C2%B5m-to-nanometer-nm.php">Micrometer to Nanometer (nm)</a></li>
                        <li><a href="nanometer-nm-to-angstrom-%C3%85.php">Nanometer to Angstrom (Ã…)</a></li>
                        <li><a href="angstrom-%C3%85-to-nanometer-nm.php">Angstrom to Nanometer (nm)</a></li>
                        <li><a href="micrometer-%C2%B5m-to-millimeter-mm.php">Micrometer to Millimeter (mm)</a></li>
                        <li><a href="millimeter-mm-to-micrometer-%C2%B5m.php">Millimeter to Micrometer (Âµm)</a></li>
                        <li><a href="centimeter-cm-to-millimeter-mm.php">Centimeter to Millimeter (mm)</a></li>
                        <li><a href="millimeter-mm-to-centimeter-cm.php">Millimeter to Centimeter (cm)</a></li>
                        <li><a href="nanometer-nm-to-picometer-pm.php">Nanometer to Picometer (pm)</a></li>
                        <li><a href="picometer-pm-to-nanometer-nm.php">Picometer to Nanometer (nm)</a></li>


                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert Picometer to Other Wavelength Units</h3>
                    <ul><li><a href="picometer-pm-to-nanometer-nm.php">Picometer to Nanometer (nm)</a></li><li><a href="picometer-pm-to-angstrom-å.php">Picometer to Angstrom (Å)</a></li><li><a href="picometer-pm-to-millimeter-mm.php">Picometer to Millimeter (mm)</a></li><li><a href="picometer-pm-to-femtometer-fm.php">Picometer to Femtometer (fm)</a></li><li><a href="picometer-pm-to-centimeter-cm.php">Picometer to Centimeter (cm)</a></li></ul>
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
