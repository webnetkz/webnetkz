<?php

session_start();

if(empty($_SESSION['con'])) {
    header('Location: index.php');
}

// Подключение БД
require_once 'app/pdo/connect.php';

?>

<!-- HTML Content -->
<html>
    <head>
        <!-- HTML Metas -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Panel</title>
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
            <form action="" method="post" enctype="multipart/form-data">
                <?php
                   $apCat = '<input type="submit" class="btn" name="apCat" value="Добавить категорию">';
                   $apPost = '<input type="submit" class="btn" name="apPost" value="Добавить пост">';
                   $apArc = '<input type="submit" class="btn" name="apArc" value="Добавить в архив">';
                   $apCatValue = 
                   '<input type="text" class="inp" name="apCatValueK" placeholder="Новая категория на Каз.">
                   <br>
                   <input type="text" class="inp" name="apCatValueR" placeholder="Новая категория на рус.">
                   <br>
                   <input type="submit" value="Добавить" class="btn">';

                    // Получение категорий
                    $sqlGetCat = 'SELECT * FROM categories;';
                    $resGetCat = $pdo->query($sqlGetCat);
                    $resGetCat = $resGetCat->fetchAll(PDO::FETCH_ASSOC);
                    
                    echo '<datalist id="catPost">';
                        foreach($resGetCat as $k => $v) {
                            echo '<option>'. $v['titlekaz'] .' / '. $v['title'] .'</option>';
                        }
                    echo '</datalist>';
                    
                    $apPostValue =
                    '<input type="text" class="inp" name="catPost" placeholder="Категория" list="catPost">
                    <br>
                    <input type="text" class="inp" name="apPostValueHeader" placeholder="Заголовок">
                    <br>
                    <input type="text" class="inp" name="apPostValueText" placeholder="Описание">
                    <br>
                    <input type="file" class="inp" name="file">
                    <br>
                    <input type="submit" value="Добавить" class="btn">';
                
                $sqlArc = 'SELECT * FROM `post`';
                $resArc = $pdo->query($sqlArc);
                $resArc = $resArc->fetchAll(PDO::FETCH_ASSOC);

                foreach($resArc as $k => $v) {
                    $apArcValue .= '<input type="submit" class="btn" name="apArcGo" style="display: block" value="'.$v['header'].'">';
                }
                   
                if(!empty($_POST['apCat'])) {
                    $apPost = '';
                    $apCat = '';
                    $apArc = '';
                    echo $apCatValue;
                }
                if(!empty($_POST['apPost'])) {
                    $apPost = '';
                    $apCat = '';
                    $apArc = '';
                    echo $apPostValue;
                }
                if(!empty($_POST['apArc'])) {
                    $apPost = '';
                    $apCat = '';
                    $apArc = '';
                    echo $apArcValue;
                }

                if((!empty($_POST['apCatValueK']) && (!empty($_POST['apCatValueR'])))) {
                    $titlekaz = $_POST['apCatValueK'];
                    $title = $_POST['apCatValueR'];

                    $sqlApCat = 'INSERT INTO `categories` (`title`, `titlekaz`) VALUE("'.$title.'", "'.$titlekaz.'");';
                    $resApCat = $pdo->query($sqlApCat);
                }
                if((!empty($_POST['apPostValueHeader']) && (!empty($_POST['apPostValueText'])) && (!empty($_POST['catPost'])) && (!empty($_FILES['file'])))) {
                    $header = $_POST['apPostValueHeader'];
                    $text = $_POST['apPostValueText'];
                    $catPost = $_POST['catPost'];

                    // Проверяем, загрузил ли пользователь файл
                    $fileName = $_FILES['file']['name'];
                    $fileTmp = $_FILES['file']['tmp_name'];
                    $catP = $_POST['catPost'];

                    // Директория для размещения файла
                    $destiation_dir = dirname(__FILE__).'/files/'.$fileName;
                    // Перемещаем файл в желаемую директорию
                    move_uploaded_file($fileTmp, $destiation_dir );

                    $sqlApPost = 'INSERT INTO `post` (`header`, `text`, `src`, `catP`) VALUE("'.$header.'", "'.$text.'", "'.$destiation_dir.'", "'.$catP.'");';
                    $resApPost = $pdo->query($sqlApPost);

                }
                if(!empty($_POST['apArcGo'])) {
                    
                    $delPost = $_POST['apArcGo'];

                    $sqlDelArc = 'UPDATE `post` SET `arc` = 1 WHERE `header` = "'.$delPost.'"';
                    $resDelArc = $pdo->query($sqlDelArc);
                }
                echo $apCat .= $apPost .= $apArc;
                ?>
            </form>
                
        </div>
    <!-- JS scripts -->

</body>
</html>