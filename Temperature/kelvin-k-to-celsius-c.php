
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Kelvin (K) to Celsius (°C) accurately using our online converter. Get the formula, example, and SEO-ready metadata."/>
    <meta name="keywords" content="Kelvin to Celsius, kelvin-k to celsius-c, convert Kelvin to Celsius, Kelvin to Celsius calculator, how many celsius in a kelvin, kelvin in celsius, kelvin-k to celsius-c converter, Kelvin to Celsius formula, Kelvin to Celsius chart, temperature conversion Kelvin to Celsius, Kelvin to Celsius online converter"/>
    <title>Kelvin (K) to Celsius (°C) Converter</title>
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
                    <h2>Kelvin (K) to Celsius (°C) Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Kelvin (K)</label>
                            <input id="from-value" oninput="performConversion('kelvin-k-to-celsius-c')" placeholder="Enter Kelvin (K)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='celsius-c-to-kelvin-k.php'" title="Swap">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Celsius (°C) Result</label>
                            <input id="to-value" placeholder="Celsius (°C) Result" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('kelvin-k-to-celsius-c')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Kelvin (K) to Celsius (°C) Converter</h3>
                        <p>Learn how to convert Kelvin (K) to Celsius (°C) using verified methods.</p>
                        <p><strong>Formula:</strong> 1 Kelvin = -272.15 Celsius Celsius | Formula: Celsius = Kelvin - 273.15</p>
                        <!--<p><strong>Example:</strong> Convert 1 Kelvin to Celsius: 1 Kelvin = -272.15 Celsius</p>!-->
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
<li><a href="kelvin-k-to-celsius-c.php">Kelvin to Celsius ((°C))</a></li>
<li><a href="kelvin-k-to-fahrenheit-f.php">Kelvin to Fahrenheit ((°F))</a></li>
<li><a href="kelvin-k-to-rankine-r.php">Kelvin to Rankine ((°R))</a></li>
<li><a href="kelvin-k-to-reaumur-re.php">Kelvin to Reaumur ((°Ré))</a></li>
<li><a href="kelvin-k-to-romer.php">Kelvin to Romer (Romer)</a></li>
<li><a href="kelvin-k-to-romer-ro.php">Kelvin to Romer ((°Rø))</a></li>
<li><a href="kelvin-k-to-planck-temperature-tp.php">Kelvin to Planck ((Tp))</a></li>
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
