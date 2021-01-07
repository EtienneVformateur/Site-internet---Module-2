function bissextile(annee) {
    //si l'année est divisible par 4 et non divisible par 100
    //ou si l'année est divisible par 400.
    if ((annee % 4 === 0 //(année est divisible par 4 
        & annee % 100 !== 0) // et année non divisible par 100)
        | (annee % 400 === 0) // ou (année est divisible par 400).
    ) {
        return true;
    }
    else { return false; }
}
console.log(bissextile(2100))
function bissextile_bis(annee) {
    if (annee % 4 === 0) {
        if (annee % 100 !== 0) {
            return true;
        }
    }
    else {
        if (annee % 400 === 0) {
            return true;
        }
        else {
            return false;
        }
    }
}
console.log(bissextile_bis(2016));