<?php

echo "<pre>";
print_r($_POST);
// print_r($_FILES);
echo "</pre>";

$nombre = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$edad = $_POST["edad"];

$htmlentities = htmlentities($nombre);
$addslashes = addslashes($username);
$only_letters = preg_replace("/\d/", "", $username);
$only_numbers = preg_replace("/\D/", "", $username);
$email_filter = filter_var($email, FILTER_SANITIZE_EMAIL);
$edad_filter = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?= $username ?><br>
        <?= $nombre ?><br>
        <?= $email ?><br>
        <?= $edad ?><br>
        htmlentities: <?= $htmlentities ?><br>
        addslashes: <?= $addslashes ?><br>
        only_letters: <?= $only_letters ?><br>
        only_numbers: <?= $only_numbers ?><br>
        email_filter: <?= $email_filter ?><br>
        edad_filter: <?= $edad_filter ?><br>
    </p>
</body>

</html>