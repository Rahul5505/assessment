<?php
    require_once("check.php");

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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- Including our scripting file. -->

<script type="text/javascript" src="script.js"></script>

<!-- Including CSS file. -->

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-image: url(../assessment/image/body.webp); background-repeat: no-repeat; background-size: cover;" class="text-danger">
    <div class="container p-5 m-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Search Book</h1>
            </div>
            <div class="col-md-6">
            <h5 align="right"><a href="homepage.php" class="a">Back</a></h5>
            </div>
        </div>
       
        <div style="padding: 20px; margin-left:200px;">
            <!-- Search box. -->

   <input type="text" id="search" placeholder="Search" class="form-control" />

<br>

<b>Ex: </b><i>Php, Java, C, C++,c#,.Net</i>

<br />

<!-- Suggestions will be displayed in below div. -->

<div id="display" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size:35px;"></div>


        

    </div>
    </div>
</body>
</html>
