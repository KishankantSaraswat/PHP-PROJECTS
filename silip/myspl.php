<?php
$servername = "localhost";
$username = "name";
$password = "";
$dbname = "ram_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("connection faild" . $conn->connect_error);
}

$name = $_POST["t1"];
$password = $_POST["t2"];

$sql = "INSERT INTO ram(name,password) VALUES('$name', '$password')";

if ($conn->query($sql)==TRUE){
    echo "NEW RECORD CREATED SUCCESFULLY";
}else{
    echo "error" .$sql."<br>".$conn->error;
}
$conn->close();
?>
