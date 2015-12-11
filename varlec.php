<?php 


$servidor='localhost';
$base='lacteos';
$login='root';
$pass='';


$con = mysql_connect($servidor,$login,$pass)
       or die("no se pudo conectar");

mysql_select_db($base, $con) or die('no basedatos');

$consulta=mysql_query(' SELECT * FROM leche');

?>
<ul><li><h3><a href="index.php">Pagina Principal</a></h3></li></ul>
 
<ul><li><h3><a href="leche_nuevo.php">Nuevos Producto</a></h3></li></ul>

<table border="10px" style="background-color:#B9B9F0">
 			<tr style="background-color:#B9B9C0;color:#1E78C3">
 				<td>ID</td>
 				<td> Nombre.</td>
 				<td> Peso  .</td>
 				<td> Precio  .</td>
 				<td> Disponibilidad  .</td>
 				<td> EDITAR  .</td>
			</tr>

<?php 
	while ($fila = mysql_fetch_array($consulta)) {
?>
	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['Nombre']; ?></td>
		<td><?php echo $fila['Peso']; ?></td>
		<td><?php echo $fila['Precio']; ?></td>
		<td><?php echo $fila['Disponibilidad']; ?></td>
	
		<td><a href="leche_editar.php?codigo=<?php echo $fila['id']?>">editar</a>
		<a href="leche_eliminar.php?codigo=<?php echo $fila['id']?>">eliminar</a></td>
				

	</tr>

	<?php 
		}		
	 ?>
</table>





