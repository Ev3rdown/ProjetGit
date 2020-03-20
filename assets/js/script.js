function uneAlert(elmt,produit) {
    var high = document.getElementById('high').innerText;
    var down = document.getElementById('down').innerText;
    switch (produit) {
        case 'produit1': document.getElementById('result').innerText = high;
            break;
        case 'produit2': document.getElementById('result').innerText = down;
            break;
    }
}