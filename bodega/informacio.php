<?php
$mayoredad = isset($_COOKIE['mayoredad']) ? $_COOKIE['mayoredad'] : 'no';
$idioma = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'es';
$moneda = isset($_COOKIE['moneda']) ? $_COOKIE['moneda'] : 'eur';

$simbolos = ['eur' => '€', 'usd' => '$', 'gbp' => '£'];
$precios_vino = ['eur' => 39, 'usd' => 42, 'gbp' => 33];
$precios_cerveza = ['eur' => 3, 'usd' => 3.5, 'gbp' => 2.5];

$simbolo = $simbolos[$moneda];
$precio_vino = $precios_vino[$moneda] . " " . $simbolo;
$precio_cerveza = $precios_cerveza[$moneda] . " " . $simbolo;

if ($idioma == 'ca') {
    $titulo = "La nostra botiga";
    $msg_menor = "No et podem vendre alcohol si ets menor d’edat.";
    $producto_1 = "T’oferim el vi “Les Terrasses” a un preu de $precio_vino";
    $producto_2 = "T’oferim la cervesa “Artesana” a un preu de $precio_cerveza";
} elseif ($idioma == 'es') {
    $titulo = "Nuestra tienda";
    $msg_menor = "No te podemos vender alcohol si eres menor de edad.";
    $producto_1 = "Te ofrecemos el vino “Les Terrasses” a un precio de $precio_vino";
    $producto_2 = "Te ofrecemos la cerveza “Artesanal” a un precio de $precio_cerveza";
} else {
    $titulo = "Our store";
    $msg_menor = "We cannot sell you alcohol if you are underage.";
    $producto_1 = "We offer you the wine “Les Terrasses” at a price of $precio_vino";
    $producto_2 = "We offer you the “Craft” beer at a price of $precio_cerveza";
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>
<body>

    <h1><?php echo $titulo; ?></h1>

    <?php
    if ($mayoredad == 'no') {
        echo "<h2 style='color: red;'>$msg_menor</h2>";
    } else {
        echo "<ul>";
        echo "<li><strong>$producto_1</strong></li>";
        echo "<li><strong>$producto_2</strong></li>";
        echo "</ul>";
    }
    ?>

    <br><br>
    <a href="bodega.php">Volver a cambiar la configuración</a>

</body>
</html>