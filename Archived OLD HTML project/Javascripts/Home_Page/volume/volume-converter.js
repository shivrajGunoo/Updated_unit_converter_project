// Volume conversion rates (to liters as base unit)
const volumeConversionRates = {
    ml: 0.001,
    l: 1,
    m3: 1000,
    tsp: 0.00492892,
    tbsp: 0.0147868,
    floz: 0.0295735,
    cup: 0.236588,
    pint: 0.473176,
    quart: 0.946353,
    gallon: 3.78541
};

function convertVolume() {
    const value1 = parseFloat(document.getElementById('volumeValue1').value);
    const unit1 = document.getElementById('volumeUnit1').value;
    const unit2 = document.getElementById('volumeUnit2').value;
    
    if (isNaN(value1)) {
        document.getElementById('volumeValue2').value = '';
        return;
    }
    
    const valueInLiters = value1 * volumeConversionRates[unit1];
    const convertedValue = valueInLiters / volumeConversionRates[unit2];
    
    document.getElementById('volumeValue2').value = convertedValue.toFixed(6);
}

function swapVolumeUnits() {
    const unit1 = document.getElementById('volumeUnit1');
    const unit2 = document.getElementById('volumeUnit2');
    const temp = unit1.value;
    unit1.value = unit2.value;
    unit2.value = temp;
    convertVolume();
}

function setVolumeConversion(fromUnit, toUnit) {
    document.getElementById('volumeUnit1').value = fromUnit;
    document.getElementById('volumeUnit2').value = toUnit;
    document.getElementById('volumeValue1').value = 1;
    convertVolume();
}

// Initialize volume converter
document.addEventListener('DOMContentLoaded', function() {
    convertVolume();
});