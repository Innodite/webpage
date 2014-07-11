<?php
/* <!--:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::Ing. Yelitza Arreaza:::::::::::::::
::::::::::Diplomado en Programación Web::::::::::
:::::::::::::::::::::::::::::::::::::::::::::::::-->*/
if (isset($_POST['opc'])){
    
    include_once '../modelos/contacto.php';
    $objeto = new contacto();
    $out = "";
    switch ($_POST['opc']) {
        case "IN": $out = $objeto->agregarComentario($_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['comentario']); break;
      
    }
    echo $out;
}
