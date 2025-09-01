<?php
// Updated main_template.php - dynamic unit conversion template
// SEO metadata
$pageTitle = 'Meter to Kilometer | Length Conversion';
$metaDescription = 'Convert Meter to Kilometer instantly with our precise length conversion calculator. Learn formulas, get examples, and more!';
$metaKeywords = 'meter to kilometer, meter to kilometer, convert meter to kilometer, meter to kilometer calculator, how many kilometer in a meter, meter in kilometer, meter to kilometer converter, meter to kilometer formula, meter to kilometer chart, length conversion meter to kilometer, meter to kilometer online converter';

// Content config (populated per generated page)
$subHeader = 'Popular Engineering & Technical Conversions - Length Conversions';
$contentTitle = 'Meter to Kilometer Conversion';

$label = 'Meter';
$inputFromPlaceholder = 'Enter Meter';
$outputToPlaceholder = 'Kilometer';
$swapBtnTitle = 'Swap Meter and Kilometer';
$swapLink = 'kilometer-to-meter.php';

$titleAbout = 'About Meter to Kilometer';
$aboutDescription = 'Learn how to convert Meter to Kilometer using proven conversion formulas. Useful for engineers, students, and professionals.';
$formula = '1 Meter = 0.001 Kilometer | Formula: Kilometer = Meter × 0.001';
$example = 'Convert 1 Meter to Kilometer: 1 × 0.001 = 0.001 Kilometer';

$jsConstant = 'meter-to-kilometer';

$commonConversions = '<ul>\n\t<li><a href="centimeter-to-inch.php">Centimeter to Inch</a></li>\n\t<li><a href="inch-to-centimeter.php">Inch to Centimeter</a></li>\n\t<li><a href="millimeter-to-inch.php">Millimeter to Inch</a></li>\n\t<li><a href="inch-to-millimeter.php">Inch to Millimeter</a></li>\n\t<li><a href="meter-to-foot.php">Meter to Foot</a></li>\n\t<li><a href="foot-to-meter.php">Foot to Meter</a></li>\n\t<li><a href="kilometer-to-mile.php">Kilometer to Mile</a></li>\n\t<li><a href="mile-to-kilometer.php">Mile to Kilometer</a></li>\n\t<li><a href="centimeter-to-foot.php">Centimeter to Foot</a></li>\n\t<li><a href="foot-to-centimeter.php">Foot to Centimeter</a></li>\n\t<li><a href="inch-to-foot.php">Inch to Foot</a></li>\n\t<li><a href="foot-to-inch.php">Foot to Inch</a></li>\n\t<li><a href="meter-to-yard.php">Meter to Yard</a></li>\n\t<li><a href="yard-to-meter.php">Yard to Meter</a></li>\n\t<li><a href="millimeter-to-centimeter.php">Millimeter to Centimeter</a></li>\n\t<li><a href="centimeter-to-millimeter.php">Centimeter to Millimeter</a></li>\n\t<li><a href="centimeter-to-kilometer.php">Centimeter to Kilometer</a></li>\n\t<li><a href="kilometer-to-centimeter.php">Kilometer to Centimeter</a></li>\n\t<li><a href="millimeter-to-foot.php">Millimeter to Foot</a></li>\n\t<li><a href="foot-to-millimeter.php">Foot to Millimeter</a></li>\n\t<li><a href="meter-to-mile.php">Meter to Mile</a></li>\n\t<li><a href="mile-to-meter.php">Mile to Meter</a></li>\n\t<li><a href="foot-to-mile.php">Foot to Mile</a></li>\n\t<li><a href="mile-to-foot.php">Mile to Foot</a></li>\n\t<li><a href="yard-to-foot.php">Yard to Foot</a></li>\n\t<li><a href="foot-to-yard.php">Foot to Yard</a></li>\n\t<li><a href="inch-to-meter.php">Inch to Meter</a></li>\n\t<li><a href="meter-to-inch.php">Meter to Inch</a></li>\n\t<li><a href="kilometer-to-millimeter.php">Kilometer to Millimeter</a></li>\n\t<li><a href="millimeter-to-kilometer.php">Millimeter to Kilometer</a></li>\n\t<li><a href="inch-to-yard.php">Inch to Yard</a></li>\n\t<li><a href="yard-to-inch.php">Yard to Inch</a></li>\n\t<li><a href="yard-to-mile.php">Yard to Mile</a></li>\n\t<li><a href="mile-to-yard.php">Mile to Yard</a></li>\n\t<li><a href="meter-to-kilometer.php">Meter to Kilometer</a></li>\n\t<li><a href="micrometer-to-meter.php">Micrometer to Meter</a></li>\n\t<li><a href="angstrom-to-nanometer.php">Angstrom to Nanometer</a></li>\n\t<li><a href="light-year-to-kilometer.php">Light Year to Kilometer</a></li>\n</ul>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>">

<!-- Performance: preload JS -->
<link rel="preload" href="conversion_javascript.js" as="script">
<style>
/* Mobile-first minimal styles */
body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; margin: 0; padding: 0; }
.container { max-width: 960px; margin: 0 auto; padding: 16px; }
h1, h2, h3 { line-height: 1.2; }
.input-group { display: grid; grid-template-columns: 1fr; gap: 12px; }
.input-row { display: grid; grid-template-columns: 1fr; gap: 8px; }
.input-row label { font-weight: 600; }
.input-row input, .input-row select { padding: 10px; font-size: 1rem; border: 1px solid #ccc; border-radius: 8px; width: 100%; }
.swap { display: flex; align-items: center; gap: 8px; margin: 10px 0; }
.swap a.button { padding: 8px 12px; border-radius: 999px; border: 1px solid #ddd; text-decoration: none; }
.info-section { margin-top: 24px; }
ul { padding-left: 18px; }
.card { border: 1px solid #eee; border-radius: 12px; padding: 16px; box-shadow: 0 1px 2px rgba(0,0,0,.04); }
@media (min-width: 640px) {
  .input-group { grid-template-columns: 1fr 1fr; }
}
</style>
</head>
<body>
  <main class="container">
    <h1><?php echo htmlspecialchars($contentTitle); ?></h1>
    <h2><?php echo htmlspecialchars($subHeader); ?></h2>

    <section class="card">
      <div class="input-group">
        <div class="input-row">
          <label for="fromValue"><?php echo htmlspecialchars($label); ?></label>
          <input id="fromValue" type="number" inputmode="decimal" placeholder="<?php echo htmlspecialchars($inputFromPlaceholder); ?>" />
          <select id="fromUnit"></select>
        </div>
        <div class="input-row">
          <label for="toValue">Result</label>
          <input id="toValue" type="text" placeholder="<?php echo htmlspecialchars($outputToPlaceholder); ?>" readonly />
          <select id="toUnit"></select>
        </div>
      </div>
      <div class="swap">
        <a class="button" id="swapBtn" href="<?php echo htmlspecialchars($swapLink); ?>"><?php echo htmlspecialchars($swapBtnTitle); ?></a>
        <small>Swap units</small>
      </div>
    </section>

    <section class="info-section card">
      <h3><?php echo htmlspecialchars($titleAbout); ?></h3>
      <?php if ($aboutDescription) { echo "<p>" . $aboutDescription . "</p>"; } ?>
      <?php if ($formula) { echo "<h4>Formula</h4><p>" . $formula . "</p>"; } ?>
      <?php if ($example) { echo "<h4>Example</h4><p>" . $example . "</p>"; } ?>
    </section>

    <section class="info-section card">
      <h3>Common Conversions</h3>
      <?php echo $commonConversions; ?>
    </section>
  </main>

  <script>
  // Minimal hydration to fill unit options and perform conversion
  </script>
  <script src="conversion_javascript.js" defer></script>
  <script>
  (function() {
    const conversionFactors = window.conversionFactors || (typeof conversionFactors !== 'undefined' ? conversionFactors : {});

    // Extract units from jsConstant like "meter-to-kilometer"
    const key = <?php echo json_encode($jsConstant); ?>;
    const parts = key.split('-to-');
    const from = parts[0];
    const to = parts[1];

    // Populate selects with just the two units for this page
    const fromSelect = document.getElementById('fromUnit');
    const toSelect = document.getElementById('toUnit');
    [from, to].forEach(u => {
      const opt1 = document.createElement('option'); opt1.value = u; opt1.textContent = u.replace(/-/g,' ');
      const opt2 = document.createElement('option'); opt2.value = u; opt2.textContent = u.replace(/-/g,' ');
      fromSelect.appendChild(opt1);
      toSelect.appendChild(opt2.cloneNode(true));
    });
    toSelect.selectedIndex = 1;

    const fromInput = document.getElementById('fromValue');
    const toInput = document.getElementById('toValue');

    function convert() {
      const fromUnit = fromSelect.value;
      const toUnit = toSelect.value;
      let k = fromUnit + '-to-' + toUnit;
      let factor = conversionFactors[k];
      if (factor == null) {
        // try inverse if available
        const invKey = toUnit + '-to-' + fromUnit;
        if (conversionFactors[invKey] != null) {
          factor = 1 / conversionFactors[invKey];
        }
      }
      const val = parseFloat(fromInput.value || '0');
      const result = (factor != null) ? (val * factor) : NaN;
      toInput.value = isFinite(result) ? String(result) : '—';
    }

    fromInput.addEventListener('input', convert);
    fromSelect.addEventListener('change', convert);
    toSelect.addEventListener('change', convert);

    // Initialize with placeholder or 1
    if (!fromInput.value) fromInput.value = '1';
    convert();

    // Swap link within page
    document.getElementById('swapBtn').addEventListener('click', function(e) {
      if (this.getAttribute('href') === '#') {
        e.preventDefault();
        const a = fromSelect.selectedIndex;
        fromSelect.selectedIndex = toSelect.selectedIndex;
        toSelect.selectedIndex = a;
        convert();
      }
    });
  })();
  </script>
</body>
</html>
