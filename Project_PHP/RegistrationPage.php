<!DOCTYPE html>
<html>
<style>
<?php include 'CSS/main.css'; ?>
</style>
<body>
    

    <form action="register.php" method="post">
        <?php if(isset($_GET['error']))
              { ?>
        <p class="error">
            <?php echo $_GET['error']; ?>
        </p>
        <?php  } ?>
        <div class="regdiv">
            <div class="registrationWord">Registration</div>
            <input type="text" name="uEmail" placeholder="Email" /><br />
            <input type="text" name="uName" placeholder="User Name" /><button style="margin-left:10px" type="submit" class="btn btn-dark">Register</button><br />
            <input type="password" name="uPassword" placeholder="Password" /><br />
        </div>
        
    </form>

</body>
</html>