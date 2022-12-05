<?php
    
    
    if(isset($_POST['fullName'])){
        
        $server = "127.0.0.1:3307";
        $username = "root";
        $password="";
        $database = "gasagency";
    
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }else
    {
        echo "Connection was successful<br>";
    }
    
    $fullName = $_POST['fullName'];
    $Address = $_POST['Address'];
    $Mobile = $_POST['Mobile'];
    $Password = $_POST['Password'];
    $agency = $_POST['agency'];
    $message = $_POST['message'];
    $sql="INSERT INTO `gasagency`.`registration` ( `fullName`, `Address`, `Mobile`, `Password`, `agency`, `message`) 
     VALUES ( '$fullName', '$Address', '$Mobile', ' $Password', '$agency', '$message');";
    $result = mysqli_query($con , $sql);
    if($result){
        
        echo "Your Booking has been done Successfully!!!<br>";
    }    
    else{
        echo "The record was not inserted successfully because of this error---->".mysqli_error($con);
    }$con->close();
}    
    
    

   


    



?>
