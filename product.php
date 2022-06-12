<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products</title>
    <meta charset="UTF-8">

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

        .card:hover {
            box-shadow: -1px 9px 40px -12px;
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
                <li class="nav-item ">
                    <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminviewproduct.php">View Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">login</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>


<?php
$server = "database-1.cliane4b8n7y.us-east-1.rds.amazonaws.com";
$user = "admin";
$pass = "25mar2000";
// $server = "localhost";
// $user = "root";
// $pass = "";
$dbname = "webproject";
$dbcon = mysqli_connect($server, $user, $pass, $dbname);
$query2 = "select * from tblproducts";
$res = mysqli_query($dbcon, $query2);
$rows = mysqli_num_rows($res);


?>


<html>

<body>

    <div class="container my-5">

        <div class="row">
            <a href="product1.html">
                <div class="col-md-4">
                    <div class="card col-11 mx-auto">
                        <img src="img/product1.jpg" class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Dumplings</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="product1.html" class="btn btn-primary">PRODUCT DETAILS</a>
                        </div>
                    </div>
                </div>
            </a>


            <a href="product2.html">
                <div class="col-md-4">

                    <div class="card col-11 mx-auto">
                        <img src="img/product2.jpg" class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Chow Mein</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="product2.html" class="btn btn-primary">PRODUCT DETAILS</a>
                        </div>
                    </div>
                </div>
            </a>


            <a href="product3.html">
                <div class="col-md-4">
                    <div class="card col-11 mx-auto">
                        <img src="img/product3.jpg" class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Peking Roasted Duck</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="product3.html" class="btn btn-primary">PRODUCT DETAILS</a>
                        </div>
                    </div>
                </div>
            </a>


        </div>
    </div>


    </div>




    <a href="product4.html">
        <div class="container my-5">

            <div class="row">

                <div class="col-md-4">
                    <div class="card col-11 mx-auto">
                        <img src="img/product4.jpg" class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Shrimp with Cashew Nuts</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="product4.html" class="btn btn-primary">PRODUCT DETAILS</a>
                        </div>
                    </div>
                </div>
    </a>


    <a href="product5.html">
        <div class="col-md-4">

            <div class="card col-11 mx-auto">
                <img src="img/product5.jpg" class="card-img-top" alt="..." width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">Sweet and Sour Pork</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="product5.html" class="btn btn-primary">PRODUCT DETAILS</a>
                </div>
            </div>
        </div>
    </a>


    <a href="product6.html">
        <div class="col-md-4">

            <div class="card col-11 mx-auto">
                <img src="img/product6.jpg" class="card-img-top" alt="..." width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">Wontons</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="product6.html" class="btn btn-primary">PRODUCT DETAILS</a>
                </div>
            </div>
        </div>
    </a>


    <?php while ($newres = mysqli_fetch_assoc($res)) { ?>
        <a href="productdetail.php?dname=<?php echo $newres['productname']; ?>">
            <div class="col-md-4">

                <div class="card col-11 my-5">

                    <img src="<?php echo $newres['image'] ?>" class="card-img-top" alt="..." width="200px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $newres['productname'];  ?></h5>
                        <a href="productdetail.php?dname=<?php echo $newres['productname']; ?>" class="btn btn-primary">PRODUCT DETAILS</a>
                    </div>
                </div>

            </div>
        </a>
    <?php } ?>


    </div>
    </div>







    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-12">

                <hr>
                <p>
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <title>Admin</title>
                        <meta charset="UTF-8">

                        <!-- Latest compiled and minified CSS -->
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                        <!-- jQuery library -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                        <!-- Popper JS -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

                        <!-- Latest compiled JavaScript -->
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <link rel="stylesheet" type="text/css" href="login.css">
                        <style>
                            .ic {
                                color: #ff8a07;
                                margin-right: 15px;
                                font-size: 25px !important;
                            }

                            .ic:hover {
                                color: black;

                            }

                            .card:hover {
                                box-shadow: -1px 9px 40px -12px;
                            }
                        </style>
                    </head>

                    <body>







                        <div class="wrapper fadeInDown ">
                            <div id="formContent">
                                <!-- Tabs Titles -->

                                <!-- Icon -->
                                <div class="fadeIn first">
                                    <img src="img/product.png" id="icon" alt="User Icon" />
                                </div>

                                <!-- Login Form -->
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <input type="text" id="productname" class="fadeIn first" name="productname" placeholder="Product name *"><br>
                                    <input type="text" id="productprice" class="fadeIn secound" name="productprice" placeholder="Product price *"><br>
                                    <input type="text" id="productdiscount" class="fadeIn third" name="productdiscount" placeholder="Product discount *"><br>
                                    <input type="text" id="productsize" class="fadeIn fourth" name="productsize" placeholder="Product serving *"><br>
                                    <input type="text" id="productdetails" class="fadeIn fifth" name="productdetails" placeholder="Product details *"><br>
                                    <input type="file" name="file" class="fadeIn sixth"><br>
                                    <input type="submit" name="submit" class="fadeIn seventh">
                                </form>

                            </div>
                        </div>
                    </body>

                    </html>


                    <?php
                    if (isset($_POST['submit'])) {

                        $server = "database-1.cliane4b8n7y.us-east-1.rds.amazonaws.com";
                        $user = "admin";
                        $pass = "25mar2000";
                        $dbcon = mysqli_connect($server, $user, $pass, $dbname);


                        $pname = $_POST['productname'];
                        $pprice = $_POST['productprice'];
                        $pdisc = $_POST['productdiscount'];
                        $psize = $_POST['productsize'];
                        $pdetails = $_POST['productdetails'];
                        $pimage = basename($_FILES['file']['name']);







                        $query = "insert into tblproducts values ('$pname','$pprice','$pdisc','$psize','$pdetails','$pimage')";

                        $result = mysqli_query($dbcon, $query);

                        if ($result) {
                            echo "record inserted successfuly" . "<br>";
                        } else {
                            echo "record not inserted";
                        }
                    }
                    ?>


                    <html>

                    <body>
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
                                    <p>Develop by AMAN,ZEESHAN,WAQAS</p>
                                    </hr>
                                </div>
                            </div>

                    </body>

                    </html>
                </p>
                </hr>
            </div>
        </div>

</body>

</html>