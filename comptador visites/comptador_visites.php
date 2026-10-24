<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!isset($_COOKIE['visites'])) {
    $visites = 1;
} else {
    $visites = intval($_COOKIE['visites']) + 1;
}

setcookie("visites", $visites, time() + 31536000);

if (isset($_COOKIE['compra_feta']) && $_COOKIE['compra_feta'] == "si") {
    $compra_feta = true;
} else {
    $compra_feta = false;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Botiga - Comptador de Visites</title>
</head>
<body>

    <h1>La nostra botiga</h1>
    
    <p><strong>Visites realitzades: <?php echo $visites; ?></strong></p>

    <?php
    if (!$compra_feta) {
        if ($visites >= 10) {
            echo "<p>Oferta exclusiva solo para ti Utilita el codigo BOTIGA50 para obtener un 50% de descuento en tus primeras compras</p>";
        } elseif ($visites >= 5) {
            echo "<p>Oferta exclusiva Utiliza el codigo BOTIGA20 para obtener un 20% de descuento en tus primera compra</p>";
        }
    } else {
        echo "<p>gracias por disfrutar de las ofertas</p>";
    }
    ?>

    <hr>

    <form method="POST" action="compra.php">
        <label>Tens un codi de descompte?</label><br>
        <input type="text" name="codi_descompte" placeholder="Introdueix el codi">
        <br><br>
        <input type="submit" value="Botó de compra">
    </form>

</body>
</html>