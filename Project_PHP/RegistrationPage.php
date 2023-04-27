<!--<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <style>
<?php include 'style.css'; ?>
    </style>
</head>
<body>
    <div class='background'>
        <div class='shape'></div>
        <div class='shape'></div>
    </div>

    <form action="register.php" method="post">
        <?php if(isset($_GET['error']))
              { ?>
        <p class="error">
            <?php echo $_GET['error']; ?>
        </p>
        <?php  } ?>
        <div class="regdiv">
            <h3>Registration</h3>
            <input type="text" name="uEmail" placeholder="Email" /><br />
            <input type="text" name="uName" placeholder="User Name" /><button style="margin-left:10px" type="submit" class="btn btn-dark">Register</button><br />
            <input type="password" name="uPassword" placeholder="Password" /><br />
        </div>
        
    </form>

</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>LogForm</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
    <!--Stylesheet-->
    <style>
    <?php include 'style.css';?>
        </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Registration</h3>
        <label for="username">Email</label>
        <input type="text" name="uEmail" placeholder="Email" />

        <label for="username">Username</label>
        <input type="text" name="uName" placeholder="Username" />

        <label for="password">Password</label>
        <input type="password" name="uPassword" placeholder="Password" />
       
        <button style="text-shadow: 1px 1px #000, 0px 0px #fff, 0px 0px #000, 0px 0px #fff; background-color: #f09819; color: #fff">Register</button>
        <div class="social">
            <div class="go">
                <i class="fab fa-google"></i> Google
            </div>
            <div class="fb">
                <i class="fab fa-facebook"></i> Facebook
            </div>
        </div>
    </form>
</body>
</html>
