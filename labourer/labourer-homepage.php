
<?php
session_start();
if(!isset($_SESSION['firstName'])){
    echo "<script>alert('You must login to view this page');</script>";
    echo "<script>window.location.href='../login.php';</script>";
}
?>
<?php
if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['firstName']);
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Labourer Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <style>
    .container1 {
      display: flex;
      flex-direction: column;
      cursor: pointer;
      left: 0px;
    }
    
    .bar1, .bar2, .bar3 {
      width: 35px;
      height: 5px;
      background-color: #333;
      margin: 2px 0;
      transition: 0.4s;
    }
    
    .change .bar1 {
      -webkit-transform: rotate(-45deg) translate(-9px, 6px);
      transform: rotate(-45deg) translate(-9px, 6px);
    }
    
    .change .bar2 {opacity: 0;}
    
    .change .bar3 {
      -webkit-transform: rotate(45deg) translate(-8px, -8px);
      transform: rotate(45deg) translate(-8px, -8px);
    }
    </style>

</head>

<body>
<?php include '../header.php' ?>
<?php include '../connection.php' ?>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark text-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?php echo $_SESSION['firstName']; echo " ".$_SESSION['lastName']; ?></div>
      <div class="list-group list-group-flush">
        <a href="labourer-homepage.php" class="list-group-item list-group-item-action bg-dark text-white">Home</a>
        <a href="myProfile.php" class="list-group-item list-group-item-action bg-dark text-white">My Profile</a>
        <a href="recievedOrders.php" class="list-group-item list-group-item-action bg-dark text-white">Recieved Orders</a>
        <form action="" method="POST">
        <a class="list-group-item list-group-item-action bg-dark  text-white"><button type="submit" name="logout" style="border:none; background: none;" class="text-white">Logout</button></a>
        </form>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <!-- <button class="btn btn-primary" id="menu-toggle">Menu Bar</button> -->
        <div id="menu-toggle" class="container1">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    </nav>
      <div class="container-fluid">
        <h3 class="text-center">ADD PROFILE</h3>
        <div class="container border p-4">
          <form action="" method="POST">
             <div class="form-group">
               <label for="currentPassword">Area:</label>
               <select name="area" class="form-control">
                   <option>Thiruvananthapuram</option>
                   <option>Kollam</option>
                   <option>Pathanamthitta</option>
                   <option>Alappuzha</option>
                   <option>Kottayam</option>
                   <option>Idukki</option>
                   <option>Ernakulam</option>
                   <option>Thrissur</option>
                   <option>Palakkad</option>
                   <option>Malappuram</option>
                   <option>Kozhikode</option>
                   <option>Wayanad</option>
                   <option>Kannur</option>
                   <option>Kasargod</option>
               </select>
             </div>
             <div class="form-group">
               <label for="newPassword">Job Title:</label>
               <select name="jobTitle" class="form-control">
                   <option>Barn Worker</option>
                   <option>Apiary Worker</option>
                   <option>Attendant</option>
                   <option>Stock Yard Baler</option>
                   <option>Baling Machine Operator</option>
                   <option>Agriculture Economist</option>
                   <option>Farm Manager</option>
                   <option>Agricultural Salesperson</option>
                   <option>Plougher</option>
                   <option>Grafter</option>
                   <option>Pasture Rider</option>
                   <option>Sprayer</option>
               </select>
             </div>
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
   <?php include('updateProfileServer.php') ?>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>