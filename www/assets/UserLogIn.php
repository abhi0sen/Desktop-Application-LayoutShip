<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Ship</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form class="form" action="../mysql/login.php" method="post">
        <div>
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail" placeholder="examle@xyz.com">
        </div>
        <div>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div>
            <button type="submit">Log In</button>
        </div>
        <a href="./Account_Creation.php">Create Account</a>
    </form>
</body>
</html>
