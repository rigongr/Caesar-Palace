<?php

if(isset($_POST['update-submit'])) {
    require 'dbh.inc.php';

    $id = $_POST['update-id'];
    $new_username = $_POST['update-username'];
    $new_email = $_POST['update-email'];
    $new_usergroup = $_POST['update-usergroup'];
    
    $query = "UPDATE `users` SET `uidUsers`='" . $new_username."',`emailusers`='".$new_email."',`usergroup`= $new_usergroup WHERE `idUsers` = $id";

    $result = mysqli_query($conn, $query);
    mysqli_close($conn);

    header("Location: ../admin_room_add.php?updatesuccesful");
    exit();
}

?>