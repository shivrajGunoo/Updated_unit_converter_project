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
                                <option value="nm">Nanometers (nm)</option>
                                <option value="µm">Micrometers (µm)</option>
                                <option value="mm">Millimeters (mm)</option>
                                <option value="cm" selected>Centimeters (cm)</option>
                                <option value="m">Meters (m)</option>
                                <option value="km">Kilometers (km)</option>
                                <option value="in">Inches (in)</option>
                                <option value="ft">Feet (ft)</option>
                                <option value="yd">Yards (yd)</option>
                                <option value="mi">Miles (mi)</option>
                                <option value="nmi">Nautical Miles (nmi)</option>
                                <option value="fur">Furlongs (fur)</option>
                                <option value="chain">Chains (chain)</option>
                                <option value="rod">Rods (rod)</option>
                                <option value="fathom">Fathoms (fathom)</option>
                                <option value="li">Links (li)</option>
                                <option value="hand">Hands (hand)</option>
                                <option value="league">Leagues (league)</option>
                                <option value="au">Astronomical Units (au)</option>
                                <option value="ly">Light Years (ly)</option>
                                <option value="pc">Parsecs (pc)</option>
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
                                <option value="nm">Nanometers (nm)</option>
                                <option value="µm">Micrometers (µm)</option>
                                <option value="mm">Millimeters (mm)</option>
                                <option value="cm">Centimeters (cm)</option>
                                <option value="m" selected>Meters (m)</option>
                                <option value="km">Kilometers (km)</option>
                                <option value="in">Inches (in)</option>
                                <option value="ft">Feet (ft)</option>
                                <option value="yd">Yards (yd)</option>
                                <option value="mi">Miles (mi)</option>
                                <option value="nmi">Nautical Miles (nmi)</option>
                                <option value="fur">Furlongs (fur)</option>
                                <option value="chain">Chains (chain)</option>
                                <option value="rod">Rods (rod)</option>
                                <option value="fathom">Fathoms (fathom)</option>
                                <option value="li">Links (li)</option>
                                <option value="hand">Hands (hand)</option>
                                <option value="league">Leagues (league)</option>
                                <option value="au">Astronomical Units (au)</option>
                                <option value="ly">Light Years (ly)</option>
                                <option value="pc">Parsecs (pc)</option>
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

                <div class="info-section">
                    <h3>Popular Length Unit Conversions</h3>
                    <ul>
                        <li><a href="cm-to-inches.html" >cm to inches</a></li> 
                        <li><a href="inches-to-cm.html">inches to cm</a></li>
                        <li><a href="mm-to-inches.html">mm to inches</a> </li>
                        <li><a href="inches-to-mm.html">inches to mm</a></li>
                        <li><a href="meters-to-feet.html">meters to feet</a></li>
                        <li><a href="feet-to-meters.html">feet to meters</a></li>
                        <li><a href="km-to-miles.html">km to miles</a></li>
                        <li><a href="miles-to-km.html">miles to km</a></li>
                        <li><a href="cm-to-feet.html">cm to feet</a></li>
                        <li><a href="feet-to-cm.html">feet to cm</a></li>
                        <li><a href="inches-to-feet.html">inches to feet</a></li>
                        <li><a href="feet-to-inches.html">feet to inches</a></li>
                        <li><a href="meters-to-yards.html">meters to yards</a></li>
                        <li><a href="yards-to-meters.html">yards to meters</a></li>
                        <li><a href="mm-to-cm.html">mm to cm</a></li>
                        <li><a href="cm-to-mm.html">cm to mm</a></li>
                        <li><a href="cm-to-m.html">cm to m</a></li>
                        <li><a href="m-to-cm.html">m to cm</a></li>
                        <li><a href="cm-to-km.html">cm to km</a></li>
                        <li><a href="km-to-cm.html">km to cm</a></li>
                        <li><a href="mm-to-feet.html">mm to feet</a></li>
                        <li><a href="feet-to-mm.html">feet to mm</a></li>
                        <li><a href="meters-to-miles.html">meters to miles</a>
                        <li><a href="miles-to-meters.html">miles to meters</a></li>
                        <li><a href="feet-to-miles.html">feet to miles</a></li>
                        <li><a href="miles-to-feet.html">miles to feet</a></li>
                        <li><a href="yards-to-feet.html">yards to feet</a></li>
                        <li><a href="feet-to-yards.html">feet to yards</a></li>
                        <li><a href="inches-to-meters.html">inches to meters</a></li>
                        <li><a href="meters-to-inches.html">meters to inches</a></li>
                        <li><a href="mm-to-m.html">mm to m</a></li>
                        <li><a href="m-to-mm.html">m to mm</a></li>
                        <li><a href="km-to-m.html">km to m</a></li>
                        <li><a href="m-to-km.html">m to km</a></li>
                        <li><a href="inches-to-yards.html">inches to yards</a></li>
                        <li><a href="yards-to-inches.html">yards to inches</a></li>
                        <li><a href="yards-to-miles.html">yards to miles</a></li>
                        <li><a href="miles-to-yards.html">miles to yards</a></li>
                    </ul>
                    </div>
                
                <div class="description-section">
                    <h3>About Length Conversion</h3>
                    <p>This tool converts between different units of length including metric, imperial, US customary, nautical, survey, and astronomical units.</p>
                    
                    <div class="formula-section">
                        <h4>Metric System Formulas</h4>
                        <ul>
                            <li><strong>Nanometer (nm):</strong> 1 nm = 0.000000001 m</li>
                            <li><strong>Micrometer (µm):</strong> 1 µm = 0.000001 m</li>
                            <li><strong>Millimeter (mm):</strong> 1 mm = 0.001 m</li>
                            <li><strong>Centimeter (cm):</strong> 1 cm = 0.01 m</li>
                            <li><strong>Meter (m):</strong> Base SI unit</li>
                            <li><strong>Kilometer (km):</strong> 1 km = 1000 m</li>
                        </ul>
                        
                        <h4>Imperial/US Customary Formulas</h4>
                        <ul>
                            <li><strong>Inch (in):</strong> 1 in = 2.54 cm = 0.0254 m</li>
                            <li><strong>Foot (ft):</strong> 1 ft = 12 in = 0.3048 m</li>
                            <li><strong>Yard (yd):</strong> 1 yd = 3 ft = 0.9144 m</li>
                            <li><strong>Mile (mi):</strong> 1 mi = 5280 ft = 1609.344 m</li>
                            <li><strong>Fathom:</strong> 1 fathom = 6 ft = 1.8288 m</li>
                        </ul>
                        
                        <h4>Nautical Formulas</h4>
                        <ul>
                            <li><strong>Nautical Mile (nmi):</strong> 1 nmi = 1852 m (exact)</li>
                            <li><strong>Cable length:</strong> 1 cable = 1/10 nmi = 185.2 m</li>
                        </ul>
                        
                        <h4>Survey Formulas</h4>
                        <ul>
                            <li><strong>Link (li):</strong> 1 li = 7.92 in = 0.201168 m</li>
                            <li><strong>Rod:</strong> 1 rod = 25 li = 5.0292 m</li>
                            <li><strong>Chain:</strong> 1 chain = 4 rods = 20.1168 m</li>
                            <li><strong>Furlong:</strong> 1 furlong = 10 chains = 201.168 m</li>
                        </ul>
                        
                        <h4>Astronomical Formulas</h4>
                        <ul>
                            <li><strong>Astronomical Unit (AU):</strong> 1 AU ≈ 149,597,870,700 m</li>
                            <li><strong>Light Year (ly):</strong> 1 ly ≈ 9,460,730,472,580,800 m</li>
                            <li><strong>Parsec (pc):</strong> 1 pc ≈ 30,856,775,814,913,680 m</li>
                        </ul>
                        
                        <h4>Other Specialized Units</h4>
                        <ul>
                            <li><strong>Angstrom (Å):</strong> 1 Å = 0.1 nm = 10⁻¹⁰ m</li>
                            <li><strong>Micron:</strong> 1 micron = 1 µm</li>
                            <li><strong>Hand:</strong> 1 hand = 4 in = 0.1016 m</li>
                            <li><strong>League:</strong> 1 league = 3 mi = 4828.032 m</li>
                            <li><strong>Point (typography):</strong> 1 pt = 1/72 in ≈ 0.0003528 m</li>
                        </ul>
                    </div>
                    
                    <div class="conversion-notes">
                        <h4>Conversion Notes</h4>
                        <p>All conversions are based on international standards where available:</p>
                        <ul>
                            <li>Metric system based on SI definitions</li>
                            <li>Imperial/US units based on international yard and pound agreement (1959)</li>
                            <li>Nautical miles based on International Hydrographic Organization standard</li>
                            <li>Astronomical units based on IAU 2012 resolution</li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <div class="ad-section">
                <h3>Advertisement</h3>
                <div class="ad-placeholder">Ad Space (350x280)</div>
                <?php include '../../drawer_menu.php'; ?>
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
</body>
</html>