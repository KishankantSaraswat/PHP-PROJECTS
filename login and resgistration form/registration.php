<?php 
@include 'config.php';

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $Cpass=md5($_POST['cpassword']);
    $User_type=$_POST['User_type'];

    $select   ="SELECT*FROM user_form WHERE email='$email' && password='$pass'";

    $result= mysqli_query($conn ,$select);
    
    if(mysqli_num_rows($result) > 0){
        
        $error[]='user already exist!';
    }else{

        if($pass != $Cpass){
            $error[]='password not matched!';
        }else{
            $insert="INSERT INTO user_form(name,email, password, User_type) VALUES('$name', '$email' ,'$pass', '$User_type')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }

};


?>

<html>
<head>
    <title>register page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form_container">
        <form method="POST">
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <b><strong>
            <h3>Register Now</h3>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email id">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="password" name="cpassword" required placeholder="Enter confirm password">
            <select name="User_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit"  name="submit" value="Register now" class="form-btn">
            <p>already have an account?<a href="login.php">login now</a></p></strong></b>        
        </form>
    </div>
    
</body>
</html>
