<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dumplings</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .ic {
            color: #ff8a07;
            margin-right: 15px;
            font-size: 25px !important;
        }

        .ic:hover {
            color: black;

        }
    </style>
</head>

<body>



    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="home.html"><img src="img/logo.png" height="150px" width="150px"></a>
        <ul>
            <li style="display:inline">
                <a href="#"><i class="fa fa-instagram ic"></i></a>
            </li>
            <li style="display:inline">
                <a href="#"><i class="fa fa-facebook ic"></i></a>

            </li>
            <li style="display:inline">
                <a href="#"><i class="fa fa-twitter ic"></i></a>

            </li>
            <li style="display:inline">
                <a href="#"><i class="fa fa-whatsapp ic"></i></a>

            </li>
        </ul>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.html">Contact Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="productdetail.php">Product Details</a>
                </li>
            </ul>
        </div>
    </nav>



    <?php
    $server = "database-1.cliane4b8n7y.us-east-1.rds.amazonaws.com";
    $user = "admin";
    $pass = "25mar2000";
    //   $server="localhost";
    //   $user="root";
    //   $pass="";
    $dbname = "webproject";
    $dbcon = mysqli_connect($server, $user, $pass, $dbname);
    $query2 = "select * from tblproducts where productname='" . $_GET['dname'] . "'";
    $res = mysqli_query($dbcon, $query2);
    $rows = mysqli_num_rows($res);
    $newres = mysqli_fetch_assoc($res);

    ?>

    <div class="container">

        <div class="row">


            <div class="offset-2 col-md-5 mt-4">

                <img src="<?php echo $newres['image'] ?>" class="card-img-top" alt="product1.html" width="200px" height="250px">

            </div>


            <div class=" offset-1 col-md-3 ">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $newres['productname'];      ?></h5>
                    <p class="card-text">

                    <p>
                        <b>Price</b>=<b><?php echo $newres['productprice']; ?></b>
                    </p>

                    <p><b><?php echo $newres['productdiscount'];      ?></b>discount for UNIVERSITY OF LAHORE STUDENTS</p>
                    <p>DISH SERVING : <?php echo $newres['productsize'];      ?> persons</p>
                    <p><a href="#" class="btn btn-primary">ORDER NOW</a></p>

                    </p>
                </div>
            </div>


        </div>
        <br><br>
        <h1><b>PRODUCT DETAILS</b></h1>
        <div class="">
            <p class="text-break">

                <?php echo $newres['productdetails'];      ?>
            </p>
        </div>

    </div>




    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-12">
                <ul>
                    <li style="display:inline">
                        <a href="#"><i class="fa fa-instagram ic"></i></a>
                    </li>
                    <li style="display:inline">
                        <a href="#"><i class="fa fa-facebook ic"></i></a>

                    </li>
                    <li style="display:inline">
                        <a href="#"><i class="fa fa-twitter ic"></i></a>

                    </li>
                    <li style="display:inline">
                        <a href="#"><i class="fa fa-whatsapp ic"></i></a>

                    </li>
                </ul>


                <hr>
                <p>@copyright2022 chinese cusine</p>
                </hr>
            </div>
        </div>
    </div>





</body>

</html>