<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портал | Успеваемость</title>
</head>

<body>
    <!-- toplogo это самый верхний блок сайта, где находится логотип и кнопка с авторизацией -->
    <div class="toplogo">
        <a class="active" href="index.php">
            <img class="logo" src="img/logo.png" alt="Главная">
        </a>
        <a class="right" href="reg.php">Регистрация</a>
        <a class="right" href="signin.php">Авторизация/</a>
    </div>
    <!-- topnav это фиолетовая панель навигации со ссылками на другие страницы -->
    <div class="topnav">
        <a href="blog.php">Блог</a>
        <a href="library.php">Библиотека</a>
        <!-- marks переводится как оценки, слишком длинный перевод для успеваемости -->
        <a href="marks.php">Успеваемость</a>
        <a href="calendar.php">Календарь мероприятий</a>
    </div>

    <div class="full-block">

    <div class="tabs">
    <ul>
	<li><a href="marks.php">Успеваемость</a></li>
    <li><a href="static.php">Статистика</a></li>
    <li><a href="final_round.php">Итоговые</a></li>
    <li id="get_money"><a href="#">Рейтинг</a></li>
    </ul>
    </div>


<!-- фулл таблица на оценки, в кол-ве и в процентах -->

<div class="table-3">

<table>
<tbody>


<th width="70px">№</th>
<th width="250px">Предметы</th>
<th>1 сем</th>
<th>2 сем</th>
<th>Экзамен</th>
<th>Год</th>
<th>Итоговая</th>
<!-- 1 предмет-->
<tr>
<td>1</td>
<td><a href="#" class="">Предмет</a></td>
<td>(..5..)</td>
<td>(..4..)</td>
<td></td>
<td></td>
<td>(..4 ..)</td>
</tr>
    <!-- 2 предмет-->
<tr>
<td>2</td>
<td><a href="#" class="">Предмет</a></td>
<td></td>
<td>(..4..)</td>
<td>(..3..)</td>
<td>(..2..)</td>
<td>(..5..)</td>
</tr>
    <!-- 3 предмет-->
<tr>
<td>3</td>
<td><a href="#" class="">Предмет</a></td>
<td>(..5..)</td>
<td>(..4..)</td>
<td>(..3..)</td>
<td>(..2..)</td>
<td></td>
</tr>
    <!-- 4 предмет-->
<tr>
<td>4</td>
<td><a href="#" class="">Предмет</a></td>
<td>(..5..)</td>
<td></td>
<td>(..3..)</td>
<td>(..2..)</td>
<td>(..3..)</td>
</tr>
    <!-- 5 предмет-->
<tr>
<td>5</td>
<td><a href="#" class="">Предмет</a></td>
<td></td>
<td></td>
<td>(..3..)</td>
<td>(..2..)</td>
<td></td>
</tr>
    <!-- 6 предмет-->
<tr>
<td>6</td>
<td><a href="#" class="">Предмет</a></td>
<td>(..5..)</td>
<td>(..4..)</td>
<td></td>
<td></td>
<td>(..2..)</td>
</tr>
    <!-- 7 предмет-->
<tr>
<td>7</td>
<td><a href="#" class="">Предмет</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
    <!-- 8 предмет-->
<tr>
<td>8</td>
<td><a href="#" class="">Предмет</a></td>
<td>(..5..)</td>
<td>(..4..)</td>
<td>(..3..)</td>
<td>(..2..)</td>
<td>(..4..)</td>
</tr>

</table>
</tbody>

</div>


</body>

</html>