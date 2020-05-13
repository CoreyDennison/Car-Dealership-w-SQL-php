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

    <h2>Add Employee</h2>

    <a href="insertIntoclients.php">Add Client ></a><br>

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
    <form action="insertIntoemployee.php" method="post" value=""><br>
        Employee ID: <input type="number" name="employee_id" value=""/><br>
        First Name: <input type="text" name="first_name" value=""/><br>
        Last Name: <input type="text" name="last_name" value=""/><br>
        Date Of Birth: <input type="date" name="dob" value=""/><br>
        Manager ID: <input type="number" name="manager_id" value=""/><br>
        Salary: <input type="number" name="salary" value=""/><br>
        <input type="submit" name="submit"/><br>
    </form>


    <?php
        if(isset($_POST['submit'])){
            $empID = $_POST["employee_id"];
            $firstName = $_POST["first_name"];
            $lastName = $_POST["last_name"];
            $dob = $_POST["dob"];
            $mgrID = $_POST["manager_id"];
            $salary = $_POST["salary"];

            $user = 'root';
            $pass = '';
            $db = 'car_dealership';

            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

            $sql = "INSERT INTO employee (emp_id, fname, lname, dob, mng_id, salary) VALUES($empID, '$firstName', '$lastName', '$dob', $mgrID, $salary);";
            mysqli_query($db, $sql);
            
            echo "Successfully added employee to 'Employee' table.";
            
            $db -> close();

            header('Refresh: 1');
        }

        
    ?>
    
    </body>
</html>

