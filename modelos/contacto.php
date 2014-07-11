<?php
/* <!--:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::Ing. Yelitza Arreaza:::::::::::::::
::::::::::Diplomado en Programación Web::::::::::
:::::::::::::::::::::::::::::::::::::::::::::::::-->*/

include_once '../modelos/conexion.php';

class contacto extends clsConexion{
    //put your code here
    public function __construct() {
        parent::__construct();
    }   
       
    public function agregarComentario($nombre,$telefono,$correo,$comentario) {
        $out = $this->filtro("insert into usuario (nombre,telefono,correo,comentario)
                                            values ('$nombre','$telefono','$correo','$comentario')") ? 
                "<b style='color:green'>Mensaje Enviado Satisfactoriamente</b>" : 
                "<b style='color:red'>Mensaje no Enviado</b>";
        $this->cerrarConexion();
        return json_encode(array("response"=>$out), JSON_FORCE_OBJECT);
    }
    
}
