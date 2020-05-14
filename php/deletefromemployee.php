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

    <h2>Delete Employee</h2>

    <a href="deletefromclients.php">Delete Client ></a><br>

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
        echo "</table>";

        $db -> close();
    ?>

    <br>
    <form action="deletefromemployee.php" method="post" value=""><br>
        Delete employee with ID... : <input type="number" name="employee_id" value=""/><br>
        <input type="submit" name="submit"/><br>
    </form>


    <?php
        if(isset($_POST['submit'])){
            $empID = $_POST["employee_id"];

            $user = 'root';
            $pass = '';
            $db = 'car_dealership';

            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

            $sql = "DELETE FROM employee WHERE emp_id = $empID";
            mysqli_query($db, $sql);
            
            $db -> close();

            header('Refresh: 1');
        }

        
    ?>
    
    </body>
</html>

