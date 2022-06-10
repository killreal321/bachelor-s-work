<?php
// $servername = "127.0.0.1";
// $database = "diplom";
// $username = "root";
// $password = "";

$conn = mysqli_connect('127.0.0.1', 'root', '', 'diplom');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected success";
// mysqli_close($conn);
?>
