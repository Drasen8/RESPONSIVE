<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacion'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operaciones = $_POST['operacion'];

    $resultado = '';

    // Realiza las operaciones seleccionadas
    foreach ($operaciones as $operacion) {
        switch ($operacion) {
            case 'Sumar':
                $resultado .= "El resultado de sumar $num1 y $num2 es " . ($num1 + $num2) . ".<br>";
                break;
            case 'Restar':
                $resultado .= "El resultado de restar $num1 y $num2 es " . ($num1 - $num2) . ".<br>";
                break;
            case 'Multiplicar':
                $resultado .= "El resultado de multiplicar $num1 y $num2 es " . ($num1 * $num2) . ".<br>";
                break;
            case 'Dividir':
                $resultado .= "El resultado de dividir $num1 y $num2 es " . ($num1 / $num2) . ".<br>";
                break;
        }
    }

    // Guarda en la cookie las operaciones realizadas
    setcookie('operaciones_anteriores', $resultado, time() + 3600);

    // Muestra el resultado actual y el anterior almacenado en la cookie
    echo "<h2>Resultado Actual:</h2>";
    echo $resultado ? $resultado : "No se han realizado operaciones.";

    if (isset($_COOKIE['operaciones_anteriores'])) {
        echo "<h2>Operaciones Anteriores Almacenadas en la Cookie:</h2>";
        echo $_COOKIE['operaciones_anteriores'];
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Marc Sendra - Formulario Calculadora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <h1>Marc Sendra Andres - Formulario Calculadora</h1>

    <form action="" method="POST">
        <fieldset>
            <legend><b>Calculadora</b></legend>

            <br>
            <label for="num1">Primer Número:</label>
            <input type="text" maxlength="50" id="num1" name="num1" placeholder="Escriba el primer número" required />

            <br>
            <br>

            <label for="num2">Segundo número:</label>
            <input type="text" maxlength="50" id="num2" name="num2" placeholder="Escriba el segundo número" required />

            <br>
            <br>

            <label for="operacion">Selecciona una o más operaciones:</label>
            <select multiple size="4" name="operacion[]">
                <option value="Sumar">Sumar</option>
                <option value="Restar">Restar</option>
                <option value="Multiplicar">Multiplicar</option>
                <option value="Dividir">Dividir</option>
            </select>

        </fieldset>

        <br>
        <input type="submit" name="calcular" value=" Calcular " />
        <input type="reset" name="limpiar" value=" Limpiar " />

        <br>
        <br>

    </form>

</body>

</html>
