
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Volt to Statvolt instantly with our precise electric potential conversion tool. Easy and accurate using official SI units."/>
    <meta name="keywords" content="volt to statvolt, v to statv, convert volt to statvolt, volt to statvolt calculator, how many statvolt in a volt, volt in statvolt, v to statv converter, volt to statvolt formula, volt to statvolt chart, electric potential conversion volt to statvolt, volt to statvolt online converter"/>
    <title>Volt to Statvolt Conversion</title>
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
                    <h2>Volt to Statvolt Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Volt</label>
                            <input id="from-value" oninput="performConversion('volt-v-to-statvolt-statv')" placeholder="Enter Volt" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='statvolt-statv-to-volt-v.php'" title="Swap Statvolt to Volt">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Statvolt</label>
                            <input id="to-value" placeholder="Statvolt" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('volt-v-to-statvolt-statv')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Volt to Statvolt Conversion</h3>
                        <p>This page explains how to convert Volt (V) to Statvolt (statV) using accurate scientific methods and conversion factors verified by NIST and BIPM.</p>
                        <p><strong>Formula:</strong> 1 Volt = 299.792458 Statvolt | Formula: Statvolt = Volt × 299.792458</p>
                        <!--<p><strong>Example:</strong> Convert 1 Volt to Statvolt: 1 × 299.792458 = 299.792458 Statvolt</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Electrical & Electronics Conversions Electric Potential Conversions</h3>
                    <ul>
                        <ul>
  <li><a href="volt-v-to-kilovolt-kv.php">Volt to Kilovolt (kV)</a></li>
  <li><a href="millivolt-mv-to-volt-v.php">Millivolt to Volt (V)</a></li>
  <li><a href="microvolt-µv-to-volt-v.php">Microvolt to Volt (V)</a></li>
  <li><a href="statvolt-statv-to-volt-v.php">Statvolt to Volt (V)</a></li>
  <li><a href="abvolt-abv-to-volt-v.php">Abvolt to Volt (V)</a></li>
</ul> 
                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert Volt to Other Electric Potential Units</h3>
                    <ul>
  <li><a href="volt-v-to-millivolt-mv.php">Volt to Millivolt (mV)</a></li>
  <li><a href="volt-v-to-microvolt-µv.php">Volt to Microvolt (µV)</a></li>
  <li><a href="volt-v-to-kilovolt-kv.php">Volt to Kilovolt (kV)</a></li>
  <li><a href="volt-v-to-nanovolt-nv.php">Volt to Nanovolt (nV)</a></li>
  <li><a href="volt-v-to-picovolt-pv.php">Volt to Picovolt (pV)</a></li>
  <li><a href="volt-v-to-statvolt-statv.php">Volt to Statvolt (statV)</a></li>
  <li><a href="volt-v-to-abvolt-abv.php">Volt to Abvolt (abV)</a></li>
</ul>
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
