<!--
--  Darren Fisher
--  Homework 3
-->

<?php require_once("header.php")?>

    <div id="Background">

        <!-- This is the 1st 1/2 of the page top section-->
        <div id="headerShowDate">
            The building you wanted is: <?php echo $_POST["BuildingName"]; ?><br>
            The class you signed up for is: <?php echo $_POST["ClassId"]; ?><br>
            Your StudentId is: <?php echo $_POST["StudentId"]; ?><br>    
            The ProfessorID is: <?php echo $_POST["ProfessorID"]; ?>    
        </div>

        <br>
        <br>
        <br>
        
        <!-- This is the 2st 1/2 of the page top section-->
        <div id="headerShowDate">
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

            <br>
            <br>
            <br>
            middle
            <br>
            <br>
            <br>

        <!-- 2nd middle part of page -->
        <div id="middleDatashow">
            
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
                    <td> Class Id <a href="ClassId.php?id="><?=$row["ClassId"]?></a></td>
                    <br>
                    <td> Class Name <a href="ClassName.php?id="> <?=$row["ClassName"]?></a> </td>
                    <br>
                    <td> Building Id<a href="BuildingId.php?id="> <?=$row["BuildingId"]?></a> </td>
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

        <br>
        <br>
        bot test
        <br>
        <br>
        <br>

        <!-- TESTER -->
        <div>

            <?php
                $Varname = echo $_POST["BuildingName"];
                
                $sql = "SELECT * FROM Building WHERE BuildingName like '$Varname' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td> Builidng id: <?=$row["BuildingId"]?></td>
                        <br>
                        <td> Building Name <?=$row["Buildingname"]?></td>
                        <br>
                        <td> Class Id<?=$row["ClassId"]?></td>
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

    </div>


    
</body>
</hmtl>