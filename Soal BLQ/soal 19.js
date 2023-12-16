function isPangram(str) {
    str = str.toLowerCase();

    let count = {};

    for (let i = 0; i < str.length; i++) {
        // Mengabaikan karakter yang bukan huruf
        if (str[i].match(/[a-z]/)) {
        // Menambahkan atau meningkatkan jumlah kemunculan huruf dalam objek
        count[str[i]] = (count[str[i]] || 0) + 1;
        }
    }
    
    return Object.keys(count).length === 26;
}

// Contoh penggunaan:
console.log(isPangram("The quick brown fox jumps over the lazy dog"));