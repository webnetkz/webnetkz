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
            <img src="public/img/headerSlim.png" class="header">
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
            <div id="content" style="background: none; margin-top: 30%;">

            </div>

    <!-- JS scripts -->

</body>
</html>