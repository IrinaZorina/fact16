<?php $time = date('G');
if ($time >= 8 && $time <= 20) {
	echo $colorMode = "<body class=\"content white--mode\">";
} else {
	echo $colorMode = "<body class=\"content dark--mode\">";
}
?>
<header>
	<nav>
		<ul class="topmenu">
			<li><a href="../../../html/lk.php">Главная</a></li>
			<li><a href="#" class="submenu-link">Таблицы</a>
				<ul class="submenu">
					<li><a href="../../../html/lesson_2/thePeriodicTable.php">Таблица Менделеева</a></li>
					<li><a href="../../../html/lesson_2/form.php">Формы</a></li>
				</ul>
			</li>
			<li><a href="#" class="submenu-link">Flex и GRID</a>
				<ul class="submenu">
					<li><a href="../../../html/lesson_3/flex.php">Flex and Grid</a></li>
					<li><a href="../../../html/lesson_3/element.php">Элемент</a></li>
				</ul>
			</li>
			</li>
			<li><a href="#" class="submenu-link">php</a>
				<ul class="submenu">
					<li><a href="../../../html/lesson_php/loop.php">Циклы</a></li>
					<li><a href="../../../html/lesson_php/array.php">Массивы</a></li>
					<li><a href="../../../html/lesson_php/string.php">Строки</a></li>
					<li><a href="../../../html/lesson_php/function.php">Функции</a></li>
					<li><a href="../../../html/lesson_php/getPostDZ3.php">Глобальные массивы</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</header>
<main>