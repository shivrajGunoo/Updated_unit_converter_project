<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Picometer (pm) to Femtometer (fm) accurately. Use our Light & Optics Conversions - Wavelength conversion tool online."/>
    <meta name="keywords" content="picometer to femtometer, pm to fm, convert picometer to femtometer, picometer to femtometer calculator, how many femtometers in a picometer, picometer in femtometer, pm to fm converter, picometer to femtometer formula, picometer to femtometer chart, light & optics conversions conversion picometer to femtometer, picometer to femtometer online converter"/>
    <title>Picometer to Femtometer Conversion (pm to fm)</title>
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
                    <h2>Picometer to Femtometer Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Picometer (pm)</label>
                            <input id="from-value" oninput="performConversion('picometer-pm-to-femtometer-fm')" placeholder="Enter Picometer (pm)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='femtometer-fm-to-picometer-pm.php'" title="Convert Femtometer to Picometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Femtometer (fm)</label>
                            <input id="to-value" placeholder="Femtometer (fm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('picometer-pm-to-femtometer-fm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Picometer to Femtometer Conversion (pm to fm)</h3>
                        <p>Learn how to convert Picometer to Femtometer with this precise tool. All values are based on standard SI definitions.</p>
                        <p><strong>Formula:</strong> 1 Picometer = 1000.0 Femtometer | Formula: Femtometer = Picometer × 1000.0</p>
                        <!--<p><strong>Example:</strong> Convert 1 picometer to femtometer: 1 × 1000.0 = 1000.0 Femtometer</p>!-->
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
                    <ul><li><a href="picometer-pm-to-nanometer-nm.php">Picometer to Nanometer (nm)</a></li><li><a href="picometer-pm-to-micrometer-µm.php">Picometer to Micrometer (µm)</a></li><li><a href="picometer-pm-to-angstrom-å.php">Picometer to Angstrom (Å)</a></li><li><a href="picometer-pm-to-millimeter-mm.php">Picometer to Millimeter (mm)</a></li><li><a href="picometer-pm-to-centimeter-cm.php">Picometer to Centimeter (cm)</a></li></ul>
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
