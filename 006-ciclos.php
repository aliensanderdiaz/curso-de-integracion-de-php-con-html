<?php 
    $usuarios = array("Mr. Michi", "Alexander", "Juana");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>

<body>
    <ul>
        <?php for ($x = 0; $x < 10; $x++) : ?>
            <li><?= $x ?></li>
        <?php endfor; ?>

        <?php while (false) : ?>
            <li>cualquier cosa</li>
        <?php endwhile; ?>
    </ul>

    <h1>Lista de Usuarios</h1>
    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li><?= $usuario ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>