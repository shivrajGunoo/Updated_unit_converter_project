const conversionFactors = {
 // Nanometer (nm) conversions
  'nanometer-nm-to-micrometer-µm': 0.001,
  'nanometer-nm-to-angstrom-å': 10.0,
  'nanometer-nm-to-picometer-pm': 1000.0,
  'nanometer-nm-to-millimeter-mm': 1e-6,
  'nanometer-nm-to-femtometer-fm': 1e6,
  'nanometer-nm-to-centimeter-cm': 1e-7,

  // Micrometer (µm) conversions
  'micrometer-µm-to-nanometer-nm': 1000.0,
  'micrometer-µm-to-angstrom-å': 10000.0,
  'micrometer-µm-to-picometer-pm': 1e6,
  'micrometer-µm-to-millimeter-mm': 0.001,
  'micrometer-µm-to-femtometer-fm': 1e9,
  'micrometer-µm-to-centimeter-cm': 0.0001,

  // Angstrom (å) conversions
  'angstrom-å-to-nanometer-nm': 0.1,
  'angstrom-å-to-micrometer-µm': 0.0001,
  'angstrom-å-to-picometer-pm': 100.0,
  'angstrom-å-to-millimeter-mm': 1e-7,
  'angstrom-å-to-femtometer-fm': 1e5,
  'angstrom-å-to-centimeter-cm': 1e-8,

  // Picometer (pm) conversions
  'picometer-pm-to-nanometer-nm': 0.001,
  'picometer-pm-to-micrometer-µm': 1e-6,
  'picometer-pm-to-angstrom-å': 0.01,
  'picometer-pm-to-millimeter-mm': 1e-9,
  'picometer-pm-to-femtometer-fm': 1000.0,
  'picometer-pm-to-centimeter-cm': 1e-10,

  // Millimeter (mm) conversions
  'millimeter-mm-to-nanometer-nm': 1e6,
  'millimeter-mm-to-micrometer-µm': 1000.0,
  'millimeter-mm-to-angstrom-å': 1e7,
  'millimeter-mm-to-picometer-pm': 1e9,
  'millimeter-mm-to-femtometer-fm': 1e15,
  'millimeter-mm-to-centimeter-cm': 0.1,

  // Femtometer (fm) conversions
  'femtometer-fm-to-nanometer-nm': 1e-6,
  'femtometer-fm-to-micrometer-µm': 1e-9,
  'femtometer-fm-to-angstrom-å': 1e-5,
  'femtometer-fm-to-picometer-pm': 0.001,
  'femtometer-fm-to-millimeter-mm': 1e-15,
  'femtometer-fm-to-centimeter-cm': 1e-13,

  // Centimeter (cm) conversions
  'centimeter-cm-to-nanometer-nm': 1e7,
  'centimeter-cm-to-micrometer-µm': 10000.0,
  'centimeter-cm-to-angstrom-å': 1e8,
  'centimeter-cm-to-picometer-pm': 1e10,
  'centimeter-cm-to-millimeter-mm': 10.0,
  'centimeter-cm-to-femtometer-fm': 1e13
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
