
<?php
session_start();
include 'sql_connection.php';

$sql_quiry_update = "UPDATE `edu_trip` SET `isApply`='1' WHERE `sl_no`='$_SESSION[user_id]'";
if ($connection->query($sql_quiry_update) === TRUE) {
    header("Location: tripdetails.php");
    exit;
}else {
    echo "<div class='alert alert-danger'>Error: " . $connection->error . "</div>";
}


$connection->close();


?>