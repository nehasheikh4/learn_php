<?php
$host = "localhost";
$username ="root";
$password = "";
$dbname = "db_std";
$con = new mysqli($host, $username, $password, $dbname);
if($con){
    echo "database connected";
}else{
    echo "database not connected";
}

?>