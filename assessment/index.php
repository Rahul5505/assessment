<?php
    require_once("check.php");

    if(isset($_POST['submit'])){

        $username = $_POST['user'];
        
        $password = $_POST['pwd'];
                
        $query="SELECT * FROM tbl_user WHERE username='$username' and password='$password'";
        
        $result=mysqli_query($conn,$query);
        
        $chk=mysqli_fetch_array($result);



        if($chk)
        {
            header("Location:homepage.php");
        }
        else
        {
            $msg="Your username and password is incorrect";
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
        <form method="post">
        <div style="padding: 170px; margin-left:140px;">
        <?php
           if(isset($msg)){

            echo "<center>".$msg."</center><br>"; 
          }

          
        ?>
        <label style="font-size: 25px;">Enter Your Username:</label>
        <input type="text" name="user" placeholder="" style="border: none; background: transparent; border-bottom:2px solid black;"><br><br>
        <label style="font-size: 25px;">Enter Your Password:</label>
        &nbsp;&nbsp;<input type="password" name="pwd" placeholder="******" style="border: none; background: transparent; border-bottom:2px solid black;">
        <input type="submit" name="submit" value="Signin" class="btn btn bg-danger text-white">
        </form>
        </div>
    </div>
</body>
</html>