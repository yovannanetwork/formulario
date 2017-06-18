<?
	// conectamos con el servidor
    $conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No se pudo conectar con el servidor";
	}else{
		$base=mysql_select_db('contacto');
		if(!$base){
			echo"N se encntro la base de datos";
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['email'];
	$numero=$_POST['numero'];
	//hacemos la sentencia
	$sql="INSERT INTO datos VALUES('$nombre', '$correo','$numero')";
    //ejecutamos la sentancia
	$ejecutar=mysql_query($sql);
 	//verificamos la ejcucion
	if(!$ejecutar){
	echo"hobo algun error";
	}else{
	echo"datos guaradados correctamente<br><a href='index.php'>volver</a>";
	}
?>