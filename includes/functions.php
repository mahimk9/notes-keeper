<?php
function prep_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//This is used to add security to our Notes Website, such that malicious content cannot be added to it.
?>