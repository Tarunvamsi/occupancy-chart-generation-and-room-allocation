<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "occupancy_chart";
$conn = mysqli_connect($server, $username, $password, $database);
if($conn){
    //echo "Connection established";
}
else{
    echo "Connection not established";
}

?>