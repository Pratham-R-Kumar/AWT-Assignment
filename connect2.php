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
        <link rel="stylesheet" href="connect2.css">
        <script src="connect2.js"></script>
        <title>Student Detail</title>
    </head>
    <body>
        <?php $ans = mysqli_fetch_assoc($result); ?>
    <div class="parent">
            <div class="child">
                <h2>WELCOME TO STUDENT INFORMATION SYSTEM</h2>
            </div>
    </div>
    <h3>STUDENT DETAILS GIVEN BELOW</h3>
    <table>
        <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Student Registration Number</th>
            <th>Subject 1 Marks</th>
            <th>Subject 2 Marks</th>
            <th>Subject 3 Marks</th>
        </tr>
        <tr>
            <td><?php echo $ans['firstname']; ?></td>
            <td><?php echo $ans['lastname']; ?></td>
            <td><?php echo $ans['regno']; ?></td>
            <td><?php echo $ans['m1']; ?></td>
            <td><?php echo $ans['m2']; ?></td>
            <td><?php echo $ans['m3']; ?></td>
        </tr>
    </table>
    <?php
            if ($num == 0)
            {
                echo "No Record Found For Given Registration Number";
            }
    ?>
    </body>
</html>
