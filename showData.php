<!--
--  Darren Fisher
--  Homework 3
-->

<?php require_once("header.php")?>

    <div id="Background">

        <!-- This is the 1st 1/2 of the page top section-->
        <div id="headerShowDate">
        
        <div id="HeaderForDesc">
            Here is your input:
        </div>
            The building you wanted is: <?php echo $_POST["BuildingName"]; ?><br>
            The class you signed up for is: <?php echo $_POST["ClassId"]; ?><br> 
        </div>


        <br>
        <br>


        <div id="middleDatashow">

            <div id="HeaderForDesc"> 
                Printed below is a query of the building the user entered
            </div>

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

                $Varname = $_POST["BuildingName"];  

                $sql = "SELECT * FROM Building WHERE BuildingName like '" . $Varname . "'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td> Builidng id: <?=$row["BuildingId"]?></td>
                        <br>
                        <td> Building Name: <?=$row["BuildingName"]?></td>
                        <br>
                        <td> Class Id: <?=$row["ClassId"]?></td>
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


        <div id="middleDatashow">

            <div id="HeaderForDesc"> 
                Printed below is a query of the Class the user entered with class id 
            </div>

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

                $Varname = $_POST["ClassId"];  

                $sql = "SELECT * FROM Class WHERE ClassId = $Varname";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td> class id: <?=$row["ClassId"]?></td>
                        <br>
                        <td> class Name: <?=$row["ClassName"]?></td>
                        <br>
                        <td> building Id: <?=$row["BuildingId"]?></td>
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
       

        <div id="middleDataShowBigger"> 

            <div id="HeaderForDesc">
                This will print out all building info
            </div>

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

                $sql = "SELECT * FROM Building";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td> Builidng id: <?=$row["BuildingId"]?></td>
                        <br>
                        <td> Building Name: <?=$row["BuildingName"]?></td>
                        <br>
                        <td> Class Id: <?=$row["ClassId"]?></td>
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
        <br>
        <br>
        <br>

        <div id="middleDataShowBigger">
            
            <div id="HeaderForDesc"> 
                Which professor fo you want more information for?
            </div>

            <?php

            $servername = "localhost";
            $username = "darrenfi_homework3";
            $password = "MISHomework3";
            $dbname = "darrenfi_homework_3";
            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT ProfessorID, ProfessorName from Professor";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row["ProfessorID"]?></td>
                <td>
                    <a href="showDataTwo.php?id=<?=$row["ProfessorID"]?>"><?=$row["ProfessorName"]?></a> 
                    <br>                   
                </td>
            </tr>
            <?php
            }
            } else {
            echo "0 results";
            }

            $conn->close();
            ?>

        </div>








    </div>

</body>
</hmtl>