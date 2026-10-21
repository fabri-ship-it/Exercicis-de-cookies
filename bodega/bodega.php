<?php
// Comprobamos si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guardamos los datos en cookies (duración: 1 hora)
    setcookie("mayoredad", $_POST["mayoredad"], time() + 3600, "/");
    setcookie("idioma", $_POST["idioma"], time() + 3600, "/");
    setcookie("moneda", $_POST["moneda"], time() + 3600, "/");
    
    // Redirigimos a la página que mostrará la información
    header("Location: informacion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bodega - Configuración</title>
</head>
<body>

    <h1>Bienvenido a la Bodega</h1>

    <form method="POST" action="">
        <p><strong>¿Eres mayor de edad?</strong></p>
        <input type="radio" name="mayoredad" value="si" required> Sí
        <input type="radio" name="mayoredad" value="no"> No
        
        <p><strong>Idioma:</strong></p>
        <select name="idioma" required>
            <option value="ca">Català</option>
            <option value="es">Español</option>
            <option value="en">English</option>
        </select>

        <p><strong>Moneda:</strong></p>
        <select name="moneda" required>
            <option value="eur">Euros (€)</option>
            <option value="usd">Dólares ($)</option>
            <option value="gbp">Libras (£)</option>
        </select>
        
        <br><br>
        <input type="submit" value="Entrar a la tienda">
    </form>

</body>
</html>