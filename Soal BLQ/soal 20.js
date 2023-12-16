let jarakAwal = 2; 
let jarakA = jarakAwal; 
let jarakB = jarakAwal;

let suitA = ['G', 'G', 'G']; 
let suitB = ['K', 'K', 'B'];

let i = 0; while (i < suitA.length && i < suitB.length) { 
    if (suitA[i] === suitB[i]) { 
        i++; 
        continue; 
    }

    if (suitA[i] === 'G' && suitB[i] === 'K') { 
        jarakA += 2; jarakB -= 1; 
    } else if (suitA[i] === 'K' && suitB[i] === 'G') { 
        jarakA -= 1; jarakB += 2; 
    } else if (suitA[i] === 'K' && suitB[i] === 'B') { 
        jarakA += 2; jarakB -= 1; 
    } else if (suitA[i] === 'B' && suitB[i] === 'K') { 
        jarakA -= 1; jarakB += 2; 
    } else if (suitA[i] === 'B' && suitB[i] === 'G') { 
        jarakA += 2; jarakB -= 1; 
    } else if (suitA[i] === 'G' && suitB[i] === 'B') { 
        jarakA -= 1; jarakB += 2; 
    }

    if (jarakA <= 0 && jarakB <= 0) { 
        console.log("Draw"); break; 
    } else if (jarakA <= 0 && jarakB > 0) { 
        console.log("B wins"); break; 
    } else if (jarakA > 0 && jarakB <= 0) { 
        console.log("A wins"); break; 
    }

    i++; 
}