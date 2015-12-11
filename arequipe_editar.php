<?php  

$servidor='localhost';
$base='lacteos';
$login='root';
$pass='';


$con = mysql_connect($servidor,$login,$pass)or die("no se pudo conectar");
mysql_select_db($base, $con) or die ('no basedatos');
$cod = $_GET['codigo'];

$arequipe=mysql_query('SELECT * FROM arequipe WHERE id='.$cod);

$usu=mysql_fetch_array($arequipe);

?>
<h1>EDITE INFORACION SOBRE EL PRODUCTO</h1>

	
	

<form method="POST" action="arequipe_guardar.php">



		<label>ID</label>
		<span><?php echo $usu ['id']; ?></span>

		<input type="hidden" name="codigo" value="<?php echo $usu ['id']; ?>"/>
		<br>

		<label>NOMBRE</label>
		<input type="text" name="Nombre" value="<?php echo $usu ['Nombre']; ?>" />
		<br>

		</tr><label>PESO</label>
		<input type="text" name="Peso" value="<?php echo $usu ['Peso']; ?>"/>
			<br>

		<label>PRECIO</label>
		<input type="text" name="Precio" value="<?php echo $usu ['Precio']; ?>"/>
		<br>

		<label>DISPONIBILIDAD</label>
		<input type="text" name="Disponibilidad" value="<?php echo $usu ['Disponibilidad']; ?>"/>
		<br>
<input type="submit" value="Guardar cambios" />
</form>


<?php