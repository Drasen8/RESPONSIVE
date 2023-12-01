<?php
/*Crea un formulario en el que se le pida al usuario los siguientes datos: nombre y preferencia de
idioma, color y ciudad. Crea una Cookie que almacene estos datos y que, al recargar la página
por realizar una nueva selección de datos (y posiblemente usuario) muestre los datos
introducidos en el formulario junto con los datos obtenidos de la Cookie.*/ 
    // Comprobamos si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['idioma'])&& isset($_POST['color'])&& isset($_POST['ciudad'])) {
        // Obtener los valores del formulario
        $nombre = $_POST['nombre'];
        $idioma = $_POST['idioma'];
        $color = $_POST['color'];
        $ciudad = $_POST['ciudad'];
        $todo="Nombre:".$nombre." Idioma:".$idioma." Color:".$color." Ciudad:".$ciudad;
        // Almacenar los valores en una cookie por 1 hora (3600 segundos)
        setcookie('todo', $todo, time() + 3600);

        if (isset($_COOKIE['todo'])) {
            echo "<h2>Valores almacenados previamente en la cookie:</h2>";
            echo "<p>El valor de la acción almacenado en la cookie es: {$_COOKIE['todo']}</p>";
        }
    }

echo "<b>Nombre:</b>". strtoupper($nombre)."<br>";
echo "<b>Idioma:</b>".strtoupper($idioma)."<br>";
echo "<b>Color:</b>".strtoupper($color)."<br>";
echo "<b>Ciudad:</b>".strtoupper($ciudad)."<br>";
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Saludo o Despedida - Formulario con Cookies</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <h1>Saludo o Despedida - Formulario con Cookies</h1>

    <form action="" method="POST">
        <fieldset>
            <legend><b>Ingrese su información</b></legend>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" >
            <br><br>
            <label for="idioma">Idioma:</label><br>
            <input type="text" id="idioma" name="idioma" >
            <br><br>
            <label for="color">Color:</label><br>
            <input type="color" id="color" name="color" >
            <br><br>
            <label for="ciudad">Ciudad:</label><br>
            <input type="text" id="ciudad" name="ciudad" >
            <br><br>
            
        </fieldset>
        <br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="limpiar" value="Limpiar">
    <br>
        <br>
    </form>
</body>

</html>