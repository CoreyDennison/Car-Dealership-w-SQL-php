<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/selectAll.css">
    </head>

    <body>

    <h2>Inventory Table</h2>

    <a href="selectAllclients.php">< Clients Table</a>
    <a href="selectAllsales.php">Sales Table ></a>

    <?php

        $user = 'root';
        $pass = '';
        $db = 'car_dealership';

        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

        $sql = "SELECT * FROM inventory";

        $result = mysqli_query($db, $sql) or die("Unable to gather info.");

        echo "<table>";
        echo "<tr><th>inv_id</th><th>manu</th><th>model</th><th>reg</th><th>colour</th><th>price</th><th>status</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>{$row['inv_id']}</td><td>{$row['manu']}</td><td>{$row['model']}</td><td>{$row['reg']}</td><td>{$row['colour']}</td><td>{$row['price']}</td><td>{$row['status']}</td></tr>";
        }
        echo "</table>";

        $db -> close();
    ?>
    
    <!-- SELECT ALL: https://www.youtube.com/watch?v=pc0otVM80Sk -->
    </body>
</html>

