<?php
/**
 * Dynamic Unit Conversion Page Template
 * Category-agnostic. Populate $PAGE, $UNITS, and $POPULAR from an included PHP config
 * that is generated from your Excel sheets (Conversions.xlsx + Excel_config_php_parameters.xlsx).
 *
 * Requirements satisfied:
 * - Uses conversion_javascript.js for all math (no duplicate logic in PHP)
 * - "Popular (Sub‑Main Header) Unit Conversions" populated dynamically
 * - Keeps CSS hooks similar to length.php (container, row, col, card, etc.)
 * - SEO-friendly (title, meta, JSON-LD, breadcrumbs, FAQ optional)
 * - Mobile responsive (flex/grid, input sizing, no layout shift)
 * - Fast (defer JS, preconnect, minimal DOM work)
 *
 * HOW TO USE
 * 1) Create a PHP data file per category, e.g. /data/length.php (exported from Excel):
 *    - $PAGE = [
 *        'main_header'      => 'Engineering & Technical Conversions',
 *        'sub_main_header'  => 'Length',
 *        'slug'             => 'length', // used in canonical + breadcrumb
 *        'title'            => 'Length Converter | Meters, Feet, Inches, Miles',
 *        'meta_description' => 'Convert length units instantly: meters ↔ feet, inches, miles, yards, and more. Accurate, mobile‑friendly calculator using verified formulas.',
 *        'canonical'        => '/length.php', // or full URL
 *        'faq'              => [
 *           ['q' => 'How do I convert meters to feet?', 'a' => 'Enter the value in meters and select “meter” → “foot”. The tool uses precise factors from conversion_javascript.js.'],
 *           ['q' => 'Are these conversions accurate?', 'a' => 'Yes. The calculator reads a single, centralized factors file to avoid mismatches.']
 *        ]
 *      ];
 *
 *    - $UNITS = [
 *         // slug MUST match the left side used in conversion_javascript.js keys (e.g., 'meter-to-foot')
 *         // label is what users see, symbol is optional
 *         ['slug'=>'meter','label'=>'Meter','symbol'=>'m'],
 *         ['slug'=>'kilometer','label'=>'Kilometer','symbol'=>'km'],
 *         ['slug'=>'centimeter','label'=>'Centimeter','symbol'=>'cm'],
 *         ['slug'=>'millimeter','label'=>'Millimeter','symbol'=>'mm'],
 *         ['slug'=>'inch','label'=>'Inch','symbol'=>'in'],
 *         ['slug'=>'foot','label'=>'Foot','symbol'=>'ft'],
 *         ['slug'=>'yard','label'=>'Yard','symbol'=>'yd'],
 *         ['slug'=>'mile','label'=>'Mile','symbol'=>'mi']
 *      ];
 *
 *    - $POPULAR = [
 *         // Populate from the ##COMMON_CONVERTIONS section of Excel (order preserved)
 *         // Each item is ['href' => 'centimeter-to-inch.php', 'text' => 'Centimeter to Inch']
 *      ];
 *
 * 2) Then include that file BEFORE this template, e.g.:
 *    require __DIR__ . '/data/length.php';
 *    require __FILE__; // or include this template as a separate file
 */
 
 if (!isset($PAGE) || !isset($UNITS)) {
   http_response_code(500);
   echo 'Configuration arrays $PAGE and $UNITS are required.';
   exit;
 }
 
 // Convenience
 $mainHeader     = $PAGE['main_header']     ?? 'Unit Conversions';
 $subMainHeader  = $PAGE['sub_main_header'] ?? 'Category';
 $slug           = $PAGE['slug']            ?? strtolower(preg_replace('/\\s+/', '-', $subMainHeader));
 $title          = $PAGE['title']           ?? ($subMainHeader . ' Converter | ' . $mainHeader);
 $metaDesc       = $PAGE['meta_description']?? ('Instant ' . strtolower($subMainHeader) . ' conversions. Accurate & mobile friendly.');
 $canonical      = $PAGE['canonical']       ?? ('/' . $slug . '.php');
 $faq            = $PAGE['faq']             ?? [];
 
 // Build unit <option>s
 function build_unit_options($units) {
   $html = '';
   foreach ($units as $u) {
     $label  = htmlspecialchars($u['label']);
     $slug   = htmlspecialchars($u['slug']);
     $symbol = isset($u['symbol']) && $u['symbol'] !== '' ? ' (' . htmlspecialchars($u['symbol']) . ')' : '';
     $html  .= "<option value=\"{$slug}\">{$label}{$symbol}</option>";
   }
   return $html;
 }
 
 $unitOptions = build_unit_options($UNITS);
 
 // Popular conversions list (from Excel ##COMMON_CONVERTIONS)
 function build_popular_list($popular) {
   if (!is_array($popular) || empty($popular)) return '';
   $html = "<ul class=\"popular-list\">\\n";
   foreach ($popular as $item) {
     $href = htmlspecialchars($item['href']);
     $text = htmlspecialchars($item['text']);
     $html .= "  <li><a href=\"{$href}\">{$text}</a></li>\\n";
   }
   $html .= "</ul>";
   return $html;
 }
 
 $popularList = build_popular_list($POPULAR ?? []);
 
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDesc) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <style>
    /* Keep the same CSS structure/classes that length.php expects */
    :root { --card-bg:#fff; --muted:#666; --border:#e6e6e6; --accent:#1e88e5; }
    body { margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; line-height:1.5; color:#1b1b1b;}
    .container { max-width: 1000px; margin: 0 auto; padding: 16px;}
    .row { display: flex; flex-wrap: wrap; gap:16px;}
    .col { flex: 1 1 320px; min-width: 280px;}
    .card { background: var(--card-bg); border:1px solid var(--border); border-radius:16px; box-shadow: 0 1px 4px rgba(0,0,0,.05);}
    .card h2, .card h3 { margin:0 0 12px 0; }
    .card .card-body { padding: 16px;}
    .muted { color: var(--muted); }
    .input-grid { display:grid; grid-template-columns: 1fr; gap:12px; }
    @media (min-width: 640px) { .input-grid { grid-template-columns: 1fr 1fr; } }
    label { font-size: .9rem; }
    input[type="number"], select {
      width: 100%; padding: 10px 12px; border:1px solid var(--border); border-radius:10px; font-size:1rem;
    }
    button.primary { padding: 10px 14px; border-radius: 10px; border:1px solid var(--accent); background: var(--accent); color:#fff; cursor:pointer; }
    .equivalents { display:grid; grid-template-columns: repeat(auto-fill,minmax(180px,1fr)); gap:12px; }
    .eq-item { border:1px solid var(--border); border-radius:12px; padding:12px; background:#fafafa; }
    .popular { margin-top: 16px; }
    .popular-list { padding-left: 18px; }
    .breadcrumbs { font-size:.9rem; margin-bottom:8px;}
    .breadcrumbs a { color: inherit; text-decoration: none; }
    .sr-only { position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0,0,0,0); border:0; }
  </style>
  <script>
    // Units from PHP → JS for population
    window.UNIT_LIST = <?= json_encode($UNITS, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
    window.CATEGORY_SLUG = <?= json_encode($slug) ?>;
  </script>
</head>
<body>
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a> › <a href="/<?= htmlspecialchars($slug) ?>.php"><?= htmlspecialchars($subMainHeader) ?></a>
    </nav>
    <header>
      <h1><?= htmlspecialchars($mainHeader) ?></h1>
      <p class="muted"><?= htmlspecialchars($subMainHeader) ?> Converter</p>
    </header>

    <section class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h2>Convert <?= htmlspecialchars($subMainHeader) ?></h2>
            <div class="input-grid" role="group" aria-labelledby="convert-label">
              <span id="convert-label" class="sr-only">Conversion inputs</span>
              <label>
                Value
                <input id="conv-value" type="number" step="any" min="0" placeholder="Enter value" inputmode="decimal" />
              </label>
              <label>
                From unit
                <select id="from-unit"><?= $unitOptions ?></select>
              </label>
              <label>
                Result
                <input id="conv-result" type="number" step="any" placeholder="0" inputmode="decimal" aria-live="polite" />
              </label>
              <label>
                To unit
                <select id="to-unit"><?= $unitOptions ?></select>
              </label>
            </div>
            <div style="margin-top:12px; display:flex; gap:8px;">
              <button id="swap-btn" class="primary" type="button" aria-label="Swap units">Swap</button>
              <button id="convert-btn" class="primary" type="button">Convert</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <h3>Equivalent <?= htmlspecialchars($subMainHeader) ?></h3>
            <p class="muted">Live computed using verified factors.</p>
            <div id="equivalents" class="equivalents" aria-live="polite"></div>
          </div>
        </div>

        <?php if (!empty($popularList)): ?>
        <div class="card popular">
          <div class="card-body">
            <h3>Popular <?= htmlspecialchars($subMainHeader) ?> Unit Conversions</h3>
            <?= $popularList ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </section>

    <?php if (!empty($faq)): ?>
    <section class="card" style="margin-top:16px;">
      <div class="card-body">
        <h3><?= htmlspecialchars($subMainHeader) ?> FAQs</h3>
        <div itemscope itemtype="https://schema.org/FAQPage">
          <?php foreach ($faq as $i => $qa): ?>
            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" style="margin-bottom:12px;">
              <h4 itemprop="name"><?= htmlspecialchars($qa['q']) ?></h4>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text"><?= htmlspecialchars($qa['a']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </div>

  <!-- JSON-LD: Breadcrumb + WebPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": <?= json_encode($title) ?>,
    "description": <?= json_encode($metaDesc) ?>,
    "url": <?= json_encode($canonical) ?>,
    "breadcrumb": {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "<?= htmlspecialchars('/') ?>"},
        {"@type": "ListItem","position": 2,"name": <?= json_encode($subMainHeader) ?>,"item": <?= json_encode('/' . $slug . '.php') ?>}
      ]
    }
  }
  </script>

  <!-- Core conversion logic (single source of truth) -->
  <script defer src="/assets/js/conversion_javascript.js"></script>
  <script defer>
    (function(){
      // Wait for conversion_javascript.js to be available
      function ready(fn){ 
        if(document.readyState !== 'loading') fn(); 
        else document.addEventListener('DOMContentLoaded', fn);
      }

      function q(id){ return document.getElementById(id); }

      // Helper using provided conversionFactors object from conversion_javascript.js
      function convertValue(value, fromSlug, toSlug){
        if (fromSlug === toSlug) return value;
        var key = fromSlug + '-to-' + toSlug;
        if (typeof window.conversionFactors === 'undefined') {
          console.error('conversionFactors not loaded');
          return NaN;
        }
        var f = window.conversionFactors[key];
        if (typeof f === 'number') return value * f;
        // If direct path missing, attempt 2-step via meter (common base) to improve coverage
        // This assumes most length factors exist via 'meter'
        var via = 'meter';
        if (fromSlug !== via && toSlug !== via) {
          var k1 = fromSlug + '-to-' + via;
          var k2 = via + '-to-' + toSlug;
          if (window.conversionFactors[k1] && window.conversionFactors[k2]) {
            return value * window.conversionFactors[k1] * window.conversionFactors[k2];
          }
        }
        return NaN;
      }

      ready(function(){
        var from = q('from-unit');
        var to   = q('to-unit');
        var val  = q('conv-value');
        var res  = q('conv-result');
        var eqWrap = q('equivalents');
        var swap = q('swap-btn');
        var go   = q('convert-btn');

        // Defaults
        if (window.UNIT_LIST && window.UNIT_LIST.length >= 2) {
          from.value = window.UNIT_LIST[0].slug;
          to.value   = window.UNIT_LIST[1].slug;
        }

        function fmt(n){
          if (!isFinite(n)) return '—';
          var abs = Math.abs(n);
          if (abs === 0) return '0';
          if (abs < 0.001 || abs >= 1e6) return n.toExponential(6);
          return (+n.toPrecision(10)).toString();
        }

        function renderEquivalents(){
          var value = parseFloat(val.value);
          var fromSlug = from.value;
          if (!isFinite(value)) { eqWrap.innerHTML = ''; return; }
          var html = '';
          (window.UNIT_LIST || []).forEach(function(u){
            var toSlug = u.slug;
            var out = convertValue(value, fromSlug, toSlug);
            html += '<div class="eq-item"><div class="muted">' + u.label + (u.symbol ? ' ('+u.symbol+')' : '') + '</div><div><strong>' + fmt(out) + '</strong></div></div>';
          });
          eqWrap.innerHTML = html;
        }

        function doConvert(){
          var value = parseFloat(val.value);
          var out = convertValue(value, from.value, to.value);
          res.value = isFinite(out) ? out : '';
          renderEquivalents();
        }

        val.addEventListener('input', renderEquivalents);
        from.addEventListener('change', renderEquivalents);
        swap.addEventListener('click', function(){ 
          var tmp = from.value; from.value = to.value; to.value = tmp; doConvert(); 
        });
        go.addEventListener('click', doConvert);

        // Initial paint
        renderEquivalents();
      });
    })();
  </script>
</body>
</html>
