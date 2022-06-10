<?php
    session_start();
    if($_SESSION['profile'] ) {
        header("Location: profile.php");
    }
?>
<!doctype html>
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
            <form action="vendor/signup.php" method="post">
                <h1>Реєстрація</h1>
                <label>Назва компанії</label>
                <input type="name_company" name='name_company'>
                <label>Номер телефону</label>
                <input type="tel_number" name='tel_number' id= "phone"  required>
                <label>Пароль</label>
                <input type="password" name="password" id="" required>
                <label>Підтвердження паролю</label>
                <input type="password" name="password_conf" id="" required>
                <div class="registration">Вже є профіль? <span style="font-weight:bold;color: black;"><a href="./index.php">Ввійти</a></span></div>
                <button type='submit'>Зареєструватись</button>
                <div class="checkbox"><div><input type="checkbox" required>Я приймаю умови користувальницької <a href=""><span style="color: #F8B505 ;">оферти</span></a></div></div>
                
                <?php
                    if ($_SESSION['error']) {
                        echo '<p class="error_psw"> ' . $_SESSION['error'] . ' </p>';
                    }
                    unset($_SESSION['error']);
                ?>

            </form>
        <div class="logo"><img src="./img/logo.png" alt="logo" class="logo"></div>
        <div class="img_back"><img src="./img/Vector 1.png" alt="" class="backbottom"></div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>