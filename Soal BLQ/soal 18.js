const jamMakan = [9, 13, 15, 17]; 
const kaloriKue = [30, 20, 50, 80];

let totalKalori = 0; 
for (let i = 0; i < jamMakan.length; i++) { 
    totalKalori += kaloriKue[i]; 
}

const n = totalKalori; 
const j = 18 - jamMakan[jamMakan.length - 1]; 
const waktuOlahraga = 0.1 * n * j; 
const waktuAir = Math.floor(waktuOlahraga / 30);

const airSetiap30Menit = waktuAir * 100; 
const airAkhirOlahraga = 500;

const totalAir = airSetiap30Menit + airAkhirOlahraga;

console.log(`Donna akan meminum ${totalAir} cc air sepanjang berolahraga.`);