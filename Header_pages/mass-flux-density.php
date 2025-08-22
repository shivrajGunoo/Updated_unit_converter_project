<?php
  $pageTitle = "Mass Flux Density | kg/(s·m²), kg/(h·m²), lb/(h·ft²), g/(s·m²) – Fluids";
  $metaDescription = "Convert mass flux density between SI and US units: kg/(s·m²), kg/(h·m²), kg/(h·ft²), g/(s·m²), g/(s·cm²), lb/(h·ft²), lb/(s·ft²) and more. Instant results with an equivalents table for engineers.";
  $metaKeywords = "mass flux density, kg per second per square meter, kg/(h·m²) to kg/(s·m²), lb/(h·ft²) to kg/(h·m²), g/(s·cm²) to g/(s·m²), pound per second per square foot, mass flux unit conversion, fluidss mass flux";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>" />
  <meta name="keywords" content="<?php echo htmlspecialchars($meta_keys); ?>" />
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
          <h2>Mass Flux Density Conversions</h2>

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
            <h3>Popular Mass Flux Density Conversions</h3>
            <ul>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-hour-square-meter-to-kilogram-second-square-meter.php">kilogram/hour/square meter to kilogram/second/square meter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-second-square-meter-to-kilogram-hour-square-meter.php">kilogram/second/square meter to kilogram/hour/square meter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/pound-hour-square-foot-to-kilogram-hour-square-meter.php">pound/hour/square foot to kilogram/hour/square meter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-hour-square-meter-to-pound-hour-square-foot.php">kilogram/hour/square meter to pound/hour/square foot</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/pound-second-square-foot-to-kilogram-second-square-meter.php">pound/second/square foot to kilogram/second/square meter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/kilogram-second-square-meter-to-pound-second-square-foot.php">kilogram/second/square meter to pound/second/square foot</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/gram-second-sq--centimeter-to-gram-second-square-meter.php">gram/second/sq. centimeter to gram/second/square meter</a></li>
              <li><a href="../Fluids_Converters_Mass Flux Density/gram-second-square-meter-to-gram-second-sq--centimeter.php">gram/second/square meter to gram/second/sq. centimeter</a></li>
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
['Gram per Second per Square m (g/s·m²)', 'gram-second-square-meter'],
['Kg per Hour per Square m (kg/h·m²)', 'kilogram-hour-square-meter'],
['Kg per Hour per Square Foot (kg/h·ft²)', 'kilogram-hour-square-foot'],
['Kg per Second per Square m (kg/s·m²)', 'kilogram-second-square-meter'],
['Gram per Second per Square cm (g/s·cm²)', 'gram-second-square-centimeter'],
['Pound per Hour per Square Foot (lb/h·ft²)', 'pound-hour-square-foot'],
['Pound per Second per Square Foot (lb/s·ft²)', 'pound-second-square-foot']

];


const conversionFactors = {
  'gram-second-square-meter-to-kilogram-hour-square-meter' :3.5999999997,
'gram-second-square-meter-to-kilogram-hour-square-foot' :0.3344509438,
'gram-second-square-meter-to-kilogram-second-square-meter' :0.001,
'gram-second-square-meter-to-gram-second-sq--centimeter' :0.0001,
'gram-second-square-meter-to-pound-hour-square-foot' :0.7373381093,
'gram-second-square-meter-to-pound-second-square-foot' :0.0002048161,
'kilogram-hour-square-meter-to-gram-second-square-meter' :0.2777777778,
'kilogram-hour-square-meter-to-kilogram-hour-square-foot' :0.09290304,
'kilogram-hour-square-meter-to-kilogram-second-square-meter' :0.0002777778,
'kilogram-hour-square-meter-to-gram-second-sq--centimeter' :0.0000277778,
'kilogram-hour-square-meter-to-pound-hour-square-foot' :0.2048161415,
'kilogram-hour-square-meter-to-pound-second-square-foot' :0.0000568934,
'kilogram-hour-square-foot-to-gram-second-square-meter' :2.9899751173,
'kilogram-hour-square-foot-to-kilogram-hour-square-meter' :10.763910421,
'kilogram-hour-square-foot-to-kilogram-second-square-meter' :0.0029899751,
'kilogram-hour-square-foot-to-gram-second-sq--centimeter' :0.0002989975,
'kilogram-hour-square-foot-to-pound-hour-square-foot' :2.2046226,
'kilogram-hour-square-foot-to-pound-second-square-foot' :0.0006123952,
'kilogram-second-square-meter-to-gram-second-square-meter' :1000,
'kilogram-second-square-meter-to-kilogram-hour-square-meter' :3599.9999997,
'kilogram-second-square-meter-to-kilogram-hour-square-foot' :334.45094383,
'kilogram-second-square-meter-to-gram-second-sq--centimeter' :0.1,
'kilogram-second-square-meter-to-pound-hour-square-foot' :737.33810934,
'kilogram-second-square-meter-to-pound-second-square-foot' :0.2048161415,
'gram-second-sq--centimeter-to-gram-second-square-meter' :10000,
'gram-second-sq--centimeter-to-kilogram-hour-square-meter' :35999.999997,
'gram-second-sq--centimeter-to-kilogram-hour-square-foot' :3344.5094383,
'gram-second-sq--centimeter-to-kilogram-second-square-meter' :10,
'gram-second-sq--centimeter-to-pound-hour-square-foot' :7373.3810934,
'gram-second-sq--centimeter-to-pound-second-square-foot' :2.0481614149,
'pound-hour-square-foot-to-gram-second-square-meter' :1.3562299132,
'pound-hour-square-foot-to-kilogram-hour-square-meter' :4.882427687,
'pound-hour-square-foot-to-kilogram-hour-square-foot' :0.4535923745,
'pound-hour-square-foot-to-kilogram-second-square-meter' :0.0013562299,
'pound-hour-square-foot-to-gram-second-sq--centimeter' :0.000135623,
'pound-hour-square-foot-to-pound-second-square-foot' :0.0002777778,
'pound-second-square-foot-to-gram-second-square-meter' :4882.4276873,
'pound-second-square-foot-to-kilogram-hour-square-meter' :17576.739673,
'pound-second-square-foot-to-kilogram-hour-square-foot' :1632.9325482,
'pound-second-square-foot-to-kilogram-second-square-meter' :4.8824276873,
'pound-second-square-foot-to-gram-second-sq--centimeter' :0.4882427687,
'pound-second-square-foot-to-pound-hour-square-foot' :3599.9999999
};

function lbfToN(x){return x*4.4482216152605}

const HUB = "newton-n";
const baseTo = new Map(), toBase = new Map();
for(const [k,v] of Object.entries(conversionFactors)){
  const [a,b] = k.split("-to-");
  if(!a || !b) continue;
  if(a===HUB) baseTo.set(b,v);
  if(b===HUB) toBase.set(a,v);
}
baseTo.set(HUB,1); toBase.set(HUB,1);

const $ = s => document.querySelector(s);
const tbody = $("#tbody");

function populateOptions(){
  const from = $("#fromUnit"), to = $("#toUnit");
  UNITS.forEach(([label, token])=>{
    from.add(new Option(label, token));
    to.add(new Option(label, token));
  });
  from.selectedIndex = 0;
  to.selectedIndex = 0;
}

function fnum(x){
  if(!Number.isFinite(x)) return "—";
  const ax = Math.abs(x);
  if(x!==0 && (ax>=1e9 || ax<1e-6)) return x.toExponential(6);
  return new Intl.NumberFormat(undefined,{maximumSignificantDigits:12}).format(x);
}

function factor(fromTok, toTok){
  if(fromTok===toTok) return 1;
  const direct = conversionFactors[`${fromTok}-to-${toTok}`];
  if(direct!=null) return direct;
  const inv = conversionFactors[`${toTok}-to-${fromTok}`];
  if(inv!=null && inv!==0) return 1/inv;
  const a = toBase.get(fromTok);
  const b = baseTo.get(toTok);
  if(a!=null && b!=null) return a*b;
  return null;
}

function render(){
  const val = parseFloat($("#value").value);
  const from = $("#fromUnit").value;
  const to = $("#toUnit").value;
  const out = $("#result");
  out.value = "";
  if(Number.isFinite(val)){
    const f = factor(from,to);
    out.value = f==null ? "—" : fnum(val*f);
  } else {
    out.value = "—";
  }

  if(!Number.isFinite(val)){
    tbody.innerHTML = '<tr><td colspan="2">Waiting for input…</td></tr>';
    return;
  }
  const q = ($("#filter").value||"").toLowerCase();
  const rows = [];
  for(const [label, tok] of UNITS){
    if(tok===from) continue;
    if(q && !label.toLowerCase().includes(q)) continue;
    const f = factor(from, tok);
    rows.push(`<tr><td>${label}</td><td>${f==null?'—':fnum(val*f)}</td></tr>`);
  }
  tbody.innerHTML = rows.join("") || '<tr><td colspan="2">No matches.</td></tr>';
}

document.addEventListener("DOMContentLoaded", ()=>{
  populateOptions();
  render();
  $("#value").addEventListener("input", render);
  $("#fromUnit").addEventListener("change", render);
  $("#toUnit").addEventListener("change", render);
  $("#filter").addEventListener("input", render);
  $("#swap").addEventListener("click", ()=>{
    const f = $("#fromUnit"), t = $("#toUnit"); const a = f.value; f.value = t.value; t.value = a; render();
  });
});
</script>
</body>
</html>
