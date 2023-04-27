<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error']))
              { ?>
        <p class="error">
            <?php echo $_GET['error']; ?></p>
        <?php  } ?>
        <input type="text" name="uName" placeholder="User Name"><br>
        <input type="password" name="uPassword" placeholder="Password"><br>
        <button type="submit">Login</button> <br>
        <button type="button" onclick="location.href='./RegistrationPage.php'">Registration form</button>
    </form>
        

</body>
</html>
