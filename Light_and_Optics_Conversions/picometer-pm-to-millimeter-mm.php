<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Picometer (pm) to Millimeter (mm) accurately. Use our Light & Optics Conversions - Wavelength conversion tool online."/>
    <meta name="keywords" content="picometer to millimeter, pm to mm, convert picometer to millimeter, picometer to millimeter calculator, how many millimeters in a picometer, picometer in millimeter, pm to mm converter, picometer to millimeter formula, picometer to millimeter chart, light & optics conversions conversion picometer to millimeter, picometer to millimeter online converter"/>
    <title>Picometer to Millimeter Conversion (pm to mm)</title>
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
                    <h2>Picometer to Millimeter Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Picometer (pm)</label>
                            <input id="from-value" oninput="performConversion('picometer-pm-to-millimeter-mm')" placeholder="Enter Picometer (pm)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='millimeter-mm-to-picometer-pm.php'" title="Convert Millimeter to Picometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Millimeter (mm)</label>
                            <input id="to-value" placeholder="Millimeter (mm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('picometer-pm-to-millimeter-mm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Picometer to Millimeter Conversion (pm to mm)</h3>
                        <p>Learn how to convert Picometer to Millimeter with this precise tool. All values are based on standard SI definitions.</p>
                        <p><strong>Formula:</strong> 1 Picometer = 1e-09 Millimeter | Formula: Millimeter = Picometer × 1e-09</p>
                        <!--<p><strong>Example:</strong> Convert 1 picometer to millimeter: 1 × 1e-09 = 1e-09 Millimeter</p>!-->
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
                    <ul><li><a href="picometer-pm-to-nanometer-nm.php">Picometer to Nanometer (nm)</a></li><li><a href="picometer-pm-to-micrometer-µm.php">Picometer to Micrometer (µm)</a></li><li><a href="picometer-pm-to-angstrom-å.php">Picometer to Angstrom (Å)</a></li><li><a href="picometer-pm-to-femtometer-fm.php">Picometer to Femtometer (fm)</a></li><li><a href="picometer-pm-to-centimeter-cm.php">Picometer to Centimeter (cm)</a></li></ul>
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
