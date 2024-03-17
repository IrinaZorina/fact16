<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>lk</title>
	<link rel="stylesheet" href="../../assets/style/style.css" />
	<? require "inc/inc_font/linkFont.php" ?>
</head>

<?php require "inc/inc_lk_F_H/header.php"; ?>
<main>
	<div class="h1_lk">
		<h1>Личный сайт Липатова Кирилла</h1>
	</div>
	<section class="wrapper">
		<div class="box">
			<img class="photo" src="../assets/img/EgaDnONVtWM.jpg" alt="photo" />
		</div>
		<div class="card card_1">
			<div class="card__title">
				<h3>Обо мне</h3>
			</div>
			<div class="card__info">
				<p>
					Добрый день. Меня зовут Липатов Кирилл мне 32г., проживаю в городе
					Нижний Новгород. Образование высшее НГТУ им.Алексеева, системный
					анализ и управление. До недавнего времени работал на гос.
					предприятии в составе отк начальником бюро технического контроля
					координатно-измерительных машин. Для себя решил, стать разработчиком
					и превратить свое хобби в работу. Спасибо за внимание.
				</p>
			</div>
		</div>
		<div class="card card_2">
			<div class="card__title">
				<h3>Пожелания к курсу</h3>
			</div>
			<div class="card__info">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<form action="/html/inc/actions/logout.php" method="post">
		<button href="" role="button">Выход из аккаунта</button>
		</form>
	</section>
</main>
<?php require "inc/inc_lk_F_H/footer.php"; ?>