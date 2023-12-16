function findMinMaxSum(arr) {
    let minSum = Infinity;
    let maxSum = -Infinity;

    for (let i = 0; i <= arr.length - 4; i++) {
        let sum = arr[i] + arr[i + 1] + arr[i + 2] + arr[i + 3];
        minSum = Math.min(minSum, sum);
        maxSum = Math.max(maxSum, sum);
    }

    return { minSum, maxSum };
}

const deret = [1, 2, 4, 7, 8, 6, 9];
const { minSum, maxSum } = findMinMaxSum(deret);

console.log("Nilai minimal penjumlahan 4 komponen deret: " + minSum);
console.log("Nilai maksimal penjumlahan 4 komponen deret: " + maxSum);