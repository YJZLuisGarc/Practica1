<?php require_once 'class_login.php'; 
$blog = new blog();
if (isset($_POST['grabar']) and $_POST['grabar']=='si')
{
	$blog->nueva_sesion();
}else{

}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registro de usuarios</title>
    </head>
    <body>
        <form name="form" action="" method="post">
        <table>
            <tr>
                <td>
                  Ingresa Nombre de usuario
                </td>
                <td>
                   <input type="text" name="nom"> 
                </td>

               <input type="hidden" name="grabar" value="si">
                <td>
                   Ingresa tu Password
                </td>
                <td>
                    <input type="password" name="pass">
                </td>
            </tr><?php
				if(isset($_GET['usuario']))
				{
				?>
			<tr>
				<td colspan="2">
				<?php
					switch($_GET['usuario'])
					{
						case 'no_existe':
						?>
							Los datos introducidos no existen
						<?php
					}
				}
				?>
				</td>
			</tr>
               <tr>
                <td>         
                </td>
                <td>
                   <input type="submit" value="Inicia sesión" onClick="validar()"> 
                </td>
            </tr>
        </table>
      </form>
    </body>
</html>