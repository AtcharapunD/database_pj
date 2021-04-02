<?php 
  session_start();
?>
<html>
  <head>
    <title>Phuangngern Rental</title>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1"> 

    <!--CSS-->
    <link rel="stylesheet" href="css/roomnhouse.css">

    <!-- font -->    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Icon Top-->
    <link rel="icon" href="favicon.png">
  </head>

  <body>
    

    <div class="header">
      <!--<h1>Welcome To Phuangngern Rental</h1>-->
        <div style="width:100%;height:400px;">  
          <img src="BG1.jpg" alt="BG1" style="float:left;width:50%;height:100%;object-fit:cover;">
          <img src="BG2.jpg" alt="BG2" style="float:left;width:50%;height:100%;object-fit:cover;">
        </div>
    </div>
    
    <div class="navbar">
      <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Phuangngern Rental</a>
        <a href="roomnhouse.php">Room & House</a>
        <a href="statment.php">Info</a>
        <?php if(isset($_SESSION['username'])):?>
          <a href="index.php?logout=1" class="right">Logout</a>
        <?php else:?>
        <a href="login.php" class="right">Login</a>
        <?php endif?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
    <nav>
      <div>
        <a href="roomcheck.php">ห้องว่าง</a>
      </div>
    </nav> 
    <div class="main">
      <h2>ROOM AND HOUSE</h2>
      <h5>Room</h5>
      <div class="content">
        <img src="house1.1.jpg" alt="house1.1" style="width:70%">
        <h3>Some Other Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. 
          Temporibus necessitatibus sea ei, at tantas oporteat nam. 
          Lorem ipsum dolor sit amet, tempor prodesset eos no.
        </p>
      </div>
      <hr>
    </div>

    <div class="main">
      <div class="content">
        <img src="house2.1.jpg" alt="house2.1" style="width:70%">
        <h3>Some Other Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. 
          Temporibus necessitatibus sea ei, at tantas oporteat nam. 
          Lorem ipsum dolor sit amet, tempor prodesset eos no.
        </p>
      </div>
      <hr>
    </div>

    <div class="main">
      <div class="content">
        <img src="house3.jpg" alt="house3" style="width:70%">
        <h3>Some Other Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. 
          Temporibus necessitatibus sea ei, at tantas oporteat nam. 
          Lorem ipsum dolor sit amet, tempor prodesset eos no.
        </p>
      </div>
      <hr>
    </div>

    <div class="main">
      <h5>House</h5>
      <div class="content">
        <img src="house4.jpg" alt="house4" style="width:70%">
        <h3>Some Other Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. 
          Temporibus necessitatibus sea ei, at tantas oporteat nam. 
          Lorem ipsum dolor sit amet, tempor prodesset eos no.
        </p>
      </div>
      <hr>
    </div>

    <div class="footer">
      <h2>@2020 Phuangngern Rental</h2>
    </div>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>