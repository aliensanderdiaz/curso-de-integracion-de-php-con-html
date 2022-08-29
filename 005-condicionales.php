<?php
$se_hablo_de_bruno = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>

<body>
    <h1>ESTO NO SE DEBE HACER</h1>
    <?php
    if (true) {
        echo "Esta condicional es verdadera";
    }
    if (false) {
        echo "Esta condicional es falsa";
    }
    echo "<br>";
    if ($se_hablo_de_bruno) {
        echo ":( Por favor no hables de bruno";
    } else {
        echo "Que bien! No se debe hablar de bruno";
    }
    echo "<br>";
    ?>

    <h1>Esto es aceptable</h1>
    <?php if ($se_hablo_de_bruno) { ?>
        <p>:( Por favor no hables de bruno</p>
    <?php } else { ?>
        <p>Que bien! No se debe hablar de bruno</p>
    <?php } ?>

    <h1>Esta es la mejor forma</h1>

    <?php if ($se_hablo_de_bruno) : ?>
        <p>:( Por favor no hables de bruno</p>
    <?php else : ?>
        <p>Que bien! No se debe hablar de bruno</p>
    <?php endif; ?>
</body>

</html>