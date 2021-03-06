<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/insertIntoinventory.css">
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

        <h3>Add inventory</h3>
        <p class="left"><a href="insertIntoclients.php"><i style="color: red;">&xlarr;</i> Add client</a></p>
        <p class="right" id="r_arrow"><a href="insertIntosales.php">Add sale <i style="color: red; ">&xrarr;</i></a></p>


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
        <label>Inventory ID: </label><input type="number" name="inv_id" value="" style="width: 50px;"/><br>
        <label>Manufacturer: </label><input type="text" name="manu" value=""/><br>
        <label>Model: </label><input type="text" name="model" value=""/><br>
        <label>Registration Number: </label><input type="text" name="reg" value=""/><br>
        <label>Colour: </label><input type="text" name="colour" value=""/><br>
        <label>Price: </label><input type="number" name="price" value=""/><br>
        <label>Status: </label><input type="text" name="status" value=""/><br>
        <button type="submit" name="submit">Submit</button><br>
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

            //Refreshes current page after 1 second
            echo "<meta http-equiv='refresh' content='1'>";
        }

    ?>

    </body>
</html>

