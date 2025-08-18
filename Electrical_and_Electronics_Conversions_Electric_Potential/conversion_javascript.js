const conversionFactors = {
  // Volt (V) conversions
  'volt-v-to-millivolt-mv': 1000,
  'volt-v-to-microvolt-µv': 1000000,
  'volt-v-to-kilovolt-kv': 0.001,
  'volt-v-to-nanovolt-nv': 1000000000,
  'volt-v-to-picovolt-pv': 1000000000000,
  'volt-v-to-statvolt-statv': 0.003335640952,
  'volt-v-to-abvolt-abv': 100000000,

  // Millivolt (mV) conversions
  'millivolt-mv-to-volt-v': 0.001,
  'millivolt-mv-to-microvolt-µv': 1000,
  'millivolt-mv-to-kilovolt-kv': 0.000001,
  'millivolt-mv-to-nanovolt-nv': 1000000,
  'millivolt-mv-to-picovolt-pv': 1000000000,
  'millivolt-mv-to-statvolt-statv': 0.000003335641,
  'millivolt-mv-to-abvolt-abv': 100000,

  // Microvolt (µV) conversions
  'microvolt-µv-to-volt-v': 0.000001,
  'microvolt-µv-to-millivolt-mv': 0.001,
  'microvolt-µv-to-kilovolt-kv': 0.000000001,
  'microvolt-µv-to-nanovolt-nv': 1000,
  'microvolt-µv-to-picovolt-pv': 1000000,
  'microvolt-µv-to-statvolt-statv': 0.000000003335641,
  'microvolt-µv-to-abvolt-abv': 100,

  // Kilovolt (kV) conversions
  'kilovolt-kv-to-volt-v': 1000,
  'kilovolt-kv-to-millivolt-mv': 1000000,
  'kilovolt-kv-to-microvolt-µv': 1000000000,
  'kilovolt-kv-to-nanovolt-nv': 1000000000000,
  'kilovolt-kv-to-picovolt-pv': 1000000000000000,
  'kilovolt-kv-to-statvolt-statv': 299.792458,
  'kilovolt-kv-to-abvolt-abv': 100000000000,

  // Nanovolt (nV) conversions
  'nanovolt-nv-to-volt-v': 0.000000001,
  'nanovolt-nv-to-millivolt-mv': 0.000001,
  'nanovolt-nv-to-microvolt-µv': 0.001,
  'nanovolt-nv-to-kilovolt-kv': 0.000000000001,
  'nanovolt-nv-to-picovolt-pv': 1000,
  'nanovolt-nv-to-statvolt-statv': 0.000000000003335641,
  'nanovolt-nv-to-abvolt-abv': 0.1,

  // Picovolt (pV) conversions
  'picovolt-pv-to-volt-v': 0.000000000001,
  'picovolt-pv-to-millivolt-mv': 0.000000001,
  'picovolt-pv-to-microvolt-µv': 0.000001,
  'picovolt-pv-to-kilovolt-kv': 0.000000000000001,
  'picovolt-pv-to-nanovolt-nv': 0.001,
  'picovolt-pv-to-statvolt-statv': 0.000000000000003335641,
  'picovolt-pv-to-abvolt-abv': 0.0001,

  // Statvolt (statV) conversions
  'statvolt-statv-to-volt-v': 299.792458,
  'statvolt-statv-to-millivolt-mv': 299792.458,
  'statvolt-statv-to-microvolt-µv': 299792458,
  'statvolt-statv-to-kilovolt-kv': 0.299792458,
  'statvolt-statv-to-nanovolt-nv': 299792458000,
  'statvolt-statv-to-picovolt-pv': 299792458000000,
  'statvolt-statv-to-abvolt-abv': 29979245800,

  // Abvolt (abV) conversions
  'abvolt-abv-to-volt-v': 0.00000001,
  'abvolt-abv-to-millivolt-mv': 0.00001,
  'abvolt-abv-to-microvolt-µv': 0.01,
  'abvolt-abv-to-kilovolt-kv': 0.00000000001,
  'abvolt-abv-to-nanovolt-nv': 10,
  'abvolt-abv-to-picovolt-pv': 10000,
  'abvolt-abv-to-statvolt-statv': 0.00000003335641
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