<!--
--  Darren Fisher
--  Homework 3
-->


<?php require_once("header.php")?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <h1>Sections</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ProfessorID</th>
                <th>Prefix</th>
                <th>Number</th>
                <th>Section</th>
                <th>Instructor</th>
            </tr>
        </thead>
            <tbody>

            <?php
                $servername = "localhost";
                $username = "darrenfi_homework3";
                $password = "MISHomework3";
                $dbname = "darrenfi_homework_3";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                $iid = $_GET['ProfessorID'];
                //echo $iid;

                $sql = "select ProfessorID, Professorname, SpellCastingLevel, b.BuildingID from Professor p join Building b on p.BuildingID=b.BuildingID where p.ProfessorID=" . $iid;
                //echo $sql;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                    <td><?=$row["section_id"]?></td>
                    <td><?=$row["prefix"]?></td>
                    <td><?=$row["number"]?></td>
                    <td><?=$row["section_number"]?></td>
                    <td><?=$row["instructor_name"]?></td>
                    </tr>
                <?php
                }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>