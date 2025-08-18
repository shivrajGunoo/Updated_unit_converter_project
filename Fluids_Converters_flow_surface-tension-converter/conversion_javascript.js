const conversionFactors = {  
 'newton-meter-to-millinewton-meter' :1000,
'newton-meter-to-gram-force-centimeter' :1.019716213,
'newton-meter-to-dyne-centimeter' :1000,
'newton-meter-to-erg-squarecentimeter' :1000,
'newton-meter-to-erg-squaremillimeter' :10,
'newton-meter-to-poundal-inch' :0.1837185501,
'newton-meter-to-pound-force-inch' :0.0057101471,
'millinewton-meter-to-newton-meter' :0.001,
'millinewton-meter-to-gram-force-centimeter' :0.0010197162,
'millinewton-meter-to-dyne-centimeter' :1,
'millinewton-meter-to-erg-squarecentimeter' :1,
'millinewton-meter-to-erg-squaremillimeter' :0.01,
'millinewton-meter-to-poundal-inch' :0.0001837186,
'millinewton-meter-to-pound-force-inch' :0.0000057101,
'gram-force-centimeter-to-newton-meter' :0.980665,
'gram-force-centimeter-to-millinewton-meter' :980.66499998,
'gram-force-centimeter-to-dyne-centimeter' :980.66499998,
'gram-force-centimeter-to-erg-squarecentimeter' :980.66499998,
'gram-force-centimeter-to-erg-squaremillimeter' :9.8066499998,
'gram-force-centimeter-to-poundal-inch' :0.1801663519,
'gram-force-centimeter-to-pound-force-inch' :0.0055997414,
'dyne-centimeter-to-newton-meter' :0.001,
'dyne-centimeter-to-millinewton-meter' :1,
'dyne-centimeter-to-gram-force-centimeter' :0.0010197162,
'dyne-centimeter-to-erg-squarecentimeter' :1,
'dyne-centimeter-to-erg-squaremillimeter' :0.01,
'dyne-centimeter-to-poundal-inch' :0.0001837186,
'dyne-centimeter-to-pound-force-inch' :0.0000057101,
'erg-squarecentimeter-to-newton-meter' :0.001,
'erg-squarecentimeter-to-millinewton-meter' :1,
'erg-squarecentimeter-to-gram-force-centimeter' :0.0010197162,
'erg-squarecentimeter-to-dyne-centimeter' :1,
'erg-squarecentimeter-to-erg-squaremillimeter' :0.01,
'erg-squarecentimeter-to-poundal-inch' :0.0001837186,
'erg-squarecentimeter-to-pound-force-inch' :0.0000057101,
'erg-squaremillimeter-to-newton-meter' :0.1,
'erg-squaremillimeter-to-millinewton-meter' :100,
'erg-squaremillimeter-to-gram-force-centimeter' :0.1019716213,
'erg-squaremillimeter-to-dyne-centimeter' :100,
'erg-squaremillimeter-to-erg-squarecentimeter' :100,
'erg-squaremillimeter-to-poundal-inch' :0.018371855,
'erg-squaremillimeter-to-pound-force-inch' :0.0005710147,
'poundal-inch-to-newton-meter' :5.443108491,
'poundal-inch-to-millinewton-meter' :5443.108491,
'poundal-inch-to-gram-force-centimeter' :5.5504259774,
'poundal-inch-to-dyne-centimeter' :5443.108491,
'poundal-inch-to-erg-squarecentimeter' :5443.108491,
'poundal-inch-to-erg-squaremillimeter' :54.43108491,
'poundal-inch-to-pound-force-inch' :0.0310809502,
'pound-force-inch-to-newton-meter' :175.12683699,
'pound-force-inch-to-millinewton-meter' :175126.83699,
'pound-force-inch-to-gram-force-centimeter' :178.57967501,
'pound-force-inch-to-dyne-centimeter' :175126.83699,
'pound-force-inch-to-erg-squarecentimeter' :175126.83699,
'pound-force-inch-to-erg-squaremillimeter' :1751.2683699,
'pound-force-inch-to-poundal-inch' :32.174048575

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
