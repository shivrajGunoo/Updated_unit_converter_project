<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Length Conversions</title>
  <style>
    :root{--card:#ffffff;--ink:#1f2937;--muted:#6b7280;--line:#e5e7eb;--blue:#2563eb;--blue2:#eff6ff;--radius:12px}
    *{box-sizing:border-box}
    body{margin:0;background:#f3f4f6;font-family:Inter,ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;color:var(--ink)}
    .wrap{max-width:860px;margin:28px auto;padding:0 16px}
    .card{background:var(--card);border:1px solid var(--line);border-radius:16px;box-shadow:0 10px 24px rgba(0,0,0,.04)}
    .header{padding:20px 24px;border-bottom:1px solid var(--line)}
    .title{margin:0;font-size:22px;color:#1d4ed8}
    .section{padding:20px 24px}
    .grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
    .label{display:block;font-size:12px;color:var(--muted);margin-bottom:6px}
    .input,select{width:100%;padding:10px 12px;border:1px solid var(--line);border-radius:10px;background:#fff;color:var(--ink)}
    .input[readonly]{background:#f9fafb}
    .row{display:contents}
    .select-row{display:grid;grid-template-columns:1fr 44px 1fr;gap:16px;align-items:end}
    .swap{height:40px;width:44px;display:inline-flex;align-items:center;justify-content:center;border-radius:10px;background:var(--blue2);border:1px solid #dbeafe;color:var(--blue);cursor:pointer}
    .results{width:100%;border-collapse:collapse;margin-top:8px}
    .results thead th{background:#f9fafb;border-bottom:1px solid var(--line);text-align:left;font-size:13px;color:var(--muted);padding:12px 14px}
    .results tbody td{padding:12px 14px;border-bottom:1px solid var(--line)}
    .empty{color:var(--muted)}

    /* Two-column layout */
.container{
  max-width: 1200px;
  margin: 24px auto;
  padding: 0 16px;
  display: grid;
  grid-template-columns: minmax(0, 1fr) 380px; /* main | right rail */
  gap: 24px;
}

/* Right rail: sticky (doesn't move on scroll) */
.ad-section{
  position: sticky;
  top: 16px;                 /* distance from top of viewport */
  align-self: start;         /* start at top of grid area */
  height: calc(100vh - 32px);/* fill viewport height */
  overflow: auto;            /* scroll its own content if long */
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 16px;
  padding: 16px;
}

/* Optional polish for the placeholder box */
.ad-section h3{ margin: 0 0 10px; }
.ad-placeholder{
  height: 280px; width: 100%;
  display: flex; align-items: center; justify-content: center;
  background: #eef2f7; color: #8591a6;
  border: 1px solid #d6deeb; border-radius: 12px;
  margin-bottom: 16px;
}

/* Stack on smaller screens */
@media (max-width: 1060px){
  .container{ display: block; }
  .ad-section{
    position: static; /* disable sticky on small screens */
    height: auto;
    margin-top: 16px;
  }
}

  </style>
</head>
<body>
        <?php include '../header.php'; ?>
  <div class="container">
    <div class="card">
      <div class="header">
        <h2 class="title">Length Conversions</h2>
      </div>
      <div class="section">
        <div class="grid">
          <div class="row">
            <div>
              <label class="label" for="value">Value</label>
              <input id="value" class="input" type="number" inputmode="decimal" step="any" placeholder="100" value="100" />
            </div>
            <div>
              <label class="label" for="result">Result</label>
              <input id="result" class="input" type="text" readonly placeholder="1" />
            </div>
          </div>
          <div class="select-row">
            <div>
              <label class="label" for="fromUnit">From Unit</label>
              <select id="fromUnit"></select>
            </div>
            <button id="swap" class="swap" title="Swap units">↔</button>
            <div>
              <label class="label" for="toUnit">To Unit</label>
              <select id="toUnit"></select>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <strong style="display:block;margin-bottom:10px">Equivalent Lengths</strong>
        <table class="results">
          <thead><tr><th style="width:48%">Unit</th><th>Value</th></tr></thead>
          <tbody id="tbody"><tr><td colspan="2" class="empty">Waiting for input…</td></tr></tbody>
        </table>
      </div>
    </div>


    <div class="ad-section" >
        <h3>Advertisement</h3>
        <div class="ad-placeholder">Ad Space (350x280)</div>
        <?php include '../drawer_menu.php'; ?>
    </div>

    <?php include '../footer.php'; ?>

  </div>

<script>
// === Full unit list (labels -> slugs used in factor keys) ===
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

// === Conversion map (demo subset; paste your full map here) ===
const conversionFactors = {
  'meter-to-kilometer': 0.001,
  'kilometer-to-meter': 1000,
  'meter-to-centimeter': 100,
  'centimeter-to-meter': 0.01,
  'meter-to-millimeter': 1000,
  'millimeter-to-meter': 0.001,
  'meter-to-inch': 39.3700787402,
  'inch-to-meter': 0.0254,
  'meter-to-foot': 3.28083989501,
  'foot-to-meter': 0.3048,
  'meter-to-yard': 1.09361329834,
  'yard-to-meter': 0.9144,
  'meter-to-mile': 0.000621371192237,
  'mile-to-meter': 1609.344,
  'meter-to-light-year': 1.05700423859e-16,
  'light-year-to-meter': 9.4607e+15,
  'meter-to-nautical-mile-international': 0.000539956803456,
  'nautical-mile-international-to-meter': 1852,
  'meter-to-angstrom': 1e10,
  'angstrom-to-meter': 1e-10
};

// Build helper maps via meters
const meterTo = new Map();
const toMeter = new Map();
for (const [k,f] of Object.entries(conversionFactors)){
  const m1 = k.match(/^meter-to-(.+)$/); if (m1) meterTo.set(m1[1], f);
  const m2 = k.match(/^(.+)-to-meter$/); if (m2) toMeter.set(m2[1], f);
}
meterTo.set('meter',1); toMeter.set('meter',1);

const $ = s => document.querySelector(s);
const tbody = $('#tbody');

function buildDropdowns(){
  const from = $('#fromUnit'); const to = $('#toUnit');
  for (const [label, slug] of UNITS){
    const o1 = document.createElement('option'); o1.value = slug; o1.textContent = label; from.appendChild(o1);
    const o2 = document.createElement('option'); o2.value = slug; o2.textContent = label; to.appendChild(o2);
  }
  if (from.value === to.value){ const second = to.querySelector('option:nth-child(2)'); if (second) to.value = second.value; }
}

function formatNumber(x){
  if (!Number.isFinite(x)) return '—';
  const ax = Math.abs(x);
  if (x !== 0 && (ax >= 1e9 || ax < 1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(x);
}

function computeFactor(from, to){
  if (from === to) return 1;
  const direct = conversionFactors[from+'-to-'+to];
  if (direct != null) return direct;
  const a = toMeter.get(from) ?? conversionFactors[from+'-to-meter'];
  const b = meterTo.get(to) ?? conversionFactors['meter-to-'+to];
  if (a!=null && b!=null) return a*b;
  return null;
}

function render(){
  const val = parseFloat($('#value').value);
  const from = $('#fromUnit').value;
  const to = $('#toUnit').value;
  const result = $('#result');
  const rows = [];

  result.value = '';
  if (Number.isFinite(val) && from && to){
    const f = computeFactor(from, to);
    if (f != null) result.value = formatNumber(val * f);
  }

  if (!Number.isFinite(val) || !from){
    tbody.innerHTML = '<tr><td colspan="2" class="empty">Waiting for input…</td></tr>';
    return;
  }

  for (const [label, slug] of UNITS){
    if (slug === from) continue;
    const f = computeFactor(from, slug);
    if (f == null) continue;
    rows.push(`<tr><td>${label}</td><td>${formatNumber(val * f)}</td></tr>`);
  }
  rows.sort();
  tbody.innerHTML = rows.join('');
}

document.addEventListener('DOMContentLoaded',()=>{
  buildDropdowns();
  render();
  $('#value').addEventListener('input', render);
  $('#fromUnit').addEventListener('change', render);
  $('#toUnit').addEventListener('change', render);
  $('#swap').addEventListener('click', ()=>{ const f=$('#fromUnit'), t=$('#toUnit'); const a=f.value; f.value=t.value; t.value=a; render(); });
});
</script>
</body>
</html>
