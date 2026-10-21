<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    setcookie("compra_feta", "si", time() + 31536000, "/");
    
    $codi = $_POST['codi_descompte'];
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Processant Compra</title>
</head>
<body>

    <h1>Compra realitzada amb èxit!</h1>

    <?php
    if (!empty($codi)) {
        echo "<p>S'ha aplicat el codi de descompte: <strong>" . htmlspecialchars($codi) . "</strong></p>";
    } else {
        echo "<p>Has realitzat la compra sense cap codi de descompte.</p>";
    }
    ?>

    <a href="comptador_visites.php">Tornar a la botiga</a>

</body>
</html>