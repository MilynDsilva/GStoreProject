<?php
include("sql.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbconnection";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['btn_register'])) {
    $Username = $_POST['Username'];
    $Email_id = $_POST['Email_id'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['password'];
    $Confirm_Password = $_POST['Confirm_Password'];

    $my_query = "INSERT INTO registration (Username, Email_id, Phone,password,Confirm_Password) VALUES ('$Username','$Email_id','$Phone','$Password','$Confirm_Password')";
    if (mysqli_query($conn, $my_query)) {
         header("Location: Start.php");
    }
    else {
        echo "Error: " . $my_query . "<br>" . mysqli_error($conn);
    }
}
