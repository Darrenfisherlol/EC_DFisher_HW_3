<!--
--  Darren Fisher
--  Homework 3
-->

<?php require_once("header.php")?>

    <div id="Background">

        <!-- This is the 1st 1/2 of the page top section-->
        <div id="headerShowDate">
        
        <div id="HeaderForDesc">
            PHP post output:
        </div>
            The building you wanted is: <?php echo $_POST["BuildingName"]; ?><br>
            The class you signed up for is: <?php echo $_POST["ClassId"]; ?><br> 
        </div>

        <br>
        <br>

        <div id="middleDatashow">

            <div id="HeaderForDesc"> 
                Query of the building the user entered:
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
            <br>
        </div>

        <div id="middleDatashow">
            
            <br>

            <div id="HeaderForDesc"> 
                Query of the Class the user entered:
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
                Building information:
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
        
        <div id="middleDataShowBigger"> 
            
            <br>

            <div id="HeaderForDesc">
                Students at OU:
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

                $sql = "SELECT StudentFirstName, StudentId, StudentLastName, ClassName  FROM Student s join Class c on s.ClassId=c.ClassId";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td> Student: <?=$row["StudentFirstName"]?> <?=$row["StudentLastName"]?></td>
                        <br>
                        <td> Student Id: <?=$row["StudentId"]?></td>
                        <br>
                        <td> Class name: <?=$row["ClassName"]?></td>
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



        <div id="middleDatashow">
            
            <br>

            <div id="HeaderForDesc"> 
                Which builidng do you want to sort by?
            </div>

            <br>

            <a class="btn btn-info" href="adamData.php"  role="button"> Adam Price</a> 
            <a class="btn btn-info" href="priceData.php"  role="button"> Price Data</a> 

        </div>


        <div id="middleDatashow">            
        
            <div id="HeaderForDesc"> 
                Check out level two data:
            </div>

            <br>

            <a class="btn btn-info" href="showDataTwo.php"  role="button"> Professors & Building</a> 

        </div>

    </div>

</body>
</hmtl>