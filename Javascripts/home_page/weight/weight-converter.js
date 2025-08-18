// Weight conversion rates (to grams as base unit)
const weightConversionRates = {
    mg: 0.001,
    g: 1,
    kg: 1000,
    oz: 28.3495,
    lb: 453.592,
    stone: 6350.29,
    ton: 907185
};

function convertWeight() {
    const value1 = parseFloat(document.getElementById('weightValue1').value);
    const unit1 = document.getElementById('weightUnit1').value;
    const unit2 = document.getElementById('weightUnit2').value;
    
    if (isNaN(value1)) {
        document.getElementById('weightValue2').value = '';
        return;
    }
    
    const valueInGrams = value1 * weightConversionRates[unit1];
    const convertedValue = valueInGrams / weightConversionRates[unit2];
    
    document.getElementById('weightValue2').value = convertedValue.toFixed(6);
}

function swapWeightUnits() {
    const unit1 = document.getElementById('weightUnit1');
    const unit2 = document.getElementById('weightUnit2');
    const temp = unit1.value;
    unit1.value = unit2.value;
    unit2.value = temp;
    convertWeight();
}

function setWeightConversion(fromUnit, toUnit) {
    document.getElementById('weightUnit1').value = fromUnit;
    document.getElementById('weightUnit2').value = toUnit;
    document.getElementById('weightValue1').value = 1;
    convertWeight();
}

// Initialize weight converter
document.addEventListener('DOMContentLoaded', function() {
    convertWeight();
});