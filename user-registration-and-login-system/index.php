
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
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `booking`(`name`, `email`, `mobile_number`, `date`, `time`) VALUES ('$name','$email','$mobile_number','$date','$time')";

     if($conn->query($sql) == TRUE){
        echo "
        <script>
                alert('Successfully!');
                window.location.href = 'http://localhost/user-registration-and-login-system/hi.php';
            </script>
            ";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>