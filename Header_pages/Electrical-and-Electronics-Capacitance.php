<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Capacitance Converter | Farad, µF, nF, pF, mF, kF, fF, aF, zF, yF – Electrical & Electronics</title>
  <meta name="description" content="Convert capacitance units instantly across Farad (F), Microfarad (µF), Nanofarad (nF), Picofarad (pF), Millifarad (mF), Kilofarad (kF), Femtofarad (fF), Attofarad (aF), Zeptofarad (zF), and Yoctofarad (yF). Accurate Electrical & Electronics conversions.">
  <meta name="keywords" content="capacitance converter, farad to microfarad, µF to nF, nF to pF, pF to nF, electrical conversions, electronics calculator, F to µF, kF to F, fF to pF">
  
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
          <h2>Electrical & Electronics: Capacitance Conversions</h2>

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
            <h3>Popular Capacitance Conversions</h3>
            <ul>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/farad-f-to-microfarad-µf.php">Farad to Microfarad (µF)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/microfarad-µf-to-nanofarad-nf.php">Microfarad to Nanofarad (nF)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/nanofarad-nf-to-picofarad-pf.php">Nanofarad to Picofarad (pF)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/millifarad-mf-to-farad-f.php">Millifarad to Farad (F)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/kilofarad-kf-to-farad-f.php">Kilofarad to Farad (F)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/picofarad-pf-to-femtofarad-ff.php">Picofarad to Femtofarad (fF)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/femtofarad-ff-to-attofarad-af.php">Femtofarad to Attofarad (aF)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/attofarad-af-to-zeptofarad-zf.php">Attofarad to Zeptofarad (zF)</a></li>
<li><a href="../Electrical_and_Electronics_Conversions_Capacitance/zeptofarad-zf-to-yoctofarad-yf.php">Zeptofarad to Yoctofarad (yF)</a></li>
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
  ['Farad (F)','farad-f'],
  ['Microfarad (µF)','microfarad-µf'],
  ['Nanofarad (nF)','nanofarad-nf'],
  ['Picofarad (pF)','picofarad-pf'],
  ['Millifarad (mF)','millifarad-mf'],
  ['Kilofarad (kF)','kilofarad-kf'],
  ['Femtofarad (fF)','femtofarad-ff'],
  ['Attofarad (aF)','attofarad-af'],
  ['Zeptofarad (zF)','zeptofarad-zf'],
  ['Yoctofarad (yF)','yoctofarad-yf']
];


const conversionFactors = {
  'farad-f-to-kilofarad-kf': 0.001,
  'farad-f-to-millifarad-mf': 1000,
  'farad-f-to-microfarad-µf': 1000000,
  'farad-f-to-nanofarad-nf': 1000000000,
  'farad-f-to-picofarad-pf': 1e12,
  'farad-f-to-femtofarad-ff': 1e15,
  'farad-f-to-attofarad-af': 1e18,
  'farad-f-to-zeptofarad-zf': 1e21,
  'farad-f-to-yoctofarad-yf': 1e24,
  'kilofarad-kf-to-farad-f': 1000,
  'kilofarad-kf-to-millifarad-mf': 1000000,
  'kilofarad-kf-to-microfarad-µf': 1000000000,
  'kilofarad-kf-to-nanofarad-nf': 1e12,
  'kilofarad-kf-to-picofarad-pf': 1e15,
  'kilofarad-kf-to-femtofarad-ff': 1e18,
  'kilofarad-kf-to-attofarad-af': 1e21,
  'kilofarad-kf-to-zeptofarad-zf': 1e24,
  'kilofarad-kf-to-yoctofarad-yf': 1e27,
  'millifarad-mf-to-farad-f': 0.001,
  'millifarad-mf-to-kilofarad-kf': 1e-6,
  'millifarad-mf-to-microfarad-µf': 1000,
  'millifarad-mf-to-nanofarad-nf': 1000000,
  'millifarad-mf-to-picofarad-pf': 1e9,
  'millifarad-mf-to-femtofarad-ff': 1e12,
  'millifarad-mf-to-attofarad-af': 1e15,
  'millifarad-mf-to-zeptofarad-zf': 1e18,
  'millifarad-mf-to-yoctofarad-yf': 1e21,
  'microfarad-µf-to-farad-f': 1e-6,
  'microfarad-µf-to-kilofarad-kf': 1e-9,
  'microfarad-µf-to-millifarad-mf': 0.001,
  'microfarad-µf-to-nanofarad-nf': 1000,
  'microfarad-µf-to-picofarad-pf': 1000000,
  'microfarad-µf-to-femtofarad-ff': 1e9,
  'microfarad-µf-to-attofarad-af': 1e12,
  'microfarad-µf-to-zeptofarad-zf': 1e15,
  'microfarad-µf-to-yoctofarad-yf': 1e18,
  'nanofarad-nf-to-farad-f': 1e-9,
  'nanofarad-nf-to-kilofarad-kf': 1e-12,
  'nanofarad-nf-to-millifarad-mf': 1e-6,
  'nanofarad-nf-to-microfarad-µf': 0.001,
  'nanofarad-nf-to-picofarad-pf': 1000,
  'nanofarad-nf-to-femtofarad-ff': 1000000,
  'nanofarad-nf-to-attofarad-af': 1e9,
  'nanofarad-nf-to-zeptofarad-zf': 1e12,
  'nanofarad-nf-to-yoctofarad-yf': 1e15,
  'picofarad-pf-to-farad-f': 1e-12,
  'picofarad-pf-to-kilofarad-kf': 1e-15,
  'picofarad-pf-to-millifarad-mf': 1e-9,
  'picofarad-pf-to-microfarad-µf': 1e-6,
  'picofarad-pf-to-nanofarad-nf': 0.001,
  'picofarad-pf-to-femtofarad-ff': 1000,
  'picofarad-pf-to-attofarad-af': 1000000,
  'picofarad-pf-to-zeptofarad-zf': 1e9,
  'picofarad-pf-to-yoctofarad-yf': 1e12,
  'femtofarad-ff-to-farad-f': 1e-15,
  'femtofarad-ff-to-kilofarad-kf': 1e-18,
  'femtofarad-ff-to-millifarad-mf': 1e-12,
  'femtofarad-ff-to-microfarad-µf': 1e-9,
  'femtofarad-ff-to-nanofarad-nf': 1e-6,
  'femtofarad-ff-to-picofarad-pf': 0.001,
  'femtofarad-ff-to-attofarad-af': 1000,
  'femtofarad-ff-to-zeptofarad-zf': 1000000,
  'femtofarad-ff-to-yoctofarad-yf': 1e9,
  'attofarad-af-to-farad-f': 1e-18,
  'attofarad-af-to-kilofarad-kf': 1e-21,
  'attofarad-af-to-millifarad-mf': 1e-15,
  'attofarad-af-to-microfarad-µf': 1e-12,
  'attofarad-af-to-nanofarad-nf': 1e-9,
  'attofarad-af-to-picofarad-pf': 1e-6,
  'attofarad-af-to-femtofarad-ff': 0.001,
  'attofarad-af-to-zeptofarad-zf': 1000,
  'attofarad-af-to-yoctofarad-yf': 1000000,
  'zeptofarad-zf-to-farad-f': 1e-21,
  'zeptofarad-zf-to-kilofarad-kf': 1e-24,
  'zeptofarad-zf-to-millifarad-mf': 1e-18,
  'zeptofarad-zf-to-microfarad-µf': 1e-15,
  'zeptofarad-zf-to-nanofarad-nf': 1e-12,
  'zeptofarad-zf-to-picofarad-pf': 1e-9,
  'zeptofarad-zf-to-femtofarad-ff': 1e-6,
  'zeptofarad-zf-to-attofarad-af': 0.001,
  'zeptofarad-zf-to-yoctofarad-yf': 1000,
  'yoctofarad-yf-to-farad-f': 1e-24,
  'yoctofarad-yf-to-kilofarad-kf': 1e-27,
  'yoctofarad-yf-to-millifarad-mf': 1e-21,
  'yoctofarad-yf-to-microfarad-µf': 1e-18,
  'yoctofarad-yf-to-nanofarad-nf': 1e-15,
  'yoctofarad-yf-to-picofarad-pf': 1e-12,
  'yoctofarad-yf-to-femtofarad-ff': 1e-9,
  'yoctofarad-yf-to-attofarad-af': 1e-6,
  'yoctofarad-yf-to-zeptofarad-zf': 0.001
};


const HUB = 'farad-f';
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
