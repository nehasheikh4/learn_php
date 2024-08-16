<?php
include 'config.php';
$username = $_POST['name'];
$useremail = $_POST['email'];

$query = ("INSERT INTO tbl_std (`name`,`email`) values ('$username','$useremail')");
$result = mysqli_query($con, $query);

if($result){
    echo '<script>alert("user created sucessfully")</script>';
    echo '<script>window.location ="http://localhost/learn_php/crud/index.php";</script>';

}else{
    echo '<script>alert("user created failed")</script>';
}
?>