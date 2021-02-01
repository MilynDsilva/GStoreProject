<?php
session_start();

$Username = "";
$Email_id = "";
$errors = $array();

$db =mysqli_connect("localhost","root","","dbconnection") or die("could not connect db");
$Username = mysqli_real_escape_string($db,$_POST['Username']);
$Email_id = mysqli_real_escape_string($db,$_POST['Email_id']);
$Phone = mysqli_real_escape_string($db,$_POST['Phone']);
$Password = mysqli_real_escape_string($db,$_POST['Password']);
$Confirm_Password = mysqli_real_escape_string($db,$_POST['Confirm_Password']);

if(empty($Username)) {array_push($errors, "Username is required")};
if(empty($Email_id)) {array_push($errors, "email is required")};
if(empty($Phone)) {array_push($errors, "phone is required")};
if(empty($Password)) {array_push($errors, "password is required")};
if($Confirm_Password != $Password){array_push($errors, "password do not match ")};

$user_check_query = "SELECT * FROM registration WHERE Username = '$Username' or Email_id ='$Email_id' LIMIT 1";
$results = mysql_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);
if($user) {
	if($user['Username'] === $Username){array_push($errors,"Username already exists");}
	if($user['Email_id'] === $Email_id){array_push($errors,"The email id already registerd");}
}
if(count($errors) == 0 ){
	$Password = md5($Password);
	$query = "INSERT INTO registration (Username, Email_id, Phone, Password , Confirm_Password) VALUES ('$Username','$Email_id','Phone','Password','Confirm_Password')";
	mysqli_query($db,$query);
	$_SESSION['Username'] = $Username;
	$_SESSION['success'] = "Logged in!!";

	header('location: Start.php');

}
}
