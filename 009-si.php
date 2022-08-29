<?php

$tabla_del_9 = [];

for ($i=1; $i <= 10; $i++) { 
    $resultado = $i * 9;
    $texto = "9 x $i = $resultado";
    array_push($tabla_del_9, $texto);
}

// // Depurar
// echo "<pre>";
// var_dump($tabla_del_9);
// echo "</pre>";

// die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cómo mejorarlo?</title>
</head>
<body>
    <h1>Tabla del 9</h1>

    <h2>Mejor forma con la lógica al inicio</h2>

    <ul>
        <?php foreach ($tabla_del_9 as $texto): ?>
            <li><?= $texto ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Esta es una mejor forma, pero aún hay reparos</h2>

    <ul>
        <?php for($x=1; $x <= 10; $x++): ?>
            <li>9 x <?= $x ?> = <?= 9 * $x ?></li>
        <?php endfor; ?>
    </ul>

    <h2>De esta manera no... NUNCA mezclar PHP y HTML en las mismas lineas</h2>

    <ul>

        <?php
            for ($i=0; $i < 10; $i++) { 
                echo "<li>" . "9 x ". ($i + 1) . " = " . ( 9 * ($i + 1)) . "</li>";
            }
        ?>

    </ul>
</body>
</html>