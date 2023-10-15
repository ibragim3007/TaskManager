<? require 'config.php'; ?>
<?php 

$connect = mysqli_connect(
	$config['hostname'],
	$config['name'],
	$config['password'],
	$config['database']);

if($connect == false){
	echo "Что-то пошло не так";
}
?>