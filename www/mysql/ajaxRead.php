<?php
    $con = mysqli_connect('localhost', 'root', '', 'layoutship');
    $content = mysqli_real_escape_string($con, $_POST['id']);
 mysqli_query($con, "select * from samplecontent where SampleId = '$id'");
// mysqli_close($con);
?>