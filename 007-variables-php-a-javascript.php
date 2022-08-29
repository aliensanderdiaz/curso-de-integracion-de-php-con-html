<?php
    $usuarios = array(
        array(
            "id" => 0,
            "username" => "Mr.Michi"
        ),
        array(
            "id" => 1,
            "username" => "Alexander"
        ),
        array(
            "id" => 2,
            "username" => "Juana"
        ),
    );

    $edad_de_pepito = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a Javascript</title>
</head>
<body>
    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        let edadDePepito = <?= $edad_de_pepito ?>;
        console.log({
            users,
            edadDePepito
        });
    </script>
</body>
</html>