<?php 
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $Cpass=md5($_POST['cpassword']);
    $User_type=$_POST['User_type'];

    $select   ="SELECT*FROM user_form WHERE email='$email' && password='$pass'";

    $result= mysqli_query($conn ,$select);
    
    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['User_type']=='admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin.php');

        }elseif($row['User_type']=='user'){
            $_SESSION['user_name'] = $row['name'];
            header('location:user.php');
        }
        
    }else{
        $error[] = 'incorect email or password';
    }

};


?>
<html>
<head>
    <title> login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form_container">
        <form method="POST">
            <h3>Login Now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="Enter your email id">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit"  name="submit" value="Login Now" class="form-btn">
            <p>Do not have account?<a href="registration.php">Register Now</a></p>        
        </form>
    </div>
    
</body>
</html>
