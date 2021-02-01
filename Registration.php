
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Registration </title>
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
	<style>
		body{
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("http://hdwpro.com/wp-content/uploads/2018/12/Desktop-Cool-HD-Background.jpg");
			background-position: center;
			background-size: cover;


			
		}
		.formbox{
			max-width: 400px;
			border:1px solid #ced4da;
			margin: 10% auto 0;
			
		}
		.box{
			padding:0 20px 20px;
		}
		p{
			color:white;
			padding-top: 20px;
			font-size: 20px
		}
		.submit{
			padding-top: 50px;

		}
		input{
			width:100%;

		}
		

		
	</style>
</head>
<body>


<form action="insert1.php" method="POST">
	
    <div class="formbox">
		<div class="box">
			<a><b><center><font size="15" face="Comic San MS"color="white">Register</font></center></b></a>
		<p>User Name</p>
		<input type="text" name="Username" placeholder="Username" required>
		<p>Email Id</p>
		<input type="text" name="Email_id" placeholder="Email Id" pattern=".+@gmail.com" size="30" required> 
		<p>Phone Number</p>
		<input type="text" name="Phone" placeholder="Phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Format 123-456-7890" 
       required> 
		<p>Password</p>
		<input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		<p>Confirm Password</p>
		<input type="password" name="Confirm_Password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		<div class = "submit">
        <input type="submit" name="btn_register" class="btn btn-danger btn-block" value="Register Now">
        </div>
        </div>
    </div>
   </form>

</body>
</html>

