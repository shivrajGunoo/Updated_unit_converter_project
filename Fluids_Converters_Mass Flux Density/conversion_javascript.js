const conversionFactors = {  
'gram-second-square-meter-to-kilogram-hour-square-meter' :3.5999999997,
'gram-second-square-meter-to-kilogram-hour-square-foot' :0.3344509438,
'gram-second-square-meter-to-kilogram-second-square-meter' :0.001,
'gram-second-square-meter-to-gram-second-sq--centimeter' :0.0001,
'gram-second-square-meter-to-pound-hour-square-foot' :0.7373381093,
'gram-second-square-meter-to-pound-second-square-foot' :0.0002048161,
'kilogram-hour-square-meter-to-gram-second-square-meter' :0.2777777778,
'kilogram-hour-square-meter-to-kilogram-hour-square-foot' :0.09290304,
'kilogram-hour-square-meter-to-kilogram-second-square-meter' :0.0002777778,
'kilogram-hour-square-meter-to-gram-second-sq--centimeter' :0.0000277778,
'kilogram-hour-square-meter-to-pound-hour-square-foot' :0.2048161415,
'kilogram-hour-square-meter-to-pound-second-square-foot' :0.0000568934,
'kilogram-hour-square-foot-to-gram-second-square-meter' :2.9899751173,
'kilogram-hour-square-foot-to-kilogram-hour-square-meter' :10.763910421,
'kilogram-hour-square-foot-to-kilogram-second-square-meter' :0.0029899751,
'kilogram-hour-square-foot-to-gram-second-sq--centimeter' :0.0002989975,
'kilogram-hour-square-foot-to-pound-hour-square-foot' :2.2046226,
'kilogram-hour-square-foot-to-pound-second-square-foot' :0.0006123952,
'kilogram-second-square-meter-to-gram-second-square-meter' :1000,
'kilogram-second-square-meter-to-kilogram-hour-square-meter' :3599.9999997,
'kilogram-second-square-meter-to-kilogram-hour-square-foot' :334.45094383,
'kilogram-second-square-meter-to-gram-second-sq--centimeter' :0.1,
'kilogram-second-square-meter-to-pound-hour-square-foot' :737.33810934,
'kilogram-second-square-meter-to-pound-second-square-foot' :0.2048161415,
'gram-second-sq--centimeter-to-gram-second-square-meter' :10000,
'gram-second-sq--centimeter-to-kilogram-hour-square-meter' :35999.999997,
'gram-second-sq--centimeter-to-kilogram-hour-square-foot' :3344.5094383,
'gram-second-sq--centimeter-to-kilogram-second-square-meter' :10,
'gram-second-sq--centimeter-to-pound-hour-square-foot' :7373.3810934,
'gram-second-sq--centimeter-to-pound-second-square-foot' :2.0481614149,
'pound-hour-square-foot-to-gram-second-square-meter' :1.3562299132,
'pound-hour-square-foot-to-kilogram-hour-square-meter' :4.882427687,
'pound-hour-square-foot-to-kilogram-hour-square-foot' :0.4535923745,
'pound-hour-square-foot-to-kilogram-second-square-meter' :0.0013562299,
'pound-hour-square-foot-to-gram-second-sq--centimeter' :0.000135623,
'pound-hour-square-foot-to-pound-second-square-foot' :0.0002777778,
'pound-second-square-foot-to-gram-second-square-meter' :4882.4276873,
'pound-second-square-foot-to-kilogram-hour-square-meter' :17576.739673,
'pound-second-square-foot-to-kilogram-hour-square-foot' :1632.9325482,
'pound-second-square-foot-to-kilogram-second-square-meter' :4.8824276873,
'pound-second-square-foot-to-gram-second-sq--centimeter' :0.4882427687,
'pound-second-square-foot-to-pound-hour-square-foot' :3599.9999999

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
