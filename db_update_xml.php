<?php
session_start();

if(isset($_SESSION['u_id'])) {
  if(isset($_POST['xml'])) {
    $server = "db4free.net";
    $username = "scratchbot";
    $password = "qaz123wsx";
    $dbname = "scratchbot";

    // Create connection
    $conn = new mysqli($server, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo $sql = "UPDATE `blocks` SET `content`='".$_POST['xml']."' WHERE `botId`='".$_POST['botId']."';";

    if ($conn->query($sql) === TRUE) {
        echo "Update successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}

?>
