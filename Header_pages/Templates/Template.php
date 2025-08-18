<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free length converter: instantly convert between meter, kilometer, centimeter, millimeter, micrometer, nanometer, mile, yard, foot, inch, light-year, and more with live results and equivalent tables.">
    <meta name="keywords" content="length converter,unit converter,meter to foot,foot to meter,inch to cm,cm to inch,mile to km,km to mile,metric to imperial,SI units,engineering conversions">
  <title>Length Converter — Convert Between Meter, Foot, Inch, Mile & More</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
  <!-- Your site CSS -->
  <link href="../css/sub_main_pages.css" rel="stylesheet"/>

  <!-- Page tweaks to complement sub_main_pages.css -->
  <style>
    /* Make the tool a 2-row grid so the swap spans both rows */
    .converter-tool{
      display: grid;
      grid-template-columns: 1fr 44px 1fr;  /* left | swap | right */
      grid-template-rows: auto auto;        /* top (value/result) | bottom (to/from) */
      gap: 15px;
      align-items: end;
    }
    /* Swap button appearance (uses your palette) */
    .swap-btn{
      grid-column: 2;
      grid-row: 1 / span 2;  /* span both rows, centered between */
      background-color: var(--light-bg);
      border: 1px solid var(--border-color);
      border-radius: 6px;
      width: 44px; height: 44px;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
    }
    .swap-btn:hover{ background-color: var(--border-color); }

    /* Place items in the grid explicitly */
    .cell-value   { grid-column: 1; grid-row: 1; }
    .cell-result  { grid-column: 3; grid-row: 1; }
    .cell-to      { grid-column: 1; grid-row: 2; }
    .cell-from    { grid-column: 3; grid-row: 2; }

    /* Sticky right rail, no inner scrolling */
    .ad-section{
      position: sticky;
      top: 16px;
    }

    /* Mobile: stack columns; swap rotates optionally */
    @media (max-width: 768px){
      .converter-tool{
        grid-template-columns: 1fr;
        grid-template-rows: auto auto auto auto auto;
      }
      .swap-btn{
        grid-column: 1; grid-row: 3;
        transform: rotate(90deg);
        margin: 0 auto;
      }
      .cell-value  { grid-column: 1; grid-row: 1; }
      .cell-result { grid-column: 1; grid-row: 2; }
      .cell-to     { grid-column: 1; grid-row: 4; }
      .cell-from   { grid-column: 1; grid-row: 5; }
    }
  </style>
</head>
<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <div class="main-wrapper">
      <!-- LEFT: content -->
      <section class="content-section">

        <div class="converter-section">
          <h2>Length Conversions</h2>

          <div class="converter-tool">
            <!-- Top row -->
            <div class="input-group cell-value">
              <label for="value">Value</label>
              <input id="value" type="number" inputmode="decimal" step="any" placeholder="100" value="100" />
            </div>


            <button id="swap" class="swap-btn" title="Swap units">
                <i class="fas fa-exchange-alt"></i>
            </button>


            <div class="input-group cell-result">
              <label for="result">Result</label>
              <input id="result" type="text" readonly placeholder="—" />
            </div>

            <!-- Bottom row -->
            <div class="input-group cell-to">
              <label for="toUnit">To Unit</label>
              <select id="toUnit"></select>
            </div>

            <div class="input-group cell-from">
              <label for="fromUnit">From Unit</label>
              <select id="fromUnit"></select>
            </div>
          </div>

          <h3 style="margin-top:20px">Equivalent Lengths</h3>
          <table class="conversion-table">
            <thead>
              <tr><th style="width:48%">Unit</th><th>Value</th></tr>
            </thead>
            <tbody id="tbody">
              <tr><td colspan="2">Waiting for input…</td></tr>
            </tbody>
          </table>
        </div>

        <!-- (Optional) extra description block that fits your CSS -->
        <div class="description-section">
          <div class="info-section">
        <h3>Popular Length Conversions</h3>
        <ul>
            <ul>
            <li><a href="../Engineering_and_Technical _Conversions_Length/centimeter-to-inch.php">Centimeter to Inch</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/inch-to-centimeter.php">Inch to Centimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/millimeter-to-inch.php">Millimeter to Inch</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/inch-to-millimeter.php">Inch to Millimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/meter-to-foot.php">Meter to Foot</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/foot-to-meter.php">Foot to Meter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/kilometer-to-mile.php">Kilometer to Mile</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/mile-to-kilometer.php">Mile to Kilometer</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/centimeter-to-foot.php">Centimeter to Foot</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/foot-to-centimeter.php">Foot to Centimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/inch-to-foot.php">Inch to Foot</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/foot-to-inch.php">Foot to Inch</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/meter-to-yard.php">Meter to Yard</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/yard-to-meter.php">Yard to Meter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/millimeter-to-centimeter.php">Millimeter to Centimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/centimeter-to-millimeter.php">Centimeter to Millimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/centimeter-to-kilometer.php">Centimeter to Kilometer</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/kilometer-to-centimeter.php">Kilometer to Centimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/millimeter-to-foot.php">Millimeter to Foot</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/foot-to-millimeter.php">Foot to Millimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/meter-to-mile.php">Meter to Mile</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/mile-to-meter.php">Mile to Meter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/foot-to-mile.php">Foot to Mile</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/mile-to-foot.php">Mile to Foot</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/yard-to-foot.php">Yard to Foot</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/foot-to-yard.php">Foot to Yard</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/inch-to-meter.php">Inch to Meter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/meter-to-inch.php">Meter to Inch</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/kilometer-to-millimeter.php">Kilometer to Millimeter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/millimeter-to-kilometer.php">Millimeter to Kilometer</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/inch-to-yard.php">Inch to Yard</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/yard-to-inch.php">Yard to Inch</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/yard-to-mile.php">Yard to Mile</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/mile-to-yard.php">Mile to Yard</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/meter-to-kilometer.php">Meter to Kilometer</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/micrometer-to-meter.php">Micrometer to Meter</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/angstrom-to-nanometer.php">Angstrom to Nanometer</a></li>
            <li><a href="../Engineering_and_Technical _Conversions_Length/light-year-to-kilometer.php">Light Year to Kilometer</a></li>
        </ul> 
        </ul>
    </div>
</div>

      </section>
      
      <!-- RIGHT: sticky ad rail -->
      <aside class="ad-section">
        <h3>Advertisement</h3>
        <div class="ad-placeholder">Ad Space (350x280)</div>
        <?php include '../drawer_menu.php'; ?>
      </aside>
    </div>

    <?php include '../footer.php'; ?>
  </div>

<script>
/* ===== Units (label -> slug) ===== */
const UNITS = [
  ['Meter','meter'],['Kilometer','kilometer'],['Decimeter','decimeter'],['Centimeter','centimeter'],['Millimeter','millimeter'],
  ['Micrometer','micrometer'],['Nanometer','nanometer'],['Mile','mile'],['Yard','yard'],['Foot','foot'],['Inch','inch'],
  ['Light Year','light-year'],['Break','break'],['Exameter','exameter'],['Petameter','petameter'],['Terameter','terameter'],
  ['Gigameter','gigameter'],['Megameter','megameter'],['Hectometer','hectometer'],['Dekameter','dekameter'],['Micron','micron'],
  ['Picometer','picometer'],['Femtometer','femtometer'],['Attometer','attometer'],['Megaparsec','megaparsec'],['Kiloparsec','kiloparsec'],
  ['Parsec','parsec'],['Astronomical Unit','astronomical-unit'],['League','league'],['Nautical League (UK)','nautical-league-uk'],
  ['Nautical League (int.)','nautical-league-int.'],['League (statute)','league-statute'],['Nautical Mile (UK)','nautical-mile-uk'],
  ['Nautical Mile (international)','nautical-mile-international'],['Mile (statute)','mile-statute'],['Mile (US Survey)','mile-us-survey'],
  ['Kiloyard','kiloyard'],['Furlong','furlong'],['Furlong (US Survey)','furlong-us-survey'],['Chain','chain'],['Chain (US Survey)','chain-us-survey'],
  ['Rope','rope'],['Rod','rod'],['Rod (US Survey)','rod-us-survey'],['Perch','perch'],['Pole','pole'],['Fathom','fathom'],
  ['Fathom (US Survey)','fathom-us-survey'],['Ell','ell'],['Foot (US Survey)','foot-us-survey'],['Link','link'],['Link (US Survey)','link-us-survey'],
  ['Cubit (UK)','cubit-uk'],['Hand','hand'],['Span (cloth)','span-cloth'],['Finger (cloth)','finger-cloth'],['Nail (cloth)','nail-cloth'],
  ['Inch (US Survey)','inch-us-survey'],['Barleycorn','barleycorn'],['Mil','mil'],['Microinch','microinch'],['Angstrom','angstrom'],
  ['X-unit','x-unit'],['Fermi','fermi'],['Arpent','arpent'],['Pica','pica'],['Point','point'],['Twip','twip'],['Aln','aln'],
  ['Famn','famn'],['Caliber','caliber'],['Centiinch','centiinch'],['Ken','ken'],['Russian Archin','russian-archin'],['Roman Actus','roman-actus'],
  ['Vara De Tarea','vara-de-tarea'],['Vara Conuquera','vara-conuquera'],['Vara Castellana','vara-castellana'],['Cubit (Greek)','cubit-greek'],
  ['Long Reed','long-reed'],['Reed','reed'],['Long Cubit','long-cubit'],['Handbreadth','handbreadth'],['Fingerbreadth','fingerbreadth'],
  ['Planck Length','planck-length'],['Electron Radius (classical)','electron-radius-classical'],['Bohr Radius','bohr-radius'],
  ["Earth's Equatorial Radius",'earths-equatorial-radius'],["Earth's Polar Radius",'earths-polar-radius'],["Earth's Distance From",'earths-distance-from'],
  ['Mile (Roman)','mile-roman']
];

/* ===== Conversion factors (demo subset). Paste your full map here. ===== */
const conversionFactors = {
'meter-to-kilometer':0.001,
'meter-to-decimeter':10,
'meter-to-centimeter':100,
'meter-to-millimeter':1000,
'meter-to-micrometer':1000000,
'meter-to-nanometer':1000000000,
'meter-to-mile':0.000621371192237,

};

/* ===== Build helpers for meter chaining ===== */
const meterTo = new Map();
const toMeter  = new Map();
for (const [k,f] of Object.entries(conversionFactors)){
  const m1 = k.match(/^meter-to-(.+)$/); if (m1) meterTo.set(m1[1], f);
  const m2 = k.match(/^(.+)-to-meter$/); if (m2) toMeter.set(m2[1], f);
}
meterTo.set('meter',1); toMeter.set('meter',1);

const $ = sel => document.querySelector(sel);
const tbody = $('#tbody');

function populateOptions(){
  const from = $('#fromUnit'), to = $('#toUnit');
  for (const [label, slug] of UNITS){
    from.add(new Option(label, slug));
    to.add(new Option(label, slug));
  }
  if (from.value === to.value){
    const second = to.querySelector('option:nth-child(2)');
    if (second) to.value = second.value;
  }
}

function formatNumber(x){
  if (!Number.isFinite(x)) return '—';
  const ax = Math.abs(x);
  if (x !== 0 && (ax >= 1e9 || ax < 1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined,{ maximumSignificantDigits:12 }).format(x);
}

function factor(from, to){
  if (from === to) return 1;
  const direct = conversionFactors[`${from}-to-${to}`];
  if (direct != null) return direct;
  const a = toMeter.get(from) ?? conversionFactors[`${from}-to-meter`];
  const b = meterTo.get(to)  ?? conversionFactors[`meter-to-${to}`];
  if (a != null && b != null) return a * b;
  return null;
}

function render(){
  const val  = parseFloat($('#value').value);
  const from = $('#fromUnit').value;
  const to   = $('#toUnit').value;
  const out  = $('#result');

  out.value = '';
  if (Number.isFinite(val) && from && to){
    const f = factor(from, to);
    if (f != null) out.value = formatNumber(val * f);
  }

  if (!Number.isFinite(val) || !from){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }
  const rows = [];
  for (const [label, slug] of UNITS){
    if (slug === from) continue;
    const f = factor(from, slug);
    if (f == null) continue;
    rows.push(`<tr><td>${label}</td><td>${formatNumber(val * f)}</td></tr>`);
  }
  rows.sort();
  tbody.innerHTML = rows.join('');
}

document.addEventListener('DOMContentLoaded', ()=>{
  populateOptions();
  render();
  $('#value').addEventListener('input', render);
  $('#fromUnit').addEventListener('change', render);
  $('#toUnit').addEventListener('change', render);
  $('#swap').addEventListener('click', ()=>{
    const f = $('#fromUnit'), t = $('#toUnit');
    const a = f.value; f.value = t.value; t.value = a;
    render();
  });
});
</script>
</body>
</html>
