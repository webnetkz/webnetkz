<?php
    /*
    session_start();

    // Подключение БД
    require_once 'app/pdo/connect.php';

    $catSql = "SELECT * FROM `categories`;";
    $catRes = $pdo->query($catSql);
    $catRes = $catRes->fetchAll(PDO::FETCH_ASSOC);
    */
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
        <div id="content">
            <header>
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


            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2502.04371660888!2d71.45964501564501!3d51.162983443647775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1574171107382!5m2!1sru!2skz" width="100%" height="450" style="margin-top: 20%;" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                <h1 class="indexH1">Нұр-Сұлтан қаласы / Город Нур-Султан</h1>
                <h1 class="indexH1">көш, 74 үй 54 кеңсе / ул. Кенесары, дом 74, офис 54.</h1>
                <a href="https://danishpan.kz">
                    <h1 class="indexH1">Сайт: danishpan.kz</h1>
                </a>
                <h1 class="indexH1">Электронная пошта: info@danishpan.kz /  Электронная почта: info@danishpan.kz   </h1>
                <h1 class="indexH1">Тел: 8705 588 12 10</h1>
        </div>

    <!-- JS scripts -->

</body>
</html>