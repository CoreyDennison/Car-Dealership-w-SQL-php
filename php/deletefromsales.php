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

    <a href="deletefrominventory.php"> < Delete Inventory</a>

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
    <form action="deletefromsales.php" method="post" value=""><br>
        Delete sale with ID... : <input type="number" name="sale_id" value=""/><br>
        <input type="submit" name="submit"/><br>
    </form>


    <?php
        if(isset($_POST['submit'])){
            $saleID = $_POST["sale_id"];

            $user = 'root';
            $pass = '';
            $db = 'car_dealership';

            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

            $sql = "DELETE FROM sales WHERE sale_id = $saleID";
            mysqli_query($db, $sql);
            
            $db -> close();

            header('Refresh: 1');
        }

        
    ?>
    
    </body>
</html>

