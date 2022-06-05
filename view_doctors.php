<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "sr project";
    $conn = new mysqli($servername,$username,$password,$dbname);
    $id = $_POST['did'];
    $name = $_POST['dname'];
    $qualification = $_POST['dqualification'];
    $mobile = $_POST['mobileno'];
    $email = $_POST['emailid'];
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    $sql = "INSERT INTO `doctors_list`(`Doctor_ID`, `Name`, `Qualification`, `Mobile Number`, `Email`) VALUES ('$id','$name','$qualification','$mobile','$email')";
    if($conn->query($sql) === TRUE) {
        echo "new record inserted successfully!";
    }
    else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
?>