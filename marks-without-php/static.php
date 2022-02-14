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
	<li ><a href="marks.php">Успеваемость</a></li>
    <li><a href="static.php">Статистика</a></li>
    <li><a href="final_round.php">Итоговые</a></li>
    <li id="get_money"><a href="#">Рейтинг</a></li>
    </ul>
    </div>

   

    <div class="tabs-2">
    <ul>
        <li><a href="" class="">1-й семестр</a></li>
        <li><a href="" class="">2-й семестр</a></li>
        <li><a href="" class="">Год</a></li>
    </ul>
    </div>
    <!-- фулл таблица на оценки, в кол-ве и в процентах -->

    <div class="table-2">
    
    <table>
    <tbody>
   

    <th width="70px">№ п/п</th>
    <th width="250px">Предмет</th>
    <th>5</th>
    <th>4</th>
    <th>3</th>
    <th>2</th>
    <th>4 и 5</th>
    <!-- 1 предмет-->
    <tr>
    <td>1</td>
    <td><a href="#" class="">Предмет</a></td>
    <td>(..5..)</td>
    <td>(..4..)</td>
    <td></td>
    <td></td>
    <td>(..4 и 5 в %..)</td>
    </tr>
        <!-- 2 предмет-->
    <tr>
    <td>2</td>
    <td><a href="#" class="">Предмет</a></td>
    <td></td>
    <td>(..4..)</td>
    <td>(..3..)</td>
    <td>(..2..)</td>
    <td>(..4 и 5 в %..)</td>
    </tr>
        <!-- 3 предмет-->
    <tr>
    <td>3</td>
    <td><a href="#" class="">Предмет</a></td>
    <td>(..5..)</td>
    <td>(..4..)</td>
    <td>(..3..)</td>
    <td>(..2..)</td>
    <td>(..4 и 5 в %..)</td>
    </tr>
        <!-- 4 предмет-->
    <tr>
    <td>4</td>
    <td><a href="#" class="">Предмет</a></td>
    <td>(..5..)</td>
    <td></td>
    <td>(..3..)</td>
    <td>(..2..)</td>
    <td>(..4 и 5 в %..)</td>
    </tr>
        <!-- 5 предмет-->
    <tr>
    <td>5</td>
    <td><a href="#" class="">Предмет</a></td>
    <td></td>
    <td></td>
    <td>(..3..)</td>
    <td>(..2..)</td>
    <td>(..4 и 5 в %..)</td>
    </tr>
        <!-- 6 предмет-->
    <tr>
    <td>6</td>
    <td><a href="#" class="">Предмет</a></td>
    <td>(..5..)</td>
    <td>(..4..)</td>
    <td></td>
    <td></td>
    <td>(..4 и 5 в %..)</td>
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
        <!-- 8 предмет)-->
    <tr>
    <td>8</td>
    <td><a href="#" class="">Предмет</a></td>
    <td>(..5..)</td>
    <td>(..4..)</td>
    <td>(..3..)</td>
    <td>(..2..)</td>
    <td>(..4 и 5 в %..)</td>
    </tr>

    </table>
    </tbody>
    

    </div>


</body>

</html>