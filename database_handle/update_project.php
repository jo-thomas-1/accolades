<?php
    // update project details in database table
    $connection = mysqli_connect("localhost","root","","accolades");

    // check connection status
    if (mysqli_connect_errno())
    {
        print "Failed to connect to Database: " . mysqli_connect_error();
        exit();
    }

    $sql = "UPDATE projects SET project_name='" . $_POST['update_project_name'] . "', status='" . $_POST['update_project_status'] . "' WHERE id = " . $_POST['update_project_id'];

    $result = mysqli_query($connection, $sql);

    if(mysqli_error($connection)) print "Data update failed: " . mysqli_error($connection);

    // close connection
    mysqli_close($connection);

    // redirect back to project page
    header("Location: ../project.php");
?>