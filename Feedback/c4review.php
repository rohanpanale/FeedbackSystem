<?php
    include('connection.php');
    if($_POST['submit'])
    {
        $q1 = $_REQUEST['choice1'];
        $q2 = $_REQUEST['choice2'];
        $q3 = $_REQUEST['choice3'];
        $q4 = $_REQUEST['choice4'];
        $q5 = $_REQUEST['suggest'];

        $sql = "INSERT INTO c4review VALUES('$q1','$q2','$q3','$q4','$q5')";

        mysqli_query($conn,$sql);

        header('location: thank.html');
    }