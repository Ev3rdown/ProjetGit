<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="assets/css/shopCSS.css">
</head>
<body>
    <?php include('includes/header.php') ?>
    <h1>Produit</h1>
    <button onclick="uneAlert()">
        <div>
            <img src="assets/img/highkick.jpg" id="picKick">
            <p>Un high kick</p>
            <p>25 euros</p>
        </div>
    </button>
        <br>
    <button>
        <aside>
            <img src="assets/img/1000ans.jpg">
            <p>Un ********</p>
            <p>50 euros</p>
        </aside>
    </button>
    <p id="result"></p>
    <script src="assets/js/script.js"></script>
    <?php include('includes/footer.php') ?>
</body>
</html>