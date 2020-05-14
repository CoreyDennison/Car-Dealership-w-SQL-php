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

    <h2>Delete Inventory</h2>

    <a href="deletefromclients.php"> < Delete Client</a>
    <a href="deletefromsales.php">Delete Sale ></a>

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

<br>
    <form action="deletefrominventory.php" method="post"><br>
        Delete inventory with ID... : <input type="number" name="inv_id" value=""/><br>
        <input type="submit" name="submit"/><br>
    </form>


    <?php

        if(isset($_POST['submit'])){
            $invID = $_POST["inv_id"];

            $user = 'root';
            $pass = '';
            $db = 'car_dealership';

            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

            $sql = "DELETE FROM inventory WHERE inv_id = $invID";
            mysqli_query($db, $sql);  

            $db -> close();

            header('Refresh: 0.5');
        }

    ?>

    </body>
</html>

