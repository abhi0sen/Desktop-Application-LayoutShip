<?php
$con = mysqli_connect('localhost', 'root', '', 'layoutship');

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$query = "select * from users where Mail = '$mail' and Password = '$pass'";
$user = mysqli_query($con, $query);
$dat = mysqli_fetch_array($user);

// session_start();
$_SESSION['UserId'] = $dat['FullName'];
echo "<script> window.location.href = '../index.php' </script>";
?>