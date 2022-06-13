
<?php
        if (isset($_POST['submit'])) {

            $server = "database-1.cliane4b8n7y.us-east-1.rds.amazonaws.com";
            $user = "admin";
            $pass = "25mar2000";
            $dbname = "webproject";
            $dbcon = mysqli_connect($server, $user, $pass, $dbname);


            $qty = $_POST['qty'];
            $fname = $_POST['fname'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $query = "insert into orders values ('$qty','$fname','$contact','$email','$address')";

            $result = mysqli_query($dbcon, $query);

            if ($result) {
                echo "<a href=home.html><center><h1>Sucessfully Place the Order Click Here To go to Home page</h1></center></a>" . "<br>";
            } else {
                echo "An error occured while placing your Order";
            }
        }
