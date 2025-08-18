
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Microvolt to Nanovolt instantly with our precise electric potential conversion tool. Easy and accurate using official SI units."/>
    <meta name="keywords" content="microvolt to nanovolt, µv to nv, convert microvolt to nanovolt, microvolt to nanovolt calculator, how many nanovolt in a microvolt, microvolt in nanovolt, µv to nv converter, microvolt to nanovolt formula, microvolt to nanovolt chart, electric potential conversion microvolt to nanovolt, microvolt to nanovolt online converter"/>
    <title>Microvolt to Nanovolt Conversion</title>
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
                    <h2>Microvolt to Nanovolt Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Microvolt</label>
                            <input id="from-value" oninput="performConversion('microvolt-µv-to-nanovolt-nv')" placeholder="Enter Microvolt" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='nanovolt-nv-to-microvolt-µv.php'" title="Swap Nanovolt to Microvolt">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Nanovolt</label>
                            <input id="to-value" placeholder="Nanovolt" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('microvolt-µv-to-nanovolt-nv')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Microvolt to Nanovolt Conversion</h3>
                        <p>This page explains how to convert Microvolt (µV) to Nanovolt (nV) using accurate scientific methods and conversion factors verified by NIST and BIPM.</p>
                        <p><strong>Formula:</strong> 1 Microvolt = 1000.0 Nanovolt | Formula: Nanovolt = Microvolt × 1000.0</p>
                        <!--<p><strong>Example:</strong> Convert 1 Microvolt to Nanovolt: 1 × 1000.0 = 1000.0 Nanovolt</p>!-->
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
                    <h3>Convert Microvolt to Other Electric Potential Units</h3>
                    <ul>
  <li><a href="microvolt-µv-to-volt-v.php">Microvolt to Volt (V)</a></li>
  <li><a href="microvolt-µv-to-millivolt-mv.php">Microvolt to Millivolt (mV)</a></li>
  <li><a href="microvolt-µv-to-kilovolt-kv.php">Microvolt to Kilovolt (kV)</a></li>
  <li><a href="microvolt-µv-to-nanovolt-nv.php">Microvolt to Nanovolt (nV)</a></li>
  <li><a href="microvolt-µv-to-picovolt-pv.php">Microvolt to Picovolt (pV)</a></li>
  <li><a href="microvolt-µv-to-statvolt-statv.php">Microvolt to Statvolt (statV)</a></li>
  <li><a href="microvolt-µv-to-abvolt-abv.php">Microvolt to Abvolt (abV)</a></li>
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
