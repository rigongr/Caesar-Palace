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
    <link rel="stylesheet" type="text/css" href="css/sign_up.css">
    <title>Caesar Palace - Hotel and more</title>
    
</head>
<body>
<?php  require 'includes/header.php' ?>
    <section id="mainsection-signup">
        <!-- HEADER -->


        <div class="loginbox">
        <img src="images/icons/main-icon.png" width="100" class="avatar">
        <h1> Sign up </h1>
        <form action="includes/signup.inc.php" method="post">
            <p> Username </p>
            <input type="text" name="username" placeholder="Enter username">
            <p> Email </p>
            <input type="email" name="email" placeholder="Enter email">
            <p> Password </p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="signup-submit" value="Sign up">
            <a href="log_in.php">Have an account?  </a>
        </form>
    </section>
 
    <!-- FOOTER -->

    <?php require 'includes/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>