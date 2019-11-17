<?php

    session_start();

    // Подключение БД
    require_once 'app/pdo/connect.php';

    $catSql = "SELECT * FROM `categories`;";
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
                    <li class="menuItem hoverBtn">
                        <a href="index.php" class="nS">Главная</a>
                    </li>
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


            <?php
            echo '<form action="" method="post">';        
                    if(!empty($catRes)) {
                        foreach($catRes as $k => $v) {
                            echo '<input class="cats hoverBtn" type="submit" name="cat" value="';
                            echo  $v['titlekaz'] .' / '. $v['title'];
                            echo '">';
                        }
                    }
            echo '</form>';

            if(!empty($_POST['cat'])) {
                $p = $_POST['cat'];
                
                $sqlPost = 'SELECT * FROM `post` WHERE catP = "'.$p.'";';
                $resPost = $pdo->query($sqlPost);
                $resPost = $resPost->fetchAll(PDO::FETCH_ASSOC);

                foreach($resPost as $k => $v) {
                    if($v['arc'] !== '1') {
                        echo '<div class="post">';
                        echo '<h3>'.$v['header'].'</h3>';
                        echo '<img src="'.$v['src'].'" class="imgPost">';
                        echo '<p class="line">'.$v['text'].'</p>';
                        echo '</div>';
                    }

                }
            }

            ?>
        <!--<footer>
            2019 ©
        </footer>-->
        </div>

    <!-- JS scripts -->

</body>
</html>