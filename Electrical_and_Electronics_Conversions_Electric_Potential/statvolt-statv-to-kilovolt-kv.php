
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Statvolt to Kilovolt instantly with our precise electric potential conversion tool. Easy and accurate using official SI units."/>
    <meta name="keywords" content="statvolt to kilovolt, statv to kv, convert statvolt to kilovolt, statvolt to kilovolt calculator, how many kilovolt in a statvolt, statvolt in kilovolt, statv to kv converter, statvolt to kilovolt formula, statvolt to kilovolt chart, electric potential conversion statvolt to kilovolt, statvolt to kilovolt online converter"/>
    <title>Statvolt to Kilovolt Conversion</title>
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
                    <h2>Statvolt to Kilovolt Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Statvolt</label>
                            <input id="from-value" oninput="performConversion('statvolt-statv-to-kilovolt-kv')" placeholder="Enter Statvolt" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='kilovolt-kv-to-statvolt-statv.php'" title="Swap Kilovolt to Statvolt">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Kilovolt</label>
                            <input id="to-value" placeholder="Kilovolt" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('statvolt-statv-to-kilovolt-kv')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Statvolt to Kilovolt Conversion</h3>
                        <p>This page explains how to convert Statvolt (statV) to Kilovolt (kV) using accurate scientific methods and conversion factors verified by NIST and BIPM.</p>
                        <p><strong>Formula:</strong> 1 Statvolt = 3.335641e-06 Kilovolt | Formula: Kilovolt = Statvolt × 3.335641e-06</p>
                        <!--<p><strong>Example:</strong> Convert 1 Statvolt to Kilovolt: 1 × 3.335641e-06 = 3.335641e-06 Kilovolt</p>!-->
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
                    <h3>Convert Statvolt to Other Electric Potential Units</h3>
                    <ul>
  <li><a href="statvolt-statv-to-volt-v.php">Statvolt to Volt (V)</a></li>
  <li><a href="statvolt-statv-to-millivolt-mv.php">Statvolt to Millivolt (mV)</a></li>
  <li><a href="statvolt-statv-to-microvolt-µv.php">Statvolt to Microvolt (µV)</a></li>
  <li><a href="statvolt-statv-to-kilovolt-kv.php">Statvolt to Kilovolt (kV)</a></li>
  <li><a href="statvolt-statv-to-nanovolt-nv.php">Statvolt to Nanovolt (nV)</a></li>
  <li><a href="statvolt-statv-to-picovolt-pv.php">Statvolt to Picovolt (pV)</a></li>
  <li><a href="statvolt-statv-to-abvolt-abv.php">Statvolt to Abvolt (abV)</a></li>
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
