
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Reaumur (°Ré) to Celsius (°C) accurately using our online converter. Get the formula, example, and SEO-ready metadata."/>
    <meta name="keywords" content="Reaumur to Celsius, reaumur-re to celsius-c, convert Reaumur to Celsius, Reaumur to Celsius calculator, how many celsius in a reaumur, reaumur in celsius, reaumur-re to celsius-c converter, Reaumur to Celsius formula, Reaumur to Celsius chart, temperature conversion Reaumur to Celsius, Reaumur to Celsius online converter"/>
    <title>Reaumur (°Ré) to Celsius (°C) Converter</title>
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
                    <h2>Reaumur (°Ré) to Celsius (°C) Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Reaumur (°Ré)</label>
                            <input id="from-value" oninput="performConversion('reaumur-re-to-celsius-c')" placeholder="Enter Reaumur (°Ré)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='celsius-c-to-reaumur-re.php'" title="Swap">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Celsius (°C) Result</label>
                            <input id="to-value" placeholder="Celsius (°C) Result" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('reaumur-re-to-celsius-c')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Reaumur (°Ré) to Celsius (°C) Converter</h3>
                        <p>Learn how to convert Reaumur (°Ré) to Celsius (°C) using verified methods.</p>
                        <p><strong>Formula:</strong> 1 Reaumur = 1.25 Celsius Celsius | Formula: Celsius = Reaumur × 1.25</p>
                        <!--<p><strong>Example:</strong> Convert 1 Reaumur to Celsius: 1 Reaumur = 1.25 Celsius</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Temperature Temperature Conversions</h3>
                    <ul>
                        <ul>
<li><a href="celsius-c-to-fahrenheit-f.php">Celsius to Fahrenheit ((°F))</a></li>
<li><a href="celsius-c-to-kelvin-k.php">Celsius to Kelvin ((K))</a></li>
<li><a href="fahrenheit-f-to-kelvin-k.php">Fahrenheit to Kelvin ((K))</a></li>
<li><a href="kelvin-k-to-rankine-r.php">Kelvin to Rankine ((°R))</a></li>
<li><a href="celsius-c-to-reaumur-re.php">Celsius to Reaumur ((°Ré))</a></li>
</ul> 
                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert to Other Units</h3>
                    <ul>
<li><a href="reaumur-re-to-celsius-c.php">Reaumur to Celsius ((°C))</a></li>
<li><a href="reaumur-re-to-fahrenheit-f.php">Reaumur to Fahrenheit ((°F))</a></li>
<li><a href="reaumur-re-to-kelvin-k.php">Reaumur to Kelvin ((K))</a></li>
<li><a href="reaumur-re-to-rankine-r.php">Reaumur to Rankine ((°R))</a></li>
<li><a href="reaumur-re-to-romer.php">Reaumur to Romer (Romer)</a></li>
<li><a href="reaumur-re-to-romer-ro.php">Reaumur to Romer ((°Rø))</a></li>
<li><a href="reaumur-re-to-planck-temperature-tp.php">Reaumur to Planck ((Tp))</a></li>
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
