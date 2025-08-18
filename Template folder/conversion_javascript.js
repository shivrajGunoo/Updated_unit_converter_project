const conversionFactors = {  
  // Lux (lx) conversions
  'lux-lx-to-foot-candle-fc': 0.092903,
  'lux-lx-to-phot-ph': 0.0001,
  'lux-lx-to-lambert-l': 0.0003183,
  'lux-lx-to-footlambert-fl': 0.2919,

  // Foot-candle (fc) conversions
  'foot-candle-fc-to-lux-lx': 10.7639,
  'foot-candle-fc-to-phot-ph': 0.001076,
  'foot-candle-fc-to-lambert-l': 0.003426,

  // Nit (nt) conversions
  'nit-nt-to-phot-ph': 0.0001,
  'nit-nt-to-lambert-l': 0.0003183,
  'nit-nt-to-footlambert-fl': 0.2919,

  // Phot (ph) conversions
  'phot-ph-to-lux-lx': 10000,
  'phot-ph-to-foot-candle-fc': 929.03,
  'phot-ph-to-nit-nt': 10000,
  'phot-ph-to-lambert-l': 3.183,

  // Lambert (L) conversions
  'lambert-l-to-lux-lx': 3183.1,
  'lambert-l-to-foot-candle-fc': 318.31,
  'lambert-l-to-nit-nt': 3183.1,
  'lambert-l-to-phot-ph': 0.3142,

  // Footlambert (fl) conversions
  'footlambert-fl-to-lux-lx': 3.4263,
  'footlambert-fl-to-nit-nt': 0.2919
};

function convertUnit(conversionKey, value) {
  if (typeof value !== 'number' || isNaN(value)) {
    return 'Invalid input value';
  }

  const factor = conversionFactors[conversionKey];
  if (typeof factor === 'undefined') {
    return `Conversion key "${conversionKey}" not found`;
  }

  return value * factor;
}

function formatResult(result) {
  if (Math.abs(result) < 1e-4 || Math.abs(result) > 1e+6) {
    return result.toExponential(10); // Scientific notation with 10 decimal places
  } else {
    return parseFloat(result.toFixed(10)); // Regular number with up to 10 decimal places
  }
}

function performConversion(conversionKey) {
  const input = parseFloat(document.getElementById('from-value').value);
  const result = convertUnit(conversionKey, input);
  const outputElement = document.getElementById('to-value');

  if (typeof result === 'string') {
    outputElement.value = result; // For error messages
  } else {
    outputElement.value = formatResult(result);
  }
}

function clearFields() {
  document.getElementById('from-value').value = '';
  document.getElementById('to-value').value = '';
}
