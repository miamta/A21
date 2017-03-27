<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

include "dbinsercion.php";
$dbinsercion = new dbinsercion();

$dbinsercion->insertarEquipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
$resultado=$dbinsercion->mostrarultimo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
while($fila=$resultado->fetch_assoc()){
echo "<br><br>";
echo "Nombre: " .$fila["Nombre"] ."</br>";
echo "ciudad: " .$fila["Ciudad"] ."</br>";
echo "Conferencia: " .$fila["Conferencia"] ."</br>";
echo "Division: " .$fila["Division"] ."</br>";
}
?>
  </body>
</html>
