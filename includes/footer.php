<section id="footer">
        <div class="footer">
            <div class="footer-section1">
                <H1> QUICK LINKS </H1>
                <hr style="color: white; width: 250px;">
                <a href="index.php"><p> Home </p></a>
                <a href="rooms.php"><p> Rooms </p></a>
                <a href="contact.php"><p> Contact us </p></a>
                <?php 
                    if(!isset($_SESSION['userUid'])) {
                        echo ' 
                        <a href="log_in.php"><p> Login </p></a>
                        <a href="sign_up.php"><p> Register </p></a>           
                        ';
                    };
                    if(isset($_SESSION['userUid'])) {
                        if($_SESSION['userGroup'] > 0) {
                        echo '
                        <a href="admin_room_add.php"><span>Admin Panel</span></a>
                       ';
                       echo '  <p> Logged in as ' . '<span style="color: yellow;">' . $_SESSION['userUid']   . '</span>' . '</p>';
                       echo ' <form action="includes/logout.inc.php" method="post">
                       <button class="logout-button" name="logout-button"> Logout </button>
                       </form>';
                    }
                    if($_SESSION['userGroup'] == 0) {
                        echo '  <p> Logged in as ' . '<span style="color: yellow;">' . $_SESSION['userUid']   . '</span>' . '</p>';
                        echo ' <form action="includes/logout.inc.php" method="post">
                        <button class="logout-button" name="logout-button"> Logout </button>
                        </form>';
                    }
                }
                    
                ?>
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