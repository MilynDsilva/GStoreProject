<?php
session_start();
if($_SESSION['islogged']!=true)
{
    header("Location: Start.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  right:-10%;

}
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}
h3{
  text-align:left;
}
.sub{
  position: absolute;
  top: 28px;
  right: 26px;
  font-size: 18px;
  
    
}

html{
  font-family: "Lucida Sans", sans-serif;
}
        .btn-circle.btn-xl {
            font-family: Comic Sans MS; 
            
            width: 70px;
            height: 70px; 
            padding: 10px 16px; 
            border-radius: 35px; 
            font-size: 11px; 
            text-align: right; 

        }

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}



.menu li {
  padding: 38px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.bside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}


.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
  <div class="header">
  <h1>GameStore</h1>
    <?php if(isset($_SESSION['Username'])) : ?>
    <h3>Welcome <strong><?php echo $_SESSION['Username']; ?></strong></h3>
    <!--<button><a href="Start.php"></a>Test</button>-->
   <!-- <button><h3><a href="logout.php?logout='1'">LogOut</a></h3></button>-->
 
          <div class="sub">
          <button type="Submit" style="text-align: right"name="btn_submit" class="btn btn-danger btn-circle btn-xl"><a href="logout.php?logout='1'"><b>LogOut</b></button>
            </div>

    </div>



    

    
  <?php endif ?>
</div>
<?php
    if(!isset($_SESSION)) { 
      session_start();
    }
  ?>
  <?php
  if(isset($_SESSION['success'])) : ?>
    <div>
      <h3>
        <?php 
        echo $_SESSION['success'];
        unset ($_SESSION['success']);
        ?>
      </h3>
    </div>
  <?php endif ?>



<div class="row">
  <div class="col-3 menu">
    <ul>
      <li> <a style="text-decoration:none; color: white" href="actiongames.php">Action Game</a>
   <!-- <li> <a href="aaa.php">Action Game</a></li>-->
 <li> <a style="text-decoration:none; color: white" href="adventuregames.php">Adventure Game</a>
  <li> <a style="text-decoration:none; color: white" href="sportgames.php">Sport Game</a>
    <li> <a style="text-decoration:none; color: white" href="racinggames.php">Racing Game</a>

    </ul>
  </div>

  <div class="col-6">
   <h1>⠀⠀⠀⠀⠀⠀FEATURED & RECOMMENDED</h1>
   <div class="slideshow-container">
<div class="carousel-inner">
        <div class="item active">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/gta5.jpg" style="width:85%">
  <div class="text">⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀GTA V</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/fort.jpg" style="width:85%">
  <div class="text">⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀Fortnite</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/cyber.jpg" style="width:85%">
  <div class="text">⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ Cyberpunk 2077</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
 </div>
    </div>

</div>

    <!--<img src="https://steamcdn-a.akamaihd.net/steam/apps/1091500/header.jpg?t=1608552868">-->
  </div>

  <div class="row-2 right">
    <div class="aside">
      
      <p>Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality..</p>
     
    </div>
    </div>




<!--<h2 style="left: 100% top: 20%">FEATURED & RECOMMENDED</style></h2>-->
<div class="footer">
  <p>Copyright © Gamestore 2020. All Rights Reserved.Designed and Developed by Marrel & Milyn</p>

  </div>






</body>
</html> 
