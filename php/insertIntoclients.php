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

    <h2>Add Client</h2>

    <a href="insertIntoemployee.php"> < Add Employee</a>
    <a href="insertIntoinventory.php">Add Inventory ></a>
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
        echo "</table>";

        $db -> close();
    ?>

    <br>
    <form action="insertIntoclients.php" method="post" value=""><br>
        Client ID: <input type="number" name="client_id" value=""/><br>
        First Name: <input type="text" name="first_name" value=""/><br>
        Last Name: <input type="text" name="last_name" value=""/><br>
        Phone Number: <input type="number" name="phone" value=""/><br>
        Address: <input type="text" name="address" value=""/><br>
        <input type="submit" name="submit"/><br>
    </form>


    <?php

        if(isset($_POST['submit'])){
            $clientID = $_POST["client_id"];
            $firstName = $_POST["first_name"];
            $lastName = $_POST["last_name"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];

            $user = 'root';
            $pass = '';
            $db = 'car_dealership';

            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

            $sql = "INSERT INTO clients (client_id, fname, lname, phone, address) VALUES($clientID, '$firstName', '$lastName', $phone, '$address');";
            mysqli_query($db, $sql);      

            $db -> close();

            header('Refresh: 1');
        }

    ?>
    
    </body>
</html>

