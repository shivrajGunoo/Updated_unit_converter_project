
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Rankine (°R) to Celsius (°C) accurately using our online converter. Get the formula, example, and SEO-ready metadata."/>
    <meta name="keywords" content="Rankine to Celsius, rankine-r to celsius-c, convert Rankine to Celsius, Rankine to Celsius calculator, how many celsius in a rankine, rankine in celsius, rankine-r to celsius-c converter, Rankine to Celsius formula, Rankine to Celsius chart, temperature conversion Rankine to Celsius, Rankine to Celsius online converter"/>
    <title>Rankine (°R) to Celsius (°C) Converter</title>
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
                    <h2>Rankine (°R) to Celsius (°C) Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Rankine (°R)</label>
                            <input id="from-value" oninput="performConversion('rankine-r-to-celsius-c')" placeholder="Enter Rankine (°R)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='celsius-c-to-rankine-r.php'" title="Swap">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Celsius (°C) Result</label>
                            <input id="to-value" placeholder="Celsius (°C) Result" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('rankine-r-to-celsius-c')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Rankine (°R) to Celsius (°C) Converter</h3>
                        <p>Learn how to convert Rankine (°R) to Celsius (°C) using verified methods.</p>
                        <p><strong>Formula:</strong> 1 Rankine = -272.594 Celsius Celsius | Formula: Celsius = (Rankine - 491.67) × 5/9</p>
                        <!--<p><strong>Example:</strong> Convert 1 Rankine to Celsius: 1 Rankine = -272.594 Celsius</p>!-->
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
<li><a href="rankine-r-to-celsius-c.php">Rankine to Celsius ((°C))</a></li>
<li><a href="rankine-r-to-fahrenheit-f.php">Rankine to Fahrenheit ((°F))</a></li>
<li><a href="rankine-r-to-kelvin-k.php">Rankine to Kelvin ((K))</a></li>
<li><a href="rankine-r-to-reaumur-re.php">Rankine to Reaumur ((°Ré))</a></li>
<li><a href="rankine-r-to-romer.php">Rankine to Romer (Romer)</a></li>
<li><a href="rankine-r-to-romer-ro.php">Rankine to Romer ((°Rø))</a></li>
<li><a href="rankine-r-to-planck-temperature-tp.php">Rankine to Planck ((Tp))</a></li>
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
