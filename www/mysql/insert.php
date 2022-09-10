<?php
$con = mysqli_connect('localhost', 'root', '', 'layoutship');
$content = $_POST['content'];
$header = $_POST['header'];

$query1 = "SELECT MAX(ContentId) FROM savedContent";
$id = mysqli_query($con, $query1);

$query = "insert into samplecontent (ContentId, Paragraph, Header) values (2, '$content', '$header')";
mysqli_query($con, $query);
// header('location: ./read_saved.php');
echo "<script> window.location.href = '../index.php' </script>";
?>