<?php
    $nombre = "Mr. Michi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime Texto y etiquetas con PHP</title>
</head>
<body>
    <?php echo "<b>Hola, mamá estoy aprendiendo php en HTML</b>"; ?>
    <?= "<i>Esta es otra forma de imprimir texo y etiquetas con HTML</i>" ?>
    <h1>Hola <?= $nombre ?></h1>
</body>
</html>