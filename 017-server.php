<?php

echo "<pre>";
print_r($_POST);
// print_r($_FILES);
echo "</pre>";

if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    echo "¡Hola " . $_POST["nombre"] . "!";
} else {
    echo "No mandaste nada";
}

if (isset($_POST["form"])) {
    echo "Todo el formulario fue mandado";
} else {
    echo "No se mando ningun formulario";
}
