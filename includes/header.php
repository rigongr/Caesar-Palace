<?php 
    session_start();
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<div id="navbar" class="navbar-background">
            <div class="navbar-icons">
            <?php 
                if(isset($_SESSION['userID'])) {
                    echo '
                    <div class="navbar-logo">
                    <a href="index.php"><img src="images/icons/main-icon.png" width="100"></a>
                 </div>
                 <div class="navbar-home">
                     <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="location-font one">Home</span></i></a>
                 </div>
                 <div class="navbar-book">
                     <a href="rooms.php"><i class="far fa-calendar-plus i"><span class="location-font three">Book now</span></i></a>
                 </div>
                 <div class="navbar-location">
                     <a href="contact.php"><i class="fas fa-map-marker-alt fa-md i"><span class="location-font one">Las Vegas, Nevada</span></i></a>
                 </div>
                 <div class="navbar-phone">
                     <a href="contact.php"><i class="fa fa-phone i"><span class="location-font two">+420 44 23 19 28</span></i></a>
                 </div>
                 <div class="navbar-logout">
                    <p> Logged in </p>
                    <form action="includes/logout.inc.php" method="post">
                    <button class="logout-button" name="logout-button"> Logout </button>
                    </form>
                </div>';
                    
                } else {
                    echo '            
                    <div class="navbar-logo">
                    <a href="index.php"><img src="images/icons/main-icon.png" width="100"></a>
                 </div>
                 <div class="navbar-home">
                     <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="location-font one">Home</span></i></a>
                 </div>
                 <div class="navbar-book">
                     <a href="rooms.php"><i class="far fa-calendar-plus i"><span class="location-font three">Book now</span></i></a>
                 </div>
                 <div class="navbar-location">
                     <a href="contact.php"><i class="fas fa-map-marker-alt fa-md i"><span class="location-font one">Las Vegas, Nevada</span></i></a>
                 </div>
                 <div class="navbar-phone">
                     <a href="contact.php"><i class="fa fa-phone i"><span class="location-font two">+420 44 23 19 28</span></i></a>
                 </div>
                 <div class="navbar-book">
                 <a href="log_in.php"><i class="far fa fa-sign-in i"><span class="location-font three">Login</span></i></a>
             </div>
             <div class="navbar-book">
                 <a href="sign_up.php"><i class="far fa fa-user-plus i"><span class="location-font three">Register</span></i></a>
             </div>';
                }
            ?>
        </div>
</div>