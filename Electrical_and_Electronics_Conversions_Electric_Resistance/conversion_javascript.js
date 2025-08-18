const conversionFactors = {
  // Ohm (Ω) conversions
  'ohm-ω-to-kiloohm-kω': 0.001,
  'ohm-ω-to-megaohm-mω': 1e-6,
  'ohm-ω-to-milliohm-mω': 1000,
  'ohm-ω-to-microohm-µω': 1e6,
  'ohm-ω-to-nanoohm-nω': 1e9,
  'ohm-ω-to-abohm-abω': 1e9,

  // Kiloohm (kΩ) conversions
  'kiloohm-kω-to-ohm-ω': 1000,
  'kiloohm-kω-to-megaohm-mω': 0.001,
  'kiloohm-kω-to-milliohm-mω': 1e6,
  'kiloohm-kω-to-microohm-µω': 1e9,
  'kiloohm-kω-to-nanoohm-nω': 1e12,
  'kiloohm-kω-to-abohm-abω': 1e12,

  // Megaohm (MΩ) conversions
  'megaohm-mω-to-ohm-ω': 1e6,
  'megaohm-mω-to-kiloohm-kω': 1000,
  'megaohm-mω-to-milliohm-mω': 1e9,
  'megaohm-mω-to-microohm-µω': 1e12,
  'megaohm-mω-to-nanoohm-nω': 1e15,
  'megaohm-mω-to-abohm-abω': 1e15,

  // Milliohm (mΩ) conversions
  'milliohm-mω-to-ohm-ω': 0.001,
  'milliohm-mω-to-kiloohm-kω': 1e-6,
  'milliohm-mω-to-megaohm-mω': 1e-9,
  'milliohm-mω-to-microohm-µω': 1000,
  'milliohm-mω-to-nanoohm-nω': 1e6,
  'milliohm-mω-to-abohm-abω': 1e6,

  // Microohm (µΩ) conversions
  'microohm-µω-to-ohm-ω': 1e-6,
  'microohm-µω-to-kiloohm-kω': 1e-9,
  'microohm-µω-to-megaohm-mω': 1e-12,
  'microohm-µω-to-milliohm-mω': 0.001,
  'microohm-µω-to-nanoohm-nω': 1000,
  'microohm-µω-to-abohm-abω': 1000,

  // Nanoohm (nΩ) conversions
  'nanoohm-nω-to-ohm-ω': 1e-9,
  'nanoohm-nω-to-kiloohm-kω': 1e-12,
  'nanoohm-nω-to-megaohm-mω': 1e-15,
  'nanoohm-nω-to-milliohm-mω': 1e-6,
  'nanoohm-nω-to-microohm-µω': 0.001,
  'nanoohm-nω-to-abohm-abω': 1,

  // Abohm (abΩ) conversions
  'abohm-abω-to-ohm-ω': 1e-9,
  'abohm-abω-to-kiloohm-kω': 1e-12,
  'abohm-abω-to-megaohm-mω': 1e-15,
  'abohm-abω-to-milliohm-mω': 1e-6,
  'abohm-abω-to-microohm-µω': 0.000001, // Fixed: 1 abΩ = 1e-6 µΩ (not 0.001)
  'abohm-abω-to-nanoohm-nω': 1
};

// Rest of the functions remain the same as in the original example
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
    return result.toExponential(10);
  } else {
    return parseFloat(result.toFixed(10));
  }
}

function performConversion(conversionKey) {
  const input = parseFloat(document.getElementById('from-value').value);
  const result = convertUnit(conversionKey, input);
  const outputElement = document.getElementById('to-value');

  if (typeof result === 'string') {
    outputElement.value = result;
  } else {
    outputElement.value = formatResult(result);
  }
}

function clearFields() {
  document.getElementById('from-value').value = '';
  document.getElementById('to-value').value = '';
}