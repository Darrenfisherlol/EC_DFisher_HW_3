<!--
--  Darren Fisher
--  Homework 3
-->

<?php require_once("header.php")?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <h1>Professors Building</h1>

    <div class="card-group">
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

            $sql = "select ProfessorID, ProfessorName, SpellCastingLevel, b.BuildingID, b.BuildingName, b.buildingColor from Professor p join Building b on p.BuildingID=b.BuildingID";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?=$row["ProfessorName"]?></h5>
                <p class="card-text"><ul>
                <?php
                    $section_sql = "select p.ProfessorID, p.ProfessorName, p.SpellCastingLevel, b.BuildingID, b.BuildingName, b.buildingColor from Professor p join Building b on p.BuildingID=b.BuildingID where p.ProfessorID=" . $row["ProfessorID"];
                    $section_result = $conn->query($section_sql);
                    
                    while($section_row = $section_result->fetch_assoc()) {
                        echo "<li> Building Name : " . $section_row["BuildingName"] . "</li>";
                        echo "<li> Building Color: " . $section_row["buildingColor"] . "</li>";
                        echo "<li> Building ID: " . $section_row["BuildingID"] . "</li>";

                    }
                ?>
                </ul></p>
            </div>
        </div>
        <?php
            }
            } else {
            echo "0 results";
            }
            $conn->close();
        ?>
    </card-group>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
