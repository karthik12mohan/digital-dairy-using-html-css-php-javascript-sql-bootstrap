<?php

include('connection.php');


    $dairy = trim($_POST['dairy']);     // prevents mysqli injection

    $query = "INSERT INTO dairydata (`dairy`) VALUES('".$dairy."')";
    $result = mysqli_query($con, $query);
    $affectedRows = mysqli_affected_rows($con);
    if($affectedRows == 1)
        {
            echo "Dairy has been saved successfully";
        }
    //echo "$query";
    //echo "$dairy";
?>
