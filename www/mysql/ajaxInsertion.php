<?php
    $con = mysqli_connect('localhost', 'root', '', 'layoutship');
 
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $header = mysqli_real_escape_string($con, $_POST['header']);
 
 mysqli_query($con, "INSERT INTO samplecontent(Paragraph, Header) VALUES('" . $content . "', '" . $header . "')");
mysqli_close($con);
?>