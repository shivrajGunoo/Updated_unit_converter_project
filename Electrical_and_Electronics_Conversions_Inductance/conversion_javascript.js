const conversionFactors = {
  // Henry (H) conversions
  'henry-h-to-millihenry-mh': 1000,
  'henry-h-to-microhenry-µh': 1_000_000,
  'henry-h-to-nanohenry-nh': 1_000_000_000,
  'henry-h-to-picohenry-ph': 1e12,
  'henry-h-to-femtohenry-fh': 1e15,
  'henry-h-to-abhenry-abh': 1e9,

  // Millihenry (mH) conversions
  'millihenry-mh-to-henry-h': 0.001,
  'millihenry-mh-to-microhenry-µh': 1000,
  'millihenry-mh-to-nanohenry-nh': 1_000_000,
  'millihenry-mh-to-picohenry-ph': 1e9,
  'millihenry-mh-to-femtohenry-fh': 1e12,
  'millihenry-mh-to-abhenry-abh': 1e6,

  // Microhenry (µH) conversions
  'microhenry-µh-to-henry-h': 1e-6,
  'microhenry-µh-to-millihenry-mh': 0.001,
  'microhenry-µh-to-nanohenry-nh': 1000,
  'microhenry-µh-to-picohenry-ph': 1_000_000,
  'microhenry-µh-to-femtohenry-fh': 1e9,
  'microhenry-µh-to-abhenry-abh': 1000,

  // Nanohenry (nH) conversions
  'nanohenry-nh-to-henry-h': 1e-9,
  'nanohenry-nh-to-millihenry-mh': 1e-6,
  'nanohenry-nh-to-microhenry-µh': 0.001,
  'nanohenry-nh-to-picohenry-ph': 1000,
  'nanohenry-nh-to-femtohenry-fh': 1_000_000,
  'nanohenry-nh-to-abhenry-abh': 1,

  // Picohenry (pH) conversions
  'picohenry-ph-to-henry-h': 1e-12,
  'picohenry-ph-to-millihenry-mh': 1e-9,
  'picohenry-ph-to-microhenry-µh': 1e-6,
  'picohenry-ph-to-nanohenry-nh': 0.001,
  'picohenry-ph-to-femtohenry-fh': 1000,
  'picohenry-ph-to-abhenry-abh': 0.001,

  // Femtohenry (fH) conversions
  'femtohenry-fh-to-henry-h': 1e-15,
  'femtohenry-fh-to-millihenry-mh': 1e-12,
  'femtohenry-fh-to-microhenry-µh': 1e-9,
  'femtohenry-fh-to-nanohenry-nh': 1e-6,
  'femtohenry-fh-to-picohenry-ph': 0.001,
  'femtohenry-fh-to-abhenry-abh': 1e-6,

  // Abhenry (abH) conversions
  'abhenry-abh-to-henry-h': 1e-9,
  'abhenry-abh-to-millihenry-mh': 1e-6,
  'abhenry-abh-to-microhenry-µh': 0.001,
  'abhenry-abh-to-nanohenry-nh': 1,
  'abhenry-abh-to-picohenry-ph': 1000,
  'abhenry-abh-to-femtohenry-fh': 1_000_000
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
