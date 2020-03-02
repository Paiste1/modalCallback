<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<title>Callback Modal</title>
</head>
<body>

	<div class="btn btn-success">Заказать звонок</div>

	<div class="container js-modal">
		<div class="col-md-6 popapa">
			<h2>Заказать звонок</h2>
			<form action="" method="POST" class="form" id="form" name="form">
				<input type="text" name="name" id="name" class="form-control" placeholder="Введите имя" autocomplete="off" required>
				<input type="text" name="phone" id="phone" class="form-control" placeholder="Введите телефон" autocomplete="off" required>
				<textarea type="text" class="form-control" name="message" id="message" placeholder="Введите сообщение"></textarea>
				<button class="btn btn-lg btn-primary btn-block">Отправить</button>
			</form><div class="close-popup js-close-thank-you"></div>
		</div>	
	</div>

	<div class="overlay js-overlay-thank-you">
		<div class="popup js-thank-you">
			<h2>Спасибо за заявку! Мы с Вами свяжемся!</h2>
			<div class="close-popup js-close-thank-you"></div>
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.maskedinput.js"></script>
</body>
</html>