<?php
require_once ('php/CreateDb.php');
require_once ('./php/component.php');
$database = new CreateDb("Productdb", "actiongame"); 

$_SESSION['genre']="action";

if(isset($_GET['$product_name'])){
      $product_name = $_POST['product_name']; 
 }else{
      $product_name = "Game";
 }
if(isset($_GET['$product_price'])){
      $product_price = $_POST['product_price']; 
 }else{
      $product_price = "1000";
 }
 if(isset($_GET['id'])){
      $id = $_GET['id']; 
 }else{
      $id = "<br>not set in GET Method";
 }

$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price']; 
$id= $_POST['id'];
$image = $_FILES['image']['tmp_name'];
$img = file_get_contents($image);
$file = $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="./image/action/";
// new file size in KB
$new_size = $file_size/1024;
// new file size in KB
// make file name in lower case
$new_file_name = strtolower($file);
// make file name in lower case
$final_file=str_replace(' ','',$new_file_name);
if(move_uploaded_file($file_loc,$folder.$new_file_name))
{
$con = mysqli_connect('localhost','root','','productdb') or die('Unable To connect');
//$sql = "UPDATE actiongame
//SET column1 = value1, column2 = value2, ...
//WHERE condition";

$sql = "UPDATE `actiongame` SET `product_name`='$product_name',`product_price`='$product_price',`product_image`='./image/action/$file' WHERE `id`='$id'";
//$sql ="INSERT INTO actiongame (`product_name`, `product_price`, `product_image`) VALUES ('$productname','$productprice','$image')";
//$sql = "UPDATE `actiongame` SET `product_name`='$product_name',`product_price`='$product_price',`product_image`='./image/action/$file' WHERE id =1";
if (mysqli_query($con, $sql)) {

 
 echo "<script>alert('Upload Successfull')</script> ";

 //sleep(10);
 //header('Location: home.php');
 
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


}

}
?>