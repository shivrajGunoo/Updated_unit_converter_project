const conversionFactors = {  
'kilogram-liter-to-gram-liter':	1000,
'kilogram-liter-to-milligram-liter':	1000000,
'kilogram-liter-to-part-million-ppm':	1001142.303,
'kilogram-liter-to-grain-gallon-us':	58417.8306,
'kilogram-liter-to-grain-gallon-uk':	70156.88929,
'kilogram-liter-to-pound-gallon-us':	8.345404374,
'kilogram-liter-to-pound-gallon-uk':	10.02241276,
'kilogram-liter-to-pound-million-gallon-us':	8345404.374,
'kilogram-liter-to-pound-million-gallon-uk':	10022412.76,
'kilogram-liter-to-pound-cubic-foot':	62.42796,
'gram-liter-to-kilogram-liter':	0.001,
'gram-liter-to-milligram-liter':	1000,
'gram-liter-to-part-million-ppm':	1001.142303,
'gram-liter-to-grain-gallon-us':	58.4178306,
'gram-liter-to-grain-gallon-uk':	70.15688929,
'gram-liter-to-pound-gallon-us':	0.0083454044,
'gram-liter-to-pound-gallon-uk':	0.0100224128,
'gram-liter-to-pound-million-gallon-us':	8345.404374,
'gram-liter-to-pound-million-gallon-uk':	10022.41276,
'gram-liter-to-pound-cubic-foot':	0.06242796,
'milligram-liter-to-kilogram-liter':	0.000001,
'milligram-liter-to-gram-liter':	0.001,
'milligram-liter-to-part-million-ppm':	1.001142303,
'milligram-liter-to-grain-gallon-us':	0.0584178306,
'milligram-liter-to-grain-gallon-uk':	0.0701568893,
'milligram-liter-to-pound-gallon-us':	0.0000083454,
'milligram-liter-to-pound-gallon-uk':	0.0000100224,
'milligram-liter-to-pound-million-gallon-us':	8.345404374,
'milligram-liter-to-pound-million-gallon-uk':	10.02241276,
'milligram-liter-to-pound-cubic-foot':	0.000062428,
'part-million-ppm-to-kilogram-liter':	0.0000009988590003,
'part-million-ppm-to-gram-liter':	0.000998859,
'part-million-ppm-to-milligram-liter':	0.9988590004,
'part-million-ppm-to-grain-gallon-us':	0.0583511759,
'part-million-ppm-to-grain-gallon-uk':	0.0700768403,
'part-million-ppm-to-pound-gallon-us':	0.0000083359,
'part-million-ppm-to-pound-gallon-uk':	0.000010011,
'part-million-ppm-to-pound-million-gallon-us':	8.3358822707,
'part-million-ppm-to-pound-million-gallon-uk':	10.010977191,
'part-million-ppm-to-pound-cubic-foot':	0.0000623567,
'grain-gallon-us-to-kilogram-liter':	0.0000171181,
'grain-gallon-us-to-gram-liter':	0.0171180612,
'grain-gallon-us-to-milligram-liter':	17.118061211,
'grain-gallon-us-to-part-million-ppm':	17.137615223,
'grain-gallon-us-to-grain-gallon-uk':	1.2009499252,
'grain-gallon-us-to-pound-gallon-us':	0.0001428571,
'grain-gallon-us-to-pound-gallon-uk':	0.0001715643,
'grain-gallon-us-to-pound-million-gallon-us':	142.8571429,
'grain-gallon-us-to-pound-million-gallon-uk':	171.5642751,
'grain-gallon-us-to-pound-cubic-foot':	0.0010686456,
'grain-gallon-uk-to-kilogram-liter':	0.0000142538,
'grain-gallon-uk-to-gram-liter':	0.0142537677,
'grain-gallon-uk-to-milligram-liter':	14.253767664,
'grain-gallon-uk-to-part-million-ppm':	14.270049786,
'grain-gallon-uk-to-grain-gallon-us':	0.8326741848,
'grain-gallon-uk-to-pound-gallon-us':	0.0001189535,
'grain-gallon-uk-to-pound-gallon-uk':	0.0001428571,
'grain-gallon-uk-to-pound-million-gallon-us':	118.95345501,
'grain-gallon-uk-to-pound-million-gallon-uk':	142.85714292,
'grain-gallon-uk-to-pound-cubic-foot':	0.0008898336,
'pound-gallon-us-to-kilogram-liter':	0.1198264284,
'pound-gallon-us-to-gram-liter':	119.82642844,
'pound-gallon-us-to-milligram-liter':	119826.42844,
'pound-gallon-us-to-part-million-ppm':	119963.30653,
'pound-gallon-us-to-grain-gallon-us':	6999.9999978,
'pound-gallon-us-to-grain-gallon-uk':	8406.6494739,
'pound-gallon-us-to-pound-gallon-uk':	1.2009499254,
'pound-gallon-us-to-pound-million-gallon-us':	1000000,
'pound-gallon-us-to-pound-million-gallon-uk':	1200949.9254,
'pound-gallon-us-to-pound-cubic-foot':	7.4805194814,
'pound-gallon-uk-to-kilogram-liter':	0.0997763736,
'pound-gallon-uk-to-gram-liter':	99.776373608,
'pound-gallon-uk-to-milligram-liter':	99776.373608,
'pound-gallon-uk-to-part-million-ppm':	99890.348459,
'pound-gallon-uk-to-grain-gallon-us':	5828.7192913,
'pound-gallon-uk-to-grain-gallon-uk':	6999.999997,
'pound-gallon-uk-to-pound-gallon-us':	0.8326741847,
'pound-gallon-uk-to-pound-million-gallon-us':	832674.18473,
'pound-gallon-uk-to-pound-million-gallon-uk':	1000000,
'pound-gallon-uk-to-pound-cubic-foot':	6.2288354606,
'pound-million-gallon-us-to-kilogram-liter':	0.0000001198264284,
'pound-million-gallon-us-to-gram-liter':	0.0001198264,
'pound-million-gallon-us-to-milligram-liter':	0.1198264284,
'pound-million-gallon-us-to-part-million-ppm':	0.1199633065,
'pound-million-gallon-us-to-grain-gallon-us':	0.007,
'pound-million-gallon-us-to-grain-gallon-uk':	0.0084066495,
'pound-million-gallon-us-to-pound-gallon-us':	0.000001,
'pound-million-gallon-us-to-pound-gallon-uk':	0.0000012009,
'pound-million-gallon-us-to-pound-million-gallon-uk':	1.2009499254,
'pound-million-gallon-us-to-pound-cubic-foot':	0.0000074805,
'pound-million-gallon-uk-to-kilogram-liter':	0.0000000997763736,
'pound-million-gallon-uk-to-gram-liter':	0.0000997764,
'pound-million-gallon-uk-to-milligram-liter':	0.0997763736,
'pound-million-gallon-uk-to-part-million-ppm':	0.0998903485,
'pound-million-gallon-uk-to-grain-gallon-us':	0.0058287193,
'pound-million-gallon-uk-to-grain-gallon-uk':	0.007,
'pound-million-gallon-uk-to-pound-gallon-us':	0.0000008326741847,
'pound-million-gallon-uk-to-pound-gallon-uk':	0.000001,
'pound-million-gallon-uk-to-pound-million-gallon-us':	0.8326741847,
'pound-million-gallon-uk-to-pound-cubic-foot':	0.0000062288,
'pound-cubic-foot-to-kilogram-liter':	0.0160184635,
'pound-cubic-foot-to-gram-liter':	16.018463522,
'pound-cubic-foot-to-milligram-liter':	16018.463522,
'pound-cubic-foot-to-part-million-ppm':	16036.761461,
'pound-cubic-foot-to-grain-gallon-us':	935.76388849,
'pound-cubic-foot-to-grain-gallon-uk':	1123.8055719,
'pound-cubic-foot-to-pound-gallon-us':	0.1336805555,
'pound-cubic-foot-to-pound-gallon-uk':	0.1605436532,
'pound-cubic-foot-to-pound-million-gallon-us':	133680.55554,
'pound-cubic-foot-to-pound-million-gallon-uk':	160543.6532


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
