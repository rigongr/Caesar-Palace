
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
    <link rel="stylesheet" type="text/css" href="css/popup-window.css">
    <link rel="stylesheet" type="text/css" href="css/rooms.css">
    <link rel="icon" href="/images/icons/caesaricon.png">
    <title>Caesar Palace - Hotel and more</title>
</head>
<body>
    
    <section id="rooms-mainsection">
        <div id="navbar" class="navbar-background">
            <div class="navbar-location">
                <a href="contact.php"><i class="fas fa-map-marker-alt fa-md i"><span class="location-font one">Las Vegas, Nevada</span></i></a>
            </div>
            <div class="navbar-logo">
                <a href="index.php"><img src="images/icons/main-icon.png" width="100"></a>
            </div>
            <div class="navbar-phone">
                <a href="contact.php"><i class="fa fa-phone i"><span class="location-font two">+420 44 23 19 28</span></i></a>
            </div>
            <div class="navbar-book">
                <a href="rooms.php"><i class="far fa-calendar-plus i"><span class="location-font three">Book now</span></i></a>
            </div>
            
        </div>
        <div class="rooms-page">
            <h1> Featured Rooms </h1>
            <hr>
            <div class="boxes">
                    <div class="box">
                        <img src="images/rooms/room1.jpg" id="box-image">
                        <div class="text">
                            <p> Presidental Suite </p>
                        </div>
                        <div class="room-detail-left">
                            <button id="btn1" class="btn" type="button" >Room Details</button>
                        </div>
                     </div>
                <?php 

                $db = mysqli_connect("localhost", "root", "", "db_caesar");
                $sql = "SELECT * FROM add_room";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)) {
                    echo "<div class='box'>";
                        echo "<img src='images/rooms/" . $row['Image'] . "' id='box-image'>";
                        echo "<div class='text'>";
                            echo "<p>" . $row['Text'] . "</p>";
                        echo "</div>";
                        echo "<div class='room-detail-left'>";
                            echo "<button id='btn1' class='btn' type='button'>". "Room Details" . "</button>";
                        echo "</div>";
                    echo "</div>";
                        }   
                ?>
                <div id="popup">
                    <div class="popup-images">
                        <img src="images/wallpapers/popup-images/room1.jpg" id="popup-main-image">
                        <div class="small-images">
                            <i class="fa fa-angle-left" id="popup-left-arrow" aria-hidden="true"></i>
                            <img src="images/wallpapers/popup-images/room1.jpg" class="popup-small-image">
                            <img src="images/wallpapers/popup-images/room2.jpg" class="popup-small-image">
                            <img src="images/wallpapers/popup-images/room3.jpg" class="popup-small-image">
                            <i class="fa fa-angle-right" id="popup-right-arrow" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="popup-form">
                        <h1> Presidental Suite </h1>
                        <form id="popup-booking-form">
                            Name <input type = "name">
                            Lastname <input type = "text">
                            
                        </form>
                    </div>
                    <i class="fa fa-times" aria-hidden="true" id="close"></i>
                </div>
            </div>
            <!-- <h2 class="h2"> Browse through our rooms chambers</h2>
            <hr>
            <div class="boxes" style="padding-bottom: 10%;">
                <div class="box">
                    <img src="images/wallpapers/room2-mini.jpg">
                    <div class="text">
                        <p> Kings Castle </p>
                    </div>
                    <div class="room-detail-left">
                        <button id="btn" type="button">Room Details</button>
                    </div>
                </div>
                <div class="box">
                    <img src="images/wallpapers/room2-mini.jpg">
                    <div class="text">
                        <p> Kings Castle </p>
                    </div>
                    <div class="room-detail-left">
                        <button id="btn" type="button">Room Details</button>
                    </div>
                </div>
                <div class="box">
                    <img src="images/wallpapers/room2-mini.jpg">
                    <div class="text">
                        <p> Kings Castle </p>
                    </div>
                    <div class="room-detail-left">
                        <button id="btn" type="button">Room Details</button>
                    </div>
                </div>
                <div class="box">
                    <img src="images/wallpapers/room2-mini.jpg">
                    <div class="text">
                        <p> Kings Castle </p>
                    </div>
                    <div class="room-detail-left">
                        <button id="btn" type="button">Room Details</button>
                    </div>
                </div>
            </div>
        </div> -->
        
    </section>
    
    <section id="footer">
        <div class="footer">
            <div class="footer-section1">
                <H1> QUICK LINKS </H1>
                <hr style="color: white; width: 250px;">
                <a href="index.php"><p> Home </p></a>
                <a href="rooms.php"><p> Rooms </p></a>
                <a href="contact.php"><p> Contact us </p></a>
            </div>

            <div class="footer-section2">
                <H1> SOCIAL LINKS </H1>
                <hr style="color: white; width: 250px;">
                <div class="social-links">
                    <i class="fab fa-instagram fa-2x"></i>
                    <i class="fab fa-facebook-f fa-2x"></i>
                    <i class="fab fa-youtube fa-2x"></i>
                </div>
            </div>
            <div class="footer-section3">
                <img src="images/icons/main-icon.png">
                <img src="images/icons/caesar-palace-fonts.png" width="250px">
            </div>
            <div class="footer-section4">
                <h1 style="padding-left: 15px;
                border-left: 1px solid white;"> Location </h1>
                <p> 3570 S Las Vegas Blvd, Las Vegas, NV 89109, United States</p>
                <br>
                <h1  style="padding-left: 15px;
                border-left: 1px solid white;"> Contact </h1>
                <p>+420 44 23 19 28</p>
                <p>caesarpalace@support.com </p>
            </div>
            <div class="footer-section5">
                <p class="copyright-text">Copyrights © Rigon Grapci, Butrint Selmani.</p>
            </div>

        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/rooms-popup.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>