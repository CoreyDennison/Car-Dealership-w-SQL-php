<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/insertIntoemployee.css">
        <link rel="stylesheet" type="text/css" href="../css/box.css">
        <link rel="stylesheet" type="text/css" href="../css/reset.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- ************ JQuery ************ -->
    <script>
        $(window).resize(function() {
            if ($(window).width() > 810) {
                $("#hamburger_icon").css("display", "none");
                $("#hamburger_icon2").css("display", "none");
                $("#hamburger_menu").css("display", "none");
            }

            else if ($(window).width() < 835) {
                $("#hamburger_icon").css("display", "block");
                $("#hamburger_icon2").css("display", "none");
                $("#hamburger_menu").css("display", "none");
            }
        });
    </script>

    <!-- *********** JavaScript *********** -->
    <script>
        function hamburger_menu(){
            document.getElementById("hamburger_icon").style.display="none";
            document.getElementById("hamburger_icon2").style.display="block";
            document.getElementById("hamburger_menu").style.display="block";
            document.getElementById("r_arrow").style.display="none";

        }

        function hamburger_menu2(){
            document.getElementById("hamburger_icon").style.display="block";
            document.getElementById("hamburger_icon2").style.display="none";
            document.getElementById("hamburger_menu").style.display="none";
            document.getElementById("r_arrow").style.display="block";
        }
    </script>

</head>

    <body>

        <div id="header">
            <a href="../html/index.html"><img src="../images/logo.png" alt="Mac Motors logo" height="60px" width="160px"/></a>
            
            <nav>
                <ul>
                    <li><a href="#"></a>Employees
                        <ul>
                            <li><a href="../php/selectAllemployee.php">View all employees</a></li>
                            <li><a href="../php/insertIntoemployee.php">Add employee</a></li>
                            <li><a href="../php/deletefromemployee.php">Remove employee</a></li>
                            <li><a href="../php/updateEmployee.php">Edit employee</a></li>
                        </ul>
                    </li>
                <ul>
                    <li><a href="#"></a>Clients
                        <ul>
                            <li><a href="../php/selectAllclients.php">View all clients</a></li>
                            <li><a href="../php/insertIntoclients.php">Add client</a></li>
                            <li><a href="../php/deletefromclients.php">Remove client</a></li>
                            <li><a href="../php/updateClient.php">Edit client</a></li>
                        </ul>
                    </li>
                <ul>
                    <li><a href="#"></a>Inventory
                        <ul>
                            <li><a href="../php/selectAllinventory.php">View all inventory</a></li>
                            <li><a href="../php/insertIntoinventory.php">Add inventory</a></li>
                            <li><a href="../php/deletefrominventory.php">Remove inventory</a></li>
                            <li><a href="../php/updateInventory.php">Edit inventory</a></li>
                        </ul>
                    </li>
                <ul>
                    <li><a href="#"></a>Sales
                        <ul>
                            <li><a href="../php/selectAllsales.php">View all sales</a></li>
                            <li><a href="../php/insertIntosales.php">Add sale</a></li>
                            <li><a href="../php/deletefromsales.php">Remove sale</a></li>
                            <li><a href="../php/updateSale.php">Edit Sale</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div id="hamburger_icon" onclick="hamburger_menu()">
                <img src="../images/ham_bars.jpg" width="50px" height="40px">
            </div>

            <div id="hamburger_icon2" onclick="hamburger_menu2()">
                <img src="../images/ham_bars2.jpg" width="50px" height="40px">
            </div>

        </div>

        <div id="hamburger_menu">
            <h2>Employees</h2>
            <ul>
                <li><a href="../php/selectAllemployee.php">View all employees</a></li>
                <li><a href="../php/insertIntoemployee.php">Add employee</a></li>
                <li><a href="../php/deletefromemployee.php">Remove employee</a></li>
                <li><a href="../php/updateEmployee.php">Edit employee</a></li>
            </ul>

            <h2>Clients</h2>
            <ul>
                <li><a href="../php/selectAllclients.php">View all clients</a></li>
                <li><a href="../php/insertIntoclients.php">Add client</a></li>
                <li><a href="../php/deletefromclients.php">Remove client</a></li>
                <li><a href="../php/updateClient.php">Edit client</a></li>
            </ul>

            <h2>Inventory</h2>
            <ul>
                <li><a href="../php/selectAllinventory.php">View all inventory</a></li>
                <li><a href="../php/insertIntoinventory.php">Add inventory</a></li>
                <li><a href="../php/deletefrominventory.php">Remove inventory</a></li>
                <li><a href="../php/updateInventory.php">Edit inventory</a></li>
            </ul>

            <h2>Sales</h2>
            <ul>
                <li><a href="../php/selectAllsales.php">View all sales</a></li>
                <li><a href="../php/insertIntosales.php">Add sale</a></li>
                <li><a href="../php/deletefromsales.php">Remove sale</a></li>
                <li><a href="../php/updateSale.php">Edit Sale</a></li>
            </ul>
        </div>


        <h3>Add Employee</h3>
        <p id="r_arrow"><a href="insertIntoclients.php">Add client <i style="color: red; ">&xrarr;</i></a></p>


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
        <label>Employee ID: </label><input class="num" type="number" name="employee_id" value="" style="width: 50px;"/><br>
        <label>First Name: </label><input type="text" name="first_name" value=""/><br>
        <label>Last Name: </label><input type="text" name="last_name" value=""/><br>
        <label>Date Of Birth: </label><input type="date" name="dob" value=""/><br>
        <label>Manager ID: </label><input type="number" name="manager_id" value="" style="width: 50px;"/><br>
        <label>Salary: </label><input type="number" name="salary" value=""/><br>
        <button type="submit" name="submit">Submit</button><br>
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
            
            $db -> close();

            //Refreshes current page after 1 second
            echo "<meta http-equiv='refresh' content='1'>";
        }

        
    ?>
    
    </body>
</html>

