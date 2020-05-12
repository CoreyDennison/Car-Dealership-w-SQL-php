<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/employeeAll.css">
    </head>

    <body>

    <h2>Employee table</h2>

    <a href="selectAllclients.php">></a>

    <?php

        $user = 'root';
        $pass = '';
        $db = 'car_dealership';

        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

        $sql = "SELECT * FROM employee";

        $result = mysqli_query($db, $sql) or die("Unable to gather info.");

        echo "<table>";
        echo "<tr><th>emp_id</th><th>fname</th><th>lname</th><th>DOB</th><th>mgr_id</th><th>salary</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>{$row['emp_id']}</td><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['dob']}</td><td>{$row['mng_id']}</td><td>{$row['salary']}</td></tr>";
        }
        echo "</table>"
    ?>
    
    <!-- SELECT ALL: https://www.youtube.com/watch?v=pc0otVM80Sk -->
    </body>
</html>

