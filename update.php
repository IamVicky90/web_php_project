
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
                <a class="nav-link" href="home.html">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="adminhome.php"> Add Product <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminviewproduct.php">View Product</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="login.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>


<?php

$user_id=$_GET['uname'];
$server = "database-1.cliane4b8n7y.us-east-1.rds.amazonaws.com";
$user = "admin";
$pass = "25mar2000";
// $server="localhost";
//   $user="root";
//   $pass="";
  $dbname="webproject";
  $dbcon = mysqli_connect($server,$user,$pass,$dbname);

$user_data=mysqli_fetch_array(mysqli_query($dbcon, "SELECT * FROM tblproducts where productname='".$user_id."'"));


?>



<div class="wrapper fadeInDown ">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/product.png" id="icon" alt="User Icon" />
    </div>

     <form method="POST" action="" enctype="multipart/form-data">
      <input type="text" id="productname" value="<?php echo $user_data['productname'] ?>" class="fadeIn first" name="productname" placeholder="Product name *"><br>
      <input type="text" id="productprice" value="<?php echo $user_data['productprice'] ?>" class="fadeIn secound" name="productprice" placeholder="Product price *"><br>
      <input type="text" id="productdiscount" value="<?php echo $user_data['productdiscount'] ?>" class="fadeIn third" name="productdiscount" placeholder="Product discount *"><br>
      <input type="text" id="productsize" 
     value="<?php echo $user_data['productsize'] ?>" class="fadeIn fourth" name="productsize" placeholder="Product serving *"><br>
      <input type="text" id="productdetails" value="<?php echo $user_data['productdetails'] ?>" class="fadeIn fifth" name="productdetails" placeholder="Product details *"><br>
      <input type="file" name="file" class="fadeIn sixth">
      <input type="submit" name="submit" class="fadeIn seventh" >
    </form>
  </div>
</div>
</body>
</html>


<?php 

if(isset($_POST['submit']))
{

    $pname= $_POST['productname'];  
      $pprice= $_POST['productprice']; 
      $pdisc= $_POST['productdiscount']; 
      $psize= $_POST['productsize']; 
      $pdetails= $_POST['productdetails'];
      $pimage= $_FILES['file']['name'];


      $target="uploads/".basename($pimage);

      move_uploaded_file($_FILES['file']['tmp_name'], $target);

    $sqlu="UPDATE tblproducts SET productname = '$pname',productprice='$pprice',productdiscount='$pdisc',productsize='$psize',productdetails='$pdetails',image='$pimage' WHERE productname = '$user_id'";
  $dbcon->query($sqlu);
    header('Location:adminviewproduct.php?message=Updated Successfully');
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
        <p>@copyright2020 chinese cusine</p>
    </hr>
          </div>
      </div>

</body>
</html>