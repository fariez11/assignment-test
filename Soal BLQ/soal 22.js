function fibonacci(n) {
    if (n <= 1) {
        return n;
    } else {
        return fibonacci(n - 1) + fibonacci(n - 2);
    }
}

function temukanLilinMelelehPertama(candleLengths) {
let fibonacciIndex = 0;
let time = 0;

while (true) {
    const currentFibonacci = fibonacci(fibonacciIndex);

    for (let i = 0; i < candleLengths.length; i++) {
        candleLengths[i] -= currentFibonacci;
        if (candleLengths[i] <= 0) {
            return `Lilin ${i + 1} adalah yang paling pertama habis meleleh.`;
        }
        }

        fibonacciIndex++;
        time++;
    }
}

const candleLengths = [3, 3, 9, 6, 7, 8, 23];
console.log(temukanLilinMelelehPertama(candleLengths));