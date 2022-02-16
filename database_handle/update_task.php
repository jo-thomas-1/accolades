<?php
    // add new task details to database table
    $connection = mysqli_connect("localhost","root","","accolades");

    // check connection status
    if (mysqli_connect_errno())
    {
        print "Failed to connect to Database: " . mysqli_connect_error();
        exit();
    }

    $sql = "UPDATE tasks SET project_id='" . $_POST['update_task_project_id'] . "', task_name='" . $_POST['update_task_name'] . "', hour='" . $_POST['update_task_hour'] . "', date='" . $_POST['update_task_date'] . "', status='" . $_POST['update_task_status'] . "', description='" . $_POST['update_task_description'] . "' WHERE id = " . $_POST['update_task_id'];

    $result = mysqli_query($connection, $sql);

    if(mysqli_error($connection)) print "Data update failed: " . mysqli_error($connection);

    // close connection
    mysqli_close($connection);

    // redirect back to project page
    header("Location: ../task.php");
?>