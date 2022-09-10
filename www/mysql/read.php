<?php
$con = mysqli_connect('localhost', 'root', '', 'layoutship');

$id = 1;
$query = "select * from samples";
$result = mysqli_query($con, $query);

$query1 = "select * from savedcontent where ContentId = $id";

// $id1 = 2;
$query2 = "select * from samplecontent";
// $result2 = mysqli_query($con, $query2);
// session_start();
?>