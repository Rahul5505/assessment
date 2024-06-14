<?php
    require_once("check.php");
   // error_reporting(0);

   if(isset($_POST['submit']))
    {
        $old=$_POST['oldpass'];
        
$sql=mysqli_query($conn,"SELECT password FROM tbl_user where password='$old'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
    $pass=$_POST['pass'];
 $con=mysqli_query($conn,"update tbl_user set password='$pass'");
echo "Password Changed Successfully !!";
}
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../assessment/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(../assessment/image/body.webp); background-repeat: no-repeat; background-size: cover;" class="text-danger">
    <div class="container p-5 m-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Change Pasword</h1>
            </div>
            <div class="col-md-6">
            <h5 align="right"><a href="homepage.php" class="a">Back</a></h5>
            </div>
        </div>
       
        <div style="padding: 20px; margin-left:200px;">
            <h3 align="center">Enter The Information Below</h3>
        <form method="post">
                <label>Old Password</label>
                <input type="text" name="oldpass" required class="form-control">

                <label>New Password</label>
                <input type="text" name="pass" required class="form-control">

             
                <br>
                
                <input type="submit" name="submit" value="Change" class="btn btn bg-dark text-white">
                <input type="reset" name="reset" value="Clear" class="btn btn bg-dark text-white">
        </form>  
        

    </div>
    </div>
</body>
</html>
