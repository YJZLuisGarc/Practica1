<?php

    $db_name ="practica_marco";
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_connection = mysql_connect($db_server, $db_user, $db_pass) or die ("Error de conexion");
    mysql_select_db($db_name, $db_connection) or die("La BASE DE DATOS no existe");
    mysql_query("SET NAMES utf8");

?>