<?php
    session_start();
    require_once 'connect.php';
    

    $name_company = $_POST['name_company'];
    $tel_number = $_POST['tel_number'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    if ($password !== $password_conf) {
        $_SESSION['error'] = 'Паролі не співпадають';
        header("Location: ../register.php");
    }else{

        $hash_password = md5($password);

        mysqli_query($conn, "INSERT INTO `users` (`id`, `name_company`, 
        `tel_number`, `password`) VALUES (NULL, '$name_company', '$tel_number', '$hash_password')");
        $_SESSION['correct'] = 'Регістрація виконана!';
        header("Location: ../index.php");
    }

?>

