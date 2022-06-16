<?php
    require_once('includes/db.php'); 

    if (!isset($_GET['id'])) {
        header("Location: index.php");
    }
    $id = $_GET['id'];
    $sql = "DELETE from notes where ID = '" . $id . "' LIMIT 1";
    if(mysqli_query($conn, $sql)) {
        header("Location: index.php");    
    }
?> 