
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert Fahrenheit (°F) to Reaumur (°Ré) accurately using our online converter. Get the formula, example, and SEO-ready metadata."/>
    <meta name="keywords" content="Fahrenheit to Reaumur, fahrenheit-f to reaumur-re, convert Fahrenheit to Reaumur, Fahrenheit to Reaumur calculator, how many reaumur in a fahrenheit, fahrenheit in reaumur, fahrenheit-f to reaumur-re converter, Fahrenheit to Reaumur formula, Fahrenheit to Reaumur chart, temperature conversion Fahrenheit to Reaumur, Fahrenheit to Reaumur online converter"/>
    <title>Fahrenheit (°F) to Reaumur (°Ré) Converter</title>
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
                    <h2>Fahrenheit (°F) to Reaumur (°Ré) Conversion</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Fahrenheit (°F)</label>
                            <input id="from-value" oninput="performConversion('fahrenheit-f-to-reaumur-re')" placeholder="Enter Fahrenheit (°F)" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='reaumur-re-to-fahrenheit-f.php'" title="Swap">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">Reaumur (°Ré) Result</label>
                            <input id="to-value" placeholder="Reaumur (°Ré) Result" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('fahrenheit-f-to-reaumur-re')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About Fahrenheit (°F) to Reaumur (°Ré) Converter</h3>
                        <p>Learn how to convert Fahrenheit (°F) to Reaumur (°Ré) using verified methods.</p>
                        <p><strong>Formula:</strong> 1 Fahrenheit = -13.7778 Reaumur Reaumur | Formula: Reaumur = (Fahrenheit - 32) × 4/9</p>
                        <!--<p><strong>Example:</strong> Convert 1 Fahrenheit to Reaumur: 1 Fahrenheit = -13.7778 Reaumur</p>!-->
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
<li><a href="fahrenheit-f-to-celsius-c.php">Fahrenheit to Celsius ((°C))</a></li>
<li><a href="fahrenheit-f-to-kelvin-k.php">Fahrenheit to Kelvin ((K))</a></li>
<li><a href="fahrenheit-f-to-rankine-r.php">Fahrenheit to Rankine ((°R))</a></li>
<li><a href="fahrenheit-f-to-reaumur-re.php">Fahrenheit to Reaumur ((°Ré))</a></li>
<li><a href="fahrenheit-f-to-romer.php">Fahrenheit to Romer (Romer)</a></li>
<li><a href="fahrenheit-f-to-romer-ro.php">Fahrenheit to Romer ((°Rø))</a></li>
<li><a href="fahrenheit-f-to-planck-temperature-tp.php">Fahrenheit to Planck ((Tp))</a></li>
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
