<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por POST</title>
</head>

<body>
    <form action="./016-server.php" method="post" enctype="multipart/form-data">
        <!-- radio -->
        <label>Input Radio</label>
        <br>
        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia" id="colombia">

        <label for="ecuador">Ecuador</label>
        <input type="radio" name="pais" value="Ecuador" id="ecuador">

        <label for="peru">Peru</label>
        <input type="radio" name="pais" value="Peru" id="peru">
        <br>
        <br>
        <label>Multiples Archivos</label>
        <label for="images">images</label>
        <input type="file" multiple name="galeria[]" id="images">

        <br>
        <br>
        <button type="submit">Mandar Formulario</button>
    </form>
</body>

</html>