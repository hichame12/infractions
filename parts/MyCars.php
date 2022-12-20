<?php
include '../inc/conection.php';
include '../inc/SendNewCar.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepage.css">
    <link rel="stylesheet" href="../css/stylenav.css">
    <link rel="stylesheet" href="../css/stylesAccont.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/jquery/jquery-3.6.1.min.js"></script>
    <style>
          #nav_Cars{
            border-bottom: 2px solid white;
            background-color: #0088ff;
        }
    </style>
    <title>Cars</title>
</head>
<body>
    <div id="container">
        <nav>
          <div id="logo">
            <a href="../index.php">Loulidi Car</a>
          </div>
          <ul>
            <li id="nav_Home"><a href="../index.php">Home</a></li>
            <li id="nav_Info"><a href="acconte.php" id="MyInfo">My Info</a></li>
            <li id="nav_Cars"><a href="MyCars.php" id="MyCars">My Cars</a></li>
          </ul>
        </nav>
      </div>
    <header class="container">
            <div class="flex-container">
                <div class="col-12">
                    <h2 id="Second_Titre">My Cars</h2>
                </div>
            </div>
    </header>
    <div id="Content_Cars">
        <br>
        <div class="table_Info">
            <?php include_once("../inc/SelectCars2.php"); ?>
        </div>
    </div>
    <div id="Add_Cars" class="container">
        <?php include_once("./AddCars.php"); ?>
    </div>

    <script src="../js/mycarsjs.js"></script>
</body>
</html>