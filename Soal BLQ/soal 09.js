function sumNumber(n) {
    let sum = [];
    for (let i = 1; i <= n; i++) {
        sum += n * i +' ';
    }
    console.log(sum);
}
console.log(sumNumber(5));