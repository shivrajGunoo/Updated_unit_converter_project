<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Electric Current Converter | A, mA, µA, kA, nA, pA, fA, aA, abA</title>
  <meta name="description" content="Convert electric current units instantly: Ampere (A), Milliampere (mA), Microampere (µA), Kiloampere (kA), Nanoampere (nA), Picoampere (pA), Femtoampere (fA), Attoampere (aA), Abampere (abA). Accurate Electrical & Electronics conversions.">
  <meta name="keywords" content="electric current converter, ampere to milliampere, A to mA, mA to µA, µA to nA, kA to A, pA to nA, electronics calculator, electric units conversion, abampere to ampere">
  
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
          <h2>Electrical & Electronics: Electric Current Conversions</h2>

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
            <h3>Popular Electric Current Conversions</h3>
            <ul>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/ampere-a-to-milliampere-ma.php">Ampere to Milliampere (mA)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/milliampere-ma-to-microampere-µa.php">Milliampere to Microampere (µA)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/ampere-a-to-kiloampere-ka.php">Ampere to Kiloampere (kA)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/ampere-a-to-microampere-µa.php">Ampere to Microampere (µA)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/ampere-a-to-nanoampere-na.php">Ampere to Nanoampere (nA)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/milliampere-ma-to-ampere-a.php">Milliampere to Ampere (A)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/microampere-µa-to-ampere-a.php">Microampere to Ampere (A)</a></li>
  <li><a href="../Electrical_and_Electronics_Conversions_Electric_Current/ampere-a-to-abampere-aba.php">Ampere to Abampere (abA)</a></li>

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
  ['Ampere (A)','ampere-a'],
  ['Milliampere (mA)','milliampere-ma'],
  ['Microampere (µA)','microampere-µa'],
  ['Kiloampere (kA)','kiloampere-ka'],
  ['Nanoampere (nA)','nanoampere-na'],
  ['Picoampere (pA)','picoampere-pa'],
  ['Femtoampere (fA)','femtoampere-fa'],
  ['Attoampere (aA)','attoampere-aa'],
  ['Abampere (abA)','abampere-aba']
];


const conversionFactors = {
  'ampere-a-to-milliampere-ma': 1000,
  'ampere-a-to-microampere-µa': 1000000,
  'ampere-a-to-kiloampere-ka': 0.001,
  'ampere-a-to-nanoampere-na': 1000000000,
  'ampere-a-to-picoampere-pa': 1000000000000,
  'ampere-a-to-femtoampere-fa': 1000000000000000,
  'ampere-a-to-attoampere-aa': 1000000000000000000,
  'ampere-a-to-abampere-aba': 0.1,
  'milliampere-ma-to-ampere-a': 0.001,
  'milliampere-ma-to-microampere-µa': 1000,
  'milliampere-ma-to-kiloampere-ka': 0.000001,
  'milliampere-ma-to-nanoampere-na': 1000000,
  'milliampere-ma-to-picoampere-pa': 1000000000,
  'milliampere-ma-to-femtoampere-fa': 1000000000000,
  'milliampere-ma-to-attoampere-aa': 1000000000000000,
  'milliampere-ma-to-abampere-aba': 0.0001,
  'microampere-µa-to-ampere-a': 0.000001,
  'microampere-µa-to-milliampere-ma': 0.001,
  'microampere-µa-to-kiloampere-ka': 0.000000001,
  'microampere-µa-to-nanoampere-na': 1000,
  'microampere-µa-to-picoampere-pa': 1000000,
  'microampere-µa-to-femtoampere-fa': 1000000000,
  'microampere-µa-to-attoampere-aa': 1000000000000,
  'microampere-µa-to-abampere-aba': 0.0000001,
  'kiloampere-ka-to-ampere-a': 1000,
  'kiloampere-ka-to-milliampere-ma': 1000000,
  'kiloampere-ka-to-microampere-µa': 1000000000,
  'kiloampere-ka-to-nanoampere-na': 1000000000000,
  'kiloampere-ka-to-picoampere-pa': 1000000000000000,
  'kiloampere-ka-to-femtoampere-fa': 1000000000000000000,
  'kiloampere-ka-to-attoampere-aa': 1000000000000000000000,
  'kiloampere-ka-to-abampere-aba': 100,
  'nanoampere-na-to-ampere-a': 0.000000001,
  'nanoampere-na-to-milliampere-ma': 0.000001,
  'nanoampere-na-to-microampere-µa': 0.001,
  'nanoampere-na-to-kiloampere-ka': 0.000000000001,
  'nanoampere-na-to-picoampere-pa': 1000,
  'nanoampere-na-to-femtoampere-fa': 1000000,
  'nanoampere-na-to-attoampere-aa': 1000000000,
  'nanoampere-na-to-abampere-aba': 0.0000000001,
  'picoampere-pa-to-ampere-a': 0.000000000001,
  'picoampere-pa-to-milliampere-ma': 0.000000001,
  'picoampere-pa-to-microampere-µa': 0.000001,
  'picoampere-pa-to-kiloampere-ka': 0.000000000000001,
  'picoampere-pa-to-nanoampere-na': 0.001,
  'picoampere-pa-to-femtoampere-fa': 1000,
  'picoampere-pa-to-attoampere-aa': 1000000,
  'picoampere-pa-to-abampere-aba': 0.0000000000001,
  'femtoampere-fa-to-ampere-a': 0.000000000000001,
  'femtoampere-fa-to-milliampere-ma': 0.000000000001,
  'femtoampere-fa-to-microampere-µa': 0.000000001,
  'femtoampere-fa-to-kiloampere-ka': 0.000000000000000001,
  'femtoampere-fa-to-nanoampere-na': 0.000001,
  'femtoampere-fa-to-picoampere-pa': 0.001,
  'femtoampere-fa-to-attoampere-aa': 1000,
  'femtoampere-fa-to-abampere-aba': 0.0000000000000001,
  'attoampere-aa-to-ampere-a': 0.000000000000000001,
  'attoampere-aa-to-milliampere-ma': 0.000000000000001,
  'attoampere-aa-to-microampere-µa': 0.000000000001,
  'attoampere-aa-to-kiloampere-ka': 0.000000000000000000001,
  'attoampere-aa-to-nanoampere-na': 0.000000001,
  'attoampere-aa-to-picoampere-pa': 0.000001,
  'attoampere-aa-to-femtoampere-fa': 0.001,
  'attoampere-aa-to-abampere-aba': 0.0000000000000000001,
  'abampere-aba-to-ampere-a': 10,
  'abampere-aba-to-milliampere-ma': 10000,
  'abampere-aba-to-microampere-µa': 10000000,
  'abampere-aba-to-kiloampere-ka': 0.01,
  'abampere-aba-to-nanoampere-na': 10000000000,
  'abampere-aba-to-picoampere-pa': 10000000000000,
  'abampere-aba-to-femtoampere-fa': 10000000000000000,
  'abampere-aba-to-attoampere-aa': 10000000000000000000
};


const HUB = 'ampere-a';
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
