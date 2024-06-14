<?php
    require_once("check.php");
    error_reporting(0);

    if(isset($_POST['submit']))
    {
    $id=$_POST['bookid'];
    $cat=$_POST['category'];
    $bname=$_POST['txtname'];
    $author=$_POST['author'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
 
    $ins="insert into tbl_book(book_id,book_category,book_name,author,quantity,price)values('$id','$cat','$bname','$author','$qty','$price')";

    $result=mysqli_query($conn,$ins);

    if($result)
    {
        echo "<script> window.location:addbook.php</script>";
    }
    else
    {
        echo "incorrect data upload";
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
        <option value="">-select category-</option>
        <?php 
                    $url="http://localhost/assessment/category.json";
                    $data=file_get_contents($url,true); 
                    $file=json_decode($data,true); 
                    foreach($file as $row)
                    {
                    ?>
                       
        <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
        <?php
                    }
        ?>
        </select>

        <label>Book Id</label>
        <select name="bookid" class="form-control">
        <option value="">-select book id-</option>
        <?php 
                 echo $sel="select * from tbl_bookid";      
                  $result=mysqli_query($conn,$sel);
        
                  if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                  
                    ?>
                       
        <option value="<?php echo $row['book_id']; ?>"><?php echo $row['book_id']; ?></option>
        <?php
                    }
                }
        ?>
        </select>
                <label>Book Name</label>
                <input type="text" name="txtname" placeholder="Enter Book Name" require class="form-control">

                <label>Author</label>
                <input type="text" name="author" placeholder="Enter Author Name" require class="form-control">

                <label>Quantity</label>
                <input type="text" id="qty" name="qty" placeholder="Enter Quantity" require class="form-control" >

                <label>Price</label>
                <input type="text" id="price" name="price" placeholder="Enter Price" require class="form-control" onchange="subtotal()">
                <label id="total"></label>
                <input type="hidden" id="total" name="total" class="form-control">
                
                <br>
                
                <input type="submit" name="submit" value="Insert" class="btn btn bg-dark text-white">
                <input type="reset" name="reset" value="Clear" class="btn btn bg-dark text-white">
        </form>  
        

    </div>
    </div>
</body>
</html>

<script>
// subtotal of addfoods using js
function subtotal()
{
    var p=document.getElementById("price").value;
    var q=document.getElementById("qty").value;
    var tot=p*q;
    document.getElementById("total").innerHTML=tot;
}

</script>