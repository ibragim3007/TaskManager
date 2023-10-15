<? page::PageAdd('head'); ?>
<? 
if(isset($_POST['out'])){
	unset($_SESSION['user']);
}

?>
<body>
	<? page::PageAdd('header'); ?>
	<link rel="stylesheet" href="/static/css/settings.css">
<content>
	<div class="content-center">
		<div class="form">
			<div class="center-form">
				<div class="info">
				<div class="for-flex-out">	<h2 class="user"><span>Логин: </span><span class="user-sp user-login"><? echo $_SESSION['user']['login']; ?></span></h2>
					<form method="post"><button class="out-btn" name="out">Выйти с аккаунта</button></form>
				</div>
					<h2 class="user"><span>Имя: </span><span class="user-sp user-first-name"><? echo $_SESSION['user']['first name']; ?></span></h2>
					<h2 class="user"><span>Фамилия: </span><span class="user-sp user-last-name"><? echo $_SESSION['user']['last name']; ?></span></h2>
					<h2 class="user"><span>Время регистрации: </span><span class="user-sp user-date-register">
		<? echo Time::Delta($_SESSION['user']['time register']); ?></span></h2>
					<?	echo $_SESSION['user']['time']; ?>
					<h2 class="user"><span>Дата регистрации: </span><span class="user-sp user-date-register"><? echo Time::WhenM($_SESSION['user']['time register']); ?></span></h2>
				</div>
			</div>
		</div>
		<br>
	</div>
</content>
</body>
</html>
<script src="/libs/jquery.js"></script>
<script src="/static/javascript/redirect.js"></script>