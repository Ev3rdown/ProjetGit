function uneAlert(elmt,produit) {
    switch (produit) {
        case 'produit1': document.getElementById('result').innerText = oui;
        break;
        case 'produit2': document.getElementById('result').innerText = non;
        break;
    }
}