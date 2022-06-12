<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contactus</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">login</a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="container">
        <form method="post" class="mt-5" action="">
            <div class="row">




                <div class="col-md-8">


                    <fieldset>
                        <div class="form-group">
                            <label for="first"><b>NAME : </b></label>
                            <input type="text" class="form-control" name="first" id="first" placeholder="enter your name" size="20" maxlength="10" value="">
                        </div>


                        <div class="form-group">
                            <label for="second"><b>EMAIL : </b></label>
                            <input class="form-control" id="second" type="email" name="email" placeholder="xxxxxxxxx@gmail.com">
                        </div>


                        <div class="form-group">
                            <label for="phone"><b>PHONE : </b></label>
                            <input type="numberl" class="form-control" name="phone" id="phone" placeholder="030xxxxxxxx">
                        </div>


                        <div class="form-group">
                            <label class=""><b>REGISTER YOUR SELF</b></label>
                            <form>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
                                    <label class="custom-control-label" for="customRadio">First time</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="custom" name="example1" value="customEx">
                                    <label class="custom-control-label" for="custom">Already done</label>
                                </div>
                            </form>
                        </div>


                        <div class="form-group">
                            <label for="comment">Review:</label>
                            <textarea name="textarea" id="textarea" class="form-control" rows="5" id="comment"></textarea>
                        </div>

                        <div class="container"></div>
                        <input type="Reset" name="rest" class="btn btn-primary">
                        <input type="Submit" name="submit" class="btn btn-primary">

                    </fieldset>
        </form>
        <?php
        if (isset($_POST['submit'])) {

            $server = "database-1.cliane4b8n7y.us-east-1.rds.amazonaws.com";
            $user = "admin";
            $pass = "25mar2000";
            $dbname = "webproject";
            $dbcon = mysqli_connect($server, $user, $pass, $dbname);


            $first = $_POST['first'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $textarea = $_POST['textarea'];

            $query = "insert into contactus values ('$first','$email','$phone','$textarea')";

            $result = mysqli_query($dbcon, $query);

            if ($result) {
                echo "record inserted successfuly" . "<br>";
            } else {
                echo "record not inserted";
            }
        }
        ?>

    </div>




    <div class="col-md-4 ">
        <div id="address pt-5">
            <B>Address :</B>
            <p>COMSATS University Sahiwal Campus</p>
        </div>
        <div id="">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1716.3640227353499!2d73.14807365337333!3d30.641621095913923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1655044197838!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <!-- <iframe src="https://maps.google.com/maps?q='+30.64163030546869+','+73.14827014867772+'&hl=es&z=14&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27195.854406286155!2d74.34660895315363!3d31.565833172618788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191ab43100bd61%3A0x6fca2c2899c49c9d!2sMughalpura%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604239156472!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
        </div>
    </div>




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
                <p>@copyright2020 chinese cusine</p>
                </hr>
            </div>
        </div>

</body>

</html>