<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Electric Resistance Converter | Ω, kΩ, MΩ, mΩ, µΩ, nΩ, abΩ</title>
  <meta name="description" content="Convert electrical resistance units instantly: Ohm (Ω), Kiloohm (kΩ), Megaohm (MΩ), Milliohm (mΩ), Microohm (µΩ), Nanoohm (nΩ), Abohm (abΩ). Accurate Electrical & Electronics conversions.">
  <meta name="keywords" content="resistance converter, ohm to kiloohm, Ω to kΩ, MΩ to Ω, mΩ to Ω, microohm to ohm, nanoohm to ohm, abohm to ohm, electronics calculator">
  
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
          <h2>Electrical & Electronics: Electric Resistance Conversions</h2>

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
            <h3>Popular Electric Resistance Conversions</h3>
            <ul>
<li><a href="../Electrical_and_Electronics_Conversions_Electric_Resistance/ohm-ω-to-kiloohm-kω.php">Ohm to Kiloohm kΩ</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Electric_Resistance/kiloohm-kω-to-ohm-ω.php">Kiloohm to Ohm Ω</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Electric_Resistance/ohm-ω-to-megaohm-mω.php">Ohm to Megaohm MΩ</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Electric_Resistance/milliohm-mω-to-ohm-ω.php">Milliohm to Ohm Ω</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Electric_Resistance/microohm-µω-to-ohm-ω.php">Microohm to Ohm Ω</a></li>

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
  ['Ohm (Ω)','ohm-ω'],
  ['Kiloohm (kΩ)','kiloohm-kω'],
  ['Megaohm (MΩ)','megaohm-mω'],
  ['Milliohm (mΩ)','milliohm-mω'],
  ['Microohm (µΩ)','microohm-µω'],
  ['Nanoohm (nΩ)','nanoohm-nω'],
  ['Abohm (abΩ)','abohm-abω']
];


const conversionFactors = {
  'ohm-ω-to-kiloohm-kω': 0.001,
  'ohm-ω-to-megaohm-mω': 1e-6,
  'ohm-ω-to-milliohm-mω': 1000,
  'ohm-ω-to-microohm-µω': 1e6,
  'ohm-ω-to-nanoohm-nω': 1e9,
  'ohm-ω-to-abohm-abω': 1e9,
  'kiloohm-kω-to-ohm-ω': 1000,
  'kiloohm-kω-to-megaohm-mω': 0.001,
  'kiloohm-kω-to-milliohm-mω': 1e6,
  'kiloohm-kω-to-microohm-µω': 1e9,
  'kiloohm-kω-to-nanoohm-nω': 1e12,
  'kiloohm-kω-to-abohm-abω': 1e12,
  'megaohm-mω-to-ohm-ω': 1e6,
  'megaohm-mω-to-kiloohm-kω': 1000,
  'megaohm-mω-to-milliohm-mω': 1e9,
  'megaohm-mω-to-microohm-µω': 1e12,
  'megaohm-mω-to-nanoohm-nω': 1e15,
  'megaohm-mω-to-abohm-abω': 1e15,
  'milliohm-mω-to-ohm-ω': 0.001,
  'milliohm-mω-to-kiloohm-kω': 1e-6,
  'milliohm-mω-to-megaohm-mω': 1e-9,
  'milliohm-mω-to-microohm-µω': 1000,
  'milliohm-mω-to-nanoohm-nω': 1e6,
  'milliohm-mω-to-abohm-abω': 1e6,
  'microohm-µω-to-ohm-ω': 1e-6,
  'microohm-µω-to-kiloohm-kω': 1e-9,
  'microohm-µω-to-megaohm-mω': 1e-12,
  'microohm-µω-to-milliohm-mω': 0.001,
  'microohm-µω-to-nanoohm-nω': 1000,
  'microohm-µω-to-abohm-abω': 1000,
  'nanoohm-nω-to-ohm-ω': 1e-9,
  'nanoohm-nω-to-kiloohm-kω': 1e-12,
  'nanoohm-nω-to-megaohm-mω': 1e-15,
  'nanoohm-nω-to-milliohm-mω': 1e-6,
  'nanoohm-nω-to-microohm-µω': 0.001,
  'nanoohm-nω-to-abohm-abω': 1,
  'abohm-abω-to-ohm-ω': 1e-9,
  'abohm-abω-to-kiloohm-kω': 1e-12,
  'abohm-abω-to-megaohm-mω': 1e-15,
  'abohm-abω-to-milliohm-mω': 1e-6,
  'abohm-abω-to-nanoohm-nω': 1
};


const HUB = 'ohm-ω';
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
