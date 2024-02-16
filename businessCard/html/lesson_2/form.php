<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>form</title>
	<link rel="stylesheet" href="../../assets/style/style.css" />
	<link rel="stylesheet" href="../../assets/style/styleHome_2/form.css">
	<? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>
<section class="form-0">
	<div class="form">
		<label for="login">Имя пользователя:
			<input type="login" name="login" placeholder="login" id="login" required /> </label><br />
		<label for="email">E-mail
			<input type="email" name="email" placeholder="email" id="email" required /> </label><br />
		<label for="password">Пароль:
			<input type="password" name="password" placeholder="password" id="password" required /> </label><br />
		<label for="value">Что выбрать?
			<select name="value" id="">
				<option value="html">html</option>
				<option value="php">php</option>
				<option value="bitrix">bitrix</option>
			</select>
		</label>
		<fieldset>
			<legend>Хочу быть</legend>
			<input type="radio" name="radio" value="yes" />Junior PHP Developer
			<input type="radio" name="radio" value="yes" />Middle PHP Developer
			<input type="radio" name="radio" value="yes" />Front-end-Developer
			<input type="radio" name="radio" value="yes" />Нее,хочу быть дизайнером
		</fieldset>
		<fieldset>
			<legend>Мои навыки в программировании</legend>
			<input type="checkbox" name="checkbox" value="HTML" />Бог программирования
			<input type="checkbox" name="checkbox" value="HTML" />Гуру
			программирования
			<input type="checkbox" name="checkbox" value="HTML" />Эм...Я еще учусь
		</fieldset>
		<label for="start">Во сколько мне удобно приходить?</label>
		<input type="date" id="start" name="trip-start" value="2024-01-25" /><br>
		<textarea name="comment" cols="30" rows="10">Мои пожелания к курсам</textarea><br>
		<button type="submit" value="submit">Все, я справился с заполнением формы</button>
	</div>
</section>
<? require "../inc/inc_lk_F_H/footer.php"; ?>