<!--
--  Darren Fisher
--  Homework 3
-->


<?php require_once("header.php")?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <h1> Professors in Price</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>BuildingId</th>
                <th>BuildingName</th>
                <th>ClassId</th>
                <th>buildingColor</th>
                <th>buildingSize</th>

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
                //echo $iid;

                $Varname = $_POST["BuildingName"];  

                $sql = "select BuildingId,BuildingName,ClassId,buildingColor,buildingSize from Building where BuildingName like '" . $Varname . "'";
                //echo $sql;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?=$row["BuildingId"]?> </td>
                        <td><?=$row["BuildingName"]?> </td>
                        <td><?=$row["ClassId"]?></td>
                        <td><?=$row["buildingColor"]?></td>
                        <td><?=$row["buildingSize"]?></td>
                    
                        <td><d href="buildingHyperlink?BuildingName=<?=$row["BuildingName"]?>"><?=$row["BuildingName"]?></td>


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
