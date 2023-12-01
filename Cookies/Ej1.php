<?php
    // Comprobamos si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion'])) {
        // Obtener los valores del formulario
        $accion = $_POST['accion'];

        // Almacenar los valores en una cookie por 1 hora (3600 segundos)
        setcookie('accion', $accion, time() + 3600);

        if (isset($_COOKIE['accion'])) {
            echo "<h2>Valores almacenados previamente en la cookie:</h2>";
            echo "<p>El valor de la acción almacenado en la cookie es: {$_COOKIE['accion']}</p>";
        }
    }
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
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
            <label for="accion">Seleccione una opción:</label><br>
            <select id="accion" name="accion" required>
                <option value="saludo">Saludo</option>
                <option value="despedida">Despedida</option>
            </select>
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
