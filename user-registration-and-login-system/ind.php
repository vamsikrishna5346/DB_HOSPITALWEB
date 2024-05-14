<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "registration_login_db";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $Email = $_POST["Email"];
    $Message = $_POST["Message"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `send`(`name`, `Email`, `Message`) VALUES ('$name','$Email','$Message')";

     if($conn->query($sql) == TRUE){
        echo "Successfully";
        
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>