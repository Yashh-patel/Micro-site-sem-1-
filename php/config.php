<?php
// by Utsav Patel
// config.php used to connect to the database 
$connection = mysqli_connect("localhost","root","");
if(!$connection) { // if connection is not establish then, IF block execute
    echo "Connection Error";
}
mysqli_select_db($connection, "group_ab");
?>