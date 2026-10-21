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
            echo "<p style='color: red; font-weight: bold;'>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>";
        } elseif ($visites >= 5) {
            echo "<p style='color: green; font-weight: bold;'>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>";
        }
    } else {
        echo "<p style='color: grey;'>Gràcies per ser client nostre. Ja has gaudit de les ofertes de benvinguda!</p>";
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