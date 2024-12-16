<?php 
    include("connection.php");       
    if($_POST['proceed'])
        { 
            $first_name =  $_REQUEST['fname'];
            $last_name = $_REQUEST['lname'];
            $dob =  $_REQUEST['dob'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['tel'];
         
            $sql = "INSERT INTO c3details  VALUES ('$first_name','$last_name','$dob','$email','$phone')";

            mysqli_query($conn,$sql);
        
            header('location: c1form.html');
        }
?>
