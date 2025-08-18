<?php
// Reference PHP Template for Length Converter (share with prompt engineer)
// Variables that can be filled from Excel or server-side config:
$pageTitle = $pageTitle ?? 'Length Converter';
$metaDescription = $metaDescription ?? 'Convert between length units. Live results. Equivalent lengths.';
$metaKeywords = $metaKeywords ?? 'length converter, unit conversion, meter to foot, km to miles';
$contentTitle = $contentTitle ?? 'Length Conversions';
// Optional: server-side HTML for common conversions list (can be replaced from Excel)
$commonConversions = $commonConversions ?? '<ul>
  <li><a href=\"cm-to-inches.php\">cm to inches</a></li>
  <li><a href=\"inches-to-cm.php\">inches to cm</a></li>
  <li><a href=\"meters-to-feet.php\">meters to feet</a></li>
  <li><a href=\"km-to-miles.php\">km to miles</a></li>
</ul>';
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name=\"description\" content=\"<?php echo htmlspecialchars($metaDescription); ?>\">
  <meta name=\"keywords\" content=\"<?php echo htmlspecialchars($metaKeywords); ?>\">

  <!-- Optional site CSS -->
  <!-- <link href=\"../../css/sub_main_pages.css\" rel=\"stylesheet\"/> -->

  <!-- Drawer on the right (desktop) without changing markup -->
  <style>
    :root { --gap: 12px; }
    body { margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; }
    .container { max-width: 1100px; margin: 0 auto; padding: 16px; }
    .converter-tool .input-group { display: grid; grid-template-columns: 1fr; gap: var(--gap); }
    .converter-tool label { font-weight: 600; }
    .converter-tool input, .converter-tool select { padding: 10px; font-size: 1rem; border: 1px solid #ccc; border-radius: 8px; width: 100%; }
    .table { width: 100%; border-collapse: collapse; }
    .table th, .table td { border: 1px solid #e5e5e5; padding: 8px 10px; text-align: left; }
    .info-section h3 { margin-top: 0; }
    @media (min-width: 992px) {
      .content-section {
        display: grid;
        grid-template-columns: 1fr 340px;
        column-gap: 24px;
        align-items: start;
      }
      .content-section .info-section {
        grid-column: 2;
        grid-row: 1 / span 999;
        position: sticky;
        top: 16px;
        height: max-content;
      }
      .content-section > :not(.info-section) {
        grid-column: 1;
      }
    }
  </style>
</head>
<body>
  <div class=\"container\">
    <div class=\"main-wrapper\">
      <div class=\"content-section\">

        <div class=\"converter-section\">
          <h2><?php echo htmlspecialchars($contentTitle); ?></h2>

          <div class=\"converter-tool\">
            <div class=\"input-group\">
              <label for=\"from-value\">Value</label>
              <input type=\"number\" id=\"from-value\" value=\"1\" step=\"any\" placeholder=\"Enter value\">

              <label for=\"from-unit\">From Unit</label>
              <select id=\"from-unit\">
                <!-- Populated dynamically from Excel (Sub-Header (Unit)) -->
              </select>

              <label for=\"to-value\">Result</label>
              <input type=\"text\" id=\"to-value\" value=\"\" readonly>

              <label for=\"to-unit\">To Unit</label>
              <select id=\"to-unit\">
                <!-- Populated dynamically from Excel (Sub-Header (Unit)) -->
              </select>
            </div>
          </div>
        </div>

        <section class=\"equivalent-section\">
          <h3>Equivalent Lengths</h3>
          <table class=\"table table-bordered\">
            <thead>
              <tr><th>Unit</th><th>Value</th></tr>
            </thead>
            <tbody id=\"equivalent-body\">
              <!-- Populated dynamically from Excel list + JS factors -->
            </tbody>
          </table>
        </section>

        <div class=\"info-section\">
          <h3>Popular Length Unit Conversions</h3>
          <?php echo $commonConversions; ?>
        </div>

      </div> <!-- /content-section -->
    </div> <!-- /main-wrapper -->
  </div> <!-- /container -->

  <!-- Always include your JS factors file; all math must reference this -->
  <script src=\"conversion_javascript.js\" defer></script>

  <!-- INJECTION POINT: Append a single script block before </body> that:
       - Reads units from Conversions.xlsx → Sheet1 → \"Sub-Header (Unit)\" (provided at build time)
       - Populates #from-unit and #to-unit options using those labels (same order)
       - Maps labels → internal tokens expected by conversion_javascript.js
       - Calculates via window.conversionFactors with direct, inverse, or via-meter routing
       - Updates #to-value and the Equivalent table on input/change
       - Shows '—' when a mapping or factor is unavailable
       - Defaults to From=Meter and To=Foot -->
</body>
</html>
