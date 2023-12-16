function calculateParkingFee(checkIn, checkOut) {
    const duration = checkOut.getTime() - checkIn.getTime();
    const hours = Math.ceil(duration / (1000 * 60 * 60)); // jumlah jam bulat ke atas
    
    let totalFee = 0;
    
    if (hours <= 8) {
        totalFee = hours * 1000;
    } else if (hours <= 24) {
        totalFee = 8000;
    } else {
        totalFee = 15000 + (hours - 24) * 1000;
    }
    
    return totalFee;
}

const checkIn1 = new Date('27 January 2019 05:00:01');
const checkOut1 = new Date('27 January 2019 17:45:03');
const fee1 = calculateParkingFee(checkIn1, checkOut1);
console.log('Tarif:', fee1);