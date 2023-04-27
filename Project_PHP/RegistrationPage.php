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
    <title>Glassmorphism login Form Tutorial in html css</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background: linear-gradient(to bottom, #1845ad, #00054d);
    background-attachment: fixed;
    height: 100%;
    width: 100%;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 300px;
    width: 300px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -125px;
    top: -130px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -130px;
    bottom: -130px;
}
form{
    height: 650px;
    width: 450px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 200px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Login Here</h3>
        <label for="username">Username</label>
        <input type="text" name="uEmail" placeholder="Email" />

        <label for="username">Username</label>
        <input type="text" name="uName" placeholder="User Name" />

        <label for="password">Password</label>
        <input type="password" name="uPassword" placeholder="Password" />
       
        <button>Log In</button>
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
