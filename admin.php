<?php

session_start();

if(!empty($_SESSION['con'])) {
    header('Location: panel.php');
}


if(!empty($_POST['go'])) {

    if((!empty($_POST['name'])) && (!empty($_POST['pass']))) {
        if($_POST['name'] == 'admin') {
            if($_POST['pass'] == 'ghbdtnvbh123!@#') {
                $_SESSION['con'] = 'yesConnect';
                header('Location: panel.php');
            }
        }
    }

}

?>

<head>
    <style>
        form {
            width: 100%;
            text-align: center;
        }
        .inp{

        }
    </style>
</head>

<form action="" method="post">
    <input type="text" class="inp" name="name">
    <input type="password" class="inp" name="pass">

    <input type="submit" name="go">
</form>