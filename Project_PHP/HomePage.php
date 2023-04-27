<?php

session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
{
?>

    <!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <?php include 'style.css';?>
</head>
<body>
    <h1>Hi, <?php echo $_SESSION['user_name']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
}
else
{
    header("Location: MainPage.php");
    exit();
}

?>
