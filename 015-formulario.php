<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por POST</title>
</head>
<body>
    <form action="./015-server.php" method="post" enctype="multipart/form-data">
        <!-- input simple -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <br>
        <!-- arreglos -->
        <label for="personas">Personas - Arreglo</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <br>
        <br>
        <!-- arreglos asociativos -->
        <label>Persona - Arreglos asociativos</label>
        <input type="text" name="persona[nombre]">
        <input type="email" name="persona[email]">
        <input type="number" name="persona[edad]">
        <br>
        <br>
        <label>Checkbox</label>
        <input type="checkbox" name="checkbox1">
        <input type="checkbox" name="checkbox2" value="Este check fue clickado">
        <input type="checkbox" name="checkbox3">
        <br>
        <br>
        <button type="submit">Mandar Formulario</button>
    </form>
    <p>NOTA: Los checkbox no clickados nunca llegan al servidor.</p>
</body>
</html>