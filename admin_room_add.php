<?php 
    session_start();
?>
<!-- THE UPLOAD ROOM BOX -->
<?php 
    $msg = "";
    // If upload button is pressed
    if(isset($_POST['upload-room'])) {
        $target = "images/rooms/".basename($_FILES['image']['name']);

        // connect to the database

        $db = mysqli_connect("localhost", "root", "", "db_caesar");

        // Get all the submitted data from the form
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];
        $num_rooms = $_POST['num_rooms'];
        $room_price = $_POST['room_price'];
        $posted_by = $_SESSION['userUid'];

        if(empty($image)) {
            header("Location: admin_room_add.php?empty-image");
            die();   
        }

        $sql = "INSERT INTO add_room(Image, Text, num_rooms, room_price, posted_by) VALUES ('$image', '$text', '$num_rooms', '$room_price', '$posted_by')";
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
    <title>Caesar Palace - Admin dashboard</title>
</head>
<body style="background-color: floralwhite">
    
    <section id="mainsection">
    <h1> ADMIN DASHBOARD, WELCOME <span style="color: purple"><?php echo strtoupper($_SESSION['userUid'])?></span> </h1>
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
                    <label> Number of rooms </label>
                    <input type="number" min="1" max="5" name="num_rooms" style="width: 35px" value="1">
                </div>
                <div>
                    <label> Price per night </label>
                    <input type="number" name="room_price" style="width: 50px" value="1">
                </div>
                <div>
                    <input type="submit" name="upload-room" value="Uploade Image">
                </div>

            </form>
        </div>
    </section>
    <div class="user-table">
    <h1> Insert, edit or delete users </h1>
    <table class="content-table">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Usergroup </th>
                </tr>
            </thead>
            <tbody>
            <?php 

                $db = mysqli_connect("localhost", "root", "", "db_caesar");
                $sql = "SELECT * FROM users";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td>" . $row['idUsers'] . "</td>
                            <td>" . $row['uidUsers'] . "</td>
                            <td>" . $row['emailUsers'] . "</td>
                            <td>" . $row['usergroup'] . "</td>";
                    echo "</tr>";
                };
            ?>
            </tbody>
        </table>
        <div class="insert-update">
            <form action="includes/insert.php" method="POST">
                <h1> Insert user </h1>
                <label>Username </label> <input type="text" name="insert-username">
                <label>Email </label> <input type="email" name="insert-email">
                <label>Password </label> <input type="password" name="insert-password">
                <label>Usergroup </label> <input type="number" max="2" min="0" name="insert-usergroup">
                <input type="submit" name="insert-submit" value="Insert user">
            </form>
            <form action="includes/update.php" method="POST">
                <h1> Edit user </h1>
                <label>Select Users ID to edit </label> <input type="number" name="update-id">
                <label>New username </label> <input type="text" name="update-username">
                <label>New email </label> <input type="email" name="update-email">
                <label>New usergroup </label> <input type="number" max="2" min="0" name="update-usergroup">
                <input type="submit" name="update-submit" value="Edit user">
            </form>
            <form action="includes/delete.php" method="POST">
                <h1> Delete user </h1>
                <label>User ID </label> <input type="number" name="delete-id">
                <input type="submit" name="delete-submit" value="Delete user">
            </form>
        </div>
        </div>
        
    <?php require 'includes/footer.php' ?>

</body>
</html>