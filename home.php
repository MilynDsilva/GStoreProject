<?php
require_once ("php/CreateDb.php");
require_once ("php/component11.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body class="w3-purple">
<?php require_once ("php/headernew.php"); ?>
<div class="container">
	<div class="heading">
	 
      
            
            	
       
</div>
<div class="w3-row w3-padding-128">
<div class="w3-container">
<div class="w3-container w3-quarter">
</div>
   <div class="w3-container w3-half w3-white">
<h2>Update entries!</h2>
<hr class="w3-clear">
<form class="w3-container" method="post" action="test-process.php" enctype="multipart/form-data">
  <p><input class="w3-input w3-border" type="text" placeholder="product_name"  name="product_name" value=""></p>
  <p><input class="w3-input w3-border" type="text" placeholder="product_price"  name="product_price"value=""></p>
  <p><input class="w3-input w3-border" type="text" placeholder="id"  name="id"value=""></p>

<label>Upload your image</label>
  <p><input type="file" name="image"></p>
<label>Confirm your image</label>

<p><input type="file" name="file" /> </p>
  <p class="w3-center"><button class="w3-btn w3-green">Upload</button></p>
   </form>
<br>
</div>
<div class="w3-quarter">
</div>
</body>
</html> 
