<?php
$con = mysqli_connect('localhost', 'root', '', 'layoutship');
$Mail = $_POST['mail'];
$Password = $_POST['pass'];

$query = "insert into users (Mail, Password) values ('$Mail', '$Password')";
$users = mysqli_query($con, $query);
$data = mysqli_fetch_array($users);
// session_start();
$_SESSION['UserId'] = $data['UserId'];

echo "<script> window.location.href = '../index.php' </script>";
?>