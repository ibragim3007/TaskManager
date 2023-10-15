<title>Страница регистрации</title>
<? page::PageAdd('head'); ?>
<body>

	<? page::PageAdd('header'); ?>
	<content>
		<div class="content-center">
			<div class="form">
				<div class="center-form">

				<div class="item">
					<label class="item_label" for="login">Придумайте логин</label>
					<input class="login item_input max-width" type="text" name="login" placeholder="">
				</div>
			<div class="name-fam">
				<div class="item">	
					<label class="item_label" for="first_name">Введите ваше имя</label>
					<input class="first-name item_input" type="text" name="first_name" placeholder="">
				</div>
				<div class="item">	
					<label class="item_label" for="last_name">Введите вашу фамилию</label>
					<input class="last-name item_input" type="text" name="last_name" placeholder="">
				</div>
			</div>
				<div class="item">
					<label class="item_label" for="email">Введите вашу почту</label>
					<input class="email item_input max-width" type="email" name="email" placeholder="example@email.com">
				</div>
			<div class="name-fam">
				<div class="item">
					<label class="item_label" for="password">Придумайте пароль</label>
					<input class="password item_input" type="password" name="password" placeholder="********">
				</div>
				<div class="item">
					<label class="item_label" for="password">Повторите пароль</label>
					<input class="password-repeat item_input" type="password" name="password_repeat" placeholder="********">
				</div>
			</div>

				<div class="item check-box-item-center">
					<input class="check-box-entry" name="check-box" type="checkbox">
					<label class="check-box" for="check-box"><a target="blank" href="/info/useracceptions">Пользовательское соглашение</a></label>
				</div>

			<div class="wrap">
				<div class="message">
					<h3>Lorem ipsum dolor sit amet.</h3>
				</div>
			</div>

				<div class="item">
					<button class="button-reg item_input">Зарегистрироваться</button>
				</div>
				</div>
			</div>
		</div>
	</content>
</body>
<script src="/libs/jquery.js"></script>
<script src="/static/javascript/register.js"></script>
</html>