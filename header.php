<!--
--  Darren Fisher
--  Homework 3
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Darren Fisher HW 3 Ecommerce</title>

    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <!-- Pages -->
        <div>
            <a class="btn btn-primary" href="index.php"  role="button"> Form for php </a> 
            <a class="btn btn-primary" href="showData.php"  role="button"> Home </a> 

            <a class="btn btn-primary" href="adamData.php"  role="button"> Adam Price</a> 
            <a class="btn btn-primary" href="priceDataTwo.php"  role="button"> Price Data</a> 

            <a class="btn btn-primary" href="showDataTwo.php"  role="button"> Show Data 2 levels </a> 

        </div>

        <div>
            </br>
        </div>

        <!-- Connecting to the database -->
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
            echo "Connected successfully";
        ?>
