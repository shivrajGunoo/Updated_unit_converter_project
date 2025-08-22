<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inductance Converter | Henry, mH, µH, nH, pH, fH, abH – Electrical & Electronics</title>
  <meta name="description" content="Convert inductance units instantly: Henry (H), Millihenry (mH), Microhenry (µH), Nanohenry (nH), Picohenry (pH), Femtohenry (fH), Abhenry (abH). Accurate Electrical & Electronics conversions.">
  <meta name="keywords" content="inductance converter, henry to millihenry, H to mH, µH to nH, nH to pH, electronics calculator, abhenry to henry, pH to nH, fH to H">
  
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
          <h2>Electrical & Electronics: Inductance Conversions</h2>

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
            <h3>Popular Inductance Conversions</h3>
            <ul>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/henry-h-to-millihenry-mh.php">Henry to Millihenry (mH)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/henry-h-to-microhenry-µh.php">Henry to Microhenry (µH)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/henry-h-to-nanohenry-nh.php">Henry to Nanohenry (nH)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/henry-h-to-picohenry-ph.php">Henry to Picohenry (pH)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/henry-h-to-femtohenry-fh.php">Henry to Femtohenry (fH)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/henry-h-to-abhenry-abh.php">Henry to Abhenry (abH)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/millihenry-mh-to-henry-h.php">Millihenry to Henry (H)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/microhenry-µh-to-henry-h.php">Microhenry to Henry (H)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/nanohenry-nh-to-henry-h.php">Nanohenry to Henry (H)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/picohenry-ph-to-henry-h.php">Picohenry to Henry (H)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/femtohenry-fh-to-henry-h.php">Femtohenry to Henry (H)</a></li>
              <li><a href="../Electrical_and_Electronics_Conversions_Inductance/abhenry-abh-to-henry-h.php">Abhenry to Henry (H)</a></li>

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
  ['Henry (H)','henry-h'],
  ['Millihenry (mH)','millihenry-mh'],
  ['Microhenry (µH)','microhenry-µh'],
  ['Nanohenry (nH)','nanohenry-nh'],
  ['Picohenry (pH)','picohenry-ph'],
  ['Femtohenry (fH)','femtohenry-fh'],
  ['Abhenry (abH)','abhenry-abh']
];


const conversionFactors = {
  'henry-h-to-millihenry-mh': 1000,
  'henry-h-to-microhenry-µh': 1_000_000,
  'henry-h-to-nanohenry-nh': 1_000_000_000,
  'henry-h-to-picohenry-ph': 1e12,
  'henry-h-to-femtohenry-fh': 1e15,
  'henry-h-to-abhenry-abh': 1e9,
  'millihenry-mh-to-henry-h': 0.001,
  'millihenry-mh-to-microhenry-µh': 1000,
  'millihenry-mh-to-nanohenry-nh': 1_000_000,
  'millihenry-mh-to-picohenry-ph': 1e9,
  'millihenry-mh-to-femtohenry-fh': 1e12,
  'millihenry-mh-to-abhenry-abh': 1e6,
  'microhenry-µh-to-henry-h': 1e-6,
  'microhenry-µh-to-millihenry-mh': 0.001,
  'microhenry-µh-to-nanohenry-nh': 1000,
  'microhenry-µh-to-picohenry-ph': 1_000_000,
  'microhenry-µh-to-femtohenry-fh': 1e9,
  'microhenry-µh-to-abhenry-abh': 1000,
  'nanohenry-nh-to-henry-h': 1e-9,
  'nanohenry-nh-to-millihenry-mh': 1e-6,
  'nanohenry-nh-to-microhenry-µh': 0.001,
  'nanohenry-nh-to-picohenry-ph': 1000,
  'nanohenry-nh-to-femtohenry-fh': 1_000_000,
  'nanohenry-nh-to-abhenry-abh': 1,
  'picohenry-ph-to-henry-h': 1e-12,
  'picohenry-ph-to-millihenry-mh': 1e-9,
  'picohenry-ph-to-microhenry-µh': 1e-6,
  'picohenry-ph-to-nanohenry-nh': 0.001,
  'picohenry-ph-to-femtohenry-fh': 1000,
  'picohenry-ph-to-abhenry-abh': 0.001,
  'femtohenry-fh-to-henry-h': 1e-15,
  'femtohenry-fh-to-millihenry-mh': 1e-12,
  'femtohenry-fh-to-microhenry-µh': 1e-9,
  'femtohenry-fh-to-nanohenry-nh': 1e-6,
  'femtohenry-fh-to-picohenry-ph': 0.001,
  'femtohenry-fh-to-abhenry-abh': 1e-6,
  'abhenry-abh-to-henry-h': 1e-9,
  'abhenry-abh-to-millihenry-mh': 1e-6,
  'abhenry-abh-to-microhenry-µh': 0.001,
  'abhenry-abh-to-nanohenry-nh': 1,
  'abhenry-abh-to-picohenry-ph': 1000,
  'abhenry-abh-to-femtohenry-fh': 1_000_000
};


const HUB = 'henry-h';
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
