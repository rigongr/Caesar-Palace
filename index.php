<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Caesar Palace - Hotel and more</title>
    
</head>
<body>
    <section id="mainsection">
        <!-- HEADER -->

        <?php  require 'includes/header.php' ?>

        <div class="middle-title">
            <div class="title">
                <img src="images/icons/caesar-palace-fonts.png" class="main-title">
            </div>
        </div>
        <div class="mouse-scroll">
            <svg width="40px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#fff;stroke-width:20px;"/>
                <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#fff;stroke-width:20px;"/>
            </svg>
            <p style="color: white; font-family: Arial, Helvetica, sans-serif;"> Click here</p>
        </div>
    </section>

    <section id="second-section">
        <div class="offers">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
                <path fill="#c9a96a" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,64C384,64,480,96,576,112C672,128,768,128,864,117.3C960,107,1056,85,1152,80C1248,75,1344,85,1392,90.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
              </svg>
              <h1> We offer you great service and joy </h1>
              <hr>
            <div class="boxes">
            <div class="box">
                <img src="images/icons/comfort-icon.png" width="150px">
                <h2> Comfort </h2>
            </div>
            <div class="box">
                <img src="images/icons/relax-icon.png" width="150px">
                <h2> Relaxation </h2>
            </div>
            <div class="box">
                <img src="images/icons/room-icon.png" width="150px">
                <h2> Luxorious rooms </h2>
            </div>
            <div class="box">
                <img src="images/icons/food-icon.png" width="150px">
                <h2> Delicious food </h2>
            </div>
            </div>
        </div>
    </section>
    <section id="third-section">
        <div class="book-a-stay">
            <div class="booking">
               <i class="fas fa-arrow-down fa-lg" style="padding-top: 20px;"></i> <a href="rooms.php"><h2>Book a Stay</h2></a>
            </div>
        </div>
    </section>

    <section id="fourth-section">
        <div class="room-chamber">
            
            <h3 class="featured-text"> Featured Rooms </h3>
            <div class="room1">
                <img src="images/wallpapers/room1.jpg" width="100%" class="rooms-image">
                <div class="text">
                <p> Presidential suite </p>
            </div>
            </div>
            <div class="room2">
                <img src="images/wallpapers/room2.jpg" width="100%" class="rooms-image">
                <div class="text">
                    <p> King's Castle </p>
                </div>
            </div>
        </div>
    </section>
 
    <!-- FOOTER -->

    <?php require 'includes/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>