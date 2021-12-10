<?php
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $regno = $_POST['RegNo'];
    $m1 = $_POST['Marks1'];
    $m2 = $_POST['Marks2'];
    $m3 = $_POST['Marks3'];

    $conn = new mysqli('localhost','root','','student');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO information(firstname, lastname, regno, m1, m2, m3) VALUES(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiii",$firstname, $lastname, $regno, $m1, $m2, $m3);
        $stmt->execute();
        echo "Data Submitted";
        $stmt->close();
        $conn->close();
    }
?>