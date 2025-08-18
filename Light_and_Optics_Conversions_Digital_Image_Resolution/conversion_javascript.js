const conversionFactors = {  

    // Pixel per inch (ppi) conversions
  'pixel-per-inch-ppi-to-dots-per-inch-dpi': 1.0,
  'pixel-per-inch-ppi-to-pixels-per-inch-ppi': 1.0,
  'pixel-per-inch-ppi-to-pixels-per-centimeter-ppcm': 0.3937,
  'pixel-per-inch-ppi-to-samples-per-inch-spi': 1.0,

  // Dots per inch (dpi) conversions
  'dots-per-inch-dpi-to-pixel-per-inch-ppi': 1.0,
  'dots-per-inch-dpi-to-pixels-per-inch-ppi': 1.0,
  'dots-per-inch-dpi-to-pixels-per-centimeter-ppcm': 0.3937,
  'dots-per-inch-dpi-to-samples-per-inch-spi': 1.0,

  // Pixels per inch (ppi) conversions
  'pixels-per-inch-ppi-to-pixel-per-inch-ppi': 1.0,
  'pixels-per-inch-ppi-to-dots-per-inch-dpi': 1.0,
  'pixels-per-inch-ppi-to-samples-per-inch-spi': 1.0,

  // Pixels per centimeter (ppcm) conversions
  'pixels-per-centimeter-ppcm-to-pixel-per-inch-ppi': 2.54,
  'pixels-per-centimeter-ppcm-to-dots-per-inch-dpi': 2.54,
  'pixels-per-centimeter-ppcm-to-samples-per-inch-spi': 2.54,

  // Samples per inch (spi) conversions
  'samples-per-inch-spi-to-pixel-per-inch-ppi': 1.0,
  'samples-per-inch-spi-to-dots-per-inch-dpi': 1.0,
  'samples-per-inch-spi-to-pixels-per-inch-ppi': 1.0,
  'samples-per-inch-spi-to-pixels-per-centimeter-ppcm': 0.3937
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
