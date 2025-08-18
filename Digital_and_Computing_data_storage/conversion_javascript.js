const conversionFactors = {
  // Bit conversions
  'bit-bit-to-byte-byte': 0.125,
  'bit-bit-to-kilobyte-kb': 0.000125,
  'bit-bit-to-megabyte-mb': 0.000000125,
  'bit-bit-to-gigabyte-gb': 0.000000000125,
  'bit-bit-to-terabyte-tb': 0.000000000000125,
  'bit-bit-to-petabyte-pb': 0.000000000000000125,
  'bit-bit-to-exabyte-eb': 0.000000000000000000125,
  'bit-bit-to-zettabyte-zb': 0.000000000000000000000125,
  'bit-bit-to-yottabyte-yb': 0.000000000000000000000000125,
  'bit-bit-to-kibibyte-kib': 0.0001220703125,
  'bit-bit-to-mebibyte-mib': 0.00000011920928955078125,

  // Byte conversions
  'byte-byte-to-bit-bit': 8,
  'byte-byte-to-kilobyte-kb': 0.001,
  'byte-byte-to-megabyte-mb': 0.000001,
  'byte-byte-to-gigabyte-gb': 0.000000001,
  'byte-byte-to-terabyte-tb': 0.000000000001,
  'byte-byte-to-petabyte-pb': 0.000000000000001,
  'byte-byte-to-exabyte-eb': 0.000000000000000001,
  'byte-byte-to-zettabyte-zb': 0.000000000000000000001,
  'byte-byte-to-yottabyte-yb': 0.000000000000000000000001,
  'byte-byte-to-kibibyte-kib': 0.0009765625,
  'byte-byte-to-mebibyte-mib': 0.00000095367431640625,

  // Kilobyte conversions
  'kilobyte-kb-to-bit-bit': 8000,
  'kilobyte-kb-to-byte-byte': 1000,
  'kilobyte-kb-to-megabyte-mb': 0.001,
  'kilobyte-kb-to-gigabyte-gb': 0.000001,
  'kilobyte-kb-to-terabyte-tb': 0.000000001,
  'kilobyte-kb-to-petabyte-pb': 0.000000000001,
  'kilobyte-kb-to-exabyte-eb': 0.000000000000001,
  'kilobyte-kb-to-zettabyte-zb': 0.000000000000000001,
  'kilobyte-kb-to-yottabyte-yb': 0.000000000000000000001,
  'kilobyte-kb-to-kibibyte-kib': 0.9765625,
  'kilobyte-kb-to-mebibyte-mib': 0.00095367431640625,

  // Megabyte conversions
  'megabyte-mb-to-bit-bit': 8000000,
  'megabyte-mb-to-byte-byte': 1000000,
  'megabyte-mb-to-kilobyte-kb': 1000,
  'megabyte-mb-to-gigabyte-gb': 0.001,
  'megabyte-mb-to-terabyte-tb': 0.000001,
  'megabyte-mb-to-petabyte-pb': 0.000000001,
  'megabyte-mb-to-exabyte-eb': 0.000000000001,
  'megabyte-mb-to-zettabyte-zb': 0.000000000000001,
  'megabyte-mb-to-yottabyte-yb': 0.000000000000000001,
  'megabyte-mb-to-kibibyte-kib': 976.5625,
  'megabyte-mb-to-mebibyte-mib': 0.95367431640625,

  // Gigabyte conversions
  'gigabyte-gb-to-bit-bit': 8000000000,
  'gigabyte-gb-to-byte-byte': 1000000000,
  'gigabyte-gb-to-kilobyte-kb': 1000000,
  'gigabyte-gb-to-megabyte-mb': 1000,
  'gigabyte-gb-to-terabyte-tb': 0.001,
  'gigabyte-gb-to-petabyte-pb': 0.000001,
  'gigabyte-gb-to-exabyte-eb': 0.000000001,
  'gigabyte-gb-to-zettabyte-zb': 0.000000000001,
  'gigabyte-gb-to-yottabyte-yb': 0.000000000000001,
  'gigabyte-gb-to-kibibyte-kib': 976562.5,
  'gigabyte-gb-to-mebibyte-mib': 953.67431640625,

  // Terabyte conversions
  'terabyte-tb-to-bit-bit': 8000000000000,
  'terabyte-tb-to-byte-byte': 1000000000000,
  'terabyte-tb-to-kilobyte-kb': 1000000000,
  'terabyte-tb-to-megabyte-mb': 1000000,
  'terabyte-tb-to-gigabyte-gb': 1000,
  'terabyte-tb-to-petabyte-pb': 0.001,
  'terabyte-tb-to-exabyte-eb': 0.000001,
  'terabyte-tb-to-zettabyte-zb': 0.000000001,
  'terabyte-tb-to-yottabyte-yb': 0.000000000001,
  'terabyte-tb-to-kibibyte-kib': 976562500,
  'terabyte-tb-to-mebibyte-mib': 953674.31640625,

  // Petabyte conversions
  'petabyte-pb-to-bit-bit': 8000000000000000,
  'petabyte-pb-to-byte-byte': 1000000000000000,
  'petabyte-pb-to-kilobyte-kb': 1000000000000,
  'petabyte-pb-to-megabyte-mb': 1000000000,
  'petabyte-pb-to-gigabyte-gb': 1000000,
  'petabyte-pb-to-terabyte-tb': 1000,
  'petabyte-pb-to-exabyte-eb': 0.001,
  'petabyte-pb-to-zettabyte-zb': 0.000001,
  'petabyte-pb-to-yottabyte-yb': 0.000000001,
  'petabyte-pb-to-kibibyte-kib': 976562500000,
  'petabyte-pb-to-mebibyte-mib': 953674316.40625,

  // Exabyte conversions
  'exabyte-eb-to-bit-bit': 8000000000000000000,
  'exabyte-eb-to-byte-byte': 1000000000000000000,
  'exabyte-eb-to-kilobyte-kb': 1000000000000000,
  'exabyte-eb-to-megabyte-mb': 1000000000000,
  'exabyte-eb-to-gigabyte-gb': 1000000000,
  'exabyte-eb-to-terabyte-tb': 1000000,
  'exabyte-eb-to-petabyte-pb': 1000,
  'exabyte-eb-to-zettabyte-zb': 0.001,
  'exabyte-eb-to-yottabyte-yb': 0.000001,
  'exabyte-eb-to-kibibyte-kib': 976562500000000,
  'exabyte-eb-to-mebibyte-mib': 953674316406.25,

  // Zettabyte conversions
  'zettabyte-zb-to-bit-bit': 8000000000000000000000,
  'zettabyte-zb-to-byte-byte': 1000000000000000000000,
  'zettabyte-zb-to-kilobyte-kb': 1000000000000000000,
  'zettabyte-zb-to-megabyte-mb': 1000000000000000,
  'zettabyte-zb-to-gigabyte-gb': 1000000000000,
  'zettabyte-zb-to-terabyte-tb': 1000000000,
  'zettabyte-zb-to-petabyte-pb': 1000000,
  'zettabyte-zb-to-exabyte-eb': 1000,
  'zettabyte-zb-to-yottabyte-yb': 0.001,
  'zettabyte-zb-to-kibibyte-kib': 976562500000000000,
  'zettabyte-zb-to-mebibyte-mib': 953674316406250,

  // Yottabyte conversions (Note: Uses BigInt for precision)
  'yottabyte-yb-to-bit-bit': BigInt(8000000000000000000000000),
  'yottabyte-yb-to-byte-byte': BigInt(1000000000000000000000000),
  'yottabyte-yb-to-kilobyte-kb': BigInt(1000000000000000000000),
  'yottabyte-yb-to-megabyte-mb': BigInt(1000000000000000000),
  'yottabyte-yb-to-gigabyte-gb': BigInt(1000000000000000),
  'yottabyte-yb-to-terabyte-tb': BigInt(1000000000000),
  'yottabyte-yb-to-petabyte-pb': BigInt(1000000000),
  'yottabyte-yb-to-exabyte-eb': BigInt(1000000),
  'yottabyte-yb-to-zettabyte-zb': BigInt(1000),
  'yottabyte-yb-to-kibibyte-kib': BigInt(976562500000000000000),
  'yottabyte-yb-to-mebibyte-mib': BigInt(953674316406250000),

  // Kibibyte conversions
  'kibibyte-kib-to-bit-bit': 8192,
  'kibibyte-kib-to-byte-byte': 1024,
  'kibibyte-kib-to-kilobyte-kb': 1.024,
  'kibibyte-kib-to-megabyte-mb': 0.001024,
  'kibibyte-kib-to-gigabyte-gb': 0.000001024,
  'kibibyte-kib-to-terabyte-tb': 0.000000001024,
  'kibibyte-kib-to-petabyte-pb': 0.000000000001024,
  'kibibyte-kib-to-exabyte-eb': 0.000000000000001024,
  'kibibyte-kib-to-zettabyte-zb': 0.000000000000000001024,
  'kibibyte-kib-to-yottabyte-yb': 0.000000000000000000001024,
  'kibibyte-kib-to-mebibyte-mib': 0.0009765625,

  // Mebibyte conversions
  'mebibyte-mib-to-bit-bit': 8388608,
  'mebibyte-mib-to-byte-byte': 1048576,
  'mebibyte-mib-to-kilobyte-kb': 1048.576,
  'mebibyte-mib-to-megabyte-mb': 1.048576,
  'mebibyte-mib-to-gigabyte-gb': 0.001048576,
  'mebibyte-mib-to-terabyte-tb': 0.000001048576,
  'mebibyte-mib-to-petabyte-pb': 0.000000001048576,
  'mebibyte-mib-to-exabyte-eb': 0.000000000001048576,
  'mebibyte-mib-to-zettabyte-zb': 0.000000000000001048576,
  'mebibyte-mib-to-yottabyte-yb': 0.000000000000000001048576,
  'mebibyte-mib-to-kibibyte-kib': 1024
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
