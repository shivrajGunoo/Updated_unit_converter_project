<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="google-adsense-account" content="ca-pub-6936401689797405">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6936401689797405" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Free Online Unit Converter | Length, Temperature, Area, Volume, Weight &amp; Time</title>
  <meta name="description" content="Convert Length, Temperature, Area, Volume, Weight, and Time units instantly. Free online unit converter with accurate formulas and popular conversions like meters to kilometers, Celsius to Fahrenheit, liters to gallons, and kilograms to pounds.">
  <meta name="keywords" content="unit converter, length converter, temperature converter, area converter, volume converter, weight converter, time converter, meters to kilometers, inches to centimeters, miles to kilometers, Celsius to Fahrenheit, liters to gallons, kilograms to pounds, hours to minutes, online calculator, free converter">
  <link rel="stylesheet" href="css/sub_main_pages.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <div class="main-wrapper">

      <div class="content-section">
        <section id="unit-converter" class="converter-section">
          <h1 style="margin-bottom:10px; color: #0056D2; ">Unit Conversions</h1>

          <div class="button-group" role="tablist" aria-label="Converter categories">
            <button data-cat="length" class="tab-btn" aria-selected="true">Length</button>
            <button data-cat="volume" class="tab-btn">Volume</button>
            <button data-cat="weight" class="tab-btn">Weight</button>
            <button data-cat="area" class="tab-btn">Area</button>
            <button data-cat="temperature" class="tab-btn">Temperature</button>
            <button data-cat="time" class="tab-btn">Time</button>
          </div>

          <div class="converter-tool" style="margin-top:14px">
            <div class="input-group">
              <label for="fromValue">From</label>
              <input id="fromValue" type="number" step="any" value="1" aria-label="From value">
              <input id="fromFilter" type="text" placeholder="Filter units" style="margin-top:8px">
              <select id="fromUnit" aria-label="From unit"></select>
            </div>

            <button class="swap-btn" id="swapBtn" aria-label="Swap units">⇄</button>

            <div class="input-group">
              <label for="toValue">To</label>
              <input id="toValue" type="number" step="any" aria-label="To value">
              <input id="toFilter" type="text" placeholder="Filter units" style="margin-top:8px">
              <select id="toUnit" aria-label="To unit"></select>
            </div>
          </div>

          <table class="conversion-table" id="resultsTable" aria-label="Conversion results">
            <thead><tr><th>Unit</th><th>Value</th></tr></thead>
            <tbody></tbody>
          </table>
        </section>
      </div>

      <div class="freeze_div">
        <aside>
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-6936401689797405"
               data-ad-slot="1114453615"
               data-ad-format="auto"
               data-full-width-responsive="true"></ins>
          <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </aside>

        <aside>
          <?php include_once 'drawer_menu.php'; ?>
        </aside>
      </div>

    </div>
  </div>

  <?php include 'footer.php'; ?>
  <script type="module" src="Javascripts/Home_page_js/main.js"></script>
</body>
</html>
