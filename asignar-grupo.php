<?php

require ('Grupo.php');

$grupo = new Grupo();
$ultimo = $_POST['ultimo'];
$id_grupo = $_POST['grupo'];
for ($var=1; $var<=$ultimo; $var++){
 $temp = "al".$var;
if(isset($_POST[$temp])){
 $grupo->asignarAlumnoGrupo($var,$id_grupo);
 }
}
?>
<meta http-equiv="refresh" content="0; url=TestGrupo.php?accion=1" />