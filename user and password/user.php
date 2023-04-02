<?php
$a=$_REQUEST['name'];
$b = $_REQUEST['password'];
if ($a=="web" && $b=="technology"){
    echo '<script>alert("Welcome web")</script>';
}
else{
    echo '<script>alert(" ERROR! Please Enter correct information")</script>';
}
?>