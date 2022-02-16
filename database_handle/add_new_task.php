<?php
    // add new task details to database table
    $connection = mysqli_connect("localhost","root","","accolades");

    // check connection status
    if (mysqli_connect_errno())
    {
        print "Failed to connect to Database: " . mysqli_connect_error();
        exit();
    }

    $sql = "INSERT INTO tasks (`project_id`, `task_name`, `hour`, `date`, `status`, `description`) VALUES ('" . $_GET['task_project_id'] . "', '" . $_GET['task_name'] . "', '" . $_GET['task_hour'] . "', '" . $_GET['task_date'] . "', '" . $_GET['task_status'] . "', '" . $_GET['task_description'] . "');";

    $result = mysqli_query($connection, $sql);

    if(mysqli_error($connection)) print "Data update failed: " . mysqli_error($connection);

    // close connection
    mysqli_close($connection);

    // redirect back to project page
    header("Location: ../task.php");
?>