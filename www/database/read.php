<?php
$con = new PDO('sqlite:01LayouShip.db') ;


$array = array();
    $stmt = $con->prepare("SELECT * FROM sample");
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = null;
?>
