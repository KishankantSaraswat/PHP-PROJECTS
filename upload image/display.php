<?php 

include ('./connnect.php');
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['file'];
    //echo $username;
    //echo '<br>';
    //echo $mobile;
    //echo '<br>';
    //print_r($image);

    $imagefilename = $image['name'];
    //print_r($imagefilename);
    //echo '<br>';
    $imagefileerror = $image['error'];
    //print_r($imagefileerror);
    //echo '<br>';
    $imagefiletemp = $image['tmp_name'];
    //print_r($imagefiletemp);
    //echo '<br>';

    $filename_separate=explode('.',$imagefilename);
    // print_r($filename_separate);
    // echo '<br>';
    $file_extension=strtolower(end($filename_separate));
    print_r($file_extension);

    $extension = array('jpeg', 'jpg', 'png');
    if(in_array($file_extension,$extension)){
        $upload_image = 'images/'.$imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
        $sql = "INSERT INTO `registration1` (name,mobile,image) values('$username','$mobile','$upload_image')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert"><strong>Data inserted succesfully</strong></div> ';
        }else{
            die(mysqli_error($con));
        }
    }
    



    
    

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
</head>
<body>
    <h1 class="text-center my-4">User data</h1>
    <div class="container mt-5 d-flex justify-content-center">
        <table class="table table-bordered w-50">
            <thead class="table-dark">
                <tr>
                    
                <th scope="col">S.no</th>
                <th scope="col">username</th>
                <th scope="col">image</th>
                </tr>
            </thead >
            <tbody>
                <?php

                $sql="Select * from `registration1`";
                $result=mysqli_query($con,$sql);
                while ($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $image = $row['image'];
                    echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><img src='.$image.'/></td>
                    </tr>';
                }
                    
                
                ?>
            </tbody>

        </table>
    </div>
</body>
</html>