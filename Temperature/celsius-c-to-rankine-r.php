
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Celsius (°C) to Rankine (°R) accurately using our online converter. Get the formula, example, and SEO-ready metadata."/>
    <meta name="keywords" content="Celsius to Rankine, celsius-c to rankine-r, convert Celsius to Rankine, Celsius to Rankine calculator, how many rankine in a celsius, celsius in rankine, celsius-c to rankine-r converter, Celsius to Rankine formula, Celsius to Rankine chart, temperature conversion Celsius to Rankine, Celsius to Rankine online converter"/>
    <title>Celsius (°C) to Rankine (°R) Converter</title>
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
                    <h2>Celsius (°C) to Rankine (°R) Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Celsius (°C)</label>
                            <input id="from-value" oninput="performConversion('celsius-c-to-rankine-r')" placeholder="Enter Celsius (°C)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='rankine-r-to-celsius-c.php'" title="Swap">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Rankine (°R) Result</label>
                            <input id="to-value" placeholder="Rankine (°R) Result" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('celsius-c-to-rankine-r')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Celsius (°C) to Rankine (°R) Converter</h3>
                        <p>Learn how to convert Celsius (°C) to Rankine (°R) using verified methods.</p>
                        <p><strong>Formula:</strong> 1 Celsius = 493.47 Rankine Rankine | Formula: Rankine = (Celsius + 273.15) × 1.8</p>
                        <!--<p><strong>Example:</strong> Convert 1 Celsius to Rankine: 1 Celsius = 493.47 Rankine</p>!-->
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
<li><a href="celsius-c-to-fahrenheit-f.php">Celsius to Fahrenheit ((°F))</a></li>
<li><a href="celsius-c-to-kelvin-k.php">Celsius to Kelvin ((K))</a></li>
<li><a href="celsius-c-to-rankine-r.php">Celsius to Rankine ((°R))</a></li>
<li><a href="celsius-c-to-reaumur-re.php">Celsius to Reaumur ((°Ré))</a></li>
<li><a href="celsius-c-to-romer.php">Celsius to Romer (Romer)</a></li>
<li><a href="celsius-c-to-romer-ro.php">Celsius to Romer ((°Rø))</a></li>
<li><a href="celsius-c-to-planck-temperature-tp.php">Celsius to Planck ((Tp))</a></li>
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
