<?php

$con = mysqli_connect('localhost', 'root', '', 'imageupload_db');
if($con){
    echo "succesful";
}else{
    die(mysqli_connect_error());
}

?>