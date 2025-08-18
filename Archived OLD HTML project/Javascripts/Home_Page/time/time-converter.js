// Time conversion rates (to seconds as base unit)
const timeConversionRates = {
    ms: 0.001,
    sec: 1,
    min: 60,
    hr: 3600,
    day: 86400,
    week: 604800,
    month: 2629746, // average month length
    year: 31556952  // average year length
};

function convertTime() {
    const value1 = parseFloat(document.getElementById('timeValue1').value);
    const unit1 = document.getElementById('timeUnit1').value;
    const unit2 = document.getElementById('timeUnit2').value;
    
    if (isNaN(value1)) {
        document.getElementById('timeValue2').value = '';
        return;
    }
    
    const valueInSeconds = value1 * timeConversionRates[unit1];
    const convertedValue = valueInSeconds / timeConversionRates[unit2];
    
    document.getElementById('timeValue2').value = convertedValue.toFixed(6);
}

function swapTimeUnits() {
    const unit1 = document.getElementById('timeUnit1');
    const unit2 = document.getElementById('timeUnit2');
    const temp = unit1.value;
    unit1.value = unit2.value;
    unit2.value = temp;
    convertTime();
}

function setTimeConversion(fromUnit, toUnit) {
    document.getElementById('timeUnit1').value = fromUnit;
    document.getElementById('timeUnit2').value = toUnit;
    document.getElementById('timeValue1').value = 1;
    convertTime();
}

// Initialize time converter
document.addEventListener('DOMContentLoaded', function() {
    convertTime();
});