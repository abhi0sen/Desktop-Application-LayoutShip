<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Ship</title>
</head>
<body>
    <form action="../mysql/register.php" method="post">
        <label for="mail">Mail</label>
        <input type="mail" name="mail" id="mail" placeholder="examle@xyz.com">
        
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass">
        <label for="cpass">Password</label>
        <input type="password" name="cpass" id="cpass">

        <button type="submit" value="Log In"></button>
        <span>Already have an account? sign in </span>
        <a href="./UserLogin.php">Here</a>
    </form>
</body>
</html>