<!--
--  Darren Fisher
--  Homework 3
-->


<?php require_once("header.php")?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <h1>Students</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>StudentId</th>
                <th>StudentFirstName</th>
                <th>StudentLastName</th>
                <th>ClassId</th>

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
                
                //where b.BuildingName = $VarnameBuilding

                $sql = "select StudentId, StudentFirstName, StudentLastName, ClassId from Student";
                //echo $sql;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                    <td><?=$row["StudentId"]?></td>
                    <td><?=$row["StudentFirstName"]?></td>
                    <td><?=$row["StudentLastName"]?></td>
                    <td><?=$row["ClassId"]?></td>
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
