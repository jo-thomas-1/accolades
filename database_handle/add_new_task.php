<?php
    // add new task details to database table
    $connection = mysqli_connect("localhost","root","","accolades");

    // check connection status
    if (mysqli_connect_errno())
    {
        print "Failed to connect to Database: " . mysqli_connect_error();
        exit();
    }

    $sql = "INSERT INTO tasks (`project_name`, `status`) VALUES ('" . $_GET['project_name'] . "', '" . $_GET['project_status'] . "');";

    $result = mysqli_query($connection, $sql);

    if(mysqli_error($connection)) print "Data update failed: " . mysqli_error($connection);

    // close connection
    mysqli_close($connection);

    // redirect back to project page
    header("Location: ../project.php");
?>