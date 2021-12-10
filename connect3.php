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

    // intially show the previous data
    if (count($_POST)==1)
    {
    $sql = "SELECT * FROM information WHERE regno = $regno";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    }
    if (count($_POST)>1)
    {  
        mysqli_query($conn, "UPDATE information set firstname='" . $_POST['FirstName'] . "'");
        mysqli_query($conn, "UPDATE information set lastname='" . $_POST['LastName'] . "'");
        mysqli_query($conn, "UPDATE information set regno='" . $_POST['RegNo'] . "'");
        mysqli_query($conn, "UPDATE information set m1='" . $_POST['Marks1'] . "'");
        mysqli_query($conn, "UPDATE information set m2='" . $_POST['Marks2'] . "'");
        mysqli_query($conn, "UPDATE information set m3='" . $_POST['Marks3'] . "'");
    }
?>


<html>
    <head>
        <link rel="stylesheet" href="connect3.css">
        <script src="Data-Entry.js"></script>
        <title>Data Updation</title>
    </head>
    <body>
        <div class="parent">
            <div class="child">
                <h2>WELCOME TO STUDENT INFORMATION SYSTEM</h2>
            </div>
        </div>

        <div class="header">
            <b>Update Student Information </b>
        </div>
        <?php $ans = mysqli_fetch_assoc($result); ?>

        <div class="f">
            <form action="" method="post">
                <label for="fname">First Name</label>
                <input type="text" name="FirstName" id="fname" placeholder="Enter First Name" value="<?php echo $ans['firstname']?>" required>

                <label for="lname">Last Name</label>
                <input type="text" name="LastName" id="lname" placeholder="Enter Last Name" value="<?php echo $ans['lastname']?>" required>

                <label for="regno">Registration Number</label>
                <input type="text" name="RegNo" id="regno" placeholder="Enter Registration Number" value="<?php echo $ans['regno']?>" required>


                <label for="marks1">Marks in Subject 1</label>
                <input type="number" name="Marks1" id="marks1" value="<?php echo $ans['m1']?>" required>

                
                <label for="marks2">Marks in Subject 1</label>
                <input type="number" name="Marks2" id="marks2" value="<?php echo $ans['m2']?>" required>

                
                <label for="marks3">Marks in Subject 1</label>
                <input type="number" name="Marks3" id="marks3" value="<?php echo $ans['m3']?>" required>

                <input type="submit" class="btn" value="Update">
            </form>
        </div>
    </body>
</html>