<?php
    
    $servername ="localhost";
    $username ="matthewmungall96";
    $password ="";
    $dbname ="c9";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }
?>