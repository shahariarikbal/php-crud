<?php

    $conn = new mysqli('localhost', 'root', '', 'batch_two');

    if(!$conn){
        die(mysqli_error($conn));
    }else{
        echo "Connection success";
    }

?>