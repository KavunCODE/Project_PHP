<?php
session_start();
include "conn_db.php";

if(isset($_POST['uName']) && isset($_POST['uEmail']) && isset($_POST['uPassword']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uName = validate($_POST['uName']);
    $uEmail = validate($_POST['uEmail']);
    $uPassword = validate($_POST['uPassword']);

    // Generate unique activation code
    $activation_code = md5($uEmail.time());

    // Hash password
    //$hashed_uPassword = password_hash($uPassword, PASSWORD_DEFAULT);

    // Store user data in database
    //'$hashed_uPassword' add to values inspite of '$uPassword'
    $sql = "INSERT INTO users (user_name, user_email, user_password, activation_code) VALUES ('$uName', '$uEmail', '$uPassword', '$activation_code')";
    mysqli_query($conn, $sql);

    // Send activation email
    $to = $uEmail;
    $subject = "Activate your account";
    $message = "Click this link to activate your account:\n\n";
    $message .= "http://localhost/Project_PHP/activate.php?code=".$activation_code;
    $headers = "From: localhost.org";

    if(mail($to, $subject, $message, $headers))
    {
        echo "<h3>Activation email sent. Please check your inbox.</h3>";
    }
    else
    {
        echo "Failed to send activation email.";
    }
}
?>
