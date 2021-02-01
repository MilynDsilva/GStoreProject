<?php
session_start();
include("sql.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbconnection";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['btn_submit1'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password']; 

    $my_query = "SELECT * FROM `registration` WHERE Username='$Username'AND Password='$Password' ";
    $sql1=mysqli_query($conn, $my_query);
    if (mysqli_num_rows($sql1) >0 ) {
        $member =  mysqli_fetch_assoc($sql1);
        $_SESSION['Username'] = $member['Username'];
        $_SESSION['islogged']= true;
        header("Location: home.php");
    }
    else {
        header("Location: adminlogin.php");
        
        
    }
}
