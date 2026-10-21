<?php
$majoredat = isset($_COOKIE['majoredat']) ? $_COOKIE['majoredat'] : 'no';
$idioma = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'ca';
$moneda = isset($_COOKIE['moneda']) ? $_COOKIE['moneda'] : 'eur';

$simbols = ['eur' => '€', 'usd' => '$', 'gbp' => '£'];
$preus_vi = ['eur' => 39, 'usd' => 42, 'gbp' => 33];
$preus_cervesa = ['eur' => 3, 'usd' => 3.5, 'gbp' => 2.5];

$simbol = $simbols[$moneda];
$preu_vi = $preus_vi[$moneda] . " " . $simbol;
$preu_cervesa = $preus_cervesa[$moneda] . " " . $simbol;

if ($idioma == 'ca') {
    $titol = "La nostra botiga";
    $msg_menor = "No et podem vendre alcohol si ets menor d’edat.";
    $producte_1 = "T’oferim el vi “Les Terrasses” a un preu de $preu_vi";
    $producte_2 = "T’oferim la cervesa “Artesana” a un preu de $preu_cervesa";
} elseif ($idioma == 'es') {
    $titol = "Nuestra tienda";
    $msg_menor = "No te podemos vender alcohol si eres menor de edad.";
    $producte_1 = "Te ofrecemos el vino “Les Terrasses” a un precio de $preu_vi";
    $producte_2 = "Te ofrecemos la cerveza “Artesanal” a un precio de $preu_cervesa";
} else {
    $titol = "Our store";
    $msg_menor = "We cannot sell you alcohol if you are underage.";
    $producte_1 = "We offer you the wine “Les Terrasses” at a price of $preu_vi";
    $producte_2 = "We offer you the “Craft” beer at a price of $preu_cervesa";
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titol; ?></title>
</head>
<body>

    <h1><?php echo $titol; ?></h1>

    <?php
    if ($majoredat == 'no') {
        echo "<h2 style='color: red;'>$msg_menor</h2>";
    } else {
        echo "<ul>";
        echo "<li><strong>$producte_1</strong></li>";
        echo "<li><strong>$producte_2</strong></li>";
        echo "</ul>";
    }
    ?>

    <br><br>
    <a href="bodega.php">Tornar a canviar la configuració</a>

</body>
</html>