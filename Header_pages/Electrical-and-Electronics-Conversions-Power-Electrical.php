<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Electrical Power Converter | W, kW, MW, GW, hp, mW, µW</title>
  <meta name="description" content="Convert electrical power units fast: Watt (W), Kilowatt (kW), Megawatt (MW), Gigawatt (GW), Horsepower (hp), Milliwatt (mW), Microwatt (µW). Accurate Electrical & Electronics conversions.">
  <meta name="keywords" content="power converter, watt to kilowatt, kW to W, MW to kW, W to hp, mW to W, µW to W, gigawatt to megawatt, electrical power conversion">
  
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
          <h2>Electrical & Electronics: Power Conversions</h2>

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
            <h3>Popular Electrical Power Conversions</h3>
            <ul>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/watt-w-to-megawatt-mw.php">Watt to Megawatt (MW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/watt-w-to-horsepower-hp.php">Watt to Horsepower (hp)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/watt-w-to-kilowatt-kw.php">Watt to Kilowatt (kW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/kilowatt-kw-to-megawatt-mw.php">Kilowatt to Megawatt (MW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/kilowatt-kw-to-horsepower-hp.php">Kilowatt to Horsepower (hp)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/kilowatt-kw-to-watt-w.php">Kilowatt to Watt (W)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/megawatt-mw-to-kilowatt-kw.php">Megawatt to Kilowatt (kW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/megawatt-mw-to-horsepower-hp.php">Megawatt to Horsepower (hp)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/megawatt-mw-to-watt-w.php">Megawatt to Watt (W)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/horsepower-hp-to-kilowatt-kw.php">Horsepower to Kilowatt (kW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/horsepower-hp-to-megawatt-mw.php">Horsepower to Megawatt (MW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/horsepower-hp-to-watt-w.php">Horsepower to Watt (W)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/milliwatt-mw-to-kilowatt-kw.php">Milliwatt to Kilowatt (kW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/milliwatt-mw-to-megawatt-mw.php">Milliwatt to Megawatt (MW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/milliwatt-mw-to-watt-w.php">Milliwatt to Watt (W)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/microwatt-µw-to-kilowatt-kw.php">Microwatt to Kilowatt (kW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/microwatt-µw-to-megawatt-mw.php">Microwatt to Megawatt (MW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/microwatt-µw-to-watt-w.php">Microwatt to Watt (W)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/gigawatt-gw-to-kilowatt-kw.php">Gigawatt to Kilowatt (kW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/gigawatt-gw-to-megawatt-mw.php">Gigawatt to Megawatt (MW)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Power_Electrical/gigawatt-gw-to-watt-w.php">Gigawatt to Watt (W)</a></li>

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
  ['Watt (W)','watt-w'],
  ['Kilowatt (kW)','kilowatt-kw'],
  ['Megawatt (MW)','megawatt-mw'],
  ['Horsepower (hp)','horsepower-hp'],
  ['Milliwatt (mW)','milliwatt-mw'],
  ['Microwatt (µW)','microwatt-µw'],
  ['Gigawatt (GW)','gigawatt-gw']
];


const conversionFactors = {
  'watt-w-to-kilowatt-kw': 0.001,
  'watt-w-to-megawatt-mw': 1e-6,
  'watt-w-to-horsepower-hp': 0.00134102,
  'watt-w-to-milliwatt-mw': 1000,
  'watt-w-to-microwatt-µw': 1e6,
  'watt-w-to-gigawatt-gw': 1e-9,
  'kilowatt-kw-to-watt-w': 1000,
  'kilowatt-kw-to-megawatt-mw': 0.001,
  'kilowatt-kw-to-horsepower-hp': 1.34102,
  'kilowatt-kw-to-milliwatt-mw': 1e6,
  'kilowatt-kw-to-microwatt-µw': 1e9,
  'kilowatt-kw-to-gigawatt-gw': 1e-6,
  'megawatt-mw-to-watt-w': 1e6,
  'megawatt-mw-to-kilowatt-kw': 1000,
  'megawatt-mw-to-horsepower-hp': 1341.02,
  'megawatt-mw-to-milliwatt-mw': 1e9,
  'megawatt-mw-to-microwatt-µw': 1e12,
  'megawatt-mw-to-gigawatt-gw': 0.001,
  'horsepower-hp-to-watt-w': 745.7,
  'horsepower-hp-to-kilowatt-kw': 0.7457,
  'horsepower-hp-to-megawatt-mw': 0.0007457,
  'horsepower-hp-to-milliwatt-mw': 745700,
  'horsepower-hp-to-microwatt-µw': 7.457e8,
  'horsepower-hp-to-gigawatt-gw': 7.457e-7,
  'milliwatt-mw-to-watt-w': 0.001,
  'milliwatt-mw-to-kilowatt-kw': 1e-6,
  'milliwatt-mw-to-megawatt-mw': 1e-9,
  'milliwatt-mw-to-horsepower-hp': 1.34102e-6,
  'milliwatt-mw-to-microwatt-µw': 1000,
  'milliwatt-mw-to-gigawatt-gw': 1e-12,
  'microwatt-µw-to-watt-w': 1e-6,
  'microwatt-µw-to-kilowatt-kw': 1e-9,
  'microwatt-µw-to-megawatt-mw': 1e-12,
  'microwatt-µw-to-horsepower-hp': 1.34102e-9,
  'microwatt-µw-to-milliwatt-mw': 0.001,
  'microwatt-µw-to-gigawatt-gw': 1e-15,
  'gigawatt-gw-to-watt-w': 1e9,
  'gigawatt-gw-to-kilowatt-kw': 1e6,
  'gigawatt-gw-to-megawatt-mw': 1000,
  'gigawatt-gw-to-horsepower-hp': 1.34102e6,
  'gigawatt-gw-to-milliwatt-mw': 1e12,
  'gigawatt-gw-to-microwatt-µw': 1e15
};


const HUB = 'watt-w';
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
