<?php session_start();



 if (isset($_GET['logout'])) {
     session_destroy();
     unset($_SESSION['usernamen']);
     header('location: index.php');
 }?>
<html>

<head>
    <title>Phuangngern Rental</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/index.css">

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="favicon.png">

</head>

<body class="gradients">
    <div class="container">
        <section class="resertion" id="home">

            <div style="width:100%;height:400px;">
                <img src="BG1.jpg" alt="BG1" style="float:left;width:50%;height:100%;object-fit:cover;">
                <img src="BG2.jpg" alt="BG2" style="float:left;width:50%;height:100%;object-fit:cover;">
            </div>

            <div class="jumbotron jumbotron-dark text-center">

                <h1>Welcome To Phuangngern Rental</h1>
                <h2>
                    What's your room or house do you want to live?
                </h2>

            </div>

        </section>

        <section>
            <div class="background">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <div class="transbox">
                        <button class="btn login"><a href="login.php">LOG IN</a></button>

                    </div>
                <?php endif ?>

                <div class="transbox">

                    <button class="btn info"><a href="roomnhouse.php">ROOM AND HOUSE</a></button>

                </div>

                <div class="transbox">

                    <button class="btn roomnhouse"><a href="statment.php">INFO</a></button>

                </div>
                <?php if (isset($_SESSION['username'])) : ?>
                    <div class="transbox">
                        <button class="btn login"><a href="index.php?logout=1">LOG OUT</a></button>

                    </div>
                <?php endif ?>


            </div>

        </section>
    </div>
</body>

</html>