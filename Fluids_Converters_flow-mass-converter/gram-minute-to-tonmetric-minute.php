
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Convert gram/minute to ton (metric)/minute - Fast and accurate mass flow rate conversion."/>
    <meta name="keywords" content="gram/minute to ton (metric)/minute, convert gram/minute to ton (metric)/minute, mass flow converter"/>
    <title>gram/minute to ton (metric)/minute Conversion - Mass Flow Rate Converter</title>
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
                    <h2>gram/minute to ton (metric)/minute Converter</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Enter gram/minute</label>
                            <input id="from-value" oninput="performConversion('gram-minute-to-tonmetric-minute')" placeholder="gram/minute" step="0.01" type="number" value="1"/>
                        </div>
                        <button class="swap-btn" onclick="window.location.href='tonmetric-minute-to-gram-minute.php'" title="Swap Units">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <div class="input-group">
                            <label for="to-value">ton (metric)/minute</label>
                            <input id="to-value" placeholder="ton (metric)/minute" readonly="readonly" type="text"/>
                        </div>
                    </div>
                    <div class="button-group">
                        <button onclick="performConversion('gram-minute-to-tonmetric-minute')">Calculate</button>
                        <button onclick="clearFields()">Clear</button>
                    </div>
                </div>

                <div class="info-section">
                    <div class="about-section">
                        <h3>About gram/minute to ton (metric)/minute Conversion - Mass Flow Rate Converter</h3>
                        <p>This tool helps you convert gram/minute to ton (metric)/minute accurately.</p>
                        <p><strong>Formula:</strong> gram/minute  = 0.000001  ton (metric)/minute</p>
                        <!--<p><strong>Example:</strong> Convert 1 gram/minute to ton (metric)/minute: 1 × ? = ? ton (metric)/minute</p>!-->
                    </div>
                </div>

                <div class="info-section">
                    <h3>Popular Fluids Converters Mass Flow Rate Conversions</h3>
                    <ul>
                        <li><a href="kilogramsecond-to-gramsecond.php">kilogram/second to gram/second Converter</a></li>
<li><a href="gramsecond-to-kilogramsecond.php">gram/second to kilogram/second Converter</a></li>
<li><a href="kilogramsecond-to-poundsecond.php">kilogram/second to pound/second Converter</a></li>
<li><a href="poundsecond-to-kilogramsecond.php">pound/second to kilogram/second Converter</a></li>
<li><a href="kilogramhour-to-gramsecond.php">kilogram/hour to gram/second Converter</a></li>
<li><a href="kilogramsecond-to-kilogramhour.php">kilogram/second to kilogram/hour Converter</a></li>
<li><a href="tonmetricsecond-to-kilogramsecond.php">ton (metric)/second to kilogram/second Converter</a></li>
<li><a href="kilogramsecond-to-tonmetricsecond.php">kilogram/second to ton (metric)/second Converter</a></li>
 
                    </ul>
                </div>

                <div class="info-section">
                    <h3>Convert gram/minute to Other Units</h3>
                    <li><a href="gram-minute-to-tonmetric-minute.php">gram/minute to ton (metric)/minute</a></li>
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
