<?php
session_start();
include "conn_db.php";

if(isset($_POST['uName']) && isset($_POST['uPassword']))
{
function validate($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
}

$uName = validate($_POST['uName']);
$uPassword = validate($_POST['uPassword']);

if(empty($uName))
{
    header("Location: MainPage.php?error=Username is required");
    exit();
}
else if(empty($uPassword))
{
    header("Location: MainPage.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE user_name='$uName' AND user_password='$uPassword'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);

    if($row['user_name'] === $uName && $row['user_password'] === $uPassword)
    {
        echo "Successfully logged in";

        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['id'] = $row['id'];
        header("Location: HomePage.php");
        exit();
    }
    else
    {
        header("Location: MainPage.php?error=Incorrect Username or Password");
        exit();
    }
}
else
{
    header("Location: MainPage.php?error=Incorrect Username or Password");
    exit();
}
?>