<?php 
  include('sever.php');
?>
<!DOCTYPE HTML>  
<html>
<head>
  <meta name="viewport"content="width=device-width, initial-scale=1">
  <title>Phuangngern Rental</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>  
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
<div class = "header">
  <h2>Contract</h2>
</div>

<form method="post" action="info_bd.php">  
  <div class="input-group">
    <lable for="name">Name/ชื่อ </lable>
    <input type="text" name="name" placeholder="Your name..">
  </div>
  <div class="input-group">
    <lable for="lastname">Lastname/นามสกุล </lable>
    <input type="text" name="lastname" placeholder="Your Lastname..">
  </div>
  <div class="input-group">
    <lable for="id_code">ID/เลขบัตรประชาชน </lable>
    <input type="text" name="id_code" placeholder="ID..">
  </div>
  <div class="input-group">
    <lable for="address">Address/ที่อยู่ </lable>
    <input type="text" name="address" placeholder="Address..">
  </div>
  <div class="input-group">
    <lable for="phone_number">Phone_number/เบอร์โทรศัพท์ </lable>
    <input type="text" name="phone_number" placeholder="Your Number..">
  </div>
  <div class="input-group">
    <lable for="date">DATE/วันที่ </lable>
    <input type="text" name="date" placeholder="Your date..">
  </div>
  <div class="input-group">
    <lable for="room">ROOM/ห้อง </lable>
    <select id="room" name="room" >
      <?php 
        $sql = "SELECT * FROM room WHERE `status`= 'ว่าง'";
        $re = mysqli_query($conn,$sql);
      ?>
      <?php 
        while($row = mysqli_fetch_array($re)) {?>
        <option value="<?php echo $row['number_room'] ?>"> <?php echo $row['number_room'] ?> </option>
        <?php }?>
    </select>
  </div>
  ชื่อผู้ติดต่อฉุกเฉิน
  <div class="input-group">
    <lable for="emergency_name">Name/ชื่อ-นามสกุล </lable>
    <input type="text" name="emergency_name" placeholder="Your name..">
  </div>
  <div class="input-group">
    <lable for="relation">Relationship/ความสัมพันธ์ </lable>
    <select id="relation" name="relation" >
      <option value="บิดา"> บิดา </option>
      <option value="มารดา"> มารดา </option>
      <option value="ญาติ"> ญาติ </option>
    </select>
  </div>
  <div class="input-group">
    <lable for="emergency_number">Phone_number/เบอร์โทรศัพท์ </lable>
    <input type="text" name="emergency_number" placeholder="Your Number..">
  </div>
  <div class="input-group">
    <button type="submit" name="submit" class="btn">Submit</button> 
  </div>
</form>

</body>
</html>