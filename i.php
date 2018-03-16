<?php 

    if(isset($_POST['sub'])) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `tbl_user` WHERE  `user_email`='$email' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION["user"] = $row['user_name'];
            $_SESSION["email"] = $row['user_email'];
            
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>OLX</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
       
            <div class="disp">
                <h2>Login</h2>
                <form class="form" method="post" action="">
                Email:<br><input type="text" name="email">
                <br>
                <br>
                Password:<br><input type="password" name="pass">
                <br>
                <br>
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
       
    </body>  
</html>
