
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Page</title>
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width; initial-scale = 1.0;user-scalable=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style type="text/css">
    body{
      background-image:url("http://hdwpro.com/wp-content/uploads/2018/12/Desktop-Cool-HD-Background.jpg");
      background-repeat: no-repeat;
      background-size: cover;
       }
        img {
             
            width: 700px;
            opacity: 1;
            display: block;
            margin-left: auto;
              margin-right: auto;
        }
        .loginbox { 
                 
                  position: absolute; 
                  top: 220px; 
                  left: 600px;
                }

        .sub {    
                  position: absolute;
                  top: 230px; 
                  left: 370px;

            }
        .reg {  
                  position: absolute;
                  top: 230px; 
                  left: -99px;

            }
            
        .btn-circle.btn-xl {
            font-family: Comic Sans MS; 
            
            width: 70px;
            height: 70px; 
            padding: 10px 16px; 
            border-radius: 35px; 
            font-size: 11px; 
            text-align: center; 
        } 
        .help
        {
           position: absolute;
                  top: 75px; 
                  left: 280px;





        }
         .joybut
        {
           position: absolute;
                  top: 160px; 
                  left: 326px;

        }
         .joybut1
        {
           position: absolute;
                  top: 80px; 
                  left: 326px;

        }
        .joybut2
        {
           position: absolute;
                  top: 120px; 
                  left: 366px;

        }
        .joybut3
        {
           position: absolute;
                  top: 120px; 
                  left: 285px;



        }
        

                .btn-circle.btn-xls {
            font-family: Comic Sans MS; 
            
            width: 125px;
            height: 125px; 
            padding: 10px 16px; 
            border-radius: 70px; 
            font-size: 11px; 
            text-align: center; 
        }
             .btn-circle.btn-xls2 {
            
            
            width: 35px;
            height: 35px; 
            padding: 5px 10px; 
            border-radius: 35px; 
            font-size: 16px; 
            text-align: center; 
        }
        .cpyrg
        {
          position: relative;
          top: 300px;
          left: 300px;
        } 
         h1 ,p ,input{
  font-family: "Comic Sans MS";
}

       @media only screen and (max-width: 600px) {
  body {
  
      background-color: grey;
      background-image: none;
      
      background-repeat: no-repeat;
      background-size: cover;
      overflow-x: hidden
      width: 1024px
    
    }

  }

@media only screen and (max-width: 1300px) {
  body {
    background: none;
    background: url("mobile-back.jpg");
    background-size: cover;
    background-repeat: no-repeat;
  }
}

@media only screen and (max-width: 800px) {
  #form-div {
    width: 100%;
    height: 100%;
  }
}

@media only screen and (max-width: 480px) {
  #form-div {
    width: 100%;
    height: 100%;
  }

  

  </style>
</head>

<body>
  
  <img src="image/Game12.png" >
   <div class ="loginbox">


       
      
      <h1 style="color: rgb(255, 81, 89)">Login</h1>
      
      <form action="verifyadmin.php" method="POST">
        <p style="color: white">Username</p> 
        <input type="text" name="Username" placeholder="Enter Username" required>
        <p style="color: white">Password</p>
        <input type="password" name="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>
        <!--<input type="submit" name="" value="Login"> -->
        
        <div class="align-self-start mr-auto">
          <!--<button type="button" class="btn btn-success"onclick="window.location.href='Gamestore1/index.php';">Submit</button> -->
        <div>
          <div class="align-self-end ml-auto"> 
            <!--
          <button type="button" class="btn btn-success"onclick="window.location.href='Gamestore1/index.php';">Submit</button> -->
        <div>
          <div class ="sub">

          <button type="submit" name="btn_submit1" class="btn btn-danger btn-circle btn-xl"><b>Submit</b></button>

    </div>
    </button>
      </form>
     
<!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </div>
    <!-- <div class ="sub">

          <button type="button" class="btn btn-danger btn-circle btn-xl"onclick="window.location.href='mainpage.php';"><b>Submit</b></button>

    </div>-->
    <div class ="reg">
      

          <button type="button" class="btn btn-danger btn-circle btn-xl"onclick="window.location.href='Registration.php';"><b>Register</b></button>
        
    </div>
     <div class ="help">
      

          <button type="button" class="btn btn-danger btn-circle btn-xls"onclick="window.location.href='pp.php';"><b>Help</b></button>
        
    </div>
    </div>
     <div class ="joybut">  <!-- First btn orginal-->
      

          <button type="button" class="btn btn-success btn-circle btn-xls2"onclick="window.location.href='pp.php';"><b>X</b></button>
        
    </div>
         <div class ="joybut1">
      

          <button type="button" class="btn btn-info btn-circle btn-xls2"onclick="window.location.href='pp.php';"><b>△</b></button>
        
    </div>
         <div class ="joybut2">
      

          <button type="button" class="btn btn-warning btn-circle btn-xls2"onclick="window.location.href='pp.php';"><b>O</b></button>
        
    </div>
         <div class ="joybut3">
      

          <button style="background-color: rgb(140, 140, 140)"type="button" class="btn btn btn-circle btn-xls2"onclick="window.location.href='pp.php';"><b>▢</b></button>
        
    </div>
<div class="cpyrg">

      <!--<p><b><font size="2" face="Book Antiqua" color="white">copyright-&copy;Designed and Developed by Marrel & Milyn.</b></p>-->
     <p><b><font size="2" face="Comic Sans MS" color="white">Copyright © Gamestore 2020. All Rights Reserved.Designed and Developed by Marrel & Milyn.</font></b></p>

  </div>

</body>

</html>   