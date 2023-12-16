const pesanan = [ 
    { menu: 'Tuna Sandwich', harga: 42000 }, 
    { menu: 'Spaghetti Carbonara', harga: 50000 }, 
    { menu: 'Tea pitcher', harga: 30000 }, 
    { menu: 'Pizza', harga: 70000 }, 
    { menu: 'Salad', harga: 30000 } 
];

// Jumlah teman yang akan membayar makanan yang mengandung ikan
const jumlahTeman = 3; 

let totalHarga = 0;

for (let i = 0; i < pesanan.length; i++) { 
    totalHarga += pesanan[i].harga; 
}

const pajak = 0.1 * totalHarga; 
const service = 0.05 * totalHarga; 
const hargaAkhir = totalHarga + pajak + service;

const hargaPerTeman = hargaAkhir / jumlahTeman;

console.log('Total harga makanan: ' + totalHarga); 
console.log('Pajak: ' + pajak); 
console.log('Service: ' + service); 
console.log('Harga akhir: ' + hargaAkhir); 
console.log('Harga per teman: ' + hargaPerTeman.toFixed(2));
