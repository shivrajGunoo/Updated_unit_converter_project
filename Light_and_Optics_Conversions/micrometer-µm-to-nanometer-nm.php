<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Micrometer (µm) to Nanometer (nm) accurately. Use our Light & Optics Conversions - Wavelength conversion tool online."/>
    <meta name="keywords" content="micrometer to nanometer, µm to nm, convert micrometer to nanometer, micrometer to nanometer calculator, how many nanometers in a micrometer, micrometer in nanometer, µm to nm converter, micrometer to nanometer formula, micrometer to nanometer chart, light & optics conversions conversion micrometer to nanometer, micrometer to nanometer online converter"/>
    <title>Micrometer to Nanometer Conversion (µm to nm)</title>
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
                    <h2>Micrometer to Nanometer Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Micrometer (µm)</label>
                            <input id="from-value" oninput="performConversion('micrometer-µm-to-nanometer-nm')" placeholder="Enter Micrometer (µm)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='nanometer-nm-to-micrometer-µm.php'" title="Convert Nanometer to Micrometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Nanometer (nm)</label>
                            <input id="to-value" placeholder="Nanometer (nm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('micrometer-µm-to-nanometer-nm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Micrometer to Nanometer Conversion (µm to nm)</h3>
                        <p>Learn how to convert Micrometer to Nanometer with this precise tool. All values are based on standard SI definitions.</p>
                        <p><strong>Formula:</strong> 1 Micrometer = 1000.0 Nanometer | Formula: Nanometer = Micrometer × 1000.0</p>
                        <!--<p><strong>Example:</strong> Convert 1 micrometer to nanometer: 1 × 1000.0 = 1000.0 Nanometer</p>!-->
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
                    <h3>Convert Micrometer to Other Wavelength Units</h3>
                    <ul><li><a href="micrometer-µm-to-angstrom-å.php">Micrometer to Angstrom (Å)</a></li><li><a href="micrometer-µm-to-picometer-pm.php">Micrometer to Picometer (pm)</a></li><li><a href="micrometer-µm-to-millimeter-mm.php">Micrometer to Millimeter (mm)</a></li><li><a href="micrometer-µm-to-femtometer-fm.php">Micrometer to Femtometer (fm)</a></li><li><a href="micrometer-µm-to-centimeter-cm.php">Micrometer to Centimeter (cm)</a></li></ul>
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
