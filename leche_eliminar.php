<?php  



$servidor='localhost';
$base='lacteos';
$login='root';
$pass='';


$con = mysql_connect($servidor,$login,$pass)or die("no se pudo conectar");
mysql_select_db($base);

$codi=$_GET['codigo'];

$cons = 'DELETE FROM leche WHERE id='.$codi;
$res = mysql_query($cons, $con);

if($res){
	echo 'Producto eliminado con exito<a href="varlec.php">';

}else{
   echo 'el codigo de eliminar esta fallando. ' . $cons;
}
