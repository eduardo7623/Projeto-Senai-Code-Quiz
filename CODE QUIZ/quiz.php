<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <textarea name="codigo" rows="15" cols="60"></textarea>

    <br>

    <button type="submit">Executar</button>
</form>

<?php

$resultadoesperado = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $codigo = $_POST["codigo"];

    echo "<h2>Resultado:</h2>";

    echo $codigo;
    if ($codigo == $resultadoesperado) {
        echo "<h3>Parabens!!!</h3>";        
    }
}

?>

</body>
</html>