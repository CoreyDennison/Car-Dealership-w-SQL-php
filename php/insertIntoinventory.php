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

    <h2>Add Inventory</h2>

    <a href="insertIntoclients.php"> < Add Client</a>
    <a href="insertIntosales.php">Add Sale ></a>

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
    <form action="insertIntoinventory.php" method="post"><br>
        Inventory ID: <input type="number" name="inv_id" value=""/><br>
        Manufacturer: <input type="text" name="manu" value=""/><br>
        Model: <input type="text" name="model" value=""/><br>
        Registration Number: <input type="text" name="reg" value=""/><br>
        Colour: <input type="text" name="colour" value=""/><br>
        Price: <input type="number" name="price" value=""/><br>
        Status: <input type="text" name="status" value=""/><br>
        <input type="submit" name="submit"/><br>
    </form>


    <?php

        if(isset($_POST['submit'])){
            $invID = $_POST["inv_id"];
            $manu = $_POST["manu"];
            $model = $_POST["model"];
            $reg = $_POST["reg"];
            $colour = $_POST["colour"];
            $price = $_POST["price"];
            $status = $_POST["status"];

            $user = 'root';
            $pass = '';
            $db = 'car_dealership';

            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

            $sql = "INSERT INTO inventory (inv_id, manu, model, reg, colour, price, status) VALUES($invID, '$manu', '$model', '$reg', '$colour', $price, '$status');";
            mysqli_query($db, $sql);  

            $db -> close();

            header('Refresh: 1');
        }

    ?>

    </body>
</html>

