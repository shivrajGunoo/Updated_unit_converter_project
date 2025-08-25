// Main UI + dynamic module loader
const byId = id => document.getElementById(id);
const $$ = sel => Array.from(document.querySelectorAll(sel));

const modules = {
  length:        './factors/length.js',
  temperature:   './factors/temperature.js',
  area:          './factors/area.js',
  volume:        './factors/volume.js',
  weight:        './factors/weight.js',
  time:          './factors/time.js',
};

const STORE = {}; // cache loaded modules in-session

const fnum = (x) => {
  if (!Number.isFinite(x)) return '—';
  const ax = Math.abs(x);
  if (x !== 0 && (ax >= 1e12 || ax < 1e-9)) return x.toExponential(10).replace(/(?:\.0+|0+e)/,'e');
  return Number.parseFloat(x.toPrecision(12)).toString();
};

async function loadCategory(catKey){
  if (STORE[catKey]) return STORE[catKey];
  const url = modules[catKey];
  if (!url) throw new Error('Unknown category '+catKey);
  const mod = await import(url);
  STORE[catKey] = { type: inferType(catKey, mod), mod };
  return STORE[catKey];
}

function inferType(catKey, mod){
  if (catKey === 'temperature') return 'temperature';
  if (catKey === 'time') return 'time';
  return 'linear';
}

// ---- Factor helpers ----
function factorLinear(catMod, from, to){
  const HUB = catMod.HUB;
  const CF = catMod.conversionFactors;
  if (from === to) return 1;
  const d = CF[`${from}-to-${to}`];
  if (d != null) return d;
  const inv = CF[`${to}-to-${from}`];
  if (inv != null && inv !== 0) return 1/inv;
  const a = CF[`${from}-to-${HUB}`] ?? (1/(CF[`${HUB}-to-${from}`]||NaN));
  const b = CF[`${HUB}-to-${to}`]   ?? (1/(CF[`${to}-to-${HUB}`]||NaN));
  if (Number.isFinite(a) && Number.isFinite(b)) return a*b;
  return null;
}

function factorTime(catMod, fromSlug, toSlug){
  const hub = 'second';
  const CF = catMod.conversionFactors;
  const TM = catMod.TOKEN_MAP || new Map();
  const token = s => TM.get(s) || s;
  const A = token(fromSlug), B = token(toSlug);
  if (A === B) return 1;
  const d = CF[`${A}-to-${B}`];
  if (d != null) return d;
  const inv = CF[`${B}-to-${A}`];
  if (inv != null && inv !== 0) return 1/inv;
  // hub chain
  const a = CF[`${A}-to-${hub}`] ?? (1/(CF[`${hub}-to-${A}`]||NaN));
  const b = CF[`${hub}-to-${B}`] ?? (1/(CF[`${B}-to-${hub}`]||NaN));
  if (Number.isFinite(a) && Number.isFinite(b)) return a*b;
  return null;
}

function convertTemperature(catMod, x, fromCode, toCode){
  const toK = catMod.toK?.[fromCode];
  const fromK = catMod.fromK?.[toCode];
  if (!toK || !fromK) return null;
  return fromK(toK(x));
}

// ---- UI ----
let current = 'length';
const fromValue = byId('fromValue');
const toValue   = byId('toValue');
const fromUnit  = byId('fromUnit');
const toUnit    = byId('toUnit');
const fromFilter= byId('fromFilter');
const toFilter  = byId('toFilter');
const resultsBody = document.querySelector('#resultsTable tbody');

function filterSelect(input, select){
  const q = (input.value || '').toLowerCase();
  for (const o of select.options){
    o.hidden = q && o.text.toLowerCase().indexOf(q) === -1;
  }
}

async function setCategory(catKey){
  current = catKey;
  const { type, mod } = await loadCategory(catKey);
  // populate units
  fromUnit.innerHTML = ''; toUnit.innerHTML='';
  (mod.UNITS || []).forEach(([label, slug]) => {
    fromUnit.add(new Option(label, slug));
    toUnit.add(new Option(label, slug));
  });
  if (toUnit.options.length > 1) toUnit.selectedIndex = 1;
  computeForward();
}

function factorFor(modInfo, from, to){
  const { type, mod } = modInfo;
  if (type === 'linear') return factorLinear(mod, from, to);
  if (type === 'time')   return factorTime(mod, from, to);
  return null;
}

async function convertValue(x, from, to){
  const info = await loadCategory(current);
  if (info.type === 'temperature') return convertTemperature(info.mod, x, from, to);
  const f = factorFor(info, from, to);
  return f==null ? null : x * f;
}

async function computeForward(){
  const val  = parseFloat(fromValue.value);
  const from = fromUnit.value;
  const to   = toUnit.value;
  if (!Number.isFinite(val) || !from || !to){ toValue.value = ''; resultsBody.innerHTML=''; return; }
  const y = await convertValue(val, from, to);
  toValue.value = y==null ? '—' : fnum(y);

  const info = await loadCategory(current);
  const rows = [];
  for (const [label, slug] of (info.mod.UNITS || [])){
    const yy = await convertValue(val, from, slug);
    rows.push(`<tr><td>${label}</td><td>${yy==null?'—':fnum(yy)}</td></tr>`);
  }
  resultsBody.innerHTML = rows.join('');
}

async function computeBackward(){
  const val  = parseFloat(toValue.value);
  const from = toUnit.value;
  const to   = fromUnit.value;
  if (!Number.isFinite(val) || !from || !to){ return; }
  const y = await convertValue(val, from, to);
  fromValue.value = y==null ? '' : fnum(y);
  computeForward();
}

// Events
document.querySelectorAll('.tab-btn').forEach(btn=>{
  btn.addEventListener('click', ()=>{
    document.querySelectorAll('.tab-btn').forEach(b=>b.setAttribute('aria-selected','false'));
    btn.setAttribute('aria-selected','true');
    setCategory(btn.dataset.cat);
  });
});
byId('swapBtn')?.addEventListener('click', ()=>{
  const fv = fromUnit.value, tv = toUnit.value;
  fromUnit.value = tv; toUnit.value = fv;
  const iv = fromValue.value, ov = toValue.value;
  fromValue.value = ov; toValue.value = iv;
  computeForward();
});
fromUnit.addEventListener('change', computeForward);
toUnit.addEventListener('change', computeForward);
fromValue.addEventListener('input', computeForward);
toValue.addEventListener('input', computeBackward);
fromFilter.addEventListener('input', ()=>filterSelect(fromFilter, fromUnit));
toFilter.addEventListener('input', ()=>filterSelect(toFilter, toUnit));

// Init
setCategory('length');
