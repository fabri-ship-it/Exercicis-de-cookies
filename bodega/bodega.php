<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("majoredat", $_POST["majoredat"], time() + 3600, "/");
    setcookie("idioma", $_POST["idioma"], time() + 3600, "/");
    setcookie("moneda", $_POST["moneda"], time() + 3600, "/");
    
    header("Location: informacio.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega - Configuració</title>
</head>
<body>

    <h1>Benvingut a la Bodega</h1>

    <form method="POST" action="">
        <p><strong>Ets major d'edat?</strong></p>
        <input type="radio" name="majoredat" value="si" required> Sí
        <input type="radio" name="majoredat" value="no"> No
        
        <p><strong>Idioma:</strong></p>
        <select name="idioma" required>
            <option value="ca">Català</option>
            <option value="es">Español</option>
            <option value="en">English</option>
        </select>

        <p><strong>Moneda:</strong></p>
        <select name="moneda" required>
            <option value="eur">Euros (€)</option>
            <option value="usd">Dòlars ($)</option>
            <option value="gbp">Lliures (£)</option>
        </select>
        
        <br><br>
        <input type="submit" value="Entrar a la botiga">
    </form>

</body>
</html>