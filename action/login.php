<? 
require "../include/database.php";
$token = 'dmgdonsdgfjdfknvdjkbfvjspdingd';
$login = $_POST['login'];
$password = $_POST['password'];
$border = array();


if(trim($login) == ''){
	$border[] = 'login'; 
}
if(trim($password) == ''){
	$border[] = 'password';
}

if(!empty($border)){
	echo json_encode($res = [

		'status' => false,
		'answer' => $border,

	]);

	die();

}

$emailHash = md5($login.$token);
$passwordHash = md5($password.'smsinsdfnisdf');

$check = mysqli_query($connect, "SELECT `id`,`login`,`first name`,`last name`, `time register` FROM `users` 
	WHERE `login` = '$login' AND `password` = '$passwordHash'");

if(mysqli_num_rows($check) == 1){
	
	session_start();
	$_SESSION['user'] = mysqli_fetch_assoc($check); 

	echo json_encode($res = [

	'status' => true,
	'answer' => 1,
	'message'=> 'success',

	]);

} else {

	echo json_encode($res = [

		'status' => false,
		'answer' => 1,
		'message' => 'Не верный логин или пароль',

	]);

	die();
}

