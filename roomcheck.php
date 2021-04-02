<?php 
    include('sever.php');
    
?>
<!DOCTYPE HTML>
<html lang="en">
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
        <a href="login.php" class="right">Login</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
        <table>
        <tr>
        <td>
          <p>NO.room</p>
        </td>
        <td>
          <p>type_room</p>
        </td>
        <td>
          <p>price</p>
        </td>
        <td>
          <p>status</p>
        </td>
      </tr>
      <?php
        $sql = "SELECT * FROM room WHERE `status`='ว่าง'";
        $re = mysqli_query($conn,$sql);    
        while($row = mysqli_fetch_array($re)){ ?>
          <tr>
            <td><?php echo $row['number_room'] ?></td>
            <td><?php echo $row['type'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['status'] ?></td>
          </tr>
          <?php } ?>
        </table>

    </body>
</html>