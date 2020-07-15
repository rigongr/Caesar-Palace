<?php

    if(isset($_POST['delete-submit'])) {
        require 'dbh.inc.php';

    
        $id = $_POST['delete-id'];

        $query = "DELETE FROM `users` WHERE `idUsers` = $id";
        
        $result = mysqli_query($conn, $query);

        mysqli_close($conn);

        header("Location: ../admin_room_add.php?deletionsuccesful");
        exit();

    };
?>