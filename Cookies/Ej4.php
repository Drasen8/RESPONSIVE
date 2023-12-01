<?php
// Definir variables para mostrar los valores anteriores
$valor_anterior = '';
$conversion_anterior = '';

// Comprobamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cantidad']) && isset($_POST['conversion'])) {
    // Obtener los valores del formulario
    $cantidad = $_POST['cantidad'];
    $conversion = $_POST['conversion'];

    // Calculamos la conversión
    if ($conversion === 'eurosAPesetas') {
        $pesetas = round($cantidad * 166.386);
        echo "<p><strong>" . strtoupper("$cantidad € son $pesetas pesetas.") . "</strong></p>";

        // Guardar en la cookie los valores actuales
        setcookie('conversor', "Cantidad: $cantidad €, Conversión: $cantidad € son $pesetas pesetas.", time() + 3600);
    } elseif ($conversion === 'pesetasAEuros') {
        $euros = round($cantidad / 166.386, 2);
        echo "<p><strong>" . strtoupper("$cantidad pesetas son $euros €.") . "</strong></p>";

        // Guardar en la cookie los valores actuales
        setcookie('conversor', "Cantidad: $cantidad pesetas, Conversión: $cantidad pesetas son $euros €.", time() + 3600);
    }

    // Mostrar los valores almacenados en la cookie
    if (isset($_COOKIE['conversor'])) {
        echo "<h2>Valores almacenados previamente en la cookie:</h2>";
        echo "<p>{$_COOKIE['conversor']}</p>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Agustín Muñoz - Calculadora de Conversión de Monedas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<style>
    body {
        align-items: center;
        display: flex;
        flex-direction: column;
    }
</style>

<body>
    <h1>Agustín Muñoz - Calculadora de Conversión de Monedas</h1>

    <form action="" method="POST">
        <fieldset>
            <legend><b>Conversión</b></legend>
            <label for="cantidad">Introduce una cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>
            <br>
            <br>

            <label for="conversion">Conversión:</label>
            <select id="conversion" name="conversion" required>
                <option value="eurosAPesetas">Euros a Pesetas</option>
                <option value="pesetasAEuros">Pesetas a Euros</option>
            </select>
            <br>
            <br>
        </fieldset>
        <br>
        <br>
        <input type="submit" name="calcular" value="Calcular">
        <input type="reset" name="lmipiar" value=" Limpiar " />
        <br>
        <br>
    </form>
</body>

</html>
