const conversionFactors = {
  // Farad (F) conversions
  'farad-f-to-kilofarad-kf': 0.001,
  'farad-f-to-millifarad-mf': 1000,
  'farad-f-to-microfarad-µf': 1000000,
  'farad-f-to-nanofarad-nf': 1000000000,
  'farad-f-to-picofarad-pf': 1e12,
  'farad-f-to-femtofarad-ff': 1e15,
  'farad-f-to-attofarad-af': 1e18,
  'farad-f-to-zeptofarad-zf': 1e21,
  'farad-f-to-yoctofarad-yf': 1e24,

  // Kilofarad (kF) conversions
  'kilofarad-kf-to-farad-f': 1000,
  'kilofarad-kf-to-millifarad-mf': 1000000,
  'kilofarad-kf-to-microfarad-µf': 1000000000,
  'kilofarad-kf-to-nanofarad-nf': 1e12,
  'kilofarad-kf-to-picofarad-pf': 1e15,
  'kilofarad-kf-to-femtofarad-ff': 1e18,
  'kilofarad-kf-to-attofarad-af': 1e21,
  'kilofarad-kf-to-zeptofarad-zf': 1e24,
  'kilofarad-kf-to-yoctofarad-yf': 1e27,

  // Millifarad (mF) conversions
  'millifarad-mf-to-farad-f': 0.001,
  'millifarad-mf-to-kilofarad-kf': 1e-6,
  'millifarad-mf-to-microfarad-µf': 1000,
  'millifarad-mf-to-nanofarad-nf': 1000000,
  'millifarad-mf-to-picofarad-pf': 1e9,
  'millifarad-mf-to-femtofarad-ff': 1e12,
  'millifarad-mf-to-attofarad-af': 1e15,
  'millifarad-mf-to-zeptofarad-zf': 1e18,
  'millifarad-mf-to-yoctofarad-yf': 1e21,

  // Microfarad (µF) conversions
  'microfarad-µf-to-farad-f': 1e-6,
  'microfarad-µf-to-kilofarad-kf': 1e-9,
  'microfarad-µf-to-millifarad-mf': 0.001,
  'microfarad-µf-to-nanofarad-nf': 1000,
  'microfarad-µf-to-picofarad-pf': 1000000,
  'microfarad-µf-to-femtofarad-ff': 1e9,
  'microfarad-µf-to-attofarad-af': 1e12,
  'microfarad-µf-to-zeptofarad-zf': 1e15,
  'microfarad-µf-to-yoctofarad-yf': 1e18,

  // Nanofarad (nF) conversions
  'nanofarad-nf-to-farad-f': 1e-9,
  'nanofarad-nf-to-kilofarad-kf': 1e-12,
  'nanofarad-nf-to-millifarad-mf': 1e-6,
  'nanofarad-nf-to-microfarad-µf': 0.001,
  'nanofarad-nf-to-picofarad-pf': 1000,
  'nanofarad-nf-to-femtofarad-ff': 1000000,
  'nanofarad-nf-to-attofarad-af': 1e9,
  'nanofarad-nf-to-zeptofarad-zf': 1e12,
  'nanofarad-nf-to-yoctofarad-yf': 1e15,

  // Picofarad (pF) conversions
  'picofarad-pf-to-farad-f': 1e-12,
  'picofarad-pf-to-kilofarad-kf': 1e-15,
  'picofarad-pf-to-millifarad-mf': 1e-9,
  'picofarad-pf-to-microfarad-µf': 1e-6,
  'picofarad-pf-to-nanofarad-nf': 0.001,
  'picofarad-pf-to-femtofarad-ff': 1000,
  'picofarad-pf-to-attofarad-af': 1000000,
  'picofarad-pf-to-zeptofarad-zf': 1e9,
  'picofarad-pf-to-yoctofarad-yf': 1e12,

  // Femtofarad (fF) conversions
  'femtofarad-ff-to-farad-f': 1e-15,
  'femtofarad-ff-to-kilofarad-kf': 1e-18,
  'femtofarad-ff-to-millifarad-mf': 1e-12,
  'femtofarad-ff-to-microfarad-µf': 1e-9,
  'femtofarad-ff-to-nanofarad-nf': 1e-6,
  'femtofarad-ff-to-picofarad-pf': 0.001,
  'femtofarad-ff-to-attofarad-af': 1000,
  'femtofarad-ff-to-zeptofarad-zf': 1000000,
  'femtofarad-ff-to-yoctofarad-yf': 1e9,

  // Attofarad (aF) conversions
  'attofarad-af-to-farad-f': 1e-18,
  'attofarad-af-to-kilofarad-kf': 1e-21,
  'attofarad-af-to-millifarad-mf': 1e-15,
  'attofarad-af-to-microfarad-µf': 1e-12,
  'attofarad-af-to-nanofarad-nf': 1e-9,
  'attofarad-af-to-picofarad-pf': 1e-6,
  'attofarad-af-to-femtofarad-ff': 0.001,
  'attofarad-af-to-zeptofarad-zf': 1000,
  'attofarad-af-to-yoctofarad-yf': 1000000,

  // Zeptofarad (zF) conversions
  'zeptofarad-zf-to-farad-f': 1e-21,
  'zeptofarad-zf-to-kilofarad-kf': 1e-24,
  'zeptofarad-zf-to-millifarad-mf': 1e-18,
  'zeptofarad-zf-to-microfarad-µf': 1e-15,
  'zeptofarad-zf-to-nanofarad-nf': 1e-12,
  'zeptofarad-zf-to-picofarad-pf': 1e-9,
  'zeptofarad-zf-to-femtofarad-ff': 1e-6,
  'zeptofarad-zf-to-attofarad-af': 0.001,
  'zeptofarad-zf-to-yoctofarad-yf': 1000,

  // Yoctofarad (yF) conversions
  'yoctofarad-yf-to-farad-f': 1e-24,
  'yoctofarad-yf-to-kilofarad-kf': 1e-27,
  'yoctofarad-yf-to-millifarad-mf': 1e-21,
  'yoctofarad-yf-to-microfarad-µf': 1e-18,
  'yoctofarad-yf-to-nanofarad-nf': 1e-15,
  'yoctofarad-yf-to-picofarad-pf': 1e-12,
  'yoctofarad-yf-to-femtofarad-ff': 1e-9,
  'yoctofarad-yf-to-attofarad-af': 1e-6,
  'yoctofarad-yf-to-zeptofarad-zf': 0.001
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