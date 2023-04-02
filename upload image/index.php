 <?php     
require_once('./operation.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image upload</title>
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <h1 class="text-center my-3">Registration form</h1>
    <div class="container">
        <form  action="display.php" method="post" class="w-50" enctype="multipart/form-data">
             <!--<div class="form-group my-4">
            <input type="text" name="username" placeholder="username" class="form-control">
            </div>
            <div class="form-group my-4">
                <input type="text" name="mobile" placeholder="Mobile" class="form-control">
            </div> -->
            <?php  inputfileds ("Username", "username","","text") ?>
            <?php  inputfileds ("Mobile", "mobile","","text") ?>
            <?php  inputfileds ("", "file","","file") ?>
            <input type="submit" name="submit" value="submit">


            
            
        </form> 
    </div>
</body>
</html>