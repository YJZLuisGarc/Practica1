<?php
class Conectar
{
	public static function con()
	{
		$conexion = mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("login");
		return $conexion;
	}
}
?>
