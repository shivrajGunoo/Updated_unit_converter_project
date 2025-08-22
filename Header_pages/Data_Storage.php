<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Storage Converter | bit, byte, KB, MB, GB, TB, PB, EB, ZB, YB, KiB, MiB</title>
  <meta name="description" content="Convert data storage units instantly: bit, byte, kilobyte (KB), megabyte (MB), gigabyte (GB), terabyte (TB), petabyte (PB), exabyte (EB), zettabyte (ZB), yottabyte (YB), kibibyte (KiB), mebibyte (MiB). Accurate decimal and binary conversions.">
  <meta name="keywords" content="data storage converter, bit to byte, KB to MB, MB to GB, GB to TB, binary vs decimal storage, KiB to KB, MiB to MB, bytes conversion tool">
  
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
          <h2>Digital & Computing: Data Storage Conversions</h2>

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
            <h3>Popular Data Storage Conversions</h3>
            <ul>
                    <li><a href="../Digital_and_Computing_data_storage/bit-bit-to-byte-byte.php">Bit to Byte</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/byte-byte-to-bit-bit.php">Byte to Bit</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/byte-byte-to-kilobyte-kb.php">Byte to Kilobyte (KB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/byte-byte-to-kibibyte-kib.php">Byte to Kibibyte (KiB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/kilobyte-kb-to-byte-byte.php">Kilobyte (KB) to Byte</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/kilobyte-kb-to-megabyte-mb.php">Kilobyte (KB) to Megabyte (MB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/kilobyte-kb-to-kibibyte-kib.php">Kilobyte (KB) to Kibibyte (KiB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/megabyte-mb-to-kilobyte-kb.php">Megabyte (MB) to Kilobyte (KB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/megabyte-mb-to-gigabyte-gb.php">Megabyte (MB) to Gigabyte (GB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/megabyte-mb-to-mebibyte-mib.php">Megabyte (MB) to Mebibyte (MiB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/gigabyte-gb-to-megabyte-mb.php">Gigabyte (GB) to Megabyte (MB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/gigabyte-gb-to-terabyte-tb.php">Gigabyte (GB) to Terabyte (TB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/terabyte-tb-to-gigabyte-gb.php">Terabyte (TB) to Gigabyte (GB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/terabyte-tb-to-petabyte-pb.php">Terabyte (TB) to Petabyte (PB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/petabyte-pb-to-terabyte-tb.php">Petabyte (PB) to Terabyte (TB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/petabyte-pb-to-exabyte-eb.php">Petabyte (PB) to Exabyte (EB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/exabyte-eb-to-petabyte-pb.php">Exabyte (EB) to Petabyte (PB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/exabyte-eb-to-zettabyte-zb.php">Exabyte (EB) to Zettabyte (ZB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/zettabyte-zb-to-exabyte-eb.php">Zettabyte (ZB) to Exabyte (EB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/zettabyte-zb-to-yottabyte-yb.php">Zettabyte (ZB) to Yottabyte (YB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/yottabyte-yb-to-zettabyte-zb.php">Yottabyte (YB) to Zettabyte (ZB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/kibibyte-kib-to-byte-byte.php">Kibibyte (KiB) to Byte</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/kibibyte-kib-to-kilobyte-kb.php">Kibibyte (KiB) to Kilobyte (KB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/kibibyte-kib-to-mebibyte-mib.php">Kibibyte (KiB) to Mebibyte (MiB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/mebibyte-mib-to-kibibyte-kib.php">Mebibyte (MiB) to Kibibyte (KiB)</a></li>
                    <li><a href="../Digital_and_Computing_data_storage/mebibyte-mib-to-megabyte-mb.php">Mebibyte (MiB) to Megabyte (MB)</a></li>
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
  ['bit','bit-bit'],
    ['byte','byte-byte'],
    ['kilobyte (KB)','kilobyte-kb'],
    ['megabyte (MB)','megabyte-mb'],
    ['gigabyte (GB)','gigabyte-gb'],
    ['terabyte (TB)','terabyte-tb'],
    ['petabyte (PB)','petabyte-pb'],
    ['exabyte (EB)','exabyte-eb'],
    ['zettabyte (ZB)','zettabyte-zb'],
    ['yottabyte (YB)','yottabyte-yb'],
    ['kibibyte (KiB)','kibibyte-kib'],
    ['mebibyte (MiB)','mebibyte-mib']
];
const HUB = 'byte-byte';
const conversionFactors = {
  'byte-byte-to-bit-bit': 8,
  'bit-bit-to-byte-byte': 0.125,
  'byte-byte-to-kilobyte-kb': 0.0010000000000000000208,
  'kilobyte-kb-to-byte-byte': 1000,
  'byte-byte-to-megabyte-mb': 9.9999999999999995475e-07,
  'megabyte-mb-to-byte-byte': 1000000,
  'byte-byte-to-gigabyte-gb': 1.0000000000000000623e-09,
  'gigabyte-gb-to-byte-byte': 1000000000,
  'byte-byte-to-terabyte-tb': 9.9999999999999997989e-13,
  'terabyte-tb-to-byte-byte': 1000000000000,
  'byte-byte-to-petabyte-pb': 1.0000000000000000777e-15,
  'petabyte-pb-to-byte-byte': 1000000000000000,
  'byte-byte-to-exabyte-eb': 1.0000000000000000715e-18,
  'exabyte-eb-to-byte-byte': 1000000000000000000,
  'byte-byte-to-zettabyte-zb': 9.9999999999999990754e-22,
  'zettabyte-zb-to-byte-byte': 1e+21,
  'byte-byte-to-yottabyte-yb': 9.999999999999999237e-25,
  'yottabyte-yb-to-byte-byte': 9.9999999999999998322e+23,
  'byte-byte-to-kibibyte-kib': 0.0009765625,
  'kibibyte-kib-to-byte-byte': 1024,
  'byte-byte-to-mebibyte-mib': 9.5367431640625e-07,
  'mebibyte-mib-to-byte-byte': 1048576,
  'byte-byte-to-byte-byte': 1,
  'bit-bit-to-bit-bit': 1
};
const baseTo = new Map(), toBase = new Map();
for (const [k, f] of Object.entries(conversionFactors)){
  const parts = k.split('-to-');
  if (parts.length !== 2) continue;
  const A = parts[0], B = parts[1];
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
  if (x !== 0 && (ax >= 1e9 || ax < 1e-6)) return x.toExponential(8);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(x);
}

function factor(fromSlug, toSlug){
  if (fromSlug === toSlug) return 1;
  const direct = conversionFactors[`${fromSlug}-to-${toSlug}`];
  if (direct != null) return direct;
  const inv = conversionFactors[`${toSlug}-to-${fromSlug}`];
  if (inv != null && inv !== 0) return 1/inv;
  const a = toBase.get(fromSlug) ?? conversionFactors[`${fromSlug}-to-${HUB}`];
  const b = baseTo.get(toSlug) ?? conversionFactors[`${HUB}-to-${toSlug}`];
  if (a != null && b != null) return a*b;
  return null;
}

function applyFilter(q){
  const rows = tbody.querySelectorAll('tr');
  const n = (q||'').trim().toLowerCase();
  rows.forEach(tr=>{
    const label = tr.firstElementChild?.textContent?.toLowerCase() || '';
    tr.style.display = (!n || label.includes(n)) ? '' : 'none';
  });
}

function render(){
  const val  = parseFloat($('#value').value);
  const from = $('#fromUnit').value;
  const to   = $('#toUnit').value;
  const out  = $('#result');

  out.value = '';
  if (Number.isFinite(val) && from && to){
    const f = factor(from, to);
    out.value = (f == null ? '—' : formatNumber(val * f));
  } else {
    out.value = '—';
  }

  if (!Number.isFinite(val) || !from){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }

  const rows = [];
  for (const [label, slug] of UNITS){
    if (slug === from) continue;
    const f = factor(from, slug);
    rows.push(`<tr><td>${label}</td><td>${f == null ? '—' : formatNumber(val * f)}</td></tr>`);
  }
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
  const filter = document.getElementById('filter');
  if (filter) filter.addEventListener('input', e => applyFilter(e.target.value));
});
</script>

</body>
</html>
