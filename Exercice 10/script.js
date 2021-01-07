// Entree : un nombre (gravé sur la bombe)
// Sortie : un nombre (le code désamorçage)
function calcule_code(n) {
    var res = 0;
    for (var i = 1; i < n; i++) {
        if (i % 3 === 0 | i % 5 === 0) {
            res = res + i;
        }
    }
    console.log(res);
}
