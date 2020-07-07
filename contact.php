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
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="icon" href="/images/icons/caesaricon.png">
    <title>Caesar Palace - Hotel and more</title>
</head>
<body>
    <section id="mainsection">
        <?php require 'includes/header.php'?>
        <div class="contact-area">
            <div class="contact-form-left">
                    <h1 style="color: white; font-size: 50px; font-family: 'DM Mono', monospace;"> Contact us </h1>
                    <p style="color: white; font-family: 'DM Mono', monospace; margin-top: -30px;"> Get in touch </p>  
                <form action="includes/connect.php" method="POST" id="form" onsubmit="return validate()">
                        <label>Name</label> 
                        <input type="text" id="name" name="firstName">
                        <br>
                        <label>Email</label>
                        <input type="email" id="email" name="mail">
                        <label>Message</label>
                        <textarea class="message-input" id="message" name="message"> </textarea>
                        <br>
                        <button type="submit" name="submit" onclick="validate()">Submit</button>
                </form>
            </div>
            <div class="contact-form-right">
                <div class="address" style="margin-bottom: 50px;">
                    <h3 style="border-left: 1px solid white; padding-left: 15px;"> Address </h3>
                    <p>3570 S Las Vegas Blvd, Las Vegas, NV 89109, United States</p>
                </div>
                <div class="phone-number" style="margin-bottom: 50px;">
                    <h3 style="border-left: 1px solid white; padding-left: 15px;"> Phone </h3>
                    <p>+420 44 23 19 28</p>
                </div>
                <div class="ouremail" style="margin-bottom: 50px;">
                    <h3 style="border-left: 1px solid white; padding-left: 15px;"> Email Address </h3>
                    <p>caesarpalace@support.com</p>
                </div>
            </div>
        </div>
    </section>

    <?php require 'includes/footer.php'?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>