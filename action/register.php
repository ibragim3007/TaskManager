w<?
require "../include/database.php";
$token = 'dmgdonsdgfjdfknvdjkbfvjspdingd';
$login = $_POST['login'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];
$border = array();
$anwer = array();

if(trim($login) == ''){
	$border[] = 'login'; 
}
if(trim($first_name) == ''){
	$border[] = 'first-name';
}
if(trim($last_name) == ''){
	$border[] = 'last-name';
}
if(trim($email) == ''){
	$border[] = 'email';
}
if(trim($password) == ''){
	$border[] = 'password';
}
if(trim($password_repeat) == ''){
	$border[] = 'password-repeat';
}


if(!empty($border)){

	echo json_encode($res = [

		'status' => false,
		'answer' => $border

	]);

	die();
}
if($password != $password_repeat){

	echo json_encode($res = [

		'status' => false,
		'answer' => 1,
		'message'=> 'Пароли не совпадают',

	]);

	die();

}

$getLogin = mysqli_query($connect, "SELECT `login` FROM `users` WHERE `login` = '$login'");
if(mysqli_num_rows($getLogin) > 0){

	echo json_encode($res = [

		'status' => false,
		'answer' => 1,
		'message'=> 'Такой логин уже существует'

	]);

	die();

}

$emailCheck = md5($email.$token);
$getMail = mysqli_query($connect, "SELECT `email` FROM `users` WHERE `email` = '$emailCheck'");
if(mysqli_num_rows($getMail) > 0){

	echo json_encode($res = [

		'status' => false,
		'answer' => 1,
		'message'=> 'Такая почта уже существует'

	]);

	die();
	
}
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = array('country'=>'', 'city'=>'');
if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;
$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
if($ip_data && $ip_data->geoplugin_countryName != null)
{
    $country = $ip_data->geoplugin_countryName;
    $city    = $ip_data->geoplugin_city;
    $ip_user = $ip_data->geoplugin_request;
}
$date = date("U");
$emailHash = md5($email.$token);
$passwordHash = md5($password.'smsinsdfnisdf');

mysqli_query($connect, "INSERT INTO `users`(`login`, `first name`, `last name`, `email`, `password`, `time register`, `ip adress`, `coutry`, `city`) 
	VALUES ('$login', '$first_name', '$last_name', '$emailHash', '$passwordHash', '$date', '$ip_user', '$country', '$city')");

echo json_encode($res = [

	'status' => true,
	'answer' => 'success'

]);