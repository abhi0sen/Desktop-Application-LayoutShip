<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    // if (!isset($_SESSION))
    // {
    session_start();
    // }
    if (isset($_SESSION['para']) && !empty($_SESSION['para'])) {
        echo $_SESSION['para'];
        $_SESSION['state'] = 1;
        unset($_SESSION['para']);
    } else {
        echo "not here yet";
    }
    
    ?>
</body>

</html>