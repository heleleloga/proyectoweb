<?php  

$servidor='localhost';
$base='lacteos';
$login='root';
$pass='';


$con = mysql_connect($servidor,$login,$pass)or die("no se pudo conectar");

mysql_select_db($base, $con) or die ('no basedatos');


$nombre = $_POST['Nombre'];
$peso = $_POST['Peso'];
$precio = $_POST['Precio'];
$disponibilidad = $_POST['Disponibilidad'];

$res=mysql_query('INSERT INTO arequipe (Nombre, Peso, Precio, Disponibilidad) VALUES ("'.$nombre.'", "'.$peso.'", "'.$precio.'", "'.$disponibilidad.'")') ;

?>
<h1><a href="varareq.php">volver al inicio</a></h1>
