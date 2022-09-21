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
        </div>

        <br>
        
        <!-- Top that displays the class with the ID entered -->
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

            $sql = "SELECT * FROM Class where ClassId = ".echo $_POST["ClassId"];."";

            echo $sql;

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

            ?>
        </div>


        <br>
        <div>^^ get all from class where class id = what user input</div>
        <br>


        <!-- 2nd middle part of page -->
        <div id="middleDatashow">
            
            The building you wanted is: <?php echo $_POST["BuildingName"]; ?><br>

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
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <br>
                    <td> Class Id <a href="ClassId.php?id="><?=$row["ClassId"]?></a></td>
                    <br>
                    <td> Class Name <a href="ClassName.php?id="> <?=$row["ClassName"]?></a> </td>
                    <br>
                    <td> Building Id<a href="BuildingId.php?id="> <?=$row["BuildingId"]?></a> </td>
                    <br>
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
        <div>^^ User chooses href to go to another page & sort by it</div>
        <br>


        <!-- TESTER -->
        <div>

            <?php

                $Varname = $_POST["BuildingName"];  

                $sql = "SELECT * FROM Building WHERE BuildingName like '" . $Varname . "'";

                echo $sql;

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

        <br>
        <div>^^ Sorts by what the user entered as a building name</div>
        <br>


        <div>

        <?php

            $Varname = $_POST["ClassId"];  

            $sql = "SELECT * FROM Class WHERE ClassId = $Varname";

            echo $sql;

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td> class id: <?=$row["ClassId"]?></td>
                    <br>
                    <td> class Name <?=$row["ClassName"]?></td>
                    <br>
                    <td> building Id<?=$row["BuildingId"]?></td>
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