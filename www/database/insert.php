<?php
$con = new PDO('sqlite:01LayouShip.db') ;

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $content = $_POST['content'];
    echo $content;
    // $query = "select * from Sample";
    $query = "insert into Sample (Title) values (:content)";
    $stmt = $con->prepare($query);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    $stmt->execute();

?>