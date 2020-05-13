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

    <h2>Add Sale</h2>

    <a href="insertIntoinventory.php"> < Add Inventory</a>

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

        $db -> close();
    ?>

    <br>
    <form action="insertIntosales.php" method="post" value=""><br>
        Sale ID: <input type="number" name="sale_id" value=""/><br>
        Employee ID: <input type="number" name="emp_id" value=""/><br>
        Client ID: <input type="number" name="client_id" value=""/><br>
        Transaction Type: <input type="text" name="trans_type" value=""/><br>
        Registration Number: <input type="text" name="reg" value=""/><br>
        Time-Of-Sale: <input type="datetime-local" name="tos" value=""/><br>
        Sale Price: <input type="number" name="price" value=""/><br>
        <input type="submit" name="submit"/><br>
    </form>


    <?php
        if(isset($_POST['submit'])){
            $saleID = $_POST["sale_id"];
            $empID = $_POST["emp_id"];
            $clientID = $_POST["client_id"];
            $transType = $_POST["trans_type"];
            $reg = $_POST["reg"];
            $timeOfSale = $_POST["tos"];
            $price = $_POST["price"];

            $user = 'root';
            $pass = '';
            $db = 'car_dealership';

            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

            $sql = "INSERT INTO sales (sale_id, emp_id, client_id, trans_type, reg, time_of_sale, price) VALUES($saleID, $empID, $clientID, '$transType', '$reg', '$timeOfSale', $price);";
            mysqli_query($db, $sql);
            
            $db -> close();

            header('Refresh: 1');
        }

        
    ?>
    
    </body>
</html>

