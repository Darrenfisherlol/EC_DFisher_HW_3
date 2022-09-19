<!--
--  Darren Fisher
--  Homework 3
-->

<?php require_once("header.php")?>

    <div id="Background">


        <div id="divOne">
            The building you wanted is: <?php echo $_POST["BuildingName"]; ?><br>
            The class you signed up for is: <?php echo $_POST["ClassId"]; ?><br>
            Your StudentId is: <?php echo $_POST["StudentId"]; ?><br>    
            The ProfessorID is: <?php echo $_POST["ProfessorID"]; ?>    
        </div>

        <br>
        <br>
        <br>

        <?php
            $servername = "localhost";
            $username = "darrenfi_homework3";
            $password = "MISHomework3";
            $dbname = "darrenfi_homework_3";
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

        $sql = "SELECT ClassId, ClassName, BuildingId FROM Class";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?=$row["ClassId"]?></td>
                <td><?=$row["ClassName"]?></td>
                <td><?=$row["BuildingId"]?></td>

            </td>
        <?php
            }
        } 
        else {
            echo "0 results";
        }

        $conn->close();
        ?>

    </div>
