<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" contents="php, html, bitrix">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/tablestyles.css">
</head>
<body>
    <?php
    include("header.php")
    ?>
    <table>
        <tr>
            <td rowspan="2">
                <h2>Периоды</h2>
            </td>
            <td rowspan="2">
                <h2 align="middle">Ряды</h2>
            </td>
            <td colspan="2">
                <h2 align="middle">Группы элементов</h2>
            </td>
        </tr>
        <tr>
            <td>
                <h3 align="middle">1</h3>
            </td>
            <td>
                <h3 align="middle">2</h3>
            </td>
        <tr>
            <td>
                <h3 align="middle">I</h3>
            </td>
            <td>
                <h3 align="middle">1</h3>
            <td>
                <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%BE%D0%B4%D0%BE%D1%80%D0%BE%D0%B4">
                    <img src="assets/img/hidro.png" alt="hidro" title="Hydrogen">
                </a>
            </td>
            <td></td>
            </tr>
            </td>
        </tr>
        <tr>
            <td>
                <h3 align="middle">II</h3>
            </td>
            <td>
                <h3 align="middle">2</h3>
            </td>
            <td>
             <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%82%D0%B8%D0%B9">
                <img src="assets/img/lithium.gif" alt="lithium" title="Lithium">
             </a>
            </td>
            <td>
             <a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B5%D1%80%D0%B8%D0%BB%D0%BB%D0%B8%D0%B9">
                <img src="assets/img/Be.gif" alt="be" title="Beryllium">
             </a>
            </td>
        </tr>
    </table>
    <?php
    include("footer.php")
    ?>
</body>
</html>