<?php
    require_once("check.php");
   // error_reporting(0);
   if(isset($_POST['delete']))
   {
    $del=$_POST['del'];

    $delete="delete from tbl_book where book_name='$del'";

    $result=mysqli_query($conn,$delete);

    if($result)
    {
        echo "<script> alert('your book is delete successful')  window.location:deletebook.php</script>";
    }
    else
    {
        echo "<script> alert('your book name is incorrect') </script>";
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
            <h1>Delete Book</h1>
            </div>
            <div class="col-md-6">
            <h5 align="right"><a href="homepage.php" class="a">Back</a></h5>
            </div>
        </div>
       
        <div style="padding: 20px; margin-left:200px;">
          <form method="post">

   
            <input type="text" name="del"  placeholder="Delete book name" class="form-control" /><br><br>
            <input type="submit" name="delete" value="Delete" class="btn btn bg-dark text-white">
          </form>
    </div>
    </div>
</body>
</html>
