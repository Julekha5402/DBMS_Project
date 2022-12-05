<?php
$insert=false;
if(isset($_POST['fullName'])){
    
    $server = "127.0.0.1:3307";
    $username = "root";
    $password="";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    $fullName = $_POST['fullName'];
    $Address = $_POST['Address'];
    $Mobile = $_POST['Mobile'];
    $Password = $_POST['Password'];
    $agency = $_POST['agency'];
    $message = $_POST['message'];
    
    $sql="INSERT INTO `gasagency`.`registration` ( `fullName`, `Address`, `Mobile`, `Password`, `agency`, `message`) 
     VALUES ( '$fullName', '$Address', '$Mobile', ' $Password', '$agency', '$message');";
    if($con->query($sql) == true){
        $insert = true;
        echo "Your Booking has been done Successfully!!!";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}