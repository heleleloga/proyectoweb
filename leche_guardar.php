<?php 

$servidor='localhost';
$base='lacteos';
$login='root';
$pass='';


$con = mysql_connect($servidor,$login,$pass)or die("no se pudo conectar");

mysql_select_db($base, $con) or die ('no basedatos');

$cod = $_POST['codigo'];
$nombre = $_POST['Nombre'];
$peso = $_POST['Peso'];
$precio = $_POST['Precio'];
$disponibilidad = $_POST['Disponibilidad'];

$cons=mysql_query('UPDATE leche SET Nombre="'.$nombre.'", Peso="'.$peso.'", Precio="'.$precio.'", Disponibilidad="'.$disponibilidad.'" WHERE id='.$cod);

if ($cons) {
	echo "Lacteo". $nombre . " ha sido editado satisfactoriamente.";
}else{
	echo "error actualizando." . mysql_error();
}
?>


<a href="varlec.php">Volver al inicio</a>