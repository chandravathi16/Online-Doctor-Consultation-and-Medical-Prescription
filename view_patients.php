<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "sr project";
    $conn = new mysqli($servername,$username,$password,$dbname);
    $date = $_POST['dt'];
    $email = $_POST['InputEmail'];
    $password = $_POST['pswd'];
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    $qry = "INSERT INTO `patients_list`(`Date`, `Email`, `Password`) VALUES ('$date','$email','$password')";
    if($conn->query($qry) === TRUE) {
        echo "new record inserted successfully!";
    }
    else{
        echo "Error: ". $qry . "<br>" . $conn->error;
    }
?>