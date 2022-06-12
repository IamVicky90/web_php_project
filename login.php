<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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


    

    .ic{
    color:#ff8a07;
    margin-right:15px;
    font-size: 25px !important;
}
.ic:hover{
    color:black;
    
}
.card:hover{
    box-shadow: -1px 9px 40px -12px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="home.html"><img src="img/logo.png" height="150px" width="150px"></a>
  <ul >
      <li style="display:inline" >
          <a href="#"><i class="fa fa-instagram ic" ></i></a>
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
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">login</a>
            </li>
        </ul>
    </div>
</nav>



  <div class="wrapper fadeInDown ">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/login.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"><br>
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password"><br>
      <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="signup.php">Don't have an accound?</a>
    </div>

  </div>

  <?php
    $server = "database-1.cliane4b8n7y.us-east-1.rds.amazonaws.com";
    $user = "admin";
    $pass = "25mar2000";
    $dbname = "webproject";
    $db = mysqli_connect($server, $user, $pass, $dbname);
      if(isset($_POST['submit']))
      {
        $uname=$_POST['login'];
        $passwrd=$_POST['password'];

        if($uname !="" && $passwrd !="") 
        {
          $query = "select * from signup where fullname = '".$uname. "' and password_ ='".$passwrd."' ";

          $result = mysqli_query($db,$query);
          $row = mysqli_num_rows($result);

          if($row>0)
          {
            session_start();
            $_SESSION['username'] = $uname;
            $_SESSION['userpassword'] = $passwrd;
            header('location: adminhome.php');
          }
          else
          {
             echo "username or password invLID ";
          }
        }
      }
   ?>



 
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