// Area conversion rates (to square meters as base unit)
const areaConversionRates = {
    m2: 1,
    km2: 1000000,
    ft2: 0.092903,
    yd2: 0.836127,
    mi2: 2589988.11,
    acre: 4046.86,
    hectare: 10000
};

function convertArea() {
    const value1 = parseFloat(document.getElementById('areaValue1').value);
    const unit1 = document.getElementById('areaUnit1').value;
    const unit2 = document.getElementById('areaUnit2').value;
    
    if (isNaN(value1)) {
        document.getElementById('areaValue2').value = '';
        return;
    }
    
    const valueInM2 = value1 * areaConversionRates[unit1];
    const convertedValue = valueInM2 / areaConversionRates[unit2];
    
    document.getElementById('areaValue2').value = convertedValue.toFixed(6);
}

function swapAreaUnits() {
    const unit1 = document.getElementById('areaUnit1');
    const unit2 = document.getElementById('areaUnit2');
    const temp = unit1.value;
    unit1.value = unit2.value;
    unit2.value = temp;
    convertArea();
}

function setAreaConversion(fromUnit, toUnit) {
    document.getElementById('areaUnit1').value = fromUnit;
    document.getElementById('areaUnit2').value = toUnit;
    document.getElementById('areaValue1').value = 1;
    convertArea();
}

// Initialize area converter
document.addEventListener('DOMContentLoaded', function() {
    convertArea();
});