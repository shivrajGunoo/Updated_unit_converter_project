// Length conversion rates (to millimeters as base unit)
const lengthConversionRates = {
    mm: 1,
    cm: 10,
    m: 1000,
    km: 1000000,
    in: 25.4,
    ft: 304.8,
    yd: 914.4,
    mi: 1609344
};

function convertLength() {
    const value1 = parseFloat(document.getElementById('lengthValue1').value);
    const unit1 = document.getElementById('lengthUnit1').value;
    const unit2 = document.getElementById('lengthUnit2').value;
    
    if (isNaN(value1)) {
        document.getElementById('lengthValue2').value = '';
        return;
    }
    
    const valueInMM = value1 * lengthConversionRates[unit1];
    const convertedValue = valueInMM / lengthConversionRates[unit2];
    
    document.getElementById('lengthValue2').value = convertedValue.toFixed(6);
}

function swapLengthUnits() {
    const unit1 = document.getElementById('lengthUnit1');
    const unit2 = document.getElementById('lengthUnit2');
    const temp = unit1.value;
    unit1.value = unit2.value;
    unit2.value = temp;
    convertLength();
}

function setLengthConversion(fromUnit, toUnit) {
    document.getElementById('lengthUnit1').value = fromUnit;
    document.getElementById('lengthUnit2').value = toUnit;
    document.getElementById('lengthValue1').value = 1;
    convertLength();
}

// Initialize length converter
document.addEventListener('DOMContentLoaded', function() {
    convertLength();
});