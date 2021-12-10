<?php
    $regno = $_POST['RegNo'];

    $servename = "localhost";
    $username = "root";
    $password = "";
    $database = "student";
    $conn = mysqli_connect($servename, $username, $password, $database);
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        
    }

    $sql = "SELECT * FROM information WHERE regno = $regno";
    $result = mysqli_query($conn,$sql);



    $num = mysqli_num_rows($result);
?>

<html>
    <head>
        <link rel="stylesheet" href="connect4.css">
        <title>Data Entry</title>
    </head>
    <body>
    <?php $ans = mysqli_fetch_assoc($result);
    $sum = ($ans['m1'] + $ans['m2'] + $ans['m3'])/3;
    ?>
        <div class="parent">
            <div class="child">
                <h2>WELCOME TO STUDENT INFORMATION SYSTEM</h2>
            </div>
        </div>
        <p>Average marks of <?php echo $ans['firstname']; ?> is <?php echo $sum?></p>
    </body>
</html>