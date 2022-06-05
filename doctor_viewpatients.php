<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "sr project";
    $conn = new mysqli($servername,$username,$password,$dbname);
    $email = $_POST['emailid'];
    $health_issue = $_POST['problem'];
    $mobile = $_POST['mobileno'];
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    $sql = "INSERT INTO `service`(`Email Id`, `Problem`, `Mobile Number`) VALUES ('$email','$health_issue','$mobile')";
    if($conn->query($sql) === TRUE) {
        echo "new record inserted successfully!";
    }
    else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
?>