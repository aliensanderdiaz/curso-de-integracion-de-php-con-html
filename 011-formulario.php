<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por GET</title>
</head>
<body>
    <form action="./011-server.php" method="get">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <!-- <br> -->
        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad">
        <!-- <br> -->
        <button type="submit">Mandar Formulario</button>
    </form>
</body>
</html>