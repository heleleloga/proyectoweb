<?php

$servidor = "localhost";
$base = "lacteos";
$login = "root";
$pass = "";

$con=mysql_connect($servidor,$login,$pass)
 or die ("No se puede conectar");

 mysql_select_db($base,$con) or die ("No base datos");

 $consulta = 'SELECT id, Nombre, Peso, Precio, Disponibilidad FROM mantequilla';

 $regs = mysql_query($consulta,$con);

if (!$regs) {
	echo "Error" . mysql_error();
}

echo '<table border= "2px">';
	echo '<tr> <td> id </td> <td> Nombre </td> <td> Peso </td> <td> Precio </td> <td> Disponibilidad </td> <td> editar </td>';

 while ($reg = mysql_fetch_array($regs)) {
?>

<tr>
	<td><?php echo $reg['id'];?></td>
	<td><?php echo $reg['Nombre'];?></td>
	<td><?php echo $reg['Peso'];?></td>
	<td><?php echo $reg['Precio'];?></td>
	<td><?php echo $reg['Disponibilidad'];?></td>
	
	<td>
	<a href="usuarios_eliminar.php?codigo=<?php echo $reg['id'];?>">eliminar</a> 
	<a href="usuarios_eliminar.php">editar</a>
</td>

</tr>
 
 <?php	
 }

?>
 </table>