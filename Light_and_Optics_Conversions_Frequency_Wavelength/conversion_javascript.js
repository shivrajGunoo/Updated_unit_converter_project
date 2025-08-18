const conversionFactors = {  
 // Hertz conversions
  'hz-to-khz': 0.001,
  'hz-to-mhz': 1e-6,
  'hz-to-ghz': 1e-9,
  'hz-to-nm': 2.99792458e17,
  'hz-to-µm': 2.99792458e14,
  'hz-to-å': 2.99792458e18,

  // Kilohertz conversions
  'khz-to-hz': 1000.0,
  'khz-to-mhz': 0.001,
  'khz-to-ghz': 1e-6,
  'khz-to-nm': 2.99792458e14,
  'khz-to-µm': 2.99792458e11,
  'khz-to-å': 2.99792458e15,

  // Megahertz conversions
  'mhz-to-hz': 1e6,
  'mhz-to-khz': 1000.0,
  'mhz-to-ghz': 0.001,
  'mhz-to-nm': 2.99792458e11,
  'mhz-to-µm': 2.99792458e8,
  'mhz-to-å': 2.99792458e12,

  // Gigahertz conversions
  'ghz-to-hz': 1e9,
  'ghz-to-khz': 1e6,
  'ghz-to-mhz': 1000.0,
  'ghz-to-nm': 2.99792458e8,
  'ghz-to-µm': 2.99792458e5,
  'ghz-to-å': 2.99792458e9,

  // Nanometer conversions
  'nm-to-hz': 2.99792458e17,
  'nm-to-khz': 2.99792458e14,
  'nm-to-mhz': 2.99792458e11,
  'nm-to-ghz': 2.99792458e8,
  'nm-to-µm': 0.001,
  'nm-to-å': 10.0,

  // Micrometer conversions
  'µm-to-hz': 2.99792458e14,
  'µm-to-khz': 2.99792458e11,
  'µm-to-mhz': 2.99792458e8,
  'µm-to-ghz': 2.99792458e5,
  'µm-to-nm': 1000.0,
  'µm-to-å': 10000.0,

  // Angstrom conversions
  'å-to-hz': 2.99792458e18,
  'å-to-khz': 2.99792458e15,
  'å-to-mhz': 2.99792458e12,
  'å-to-ghz': 2.99792458e9,
  'å-to-nm': 0.1,
  'å-to-µm': 0.0001
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
