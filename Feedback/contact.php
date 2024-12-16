<?php 
    include("connection.php");       
    if($_POST['submit'])
        { 
            $first_name =  $_REQUEST['fname'];
            $last_name = $_REQUEST['lname'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['tel'];
            $requirenments = $_REQUEST['require'];
         
            $sql = "INSERT INTO contact VALUES ('$first_name','$last_name','$email','$phone','$requirenments')";

            mysqli_query($conn,$sql);
        
            header('location: contactthank.html');
        }
?>