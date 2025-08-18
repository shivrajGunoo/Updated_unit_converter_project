const conversionFactors = {  
  // Celsius (C) conversions
  'celsius-c-to-fahrenheit-f': 1.8,
  'celsius-c-to-kelvin-k': 1,
  'celsius-c-to-rankine-r': 1.8,
  'celsius-c-to-reaumur-re': 0.8,
  'celsius-c-to-romer-ro': 0.525,

  // Fahrenheit (F) conversions
  'fahrenheit-f-to-celsius-c': 0.555556,
  'fahrenheit-f-to-kelvin-k': 0.555556,
  'fahrenheit-f-to-rankine-r': 1,
  'fahrenheit-f-to-reaumur-re': 0.444444,
  'fahrenheit-f-to-romer-ro': 0.291667,

  // Kelvin (K) conversions
  'kelvin-k-to-celsius-c': 1,
  'kelvin-k-to-fahrenheit-f': 1.8,
  'kelvin-k-to-rankine-r': 1.8,
  'kelvin-k-to-reaumur-re': 0.8,
  'kelvin-k-to-romer-ro': 0.525,

  // Rankine (R) conversions
  'rankine-r-to-celsius-c': 0.555556,
  'rankine-r-to-fahrenheit-f': 1,
  'rankine-r-to-kelvin-k': 0.555556,
  'rankine-r-to-reaumur-re': 0.444444,
  'rankine-r-to-romer-ro': 0.291667,

  // Réaumur (Re) conversions
  'reaumur-re-to-celsius-c': 1.25,
  'reaumur-re-to-fahrenheit-f': 2.25,
  'reaumur-re-to-kelvin-k': 1.25,
  'reaumur-re-to-rankine-r': 2.25,
  'reaumur-re-to-romer-ro': 0.65625,

  // Rømer (Ro) conversions
  'romer-ro-to-celsius-c': 1.90476,
  'romer-ro-to-fahrenheit-f': 3.42857,
  'romer-ro-to-kelvin-k': 1.90476,
  'romer-ro-to-rankine-r': 3.42857,
  'romer-ro-to-reaumur-re': 1.52381
};

// Offset values for temperature conversions
const conversionOffsets = {
  // Celsius offsets
  'celsius-c-to-fahrenheit-f': 32,
  'celsius-c-to-kelvin-k': 273.15,
  'celsius-c-to-rankine-r': 491.67,
  'celsius-c-to-romer-ro': 7.5,

  // Fahrenheit offsets
  'fahrenheit-f-to-celsius-c': -32,
  'fahrenheit-f-to-kelvin-k': 255.372,
  'fahrenheit-f-to-rankine-r': 459.67,
  'fahrenheit-f-to-romer-ro': 3.86111,

  // Kelvin offsets
  'kelvin-k-to-celsius-c': -273.15,
  'kelvin-k-to-fahrenheit-f': -459.67,
  'kelvin-k-to-romer-ro': -258.525,

  // Rankine offsets
  'rankine-r-to-celsius-c': -491.67,
  'rankine-r-to-fahrenheit-f': -459.67,
  'rankine-r-to-romer-ro': -258.525,

  // Réaumur offsets
  'reaumur-re-to-fahrenheit-f': 32,
  'reaumur-re-to-kelvin-k': 273.15,
  'reaumur-re-to-rankine-r': 491.67,
  'reaumur-re-to-romer-ro': 7.5,

  // Rømer offsets
  'romer-ro-to-celsius-c': -7.5,
  'romer-ro-to-fahrenheit-f': -26.1429,
  'romer-ro-to-kelvin-k': 265.65,
  'romer-ro-to-rankine-r': 478.17
};

function convertUnit(conversionKey, value) {
  if (typeof value !== 'number' || isNaN(value)) {
    return 'Invalid input value';
  }

  const factor = conversionFactors[conversionKey];
  if (typeof factor === 'undefined') {
    return `Conversion key "${conversionKey}" not found`;
  }

  const offset = conversionOffsets[conversionKey] || 0;
  return (value * factor) + offset;
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