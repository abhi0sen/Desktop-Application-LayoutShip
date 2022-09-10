<?php
$con = mysqli_connect('localhost', 'root', '', 'layoutship');

$id = $_POST['id'];
$layoutQuery = "select * from samplecontent where sampleId = $id";
$queryRes = mysqli_query($con, $layoutQuery);
$FinalRes = mysqli_fetch_array($queryRes);
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }
session_start();
$_SESSION['para'] = $FinalRes['Paragraph'];
// $_SESSION['state'] = 1;

echo $_SESSION['para'];
echo "<script>window.location.href = '../index.php' </script>";
?>