<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <?php include('includes/header.php') ?>
    <h1>Produit</h1>
    <button onclick="uneAlert(this,'produit1');">
        <div>
            <img src="assets/img/highkick.jpg" id="picKick">
            <p>Un high kick</p>
            <p>25 euros</p>
        </div>
    </button>
        <br>
    <button onclick="uneAlert(this,'produit2');">
        <aside>
            <img src="assets/img/1000ans.jpg" id="downKick">
            <p>Un ********</p>
            <p>50 euros</p>
        </aside>
    </button>
    <p id="result"></p>
    <script src="assets/js/script.js"></script>
    <?php include('includes/footer.php') ?>
    <script src="assets/js/script.js"></script>
</body>
</html>