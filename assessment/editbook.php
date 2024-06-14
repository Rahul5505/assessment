<?php
    require_once("check.php");
    //error_reporting(0);
 
    if(isset($_POST['update']))
    {
     $eid=$_GET['update'];   
    $id=$_POST['bookid'];
    $cat=$_POST['category'];
    $bname=$_POST['txtname'];
    $author=$_POST['author'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
 
    $ins="update tbl_book set book_id='$id',book_category='$cat',book_name='$bname',author='$author',quantity='$qty',price='$price' where id='$eid'";

    $result=mysqli_query($conn,$ins);

    if($result)
    {
        echo "<script> alert('data update successfully') window.location:editbook.php</script>";
    }
    else
    {
        echo "<script> alert('data not yet update') </script>";
    }

    }





    
    if(isset($_GET['update']))
    {
       $id=$_GET['update'];
     $sel="select * from tbl_book where id=".$id;      
     $result=mysqli_query($conn,$sel);

     if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
      
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
            <h1>Add Book</h1>
            </div>
            <div class="col-md-6">
            <h5 align="right"><a href="homepage.php" class="a">Back</a></h5>
            </div>
        </div>
       
        <div style="padding: 20px; margin-left:200px;">
            <h3 align="center">Enter The Information Below</h3>

            <form method="post">

        
        <label>Category Id</label>
        <select name="category" class="form-control">
        
                       
        <option value="<?php echo $row['book_category']; ?>"><?php echo $row['book_category']; ?></option>

        </select>

        <label>Book Id</label>
        <select name="bookid" class="form-control">
                           
        <option value="<?php echo $row['book_id']; ?>"><?php echo $row['book_id']; ?></option>
        
        </select>
                <label>Book Name</label>
                <input type="text" name="txtname" value="<?php echo $row['book_name']; ?>" require class="form-control">

                <label>Author</label>
                <input type="text" name="author" value="<?php echo $row['author'];  ?>" require class="form-control">

                <label>Quantity</label>
                <input type="text" id="qty" name="qty" value="<?php echo $row['quantity'];  ?>" require class="form-control" >

                <label>Price</label>
                <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>" require class="form-control" onchange="subtotal()">
                <label id="total"></label>
                <input type="hidden" id="total" name="total" class="form-control">
                
                <br>
                
                <input type="submit" name="update" value="Update" class="btn btn bg-dark text-white">
                <input type="reset" name="reset" value="Clear" class="btn btn bg-dark text-white">
        </form>  
        

    </div>
    </div>
</body>
</html>
<?php
}
     }
    }
?>