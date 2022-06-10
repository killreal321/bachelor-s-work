<?php
    session_start();

    if($_SESSION['profile'] ) {
        header("Location: profile.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>diplom</title>
</head>
<body>
    <div class="wrapper">
            <form action="vendor/signin.php" method="post" enctype='multipart/form-data'>
                <h1>Вхід</h1>
                <label>Введіть номер телефону</label>
                <input type="tel_number" name ='tel_number' required>
                <label>Введіть пароль</label>
                <input type="password" name='password' id="" required>
                <div class="registration">Ще немає профілю? <span style="font-weight:bold;color: black;">
                    <a href="./register.php">Зареєструйтеся</a></span>
                </div>
                <button type='submit'>Зайти</button>
                <?php
                    if ($_SESSION['error']) {
                        echo '<p class="error_psw"> ' . $_SESSION['error'] . ' </p>';
                    }
                    unset($_SESSION['error']);
                ?>
                 <?php
                    if ($_SESSION['correct']) {
                        echo '<p class="correct_psw"> ' . $_SESSION['correct'] . ' </p>';
                    }
                    unset($_SESSION['correct']);
                ?>
            </form>
        <div class="logo"><img src="./img/logo.png" alt="logo" class="logo"></div>
        <div class="img_back"><img src="./img/Vector 1.png" alt="" class="backbottom"></div>
    </div>
</body>
</html>