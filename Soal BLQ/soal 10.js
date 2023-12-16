function transformName(name) {
    const words = name.split(" ");
    const transformedWords = words.map(word => {
        const firstLetter = word.charAt(0);
        const lastLetter = word.charAt(word.length - 1);
        return firstLetter + "***" + lastLetter;
    });
    return transformedWords.join(" ");
}

console.log(transformName('Susilo Bambang Yudhoyono'))
console.log(transformName('Rani Tiara'))