function hitungGunungDanLembah(perjalanan) {
    let jumlahGunung = 0;
    let jumlahLembah = 0;
    let ketinggian = 0;
    
    for (let i = 0; i < perjalanan.length; i++) {
        if (perjalanan[i] === 'N') {
            ketinggian++;
        } else if (perjalanan[i] === 'T') {
            ketinggian--;
        }
        
        // jika sedang menanjak dan ketinggian menjadi 0, maka telah menyelesaikan satu gunung
        if (ketinggian === 0 && perjalanan[i] === 'T') {
            jumlahGunung++;
        }
    
        // jika sedang menurun dan ketinggian menjadi 0, maka telah menyelesaikan satu lembah
        if (ketinggian === 0 && perjalanan[i] === 'N') {
            jumlahLembah++;
        }
    }
    
    return { jumlahGunung, jumlahLembah };
}

const perjalananHattori = 'N N T N N N T T T T T N T T T N T N';
const hasil = hitungGunungDanLembah(perjalananHattori);
console.log(`Jumlah gunung: ${hasil.jumlahGunung}`);
console.log(`Jumlah lembah: ${hasil.jumlahLembah}`);