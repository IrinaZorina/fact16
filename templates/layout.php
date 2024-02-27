<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/arrays_styles.css">
    <link rel="stylesheet" href="/assets/css/cat_style.css">
    <link rel="stylesheet" href="/assets/css/cycles_styles.css">
    <!-- Используем значение переменной $css_file для подключения темы -->
    <link rel="stylesheet" href="<?= $css_file ?>">
    <link rel="stylesheet" href="/assets/css/table-styles.css">
    <title>Аков Артур</title>
</head>
<body>

<!-- Header -->
<header class="header">
    <div class="header__logo">
        <img src="assets/media/php.svg" alt="php">
    </div>
    <!-- Добавляем навигацию в header -->
    <div class="header__menu">
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="table.php">Периодическая таблица</a></li>
                <li><a href="page_with_pictures_flex_grid.php">Кошачьи породы</a></li>
                <li><a href="cycles.php">Циклы</a></li>
                <li><a href="arrays.php">Массивы</a></li>
                <li><a href="strings.php">Строки</a></li>
                <!-- Другие пункты меню, если есть -->
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<?= $content; ?>
<!-- Footer -->
<footer class="footer">
    <div class="footer__contact-info">
        <p>Email: aakov263@gmail.com</p>
        <p>Телефон: +7 (999) 123-47-34</p>
    </div>
    <ul class="footer-social-list">
        <li class="footer-social-item">
            <a class="footer-social-link" href="" title="Вконтакте">
                <span class="visually-hidden">Вконтакте.</span>
                <svg class="footer-social-icon" role="img" aria-hidden="true" focusable="false"
                     width="25" height="14" viewBox="0 0 25 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M23.9498 0.948C24.1158 0.402 23.9498 0 23.1548 0H20.5298C19.8618 0 19.5538 0.347 19.3868 0.73C19.3868 0.73 18.0518 3.926 16.1608 6.002C15.5488 6.604 15.2708 6.795 14.9368 6.795C14.7698 6.795 14.5188 6.604 14.5188 6.057V0.948C14.5188 0.292 14.3348 0 13.7788 0H9.65076C9.23376 0 8.98276 0.304 8.98276 0.593C8.98276 1.214 9.92876 1.358 10.0258 3.106V6.904C10.0258 7.737 9.87276 7.888 9.53876 7.888C8.64876 7.888 6.48376 4.677 5.19876 1.003C4.94976 0.288 4.69776 0 4.02676 0H1.39976C0.649756 0 0.499756 0.347 0.499756 0.73C0.499756 1.412 1.38976 4.8 4.64476 9.281C6.81476 12.341 9.86976 14 12.6528 14C14.3218 14 14.5278 13.632 14.5278 12.997V10.684C14.5278 9.947 14.6858 9.8 15.2148 9.8C15.6048 9.8 16.2718 9.992 17.8298 11.467C19.6098 13.216 19.9028 14 20.9048 14H23.5298C24.2798 14 24.6558 13.632 24.4398 12.904C24.2018 12.18 23.3518 11.129 22.2248 9.882C21.6128 9.172 20.6948 8.407 20.4158 8.024C20.0268 7.533 20.1378 7.314 20.4158 6.877C20.4158 6.877 23.6158 2.451 23.9488 0.948H23.9498Z"/>
                </svg>
            </a>
        </li>
        <li class="footer-social-item">
            <a class="footer-social-link" href="" title="Телеграм">
                <span class="visually-hidden">Телеграм.</span>
                <svg class="footer-social-icon" role="img" aria-hidden="true" focusable="false"
                     width="19" height="16" viewBox="0 0 19 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M17.2853 0.0992597L1.34073 6.24775C0.252584 6.68481 0.258879 7.29184 1.14109 7.56253L5.23469 8.83953L14.7061 2.8637C15.1539 2.59121 15.5631 2.7378 15.2268 3.03636L7.55308 9.96185H7.55128L7.55308 9.96275L7.2707 14.1823C7.68438 14.1823 7.86693 13.9925 8.09895 13.7686L10.0873 11.8351L14.2232 14.89C14.9858 15.31 15.5334 15.0941 15.7232 14.1841L18.4382 1.38885C18.7161 0.274623 18.0128 -0.229883 17.2853 0.0992597V0.0992597Z"/>
                </svg>
            </a>
        </li>
        <li class="footer-social-item">
            <a class="footer-social-link" href="" title="Ютуб">
                <span class="visually-hidden">Ютуб.</span>
                <svg class="footer-social-icon" role="img" aria-hidden="true" focusable="false"
                     width="23" height="18" viewBox="0 0 23 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M19.1072 0.5H3.67437C1.81368 0.5 0.500244 2.09375 0.500244 3.9V13.9937C0.500244 15.9062 1.81368 17.5 3.67437 17.5H19.3261C20.9679 17.5 22.5002 15.9063 22.5002 14.1V3.9C22.2813 2.09375 20.9679 0.5 19.1072 0.5ZM8.16194 13.0375V4.9625L15.4953 9L8.16194 13.0375Z"
                    />
                </svg>
            </a>
        </li>
    </ul>
</footer>

</body>
</html>
