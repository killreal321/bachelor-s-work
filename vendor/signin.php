<?php
    session_start();
    require_once 'connect.php';

    $tel_number = $_POST['tel_number'];
    $password = md5($_POST['password']);

        $user_check = mysqli_query($conn, "SELECT * FROM `users` WHERE 
        `tel_number` = '$tel_number' AND `password` = '$password'");
        if (mysqli_num_rows($user_check) > 0){

            $profile = mysqli_fetch_assoc($user_check);

            $_SESSION['profile'] = [
                'id' => $profile['id'],
                'tel_number' => $profile['tel_number'],
                'name_company' => $profile['name_company']
            ];

            header("Location: ../profile.php");

        }else{ 
            $_SESSION['error'] = 'Невірний логін або пароль';
            header("Location: ../index.php");
        }
   
?>

