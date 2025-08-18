<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Centimeter (cm) to Millimeter (mm) accurately. Use our Light & Optics Conversions - Wavelength conversion tool online."/>
    <meta name="keywords" content="centimeter to millimeter, cm to mm, convert centimeter to millimeter, centimeter to millimeter calculator, how many millimeters in a centimeter, centimeter in millimeter, cm to mm converter, centimeter to millimeter formula, centimeter to millimeter chart, light & optics conversions conversion centimeter to millimeter, centimeter to millimeter online converter"/>
    <title>Centimeter to Millimeter Conversion (cm to mm)</title>
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
                    <h2>Centimeter to Millimeter Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Centimeter (cm)</label>
                            <input id="from-value" oninput="performConversion('centimeter-cm-to-millimeter-mm')" placeholder="Enter Centimeter (cm)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='millimeter-mm-to-centimeter-cm.php'" title="Convert Millimeter to Centimeter">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Millimeter (mm)</label>
                            <input id="to-value" placeholder="Millimeter (mm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('centimeter-cm-to-millimeter-mm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Centimeter to Millimeter Conversion (cm to mm)</h3>
                        <p>Learn how to convert Centimeter to Millimeter with this precise tool. All values are based on standard SI definitions.</p>
                        <p><strong>Formula:</strong> 1 Centimeter = 10.0 Millimeter | Formula: Millimeter = Centimeter × 10.0</p>
                        <!--<p><strong>Example:</strong> Convert 1 centimeter to millimeter: 1 × 10.0 = 10.0 Millimeter</p>!-->
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
                    <h3>Convert Centimeter to Other Wavelength Units</h3>
                    <ul><li><a href="centimeter-cm-to-nanometer-nm.php">Centimeter to Nanometer (nm)</a></li><li><a href="centimeter-cm-to-micrometer-µm.php">Centimeter to Micrometer (µm)</a></li><li><a href="centimeter-cm-to-angstrom-å.php">Centimeter to Angstrom (Å)</a></li><li><a href="centimeter-cm-to-picometer-pm.php">Centimeter to Picometer (pm)</a></li><li><a href="centimeter-cm-to-femtometer-fm.php">Centimeter to Femtometer (fm)</a></li></ul>
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
