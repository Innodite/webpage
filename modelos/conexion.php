<?php
/* <!--:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::Ing. Yelitza Arreaza:::::::::::::::
::::::::::Diplomado en Programación Web::::::::::
:::::::::::::::::::::::::::::::::::::::::::::::::-->*/

class clsConexion{
  private $dirbase;
  private $rows;
  private $conexion;
  public $error;

  public function __construct() {
      include ("configuracion-bd.php");
      $this->dirbase  = $dirbase;
      $this->conexion = pg_connect("user=$usuario password=$clave port=$puerto dbname=$db host=$servidor") or die('Error db conexion');      
  }
  public function __destruct() {
      
  }
  
  public function getDirBase(){
      return $this->dirbase;
  }

  public function getNumRows(){
      return $this->rows;
  }

  public function filtro($sql){
       $result = pg_query($this->conexion,$sql);
       $this->rows = pg_num_rows($result);
       return $result;
  }
  public function cerrarFiltro($datos){
    
      pg_free_result($datos);  
      
  }
  
  public function proximo($datos){
      
      $arreglo = pg_fetch_array($datos);
      
      return $arreglo;
  }
  
  public function IniciarTrans(){
      $this->error = 0;
      $this->ejecutar("BEGIN");
  }
  
  public function EndTrans(){
      if ($this->error) $this->ejecutar ("ROLLBACK");
      else $this->ejecutar ("COMMIT");
  }


  public function ejecutar($sql){
      pg_query($this->conexion,$sql);
  }
  
  public function cerrarConexion(){
      pg_close($this->conexion);
  }
  
}//cierra Clase Datos

?>