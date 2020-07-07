
<!-- THE UPLOAD ROOM BOX -->
<?php 
    $msg = "";
    // If upload button is pressed
    if(isset($_POST['upload'])) {
        $target = "images/rooms/".basename($_FILES['image']['name']);

        // connect to the database

        $db = mysqli_connect("localhost", "root", "", "db_caesar");

        // Get all the submitted data from the form
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];

        $sql = "INSERT INTO add_room(Image, Text) VALUES ('$image', '$text')";
        mysqli_query($db, $sql); // stores the dubmitted data into the database table: add_room

        // This moves the uploaded image inside the folder -> Images
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "There was a problem uploading your image";
        }
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin_room_add.css">
    <link rel="icon" href="/images/icons/caesaricon.png">
    <title>Caesar Palace - Hotel and more</title>
    
</head>
<body>
    <section id="mainsection">
        <div class="add-room-form">
        <h1> ADD ROOMS TO ROOMS PAGE </h1>
        <a href="index.php" style="color: black"><img src="images/icons/main-icon.png" width="200"></a>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" cols="40" rows="4" placeholder="What's the name of the room?"> </textarea>
                </div>
                <div>
                    <input type="submit" name="upload" value="Uploade Image">
                </div>

            </form>
        </div>
    </section>


</body>
</html>