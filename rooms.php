
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
        <?php require 'includes/header.php'?>
        <div class="rooms-page">
            <h1> Featured Rooms </h1>
            <hr>
            <div class="boxes">
                <?php 

                $db = mysqli_connect("localhost", "root", "", "db_caesar");
                $sql = "SELECT * FROM add_room";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)) {
                    echo "<div class='box'>";
                        echo "<img src='images/rooms/" . $row['Image'] . "' id='box-image'>";
                        echo "<div>";
                            echo "<p class='text'>" . $row['Text'] . "</p>";
                        echo "</div>";
                        echo "<div class='room-detail-left'>";
                            echo "<button id='btn1' class='btn' type='button'>". "Book now" . "</button>";
                        echo "</div>";
                        echo "<p> Number of rooms: " . $row['num_rooms'] . "</p>";
                        echo "<p> Price per night: $" . $row['room_price'] . "</p>";
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
    </section>

    <?php require 'includes/footer.php'?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/rooms-popup.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>