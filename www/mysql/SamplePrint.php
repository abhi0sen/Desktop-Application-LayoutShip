<?php
$con = mysqli_connect('localhost', 'root', '', 'layoutship');
$id = $_POST['id'];
$layoutQuery1 = "select * from savedcontent where SampleId = '$id'";
$queryRes1 = mysqli_query($con, $layoutQuery1);
$FinalRes1 = mysqli_fetch_array($queryRes1);
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }
session_start();
// $_SESSION['SamplePara'] = $FinalRes1['Data'];
$_SESSION['para'] = $FinalRes1['Data'];
// $_SESSION['state'] = 1;
echo $_SESSION['para'];
// echo $_SESSION['SamplePara'];
echo "<script> window.location.href = '../index.php' </script>";
?>
