<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Electric Potential Converter | Volt, mV, µV, kV, nV, pV, statV, abV</title>
  <meta name="description" content="Convert electric potential (voltage) units instantly: Volt (V), Millivolt (mV), Microvolt (µV), Kilovolt (kV), Nanovolt (nV), Picovolt (pV), Statvolt (statV), Abvolt (abV). Accurate Electrical & Electronics conversions.">
  <meta name="keywords" content="voltage converter, electric potential converter, volt to millivolt, mV to V, V to µV, kV to V, nV to µV, statvolt to volt, abvolt to volt, electronics calculator">
  
  <link href="../css/sub_main_pages.css" rel="stylesheet"/>

  
  <style>
    
    .converter-tool{
      display:grid;
      grid-template-columns:1fr 44px 1fr;
      grid-template-rows:auto auto;
      gap:15px;
      align-items:end;
    }
    .cell-value {grid-column:1;grid-row:1}
    .cell-result{grid-column:3;grid-row:1}
    .cell-to    {grid-column:3;grid-row:2}
    .cell-from  {grid-column:1;grid-row:2}

    .swap-btn{
      grid-column:2;grid-row:1 / span 2;
      width:44px;height:44px;border-radius:6px;
      background:var(--light-bg);border:1px solid var(--border-color);
      display:flex;align-items:center;justify-content:center;cursor:pointer;
    }
    .swap-btn:hover{background:var(--border-color)}

    
    .ad-section{position:sticky;top:16px;overflow:visible}

    
    @media (max-width:768px){
      .converter-tool{grid-template-columns:1fr;grid-template-rows:auto auto auto auto auto}
      .swap-btn{grid-column:1;grid-row:3;transform:rotate(90deg);margin:0 auto}
      .cell-value{grid-row:1}.cell-result{grid-row:2}.cell-to{grid-row:4}.cell-from{grid-row:5}
    }
  </style>
</head>
<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <div class="main-wrapper">
      
      <section class="content-section">

        <div class="converter-section">
          <h2>Electrical & Electronics: Electric Potential Conversions</h2>

          <div class="converter-tool">
            
            <div class="input-group cell-value">
              <label for="value">Value</label>
              <input id="value" type="number" inputmode="decimal" step="any" placeholder="100" value="100" />
            </div>

            <button id="swap" class="swap-btn" title="Swap units">↔</button>

            <div class="input-group cell-result">
              <label for="result">Result</label>
              <input id="result" type="text" readonly placeholder="—" />
            </div>

            
            <div class="input-group cell-to">
              <label for="toUnit">To Unit</label>
              <select id="toUnit"></select>
            </div>

            <div class="input-group cell-from">
              <label for="fromUnit">From Unit</label>
              <select id="fromUnit"></select>
            </div>
          </div>

          
          <div class="input-group" style="margin-top:16px">
            <label for="filter">Filter units</label>
            <input id="filter" type="text" placeholder="Search units…">
          </div>

          <table class="conversion-table" style="margin-top:10px">
            <thead><tr><th style="width:48%">Unit</th><th>Value</th></tr></thead>
            <tbody id="tbody"><tr><td colspan="2">Waiting for input…</td></tr></tbody>
          </table>
        </div>

        <div class="description-section">
          <div class="info-section">
            <h3>Popular Electric Potential Conversions</h3>
            <ul>
              <li><a href="../Electrical_and_Electronics_Conversions_Electric_Potential/volt-v-to-kilovolt-kv.php">Volt to Kilovolt (kV)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Electric_Potential/millivolt-mv-to-volt-v.php">Millivolt to Volt (V)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Electric_Potential/microvolt-µv-to-volt-v.php">Microvolt to Volt (V)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Electric_Potential/statvolt-statv-to-volt-v.php">Statvolt to Volt (V)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Electric_Potential/abvolt-abv-to-volt-v.php">Abvolt to Volt (V)</a></li>

            </ul>
          </div>
        </div>

      </section>

      
      <aside class="ad-section">
        <h3>Advertisement</h3>
        <div class="ad-placeholder">Ad Space (350x280)</div>
        <?php include '../drawer_menu.php'; ?>
      </aside>
    </div>

   
  </div>
 <?php include '../footer.php'; ?>
<script>

const UNITS = [
  ['Volt (V)','volt-v'],
  ['Millivolt (mV)','millivolt-mv'],
  ['Microvolt (µV)','microvolt-µv'],
  ['Kilovolt (kV)','kilovolt-kv'],
  ['Nanovolt (nV)','nanovolt-nv'],
  ['Picovolt (pV)','picovolt-pv'],
  ['Statvolt (statV)','statvolt-statv'],
  ['Abvolt (abV)','abvolt-abv']
];


const conversionFactors = {
  'volt-v-to-millivolt-mv': 1000,
  'volt-v-to-microvolt-µv': 1000000,
  'volt-v-to-kilovolt-kv': 0.001,
  'volt-v-to-nanovolt-nv': 1000000000,
  'volt-v-to-picovolt-pv': 1000000000000,
  'volt-v-to-statvolt-statv': 0.003335640952,
  'volt-v-to-abvolt-abv': 100000000,
  'millivolt-mv-to-volt-v': 0.001,
  'millivolt-mv-to-microvolt-µv': 1000,
  'millivolt-mv-to-kilovolt-kv': 0.000001,
  'millivolt-mv-to-nanovolt-nv': 1000000,
  'millivolt-mv-to-picovolt-pv': 1000000000,
  'millivolt-mv-to-statvolt-statv': 0.000003335641,
  'millivolt-mv-to-abvolt-abv': 100000,
  'microvolt-µv-to-volt-v': 0.000001,
  'microvolt-µv-to-millivolt-mv': 0.001,
  'microvolt-µv-to-kilovolt-kv': 0.000000001,
  'microvolt-µv-to-nanovolt-nv': 1000,
  'microvolt-µv-to-picovolt-pv': 1000000,
  'microvolt-µv-to-statvolt-statv': 0.000000003335641,
  'microvolt-µv-to-abvolt-abv': 100,
  'kilovolt-kv-to-volt-v': 1000,
  'kilovolt-kv-to-millivolt-mv': 1000000,
  'kilovolt-kv-to-microvolt-µv': 1000000000,
  'kilovolt-kv-to-nanovolt-nv': 1000000000000,
  'kilovolt-kv-to-picovolt-pv': 1000000000000000,
  'kilovolt-kv-to-statvolt-statv': 299.792458,
  'kilovolt-kv-to-abvolt-abv': 100000000000,
  'nanovolt-nv-to-volt-v': 0.000000001,
  'nanovolt-nv-to-millivolt-mv': 0.000001,
  'nanovolt-nv-to-microvolt-µv': 0.001,
  'nanovolt-nv-to-kilovolt-kv': 0.000000000001,
  'nanovolt-nv-to-picovolt-pv': 1000,
  'nanovolt-nv-to-statvolt-statv': 0.000000000003335641,
  'nanovolt-nv-to-abvolt-abv': 0.1,
  'picovolt-pv-to-volt-v': 0.000000000001,
  'picovolt-pv-to-millivolt-mv': 0.000000001,
  'picovolt-pv-to-microvolt-µv': 0.000001,
  'picovolt-pv-to-kilovolt-kv': 0.000000000000001,
  'picovolt-pv-to-nanovolt-nv': 0.001,
  'picovolt-pv-to-statvolt-statv': 0.000000000000003335641,
  'picovolt-pv-to-abvolt-abv': 0.0001,
  'statvolt-statv-to-volt-v': 299.792458,
  'statvolt-statv-to-millivolt-mv': 299792.458,
  'statvolt-statv-to-microvolt-µv': 299792458,
  'statvolt-statv-to-kilovolt-kv': 0.299792458,
  'statvolt-statv-to-nanovolt-nv': 299792458000,
  'statvolt-statv-to-picovolt-pv': 299792458000000,
  'statvolt-statv-to-abvolt-abv': 29979245800,
  'abvolt-abv-to-volt-v': 0.00000001,
  'abvolt-abv-to-millivolt-mv': 0.00001,
  'abvolt-abv-to-microvolt-µv': 0.01,
  'abvolt-abv-to-kilovolt-kv': 0.00000000001,
  'abvolt-abv-to-nanovolt-nv': 10,
  'abvolt-abv-to-picovolt-pv': 10000,
  'abvolt-abv-to-statvolt-statv': 0.00000003335641
};


const HUB = 'volt-v';
const baseTo = new Map(), toBase = new Map();
for (const [k, f] of Object.entries(conversionFactors)){
  const [A,B] = k.split('-to-');
  if (!A || !B) continue;
  if (A === HUB) baseTo.set(B, f);
  if (B === HUB) toBase.set(A, f);
}
baseTo.set(HUB,1); toBase.set(HUB,1);


const $ = s => document.querySelector(s);
const tbody = $('#tbody');

function populateOptions(){
  const from = $('#fromUnit'), to = $('#toUnit');
  for (const [label, token] of UNITS){
    from.add(new Option(label, token));
    to.add(new Option(label, token));
  }
  from.selectedIndex = 0;
  to.selectedIndex = 0;
}
function formatNumber(x){
  if (!Number.isFinite(x)) return '—';
  const ax = Math.abs(x);
  if (x !== 0 && (ax >= 1e9 || ax < 1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(x);
}


function factor(fromTok, toTok){
  if (fromTok === toTok) return 1;

  const direct = conversionFactors[`${fromTok}-to-${toTok}`];
  if (direct != null) return direct;

  const inv = conversionFactors[`${toTok}-to-${fromTok}`];
  if (inv != null && inv !== 0) return 1 / inv;

  const a = toBase.get(fromTok) ?? conversionFactors[`${fromTok}-to-${HUB}`];
  const b = baseTo.get(toTok)   ?? conversionFactors[`${HUB}-to-${toTok}`];
  if (a != null && b != null) return a * b;

  return null;
}

function render(){
  const val = parseFloat($('#value').value);
  const fromTok = $('#fromUnit').value;
  const toTok   = $('#toUnit').value;
  const out = $('#result');

  out.value = '';
  if (Number.isFinite(val)){
    const f = factor(fromTok, toTok);
    out.value = f == null ? '—' : formatNumber(val * f);
  } else out.value = '—';

  if (!Number.isFinite(val)){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }

  const rows = [];
  for (const [label, tok] of UNITS){
    if (tok === fromTok) continue;
    const f = factor(fromTok, tok);
    rows.push(`<tr class="row-unit"><td class="unit-label">${label}</td><td>${f == null ? '—' : formatNumber(val * f)}</td></tr>`);
  }
  tbody.innerHTML = rows.join('');
  applyFilter($('#filter').value);
}

function applyFilter(q){
  const term = (q || '').trim().toLowerCase();
  const all = tbody.querySelectorAll('.row-unit');
  if (!term){ all.forEach(tr => tr.style.display = ''); return; }
  all.forEach(tr => {
    const label = tr.querySelector('.unit-label')?.textContent?.toLowerCase() || '';
    tr.style.display = label.includes(term) ? '' : 'none';
  });
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
  $('#filter').addEventListener('input', e => applyFilter(e.target.value));
});
</script>
</body>
</html>
