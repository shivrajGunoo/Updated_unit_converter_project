function convertTemperature() {
    const value1 = parseFloat(document.getElementById('tempValue1').value);
    const unit1 = document.getElementById('tempUnit1').value;
    const unit2 = document.getElementById('tempUnit2').value;
    
    if (isNaN(value1)) {
        document.getElementById('tempValue2').value = '';
        return;
    }
    
    let tempInC;
    
    // Convert to Celsius first
    switch(unit1) {
        case 'c':
            tempInC = value1;
            break;
        case 'f':
            tempInC = (value1 - 32) * 5/9;
            break;
        case 'k':
            tempInC = value1 - 273.15;
            break;
    }
    
    // Convert from Celsius to target unit
    let result;
    switch(unit2) {
        case 'c':
            result = tempInC;
            break;
        case 'f':
            result = (tempInC * 9/5) + 32;
            break;
        case 'k':
            result = tempInC + 273.15;
            break;
    }
    
    document.getElementById('tempValue2').value = result.toFixed(2);
}

function swapTempUnits() {
    const unit1 = document.getElementById('tempUnit1');
    const unit2 = document.getElementById('tempUnit2');
    const temp = unit1.value;
    unit1.value = unit2.value;
    unit2.value = temp;
    convertTemperature();
}

function setTempConversion(fromUnit, toUnit) {
    document.getElementById('tempUnit1').value = fromUnit;
    document.getElementById('tempUnit2').value = toUnit;
    document.getElementById('tempValue1').value = 0;
    convertTemperature();
}

// Initialize temperature converter
document.addEventListener('DOMContentLoaded', function() {
    convertTemperature();
});