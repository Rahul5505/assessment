<?php
        require_once ("check.php");
?>

<link rel='stylesheet' type='text/css' media='screen' href='../assessment/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<div class="row">
    <div class="col-md-6">
    <caption>List of BOOK </caption>
    </div>
    <div class="col-md-6">
    <h5 align="right"><a href="homepage.php" class="a">Back</a></h5>
    </div>
    </div>
  
<table class="table caption-top">
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book ID</th>
      <th scope="col">Book Category</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
        $sql="select * from tbl_book";

        $result=mysqli_query($conn,$sql);
        
                  if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                  
                    ?>


    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['book_id']; ?></td>
      <td><?php echo $row['book_category']; ?></td>
      <td><?php echo $row['book_name']; ?></td>  
      <td><?php echo $row['author']; ?></td>
      <td><?php echo $row['quantity']; ?></td> 
      <td><?php echo $row['price']; ?></td>
      <td><a href="editbook.php?update=<?php echo $row['id']; ?>"><button class="btn btn bg-dark text-white">Update</button></a></td> 
    </tr>
<?php
                    }
                }
?>
    
  </tbody>
</table>