<?php
$Servername ="localhost";
$Username = "root";
$Password = "";
$dbname ="feedback";

$conn = new mysqli($Servername,$Username, $Password, $dbname);

if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
} 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO lab17c(name,email,message) VALUES 
('$name', '$email', '$message')";



if ($conn->query($sql)===TRUE){
    echo "Feedback submitted successfully";
     } else{
        echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();

?>