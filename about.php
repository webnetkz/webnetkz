<?php
    
    session_start();

    // Подключение БД
    require_once 'app/pdo/connect.php';

    $catSql = "SELECT * FROM `post`;";
    $catRes = $pdo->query($catSql);
    $catRes = $catRes->fetchAll(PDO::FETCH_ASSOC);
    
    if($catRes) {
        $x = $catRes;
    }
    ?>
<!-- HTML Content -->
<html>
    <head>
        <!-- HTML Metas -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title></title>
        <!-- CSS styles -->
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/mstyle.css">
        <link rel="shortcut icon" href="public/img/logo.png" type="image/png">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
            <!-- Description meta -->

            <!-- JavaScript -->
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    </head>
    <body>
    <!-- Append blocks -->
        <img src="public/img/headerSlim.png" class="headerSlim">
        <header style="position: fixed; left: 10%; top: 0;">
            <ul>
                <li class="menuItem hoverBtn">
                    <a href="index.php" class="nS">Негізгі бет<br> Главная</a>
                </li>
                <li class="menuItem hoverBtn">
                    <a href="conk.php" class="nS">Байкаулар<br> Конкурсы</a>
                </li>
                <li class="menuItem hoverBtn">
                    <a href="archive.php" class="nS">Мұрағат<br> Архив</a>
                </li>
                <li class="menuItem hoverBtn">
                    <a href="about.php" class="nS">Өтінім үлгісі<br> Форма заявки</a>
                </li>
                <li class="menuItem hoverBtn">
                    <a href="contact.php" class="nS">Байланыс<br> Контакты</a>
                </li>
            </ul>
        </header>
        <div id="content" style=" margin-top: 400px;">
            <h1 class="indexH1">Республиканский конкурс «Оформление территорий/помещений»</h1>
            <p class="pScroll" style="margin-left: 12%;">01 Сентября – 30 Ноября</p>
            <p>Осень в учебных учреждениях отмечена большим количеством ярких осенних праздников и развлечений. Каждый педагог или воспитатель старается организовать уникальный праздник, провести досуг на тему осени, устроить поход в парк и, конечно, воплотить в жизнь идеи по изготовлению оригинальных осенних поделок.</p>
            <p>Мы приглашаем всех талантливых педагогов, воспитателей и специалистов образовательных учреждений принять участие в нашем профессиональном конкурсе и поделиться своим опытом в проведении осенних мероприятий.</p>
            <p>В рамках нашего нового конкурса Вы можете проявить себя и пополнить свое профессиональное портфолио.</p>
            <p>На конкурс принимаются методические разработки, сценарии мероприятий, фотографии, презентации, оформление помещений/территорий, информационные материалы.</p>
            <p>Будем рады, если наш конкурс поможет его участникам раскрыться и проявить свои таланты и творческие способности.</p>
            <h3>Сроки проведения Конкурса:</h3>
            <p class="time">- Прием работ с 1 сентября 2019 года по 30 ноября 2019 года</p>
            <p class="time">- Определение победителей с 1 декабря 2019 года по 9 декабря 2019 года</p>
            <p class="time">- Публикация результатов конкурса 10 декабря 2019 года</p>


            
            <a href="қатысушы өтінімі-заявка участника.docx" download class="down">
                <img src="public/img/appendWork.png" alt="">
            </a>
            <h1 class="indexH1" style="text-align: left; margin-left: 15%;">Работы:</h1>
                <br><br><br>
            <?php
                if($x) {
                    foreach($x as $k => $v) {
                        echo '<div class="cartKonkP">';
                        echo '<img src='.$v['src'].' class="imgKonk">';
                        echo '<p class="konkTextP" style="color: rgb(142,173,233);">"'.$v['catP'].'"</p>';
                        echo '<p>Участник:</p>';
                        echo '<p class="konkTextP">'.$v['header'].'</p>';
                        echo '<p>Руководитель:</p>';
                        echo '<p class="konkTextP">'.$v['text'].'</p>';
                        echo '<hr class="konk">';
                        echo '<p class="date">Рейтинг </p>';
                        echo '</div>';
                    }
                }
            ?>
        </div>

    <!-- JS scripts -->

</body>
</html>