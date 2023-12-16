const barang = [
    { nama: "Kaca Mata", harga: [500, 600, 700, 800] },
    { nama: "Baju", harga: [200, 400, 350] },
    { nama: "Sepatu", harga: [400, 350, 200, 300] },
    { nama: "Buku", harga: [100, 50, 150] }
  ];
  
  function hitungJumlahMaksimal(uang) {
    let jumlahMaksimal = 0;
    let itemTerbanyak = [];
  
    for (let i = 0; i < barang.length; i++) {
      let sisaUang = uang;
      let jumlahItem = 0;
      let itemBeli = [];
  
      for (let j = 0; j < barang[i].harga.length; j++) {
        if (sisaUang >= barang[i].harga[j]) {
          sisaUang -= barang[i].harga[j];
          jumlahItem++;
          itemBeli.push(barang[i].nama);
        }
      }
  
      if (jumlahItem > itemTerbanyak.length) {
        jumlahMaksimal = uang - sisaUang;
        itemTerbanyak = itemBeli;
      }
    }
  
    return { jumlahUang: jumlahMaksimal, jumlahItem: itemTerbanyak.length, itemBeli: itemTerbanyak };
  }
  
  const uangAndi = 1000;
  const hasil = hitungJumlahMaksimal(uangAndi);
  console.log("Jumlah uang yang dipakai: " + hasil.jumlahUang);
  console.log("Jumlah item yang bisa dibeli: " + hasil.jumlahItem);
  console.log("Item yang dibeli: " + hasil.itemBeli.join(", "));