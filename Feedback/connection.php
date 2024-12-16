<?php
 
    // servername => localhost
    // username => root
    // password => empty
    // database name => feedback
    
    $conn = mysqli_connect("localhost", "root", "", "feedback");
         
    if($conn === false)
    {
        echo "Connection Failed".mysqli_connect_error();
    }
?>