// Auto-generated from uploaded Temperature.php
export const UNITS = [
  ['Celsius (°C)','c'],
  ['Fahrenheit (°F)','f'],
  ['Kelvin (K)','k'],
  ['Rankine (°R)','r'],
  ['Delisle (°De)','de'],
  ['Newton (°N)','n'],
  ['Réaumur (°Ré)','re'],
  ['Rømer (°Rø)','ro']
];
export const toK = {
  'c': x => x + 273.15,
  'f': x => (x + 459.67) * 5/9,
  'k': x => x,
  'r': x => x * 5/9,
  'de': x => 373.15 - x * 2/3,
  'n': x => (x * 100/33) + 273.15,
  're': x => (x * 5/4) + 273.15,
  'ro': x => ((x - 7.5) * 40/21) + 273.15
};
export const fromK = {
  'c': k => k - 273.15,
  'f': k => k * 9/5 - 459.67,
  'k': k => k,
  'r': k => k * 9/5,
  'de': k => (373.15 - k) * 3/2,
  'n': k => (k - 273.15) * 33/100,
  're': k => (k - 273.15) * 4/5,
  'ro': k => (k - 273.15) * 21/40 + 7.5
};
