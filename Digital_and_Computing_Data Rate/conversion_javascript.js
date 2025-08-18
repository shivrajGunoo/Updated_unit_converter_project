
const conversionFactors = {
  // bps (bits per second) conversions
  'bps-to-kbps': 0.001,
  'bps-to-Mbps': 1e-6,
  'bps-to-Gbps': 1e-9,
  'bps-to-Tbps': 1e-12,

  // kbps (kilobits per second) conversions
  'kbps-to-bps': 1000,
  'kbps-to-Mbps': 0.001,
  'kbps-to-Gbps': 1e-6,
  'kbps-to-Tbps': 1e-9,

  // Mbps (megabits per second) conversions
  'Mbps-to-bps': 1e6,
  'Mbps-to-kbps': 1000,
  'Mbps-to-Gbps': 0.001,
  'Mbps-to-Tbps': 1e-6,

  // Gbps (gigabits per second) conversions
  'Gbps-to-bps': 1e9,
  'Gbps-to-kbps': 1e6,
  'Gbps-to-Mbps': 1000,
  'Gbps-to-Tbps': 0.001,

  // Tbps (terabits per second) conversions
  'Tbps-to-bps': 1e12,
  'Tbps-to-kbps': 1e9,
  'Tbps-to-Mbps': 1e6,
  'Tbps-to-Gbps': 1000
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
