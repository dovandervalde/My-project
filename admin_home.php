<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
  echo '<script type="text/javascript">window.alert("You tried to access inside!\nYou must log in first")</script>';
    echo '<script type="text/javascript">window.location="admin_login.php"</script>';
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: admin_login.php");
  }

?>
<?php 

  $connect = mysqli_connect("localhost","root","","practice");

  $sql = "SELECT count(id) AS total FROM ad_patient";
  $result = mysqli_query($connect, $sql);
  $values = mysqli_fetch_assoc($result);
  $num_rows = $values['total'];
?>

<?php 

  $connect = mysqli_connect("localhost","root","","practice");

  $sql = "SELECT count(id) AS total FROM old_patient";
  $result = mysqli_query($connect, $sql);
  $values = mysqli_fetch_assoc($result);
  $num_row = $values['total'];
?>

<?php 

  $connect = mysqli_connect("localhost","root","","practice");

  $sql = "SELECT count(id) AS total FROM old_patient WHERE Consultation_Purpose = 'Adult Immunization'";
  $result = mysqli_query($connect, $sql);
  $values = mysqli_fetch_assoc($result);
  $num_ro = $values['total'];
?>

<?php 

  $connect = mysqli_connect("localhost","root","","practice");

  $sql = "SELECT count(id) AS total FROM old_patient WHERE Consultation_Purpose = 'Child Immunization'";
  $result = mysqli_query($connect, $sql);
  $values = mysqli_fetch_assoc($result);
  $num_r = $values['total'];
?>
<?php 

  $connect = mysqli_connect("localhost","root","","practice");

  $sql = "SELECT count(id) AS total FROM stock_update";
  $result = mysqli_query($connect, $sql);
  $values = mysqli_fetch_assoc($result);
  $num_ = $values['total'];
?>

<?php 
// for viewing all record
  $connect = mysqli_connect("localhost","root","","practice");

  $sql = "SELECT count(id) AS total FROM old_patient WHERE Consultation_Purpose = 'Family Planning'";
  $result = mysqli_query($connect, $sql);
  $values = mysqli_fetch_assoc($result);
  $numw = $values['total'];
?>

<?php 
// for viewing all record
  $connect = mysqli_connect("localhost","root","","practice");

  $sql = "SELECT count(id) AS total FROM old_patient WHERE Consultation_Purpose = 'prenatal'";
  $result = mysqli_query($connect, $sql);
  $values = mysqli_fetch_assoc($result);
  $num = $values['total'];
?>
<!DOCTYPE html>
<html>
<title>Barangay Health Center</title>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:00 GMT -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="icon" type="image/png" href="Pictures/logo2.jpg">
<link rel="stylesheet" href="../w3-theme-teal.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}
</style>
<body class="w3-light-grey">

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:5;width:300px; ">

<h4 style="margin-top: 0px; color: white; letter-spacing: 5px; background-color: #099ca5; padding: 54px" class="w3-card-4 w3-round"><center>Administrator</center></h4>
  <a href="admin_home.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Home</a>
  <a href="patient_enrollment_record.php">Patient Enrollment Record</a>

  <a href="patient_record.php">Individual Treatment Record</a>

  <div class="w3-accordion">
    <a onclick="myAccFunc()" href="#">Consultation Purpose</a>
    <div id="demoAcc" class="w3-accordion-content w3-white w3-card-4">
      <a href="adult_immu.php">Adult Immunization</a>
      <a href="child_immu.php">Child Immunization</a>
      <a href="family_planning.php">Family Planning</a>
      <a href="prenatal.php">Prenatal</a>
    </div>
  </div>

 <div class="w3-accordion">
    <a onclick="myAccFunct()" href="#">Medicine</a>
    <div id="demoAcct" class="w3-accordion-content w3-white w3-card-4">
      <a href="add_medicine.php">Add Medicine</a>
      <a href="add_stock.php">Add Stock</a>
      <a href="view_medicine.php">View Stocks</a>
      <a href="checkup_patient.php">Checkup Patient</a>
    </div>
  </div>

   <div class="w3-dropdown-click">
    <a onclick="myDropFunc()" href="#">Account</a>
    <div id="demoDrop" class="w3-dropdown-content w3-white w3-card-4">
      <a href="register.php">Create an Admin Account</a>
      <a href="#">Change Password</a>
      <a href="view_admin_account.php">View Account</a>
    </div>
  </div>
  <a class="navbar-brand" href="login_history.php">Login history</a>
  
  <a class="navbar-brand" href="logout.php?logout">Log out</a>
 	
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

    <div class="w3-main" style="margin-left:310px;">

        <div id="myTop" class="w3-top w3-container w3-padding-16 w3-large" style="background-color: #099ca5; color: white">
      <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Brgy. Health Center</span>
</div>

<header class="w3-containerw w3-round w3-card-4 w3-padding-30 w3-padding-jumbo" style="background-color: #099ca5; color: white">
  <h1 class="w3-xxlarge w3-padding-" style="letter-spacing: 3px">BRGY. HEALTH CENTER</h1>
</header>
<br />
<div class="w3-container w3-padding">
<div class="w3-row-padding">
  <div class="w3-col m12">
    <div class="w3-container w3-light-grey w3-card-4 w3-round">
      <span class="w3-opennav w3-xlarge" onclick="w3_open()" style="display:none">&#9776;</span>
      <h3 style="color: teal; letter-spacing: 4px; padding: 5px;"><b>Admin Dashboard</b></h3>
    </div>
  </div>
</div>
<br>

<div class="w3-row-padding">
  <div class="w3-quarter">
   <div class="w3-card-4 w3-round w3-light-grey w3-padding">
     
      <h4 style="color: #099ca5"><a href="patient_enrollment_record.php">Patient Enrollment Record</a></h4>
      <p style="color: gray"><b>(<?php echo $num_rows; ?>)</b> records</p> 
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-4 w3-light-grey w3-padding w3-round">
      <h4 style="color: #099ca5"><a href="patient_record.php">Individual Treatment Record</a></h4>
      <p style="color: gray"><b>(<?php echo $num_row; ?>)</b> records</p> 
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-4 w3-light-grey w3-padding w3-round">
      <h4 style="color: #099ca5"><a href="adult_immu.php">Adult Immunization</a></h4>
      <p style="color: gray"><b>(<?php echo $num_ro; ?>)</b> records</p> 
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-4 w3-light-grey w3-padding w3-round">
      <h4 style="color: #099ca5"><a href="child_immu.php">Child Immunization</a></h4>
      <p style="color: gray"><b>(<?php echo $num_r; ?>)</b> records</p> 
    </div>
  </div>
</div>
<br />

<div class="w3-row-padding">
  <div class="w3-quarter">
    <div class="w3-card-4 w3-light-grey w3-padding w3-round">
      <h4 style="color: #099ca5"><a href="family_planning.php"">Family Planning</a></h4>
      <p style="color: gray"><b>(<?php echo $numw; ?>)</b> records</p> 
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-4 w3-light-grey w3-padding w3-round">
      <h4 style="color: #099ca5"><a href="prenatal.php">Prenatal</h4>
      <p style="color: gray">(<?php echo $num; ?>)</p> 
    </div>
  </div>

<div class="w3-quarter">
    <div class="w3-card-4 w3-light-grey w3-padding w3-round">
      <h4 style="color: #099ca5"><a href="view_medicine.php">Medicine Stock</a></h4>
      <p style="color: gray"><b>(<?php echo $num_; ?>)</b> records</p> 
    </div>
  </div>





</div> <!-- End main -->
     <style>
      a {
        text-decoration: none;
      }  
     </style>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%"
  document.getElementsByClassName("w3-sidenav")[0].style.width ="25%";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
  document.getElementsByClassName("w3-opennav")[0].style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
  document.getElementsByClassName("w3-opennav")[0].style.display = "inline-block";
}
</script>
</div>

<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4");
    }
}

function myFunc(id) {
    document.getElementById(id).classList.toggle("w3-show");
    document.getElementById(id).previousElementSibling.classList.toggle("w3-theme");
}
</script>

<script>
function myAccFunc() {
    document.getElementById("demoAcc").classList.toggle("w3-show");
    document.getElementById("demoAcc").previousElementSibling.classList.toggle("w3-light-grey");
}

function myDropFunc() {
    document.getElementById("demoDrop").classList.toggle("w3-show");
    document.getElementById("demoDrop").previousElementSibling.classList.toggle("w3-light-grey");
}
</script>

<script>
function myAccFunct() {
    document.getElementById("demoAcct").classList.toggle("w3-show");
    document.getElementById("demoAcct").previousElementSibling.classList.toggle("w3-light-grey");
}

function myDropFunct() {
    document.getElementById("demoDrop").classList.toggle("w3-show");
    document.getElementById("demoDrop").previousElementSibling.classList.toggle("w3-light-grey");
}
</script>
     

     <script>
function myFunction(id) {
    document.getElementById(id).classList.toggle("w3-show");
    document.getElementById(id).previousElementSibling.classList.toggle("w3-red");
}
</script>
</body>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:04 GMT -->
</html> 