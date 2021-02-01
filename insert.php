<?php
include("sql.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbconnection";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$mysqli=query("INSERT INTO registration ('Username', 'Email_id', 'Phone' ,'password', 'Confirm_Password')
VALUES ('','','','','')");

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['btn_register']))
    {
			$Username = $_POST['Username'];
	        $Email_id = $_POST['Email_id'];	
	        $Phone = $_POST['Phone'];
	        $password = $_POST['password'];
	        $Confirm_Password = $_POST['Confirm_Password'];
	        if (mysqli_query($conn, $sql)) {
				  echo "New record created successfully";
				} else {
				  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

 
// Check connection

 
// Attempt insert query execution
//$sql = "INSERT INTO registeration ('Username', 'Email_id', 'Phone' , 'password', 'Confirm_Password') VALUES ('$Username','$Email_id','$Phone','$password','$Confirm_Password')";

}
 
// Close connection

?>