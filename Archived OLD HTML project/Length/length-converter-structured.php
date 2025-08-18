<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Convert between different length units with our free online converter tool.">
    <meta name="keywords" content="length converter, unit converter, cm to inches, meters to feet">
    <title>Length Unit Converter | Free Online Conversion Tool</title>
    <link href="../../css/sub_main_pages.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <script src="conversion_javascript.js"></script>
</head>
<body>
    <?php include '../../header.php'; ?>

    <div class="container">
        <div class="main-wrapper">
            <div class="content-section">
                <div class="converter-section">
                    <h2>Length Conversions</h2>
                    <div class="converter-tool">
                        <div class="input-group">
                            <label for="from-value">Value</label>
                            <input type="number" id="from-value" value="100" step="0.01" placeholder="Enter value">
                            <label for="from-unit">From Unit</label>
                            <select id="from-unit">
                                ##headers
                            </select>
                        </div>
                        
                        <button class="swap-btn" id="swap-btn" title="Swap units">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        
                        <div class="input-group">
                            <label for="to-value">Result</label>
                            <input type="number" id="to-value" value="1" readonly placeholder="Result">
                            <label for="to-unit">To Unit</label>
                            <select id="to-unit">
                               ##headers
                            </select>
                        </div>
                    </div>
                    
                    <h3>Equivalent Lengths</h3>
                    <table class="conversion-table">
                        <thead>
                            <tr>
                                <th>Unit</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody id="conversion-results">
                            <!-- Results will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
              </div>

              <div class="ad-section" >
                    <h3>Advertisement</h3>
                    <div class="ad-placeholder">Ad Space (350x280)</div>
                    <?php include '../../drawer_menu.php'; ?>
            </div>
            </div>
        </div>
    </div>


   <?php include '../../footer.php'; ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fromValue = document.getElementById('from-value');
            const fromUnit = document.getElementById('from-unit');
            const toValue = document.getElementById('to-value');
            const toUnit = document.getElementById('to-unit');
            const swapBtn = document.getElementById('swap-btn');
            const resultsTable = document.getElementById('conversion-results');
            
            // Conversion factors relative to meters
            const units = {
                // Metric units
                nm: { name: 'Nanometers', factor: 0.000000001 },
                µm: { name: 'Micrometers', factor: 0.000001 },
                mm: { name: 'Millimeters', factor: 0.001 },
                cm: { name: 'Centimeters', factor: 0.01 },
                m: { name: 'Meters', factor: 1 },
                km: { name: 'Kilometers', factor: 1000 },
                
                // Imperial/US customary units
                in: { name: 'Inches', factor: 0.0254 },
                ft: { name: 'Feet', factor: 0.3048 },
                yd: { name: 'Yards', factor: 0.9144 },
                mi: { name: 'Miles', factor: 1609.34 },
                
                // Nautical units
                nmi: { name: 'Nautical Miles', factor: 1852 },
                
                // Survey units
                fur: { name: 'Furlongs', factor: 201.168 },
                chain: { name: 'Chains', factor: 20.1168 },
                rod: { name: 'Rods', factor: 5.0292 },
                fathom: { name: 'Fathoms', factor: 1.8288 },
                li: { name: 'Links', factor: 0.201168 },
                
                // Other units
                hand: { name: 'Hands', factor: 0.1016 },
                league: { name: 'Leagues', factor: 4828.03 },
                
                // Astronomical units
                au: { name: 'Astronomical Units', factor: 149597870700 },
                ly: { name: 'Light Years', factor: 9460730472580800 },
                pc: { name: 'Parsecs', factor: 30856775814913680 }
            };
            
            // Format number to avoid long decimals
            function formatNumber(num) {
                if (num === 0) return '0';
                if (Math.abs(num) < 0.000001) return num.toExponential(4);
                if (Math.abs(num) > 1000000) return num.toExponential(4);
                return parseFloat(num.toFixed(8)).toString();
            }
            
            // Convert between units
            function convert() {
                const value = parseFloat(fromValue.value) || 0;
                const fromFactor = units[fromUnit.value].factor;
                const toFactor = units[toUnit.value].factor;
                
                // Convert to meters first, then to target unit
                const result = (value * fromFactor) / toFactor;
                toValue.value = formatNumber(result);
                
                // Update conversion table
                updateConversionTable(value, fromUnit.value);
            }
            
            // Update the conversion table
            function updateConversionTable(value, fromUnitKey) {
                let tableHTML = '';
                const fromFactor = units[fromUnitKey].factor;
                
                // Sort units by magnitude for better display
                const sortedUnits = Object.entries(units).sort((a, b) => a[1].factor - b[1].factor);
                
                for (const [unitKey, unitData] of sortedUnits) {
                    const convertedValue = (value * fromFactor) / unitData.factor;
                    tableHTML += `
                        <tr>
                            <td>${unitData.name} (${unitKey})</td>
                            <td>${formatNumber(convertedValue)}</td>
                        </tr>
                    `;
                }
                
                resultsTable.innerHTML = tableHTML;
            }
            
            // Swap units
            function swapUnits() {
                const tempUnit = fromUnit.value;
                fromUnit.value = toUnit.value;
                toUnit.value = tempUnit;
                
                // Also swap the input values
                const tempValue = fromValue.value;
                fromValue.value = toValue.value;
                toValue.value = tempValue;
                
                convert();
            }
            
            // Event listeners
            fromValue.addEventListener('input', convert);
            fromUnit.addEventListener('change', convert);
            toUnit.addEventListener('change', convert);
            swapBtn.addEventListener('click', swapUnits);
            
            // Initialize
            convert();
        });
    </script>

<script src="conversion_javascript.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const factors = (window.conversionFactors) ? window.conversionFactors : (typeof conversionFactors!=='undefined'? conversionFactors : {});
  const LABELS = ["Meter", "Kilometer", "Decimeter", "Centimeter", "Millimeter", "Micrometer", "Nanometer", "Mile", "Yard", "Foot", "Inch", "Light Year", "Break", "Exameter", "Petameter", "Terameter", "Gigameter", "Megameter", "Hectometer", "Dekameter", "Micron", "Picometer", "Femtometer", "Attometer", "Megaparsec", "Kiloparsec", "Parsec", "Astronomical Unit", "League", "Nautical League (UK)", "Nautical League (int.)", "League (statute)", "Nautical Mile (UK)", "Nautical Mile (international)", "Mile (statute)", "Mile (US Survey)", "Kiloyard", "Furlong", "Furlong (US Survey)", "Chain", "Chain (US Survey)", "Rope", "Rod", "Rod (US Survey)", "Perch", "Pole", "Fathom", "Fathom (US Survey)", "Ell", "Foot (US Survey)", "Link", "Link (US Survey)", "Cubit (UK)", "Hand", "Span (cloth)", "Finger (cloth)", "Nail (cloth)", "Inch (US Survey)", "Barleycorn", "Mil", "Microinch", "Angstrom", "X-unit", "Fermi", "Arpent", "Pica", "Point", "Twip", "Aln", "Famn", "Caliber", "Centiinch", "Ken", "Russian Archin", "Roman Actus", "Vara De Tarea", "Vara Conuquera", "Vara Castellana", "Cubit (Greek)", "Long Reed", "Reed", "Long Cubit", "Handbreadth", "Fingerbreadth", "Planck Length", "Electron Radius (classical)", "Bohr Radius", "Earth's Equatorial Radius", "Earth's Polar Radius", "Earth's Distance From", "Mile (Roman)"];

  const tokens = new Set();
  Object.keys(factors).forEach(k => {
    const p = k.split('-to-');
    if (p.length === 2) { tokens.add(p[0]); tokens.add(p[1]); }
  });
  const AVAILABLE = Array.from(tokens);

  function slugify(s) {
    return s.toLowerCase()
      .replace(/\u00B5/g, 'micro')
      .replace(/\((int\.|international)\)/g, 'international')
      .replace(/\((uk)\)/g, 'uk')
      .replace(/\(us survey\)/g, 'us-survey')
      .replace(/\(statute\)/g, 'statute')
      .replace(/\s*\([^)]*\)/g, '')
      .replace(/'/g, '')
      .replace(/\s+\/g, '-')
      .replace(/\s+/g, '-')
      .replace(/[,\.]/g, '')
      .replace(/–|—/g, '-')
      .replace(/[^a-z0-9-]/g, '')
      .replace(/-+/g, '-')
      .replace(/^-|-$/g, '');
  }
  const availSlugs = new Map(); AVAILABLE.forEach(u => availSlugs.set(slugify(u), u));

  const SYN = new Map(Object.entries({
    "micron": "micrometer",
    "mile-roman": "roman-mile",
    "angstrom": "angstrom",
    "x-unit": "x-unit",
    "fathom-us-survey": "fathom-us-survey",
    "inch-us-survey": "inch-us-survey",
    "foot-us-survey": "foot-us-survey",
    "link-us-survey": "link-us-survey",
    "chain-us-survey": "chain-us-survey",
    "furlong-us-survey": "furlong-us-survey",
    "rod-us-survey": "rod-us-survey",
    "perch": "rod",
    "pole": "rod",
    "nautical-mile-uk": "nautical-mile-uk",
    "nautical-mile-international": "nautical-mile-international",
    "league-statute": "league-statute",
    "league": "league",
    "nautical-league-uk": "nautical-league-uk",
    "nautical-league-international": "nautical-league-international",
    "mile-statute": "mile",
    "kiloyard": "kiloyard",
    "planck-length": "planck-length",
    "electron-radius-classical": "classical-electron-radius",
    "bohr-radius": "bohr-radius"
  }));

  function resolveKey(label) {
    const s = slugify(label);
    if (availSlugs.has(s)) return availSlugs.get(s);
    if (SYN.has(s) && AVAILABLE.includes(SYN.get(s))) return SYN.get(s);
    const sp = s.endsWith('s') ? s.slice(0,-1) : s;
    if (availSlugs.has(sp)) return availSlugs.get(sp);
    const sc = s.replace(/-/g,'');
    for (const [k,v] of availSlugs.entries()) { if (k.replace(/-/g,'')===sc) return v; }
    for (const [k,v] of availSlugs.entries()) { if (k.includes(sp)) return v; }
    return null;
  }

  const fromSel = document.getElementById('from-unit');
  const toSel = document.getElementById('to-unit');
  if (fromSel && toSel) {
    while (fromSel.firstChild) fromSel.removeChild(fromSel.firstChild);
    while (toSel.firstChild) toSel.removeChild(toSel.firstChild);
    LABELS.forEach(lbl => {
      const key = resolveKey(lbl);
      const o1 = document.createElement('option');
      o1.value = key || '';
      o1.textContent = lbl;
      fromSel.appendChild(o1);
      const o2 = o1.cloneNode(true);
      toSel.appendChild(o2);
    });
    function selectByLabel(sel, label) {
      const opts = Array.from(sel.options);
      const idx = opts.findIndex(o => o.textContent === label);
      if (idx >= 0) sel.selectedIndex = idx;
    }
    selectByLabel(fromSel, 'Meter');
    selectByLabel(toSel, 'Foot');
  }

  function factorAtoB(a,b) {
    if (!a || !b) return null;
    if (a === b) return 1;
    const direct = factors[a+'-to-'+b];
    if (direct != null) return direct;
    const inv = factors[b+'-to-'+a];
    if (inv != null) return 1 / inv;
    function toMeter(x) {
      if (x === 'meter') return 1;
      const xm = factors[x + '-to-meter'];
      if (xm != null) return xm;
      const mx = factors['meter-to-' + x];
      if (mx != null) return 1 / mx;
      return null;
    }
    const a2m = toMeter(a);
    const b2m = toMeter(b);
    if (a2m != null && b2m != null) return a2m / b2m;
    return null;
  }

  const fromInput = document.getElementById('from-value') || document.getElementById('fromValue');
  const toInput = document.getElementById('to-value') || document.getElementById('toValue');
  function doConvert() {
    if (!fromSel || !toSel || !fromInput || !toInput) return;
    const val = parseFloat(fromInput.value || '0');
    const k = factorAtoB(fromSel.value, toSel.value);
    const out = (k != null) ? val * k : NaN;
    toInput.value = Number.isFinite(out) ? String(out) : '—';
    updateEquivalent(val, fromSel.value);
  }

  function updateEquivalent(value, fromKey) {
    try {
      const headings = Array.from(document.querySelectorAll('h3,h2')).filter(h => /\bEquivalent\s+Lengths\b/i.test(h.textContent));
      if (!headings.length) return;
      const h = headings[0];
      let table = h.parentElement.querySelector('table');
      if (!table) { table = document.createElement('table'); table.className = 'table table-bordered'; h.parentElement.appendChild(table); }
      let tbody = table.querySelector('tbody');
      if (!tbody) { tbody = document.createElement('tbody'); table.appendChild(tbody); }
      tbody.innerHTML = '';
      LABELS.forEach(lbl => {
        const key = resolveKey(lbl);
        const tr = document.createElement('tr');
        const td1 = document.createElement('td'); td1.textContent = lbl;
        const td2 = document.createElement('td');
        if (key) {
          const k = factorAtoB(fromKey, key);
          if (k != null) {
            const val = value * k;
            td2.textContent = String(val);
          } else {
            td2.textContent = '—';
          }
        } else {
          td2.textContent = '—';
        }
        tr.appendChild(td1); tr.appendChild(td2);
        tbody.appendChild(tr);
      });
    } catch (e) { console.warn('Equivalent update failed', e); }
  }

  if (fromInput) fromInput.addEventListener('input', doConvert);
  if (fromSel) fromSel.addEventListener('change', doConvert);
  if (toSel) toSel.addEventListener('change', doConvert);
  if (fromInput && !fromInput.value) fromInput.value = '1';
  doConvert();
});
</script>

</body>
</html>