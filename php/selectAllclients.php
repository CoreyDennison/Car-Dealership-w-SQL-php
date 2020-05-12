<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/clientsAll.css">
    </head>

    <body>

    <h2>Clients table</h2>

    <a href="selectAllemployee.php">></a>

    <?php

        $user = 'root';
        $pass = '';
        $db = 'car_dealership';

        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

        $sql = "SELECT * FROM clients";

        $result = mysqli_query($db, $sql) or die("Unable to gather info.");

        echo "<table>";
        echo "<tr><th>client_id</th><th>fname</th><th>lname</th><th>phone</th><th>address</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>{$row['client_id']}</td><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['phone']}</td><td>{$row['address']}</td></tr>";
        }
        echo "</table>"
    ?>
    
    <!-- SELECT ALL: https://www.youtube.com/watch?v=pc0otVM80Sk -->
    </body>
</html>

