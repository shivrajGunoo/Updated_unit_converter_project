const conversionFactors = {  
'mol-cubicmeter-to-mol-liter' :0.001,
'mol-cubicmeter-to-mol-cubiccentimeter' :0.000001,
'mol-cubicmeter-to-mol-cubicmillimeter' :0.000000001,
'mol-cubicmeter-to-kilomol-cubicmeter' :0.001,
'mol-cubicmeter-to-kilomol-liter' :0.000001,
'mol-cubicmeter-to-kilomol-cubiccentimeter' :0.000000001,
'mol-cubicmeter-to-kilomol-cubicmillimeter' :0.000000000001,
'mol-cubicmeter-to-millimol-cubicmeter' :1000,
'mol-cubicmeter-to-millimol-liter' :1,
'mol-cubicmeter-to-millimol-cubiccentimeter' :0.001,
'mol-cubicmeter-to-millimol-cubicmillimeter' :0.000001,
'mol-liter-to-mol-cubicmeter' :1000,
'mol-liter-to-mol-cubiccentimeter' :0.001,
'mol-liter-to-mol-cubicmillimeter' :0.000001,
'mol-liter-to-kilomol-cubicmeter' :1,
'mol-liter-to-kilomol-liter' :0.001,
'mol-liter-to-kilomol-cubiccentimeter' :0.000001,
'mol-liter-to-kilomol-cubicmillimeter' :0.000000001,
'mol-liter-to-millimol-cubicmeter' :1000000,
'mol-liter-to-millimol-liter' :1000,
'mol-liter-to-millimol-cubiccentimeter' :1,
'mol-liter-to-millimol-cubicmillimeter' :0.001,
'mol-cubiccentimeter-to-mol-cubicmeter' :1000000,
'mol-cubiccentimeter-to-mol-liter' :1000,
'mol-cubiccentimeter-to-mol-cubicmillimeter' :0.001,
'mol-cubiccentimeter-to-kilomol-cubicmeter' :1000,
'mol-cubiccentimeter-to-kilomol-liter' :1,
'mol-cubiccentimeter-to-kilomol-cubiccentimeter' :0.001,
'mol-cubiccentimeter-to-kilomol-cubicmillimeter' :0.000001,
'mol-cubiccentimeter-to-millimol-cubicmeter' :1000000000,
'mol-cubiccentimeter-to-millimol-liter' :1000000,
'mol-cubiccentimeter-to-millimol-cubiccentimeter' :1000,
'mol-cubiccentimeter-to-millimol-cubicmillimeter' :1,
'mol-cubicmillimeter-to-mol-cubicmeter' :1000000000,
'mol-cubicmillimeter-to-mol-liter' :1000000,
'mol-cubicmillimeter-to-mol-cubiccentimeter' :1000,
'mol-cubicmillimeter-to-kilomol-cubicmeter' :1000000,
'mol-cubicmillimeter-to-kilomol-liter' :1000,
'mol-cubicmillimeter-to-kilomol-cubiccentimeter' :1,
'mol-cubicmillimeter-to-kilomol-cubicmillimeter' :0.001,
'mol-cubicmillimeter-to-millimol-cubicmeter' :1000000000000,
'mol-cubicmillimeter-to-millimol-liter' :1000000000,
'mol-cubicmillimeter-to-millimol-cubiccentimeter' :1000000,
'mol-cubicmillimeter-to-millimol-cubicmillimeter' :1000,
'kilomol-cubicmeter-to-mol-cubicmeter' :1000,
'kilomol-cubicmeter-to-mol-liter' :1,
'kilomol-cubicmeter-to-mol-cubiccentimeter' :0.001,
'kilomol-cubicmeter-to-mol-cubicmillimeter' :0.000001,
'kilomol-cubicmeter-to-kilomol-liter' :0.001,
'kilomol-cubicmeter-to-kilomol-cubiccentimeter' :0.000001,
'kilomol-cubicmeter-to-kilomol-cubicmillimeter' :0.000000001,
'kilomol-cubicmeter-to-millimol-cubicmeter' :1000000,
'kilomol-cubicmeter-to-millimol-liter' :1000,
'kilomol-cubicmeter-to-millimol-cubiccentimeter' :1,
'kilomol-cubicmeter-to-millimol-cubicmillimeter' :0.001,
'kilomol-liter-to-mol-cubicmeter' :1000000,
'kilomol-liter-to-mol-liter' :1000,
'kilomol-liter-to-mol-cubiccentimeter' :1,
'kilomol-liter-to-mol-cubicmillimeter' :0.001,
'kilomol-liter-to-kilomol-cubicmeter' :1000,
'kilomol-liter-to-kilomol-cubiccentimeter' :0.001,
'kilomol-liter-to-kilomol-cubicmillimeter' :0.000001,
'kilomol-liter-to-millimol-cubicmeter' :1000000000,
'kilomol-liter-to-millimol-liter' :1000000,
'kilomol-liter-to-millimol-cubiccentimeter' :1000,
'kilomol-liter-to-millimol-cubicmillimeter' :1,
'kilomol-cubiccentimeter-to-mol-cubicmeter' :1000000000,
'kilomol-cubiccentimeter-to-mol-liter' :1000000,
'kilomol-cubiccentimeter-to-mol-cubiccentimeter' :1000,
'kilomol-cubiccentimeter-to-mol-cubicmillimeter' :1,
'kilomol-cubiccentimeter-to-kilomol-cubicmeter' :1000000,
'kilomol-cubiccentimeter-to-kilomol-liter' :1000,
'kilomol-cubiccentimeter-to-kilomol-cubicmillimeter' :0.001,
'kilomol-cubiccentimeter-to-millimol-cubicmeter' :1000000000000,
'kilomol-cubiccentimeter-to-millimol-liter' :1000000000,
'kilomol-cubiccentimeter-to-millimol-cubiccentimeter' :1000000,
'kilomol-cubiccentimeter-to-millimol-cubicmillimeter' :1000,
'kilomol-cubicmillimeter-to-mol-cubicmeter' :1000000000000,
'kilomol-cubicmillimeter-to-mol-liter' :1000000000,
'kilomol-cubicmillimeter-to-mol-cubiccentimeter' :1000000,
'kilomol-cubicmillimeter-to-mol-cubicmillimeter' :1000,
'kilomol-cubicmillimeter-to-kilomol-cubicmeter' :1000000000,
'kilomol-cubicmillimeter-to-kilomol-liter' :1000000,
'kilomol-cubicmillimeter-to-kilomol-cubiccentimeter' :1000,
'kilomol-cubicmillimeter-to-millimol-cubicmeter' :1000000000000000,
'kilomol-cubicmillimeter-to-millimol-liter' :1000000000000,
'kilomol-cubicmillimeter-to-millimol-cubiccentimeter' :1000000000,
'kilomol-cubicmillimeter-to-millimol-cubicmillimeter' :1000000,
'millimol-cubicmeter-to-mol-cubicmeter' :0.001,
'millimol-cubicmeter-to-mol-liter' :0.000001,
'millimol-cubicmeter-to-mol-cubiccentimeter' :0.000000001,
'millimol-cubicmeter-to-mol-cubicmillimeter' :0.000000000001,
'millimol-cubicmeter-to-kilomol-cubicmeter' :0.000001,
'millimol-cubicmeter-to-kilomol-liter' :0.000000001,
'millimol-cubicmeter-to-kilomol-cubiccentimeter' :0.000000000001,
'millimol-cubicmeter-to-kilomol-cubicmillimeter' :0.000000000000001,
'millimol-cubicmeter-to-millimol-liter' :0.001,
'millimol-cubicmeter-to-millimol-cubiccentimeter' :0.000001,
'millimol-cubicmeter-to-millimol-cubicmillimeter' :0.000000001,
'millimol-liter-to-mol-cubicmeter' :1,
'millimol-liter-to-mol-liter' :0.001,
'millimol-liter-to-mol-cubiccentimeter' :0.000001,
'millimol-liter-to-mol-cubicmillimeter' :0.000000001,
'millimol-liter-to-kilomol-cubicmeter' :0.001,
'millimol-liter-to-kilomol-liter' :0.000001,
'millimol-liter-to-kilomol-cubiccentimeter' :0.000000001,
'millimol-liter-to-kilomol-cubicmillimeter' :0.000000000001,
'millimol-liter-to-millimol-cubicmeter' :1000,
'millimol-liter-to-millimol-cubiccentimeter' :0.001,
'millimol-liter-to-millimol-cubicmillimeter' :0.000001,
'millimol-cubiccentimeter-to-mol-cubicmeter' :1000,
'millimol-cubiccentimeter-to-mol-liter' :1,
'millimol-cubiccentimeter-to-mol-cubiccentimeter' :0.001,
'millimol-cubiccentimeter-to-mol-cubicmillimeter' :0.000001,
'millimol-cubiccentimeter-to-kilomol-cubicmeter' :1,
'millimol-cubiccentimeter-to-kilomol-liter' :0.001,
'millimol-cubiccentimeter-to-kilomol-cubiccentimeter' :0.000001,
'millimol-cubiccentimeter-to-kilomol-cubicmillimeter' :0.000000001,
'millimol-cubiccentimeter-to-millimol-cubicmeter' :1000000,
'millimol-cubiccentimeter-to-millimol-liter' :1000,
'millimol-cubiccentimeter-to-millimol-cubicmillimeter' :0.001,
'millimol-cubicmillimeter-to-mol-cubicmeter' :1000000,
'millimol-cubicmillimeter-to-mol-liter' :1000,
'millimol-cubicmillimeter-to-mol-cubiccentimeter' :1,
'millimol-cubicmillimeter-to-mol-cubicmillimeter' :0.001,
'millimol-cubicmillimeter-to-kilomol-cubicmeter' :1000,
'millimol-cubicmillimeter-to-kilomol-liter' :1,
'millimol-cubicmillimeter-to-kilomol-cubiccentimeter' :0.001,
'millimol-cubicmillimeter-to-kilomol-cubicmillimeter' :0.000001,
'millimol-cubicmillimeter-to-millimol-cubicmeter' :1000000000,
'millimol-cubicmillimeter-to-millimol-liter' :1000000,
'millimol-cubicmillimeter-to-millimol-cubiccentimeter' :1000

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
