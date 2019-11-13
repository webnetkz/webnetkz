<?php

session_start();

if(empty($_SESSION['con'])) {
    header('Location: index.php');
}

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
            <form action="" method="post">
                <input type="submit" class="btn" name="append" value="Добавить">
            </form>
                
        </div>
    <!-- JS scripts -->

</body>
</html>