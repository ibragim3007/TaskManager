<? page::PageAdd('head'); ?>
<body>
	<? page::PageAdd('header'); ?>
</body>
	<content>
		<div class="content-center">
			<div class="form">
				<div class="center-form">

				<div class="item">
					<label class="item_label" for="login">Логин или Email</label>
					<input class="login item_input max-width" type="text" name="login" placeholder="">
				</div>

				<div class="item">
					<label class="item_label" for="password">Введите пароль</label>
					<input class="password item_input" type="password" name="password" placeholder="********">
				</div>

			<div class="wrap">
				<div class="message">
					<h3>Lorem ipsum dolor sit amet.</h3>
				</div>
			</div>

				<div class="item">
					<button class="button-reg button-login item_input">Авторизоваться</button>
				</div>
				</div>
			</div>
		</div>
	</content>
</body>
<script src="/libs/jquery.js"></script>
<script src="/static/javascript/login.js"></script>
</html>