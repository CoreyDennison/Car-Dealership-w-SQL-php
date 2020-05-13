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

    <h2>Sales Table</h2>

    <a href="selectAllinventory.php">< Inventory Table</a>

    <?php

        $user = 'root';
        $pass = '';
        $db = 'car_dealership';

        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

        $sql = "SELECT * FROM sales";

        $result = mysqli_query($db, $sql) or die("Unable to gather info.");

        echo "<table>";
        echo "<tr><th>sale_id</th><th>emp_id</th><th>client_id</th><th>trans_type</th><th>reg</th><th>time_of_sale</th><th>price</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>{$row['sale_id']}</td><td>{$row['emp_id']}</td><td>{$row['client_id']}</td><td>{$row['trans_type']}</td><td>{$row['reg']}</td><td>{$row['time_of_sale']}</td><td>{$row['price']}</td></tr>";
        }
        echo "</table>";
    ?>
    
    <!-- SELECT ALL: https://www.youtube.com/watch?v=pc0otVM80Sk -->
    </body>
</html>

