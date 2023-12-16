function isPalindrom(word) {
    var reversedWord = "";
    for (var i = word.length - 1; i >= 0; i--) {
    reversedWord += word[i];
    }
    
    if (word === reversedWord) {
    return true;
    } else {
    return false;
    }
}
console.log(isPalindrom("malam"));