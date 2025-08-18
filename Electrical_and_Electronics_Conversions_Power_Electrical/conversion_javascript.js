
const conversionFactors = {
  // Watt (W) conversions
  'watt-w-to-kilowatt-kw': 0.001,
  'watt-w-to-megawatt-mw': 1e-6,
  'watt-w-to-horsepower-hp': 0.00134102,
  'watt-w-to-milliwatt-mw': 1000,
  'watt-w-to-microwatt-µw': 1e6,
  'watt-w-to-gigawatt-gw': 1e-9,

  // Kilowatt (kW) conversions
  'kilowatt-kw-to-watt-w': 1000,
  'kilowatt-kw-to-megawatt-mw': 0.001,
  'kilowatt-kw-to-horsepower-hp': 1.34102,
  'kilowatt-kw-to-milliwatt-mw': 1e6,
  'kilowatt-kw-to-microwatt-µw': 1e9,
  'kilowatt-kw-to-gigawatt-gw': 1e-6,

  // Megawatt (MW) conversions
  'megawatt-mw-to-watt-w': 1e6,
  'megawatt-mw-to-kilowatt-kw': 1000,
  'megawatt-mw-to-horsepower-hp': 1341.02,
  'megawatt-mw-to-milliwatt-mw': 1e9,
  'megawatt-mw-to-microwatt-µw': 1e12,
  'megawatt-mw-to-gigawatt-gw': 0.001,

  // Horsepower (hp) conversions
  'horsepower-hp-to-watt-w': 745.7,
  'horsepower-hp-to-kilowatt-kw': 0.7457,
  'horsepower-hp-to-megawatt-mw': 0.0007457,
  'horsepower-hp-to-milliwatt-mw': 745700,
  'horsepower-hp-to-microwatt-µw': 7.457e8,
  'horsepower-hp-to-gigawatt-gw': 7.457e-7,

  // Milliwatt (mW) conversions
  'milliwatt-mw-to-watt-w': 0.001,
  'milliwatt-mw-to-kilowatt-kw': 1e-6,
  'milliwatt-mw-to-megawatt-mw': 1e-9,
  'milliwatt-mw-to-horsepower-hp': 1.34102e-6,
  'milliwatt-mw-to-microwatt-µw': 1000,
  'milliwatt-mw-to-gigawatt-gw': 1e-12,

  // Microwatt (µW) conversions
  'microwatt-µw-to-watt-w': 1e-6,
  'microwatt-µw-to-kilowatt-kw': 1e-9,
  'microwatt-µw-to-megawatt-mw': 1e-12,
  'microwatt-µw-to-horsepower-hp': 1.34102e-9,
  'microwatt-µw-to-milliwatt-mw': 0.001,
  'microwatt-µw-to-gigawatt-gw': 1e-15,

  // Gigawatt (GW) conversions
  'gigawatt-gw-to-watt-w': 1e9,
  'gigawatt-gw-to-kilowatt-kw': 1e6,
  'gigawatt-gw-to-megawatt-mw': 1000,
  'gigawatt-gw-to-horsepower-hp': 1.34102e6,
  'gigawatt-gw-to-milliwatt-mw': 1e12,
  'gigawatt-gw-to-microwatt-µw': 1e15
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