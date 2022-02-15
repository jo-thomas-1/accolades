<?php
    // common database read function
    function read_table($table, $columns)
    {
        $connection = mysqli_connect("localhost","root","","accolades");

        // check connection status
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to Database: " . mysqli_connect_error();
            return(false);
            exit();
        }

        $sql = "SELECT " . $columns . " FROM " . $table;
        $result = mysqli_query($connection, $sql);

        // fetch all data
        $data = json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));

        // free result set
        mysqli_free_result($result);

        // close connection
        mysqli_close($connection);

        return($data);
    }

    // execute SQL command and read data
    function execute_and_read($sql)
    {
        $connection = mysqli_connect("localhost","root","","accolades");

        // check connection status
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to Database: " . mysqli_connect_error();
            return(false);
            exit();
        }
        
        $result = mysqli_query($connection, $sql);

        // fetch all data
        $data = json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));

        // free result set
        mysqli_free_result($result);

        // close connection
        mysqli_close($connection);

        return($data);
    }
?>