
<?php
$enlace =  mysql_connect('127.0.0.1', 'root', 'root');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>

