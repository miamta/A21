<?php

class dbinsercion
{

  Private $host="localhost";
  Private $user="root";
  Private $pass="";
  Private $name="nba";
Protected $nombre;
Protected $ciudad;
Protected $conferencia;
Protected $division;

  Private $conexion;
  Private $error=false;

    function __construct()
    {
  $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->name);
    if ($this->conexion->connect_errno) {
    $this->error=true;
    }
  }
  //comprobar error
  function hayerror(){
    return $this->error;
    }

//Función para insertar

function insertarEquipo($nombre,$ciudad,$conferencia,$division){
$sqlinsercion="INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
echo $sqlinsercion;
if (!$this->conexion->query($sqlinsercion));
}
function mostrarultimo($nombre){
$resultado=$this->conexion->query("select * from equipos where Nombre='".$nombre."'");
return $resultado;
}
}
?>
