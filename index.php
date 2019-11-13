<?php

    session_start();

    // Подключение БД
    require_once 'app/pdo/connect.php';

    $catSql = "SELECT `title` FROM `categories`;";
    $catRes = $pdo->query($catSql);
    $catRes = $catRes->fetchAll(PDO::FETCH_ASSOC);
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
        <!-- Description meta -->

        <!-- JavaScript -->
    </head>
    <body>
    <!-- Append blocks -->
        <div id="content">
            <header>
                <ul>
                    <?php
                    
                        if(!empty($catRes)) {
                            foreach($catRes as $k => $v) {
                                echo '<li class="menuItem hoverBtn" style="margin-left: 5px;">';
                                echo    '<a href="'.$v['title'].'.php" class="nS">'.$v['title'].'</a>';
                                echo '</li>';
                            }
                        }

                    ?>
                    <li class="menuItem hoverBtn">
                        <a href="archive.php" class="nS">Архив</a>
                    </li>
                    <li class="menuItem hoverBtn">
                        <a href="about.php" class="nS">О проекте</a>
                    </li>
                    <li class="menuItem hoverBtn">
                        <a href="contact.php" class="nS">Контакты</a>
                    </li>
                </ul>
            </header>
        </div>
    <!-- JS scripts -->

</body>
</html>