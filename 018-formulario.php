<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando el envío de un formulario</title>
</head>

<body>
    <form action="./018-server.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="email">email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="edad">edad</label>
        <input type="text" name="edad" id="edad">


        <br>
        <br>
        <button name="form" type="submit">Mandar Formulario</button>
    </form>
</body>

</html>