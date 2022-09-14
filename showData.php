<!--
--  Darren Fisher
--  Homework 3
-->
<?php require_once("indexHeader.php")?>


    <div>
        <div>       
            You wanted: <?php echo $_POST["BuildingName"]; ?><br>
            Your school is: <?php echo $_POST["TeacherName"]; ?><br>
            Your favorite class is: <?php echo $_POST["StudentId"]; ?>            
        </div>
    </div>


    <?php
        $servername = "localhost";
        $username = "darrenfi_homework3";
        $password = "MISHomework3";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ClassId, ClassName FROM Class";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["ClassId"]. " - Name: " . $row["ClassName"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }

    $conn->close();
    ?>


