const conversionFactors = {
  // Ampere (A) conversions
  'ampere-a-to-milliampere-ma': 1000,
  'ampere-a-to-microampere-µa': 1000000,
  'ampere-a-to-kiloampere-ka': 0.001,
  'ampere-a-to-nanoampere-na': 1000000000,
  'ampere-a-to-picoampere-pa': 1000000000000,
  'ampere-a-to-femtoampere-fa': 1000000000000000,
  'ampere-a-to-attoampere-aa': 1000000000000000000,
  'ampere-a-to-abampere-aba': 0.1,

  // Milliampere (mA) conversions
  'milliampere-ma-to-ampere-a': 0.001,
  'milliampere-ma-to-microampere-µa': 1000,
  'milliampere-ma-to-kiloampere-ka': 0.000001,
  'milliampere-ma-to-nanoampere-na': 1000000,
  'milliampere-ma-to-picoampere-pa': 1000000000,
  'milliampere-ma-to-femtoampere-fa': 1000000000000,
  'milliampere-ma-to-attoampere-aa': 1000000000000000,
  'milliampere-ma-to-abampere-aba': 0.0001,

  // Microampere (µA) conversions
  'microampere-µa-to-ampere-a': 0.000001,
  'microampere-µa-to-milliampere-ma': 0.001,
  'microampere-µa-to-kiloampere-ka': 0.000000001,
  'microampere-µa-to-nanoampere-na': 1000,
  'microampere-µa-to-picoampere-pa': 1000000,
  'microampere-µa-to-femtoampere-fa': 1000000000,
  'microampere-µa-to-attoampere-aa': 1000000000000,
  'microampere-µa-to-abampere-aba': 0.0000001,

  // Kiloampere (kA) conversions
  'kiloampere-ka-to-ampere-a': 1000,
  'kiloampere-ka-to-milliampere-ma': 1000000,
  'kiloampere-ka-to-microampere-µa': 1000000000,
  'kiloampere-ka-to-nanoampere-na': 1000000000000,
  'kiloampere-ka-to-picoampere-pa': 1000000000000000,
  'kiloampere-ka-to-femtoampere-fa': 1000000000000000000,
  'kiloampere-ka-to-attoampere-aa': 1000000000000000000000,
  'kiloampere-ka-to-abampere-aba': 100,

  // Nanoampere (nA) conversions
  'nanoampere-na-to-ampere-a': 0.000000001,
  'nanoampere-na-to-milliampere-ma': 0.000001,
  'nanoampere-na-to-microampere-µa': 0.001,
  'nanoampere-na-to-kiloampere-ka': 0.000000000001,
  'nanoampere-na-to-picoampere-pa': 1000,
  'nanoampere-na-to-femtoampere-fa': 1000000,
  'nanoampere-na-to-attoampere-aa': 1000000000,
  'nanoampere-na-to-abampere-aba': 0.0000000001,

  // Picoampere (pA) conversions
  'picoampere-pa-to-ampere-a': 0.000000000001,
  'picoampere-pa-to-milliampere-ma': 0.000000001,
  'picoampere-pa-to-microampere-µa': 0.000001,
  'picoampere-pa-to-kiloampere-ka': 0.000000000000001,
  'picoampere-pa-to-nanoampere-na': 0.001,
  'picoampere-pa-to-femtoampere-fa': 1000,
  'picoampere-pa-to-attoampere-aa': 1000000,
  'picoampere-pa-to-abampere-aba': 0.0000000000001,

  // Femtoampere (fA) conversions
  'femtoampere-fa-to-ampere-a': 0.000000000000001,
  'femtoampere-fa-to-milliampere-ma': 0.000000000001,
  'femtoampere-fa-to-microampere-µa': 0.000000001,
  'femtoampere-fa-to-kiloampere-ka': 0.000000000000000001,
  'femtoampere-fa-to-nanoampere-na': 0.000001,
  'femtoampere-fa-to-picoampere-pa': 0.001,
  'femtoampere-fa-to-attoampere-aa': 1000,
  'femtoampere-fa-to-abampere-aba': 0.0000000000000001,

  // Attoampere (aA) conversions
  'attoampere-aa-to-ampere-a': 0.000000000000000001,
  'attoampere-aa-to-milliampere-ma': 0.000000000000001,
  'attoampere-aa-to-microampere-µa': 0.000000000001,
  'attoampere-aa-to-kiloampere-ka': 0.000000000000000000001,
  'attoampere-aa-to-nanoampere-na': 0.000000001,
  'attoampere-aa-to-picoampere-pa': 0.000001,
  'attoampere-aa-to-femtoampere-fa': 0.001,
  'attoampere-aa-to-abampere-aba': 0.0000000000000000001,

  // Abampere (abA) conversions
  'abampere-aba-to-ampere-a': 10,
  'abampere-aba-to-milliampere-ma': 10000,
  'abampere-aba-to-microampere-µa': 10000000,
  'abampere-aba-to-kiloampere-ka': 0.01,
  'abampere-aba-to-nanoampere-na': 10000000000,
  'abampere-aba-to-picoampere-pa': 10000000000000,
  'abampere-aba-to-femtoampere-fa': 10000000000000000,
  'abampere-aba-to-attoampere-aa': 10000000000000000000
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