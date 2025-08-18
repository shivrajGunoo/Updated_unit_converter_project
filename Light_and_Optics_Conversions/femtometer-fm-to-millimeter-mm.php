<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Femtometer (fm) to Millimeter (mm) accurately. Use our Light & Optics Conversions - Wavelength conversion tool online."/>
    <meta name="keywords" content="femtometer to millimeter, fm to mm, convert femtometer to millimeter, femtometer to millimeter calculator, how many millimeters in a femtometer, femtometer in millimeter, fm to mm converter, femtometer to millimeter formula, femtometer to millimeter chart, light & optics conversions conversion femtometer to millimeter, femtometer to millimeter online converter"/>
    <title>Femtometer to Millimeter Conversion (fm to mm)</title>
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
                    <h2>Femtometer to Millimeter Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Femtometer (fm)</label>
                            <input id="from-value" oninput="performConversion('femtometer-fm-to-millimeter-mm')" placeholder="Enter Femtometer (fm)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='millimeter-mm-to-femtometer-fm.php'" title="Convert Millimeter to Femtometer">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Millimeter (mm)</label>
                            <input id="to-value" placeholder="Millimeter (mm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('femtometer-fm-to-millimeter-mm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Femtometer to Millimeter Conversion (fm to mm)</h3>
                        <p>Learn how to convert Femtometer to Millimeter with this precise tool. All values are based on standard SI definitions.</p>
                        <p><strong>Formula:</strong> 1 Femtometer = 1e-15 Millimeter | Formula: Millimeter = Femtometer × 1e-15</p>
                        <!--<p><strong>Example:</strong> Convert 1 femtometer to millimeter: 1 × 1e-15 = 1e-15 Millimeter</p>!-->
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
                    <h3>Convert Femtometer to Other Wavelength Units</h3>
                    <ul><li><a href="femtometer-fm-to-nanometer-nm.php">Femtometer to Nanometer (nm)</a></li><li><a href="femtometer-fm-to-micrometer-µm.php">Femtometer to Micrometer (µm)</a></li><li><a href="femtometer-fm-to-angstrom-å.php">Femtometer to Angstrom (Å)</a></li><li><a href="femtometer-fm-to-picometer-pm.php">Femtometer to Picometer (pm)</a></li><li><a href="femtometer-fm-to-centimeter-cm.php">Femtometer to Centimeter (cm)</a></li></ul>
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
