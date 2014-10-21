<?php

require ('Alumno.php');
require ('Grupo.php');
require ('Conexion.php');
require ('header.php');

$alumno = new Alumno();
$grupo = new Grupo();


if (isset($_GET['accion'])){
switch($_GET['accion']){
 case 1:
 echo "<div class=\"alert alert-info\" role=alert>
La accion se ejecuto correctamente
</div>";
break;
case 2:
$grupo->desasignarAlumnoGrupo($_GET['alumno_id']);

    }
}

echo  "<div class=row>";
echo "<div class=col-md-4></div>";
echo "<div class=col-md-4>";
echo "<div class=table-responsive>";
echo "<table class=\"table table-striped\">";
echo "<form action=asignar-grupo.php method=POST>";
$alumno->readAlumno();
$grupo->readGrupo();
echo "<tr><input type=submit name=opcion value=Agregar></tr>";
echo "</form>";
echo "</table>";
echo "</div>";
echo "</div>";
echo "<div class=col-md-4></div>";
echo "</div>";

require ('footer.php');
?>