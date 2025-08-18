<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Angstrom (Å) to Micrometer (µm) accurately. Use our Light & Optics Conversions - Wavelength conversion tool online."/>
    <meta name="keywords" content="angstrom to micrometer, Å to µm, convert angstrom to micrometer, angstrom to micrometer calculator, how many micrometers in a angstrom, angstrom in micrometer, Å to µm converter, angstrom to micrometer formula, angstrom to micrometer chart, light & optics conversions conversion angstrom to micrometer, angstrom to micrometer online converter"/>
    <title>Angstrom to Micrometer Conversion (Å to µm)</title>
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
                    <h2>Angstrom to Micrometer Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Angstrom (Å)</label>
                            <input id="from-value" oninput="performConversion('angstrom-å-to-micrometer-µm')" placeholder="Enter Angstrom (Å)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='micrometer-µm-to-angstrom-å.php'" title="Convert Micrometer to Angstrom">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Micrometer (µm)</label>
                            <input id="to-value" placeholder="Micrometer (µm)" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('angstrom-å-to-micrometer-µm')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Angstrom to Micrometer Conversion (Å to µm)</h3>
                        <p>Learn how to convert Angstrom to Micrometer with this precise tool. All values are based on standard SI definitions.</p>
                        <p><strong>Formula:</strong> 1 Angstrom = 0.0001 Micrometer | Formula: Micrometer = Angstrom × 0.0001</p>
                        <!--<p><strong>Example:</strong> Convert 1 angstrom to micrometer: 1 × 0.0001 = 0.0001 Micrometer</p>!-->
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
                    <h3>Convert Angstrom to Other Wavelength Units</h3>
                    <ul><li><a href="angstrom-å-to-nanometer-nm.php">Angstrom to Nanometer (nm)</a></li><li><a href="angstrom-å-to-picometer-pm.php">Angstrom to Picometer (pm)</a></li><li><a href="angstrom-å-to-millimeter-mm.php">Angstrom to Millimeter (mm)</a></li><li><a href="angstrom-å-to-femtometer-fm.php">Angstrom to Femtometer (fm)</a></li><li><a href="angstrom-å-to-centimeter-cm.php">Angstrom to Centimeter (cm)</a></li></ul>
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
