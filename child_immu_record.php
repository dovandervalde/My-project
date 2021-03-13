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
<?php include('server.php');include('header.php'); ?>

<body class="w3-light-grey">
    

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:5;width:300px; ">

<h4 style="margin-top: 0px; color: white; letter-spacing: 5px; background-color: #099ca5; padding: 41px" class="w3-card-4 w3-round"><center>Administrator</center></h4>
  <a href="admin_home.php" style="color: black;">Home</a>
  <a href="patient_enrollment_record.php" style="color: black;">Patient Enrollment Record</a>

  <a href="patient_record.php" style="color: black;">Individual Treatment Record</a>

  <div class="w3-accordion">
    <a onclick="myAccFunc()" href="#" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Consultation Purpose</a>
    <div id="demoAcc" class="w3-accordion-content w3-white w3-card-4">
      <a href="#" style="color: black;">Adult Immunization</a>
      <a href="child_immu.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Child Immunization</a>
      <a href="family_planning.php" style="color: black;">Family Planning</a>
      <a href="#" style="color: black;">Postpatrum</a>
      <a href="prenatal.php" style="color: black;">Prenatal</a>
    </div>
  </div>
   <div class="w3-dropdown-click">
    <a onclick="myDropFunc()" href="#" style="color: black;">Account</a>
    <div id="demoDrop" class="w3-dropdown-content w3-white w3-card-4">
      <a href="register.php" style="color: black;">Create an Admin Account</a>
      <a href="#" style="color: black;">Change Password</a>
      <a href="view_admin_account.php"style="color: black;">View Account</a>
    </div>
  </div>
  <a class="navbar-brand" href="logout.php?logout" style="color: black;">Log out</a>
 	
</nav>
<?php
    //for displaying records
        include('connectDB.php');
        $get_id=$_GET['id'];
        $result = mysql_query("SELECT * FROM old_patient WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
            $Lastname=$row['Lastname'];
            $Firstname=$row['Firstname'];
            $Middlename=$row['Middlename'];
            $Age=$row['Age'];
            $Residential_Address=$row['Residential_Address'];
            $patient_id=$row['patient_id'];
            $Consultation_Purpose=$row['Consultation_Purpose'];
            $old=$row['old'];
         }
         ?>

         

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

    <div class="w3-main" style="margin-left:310px;">

        <div id="myTop" class="w3-top w3-container w3-padding-16 w3-large" style="background-color: #099ca5; color: white">
      <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Brgy. Health Center</span>
</div>

<header class="w3-container w3-round w3-card-4 w3-padding-25 w3-padding-jumbo" style="background-color: #099ca5; color: white">
  <h2 class="w3-xxlarge w3-padding-" style="letter-spacing: 3px">Consultation Purpose</h1>
</header>

<hr>
     <div class="pull-right">  

        <script type="text/javascript">
            jQuery(document).ready(function() {
            ('#add').popover('show')
            $('#add').popover('hide')

            });
        </script>
  

        </div>
<div class="w3-container" style="width: 100%">
  <div class="header " style="background-color: ; padding: 5px; width: 100%; color: gray; letter-spacing: 4px;">
    <h2 style="float: left;"><center>Child Immunization</center></h2>
  </div>
  <br />
  <br />
<div class="w3-container w3-card-4 w3-white w3-round" style="width: 70%;">
<center><table border="5" bordercolor="grey" style="position:absolute;margin-top:0px;">
     
<form action="server_child_immu.php" method="post">

<table>
  
 <br />
<tr>
    <td><label><b>Last Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="lastname" value="<?php echo  $Lastname; ?>" readonly></td>

    <td><label><b>First Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="firstname" value="<?php echo  $Firstname; ?>" readonly></td>

    <td><label><b>Middle Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="middlename" value="<?php echo  $Middlename; ?>" readonly></td>
  </tr>
  <tr>
    <td><label><b>Age:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="age" value="<?php echo  $Age; ?>" readonly></td>

    <td><label><b>Residential Address:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="residential_address" value="<?php echo  $Residential_Address; ?>" readonly></td>

    <td><label><b>Consultation Purpose:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="consultation_purpose" value="<?php echo  $Consultation_Purpose; ?>" readonly>
</td>
  </tr>
</table>

<br />

  <tr>
     
<table>
    <td width="30%">Birth Weight:</td>
    <td><input type="text" name="birth_weight" style="width: 100%"></td>
  </tr>
  <tr>
    <td><center><b>Immunization</b></center></td>
    <td><b style="margin-left: 40%">Date</b></td>
  </tr>
  <tr>
    <td>Hapa B within 24 hrs</td>
    <td><input type="text" name="HP_B1" style="width: 100%"></td>
  </tr>
   <tr>
    <td>Hapa B 24 hrs</td>
    <td><input type="text" name="HP_B2"style="width: 100%"></td>
  </tr>
   <tr>
    <td>PENTA 1</td>
    <td><input type="text" name="PENTA_1"style="width: 100%"></td>
  </tr>
   <tr>
    <td>PENTA 2</td>
    <td><input type="text" name="PENTA_2"style="width: 100%"></td>
  </tr>
   <tr>
    <td>PENTA 3</td>
    <td><input type="text" name="PENTA_3"style="width: 100%"></td>
  </tr>
   <tr>
    <td>OPV 1</td>
    <td><input type="text" name="OPV_1"style="width: 100%"></td>
  </tr>
   <tr>
    <td>OPV 2</td>
    <td><input type="text" name="OPV_2"style="width: 100%"></td>
  </tr>
   <tr>
    <td>OPV3</td>
    <td><input type="text" name="OPV_3"style="width: 100%"></td>
  </tr>
   <tr>
    <td>MCV 1 (AMV)</td>
    <td><input type="text" name="MCV_1" style="width: 100%"></td>
  </tr>
   <tr>
    <td>MCV 2 (MMB)</td>
    <td><input type="text" name="MCV_2" style="width: 100%"></td>
  </tr>
   <tr>
    <td>ROTA 1</td>
    <td><input type="text" name="ROTA_1" style="width: 100%"></td>
  </tr>
   <tr>
    <td>ROTA 2</td>
    <td><input type="text" name="ROTA_2" style="width: 100%"></td>
  </tr>
   <tr>
    <td>PCV 1</td>
    <td><input type="text" name="PCV_1" style="width: 100%"></td>
  </tr>
   <tr>
    <td>PCV 2</td>
    <td><input type="text" name="PCV_2"style="width: 100%"></td>
  </tr>
   <tr>
    <td>PCV 3</td>
    <td><input type="text" name="PCV_3"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Hapa B2</td>
    <td><input type="text" name="HEPA_B2"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Hapa B3</td>
    <td><input type="text" name="HEPA_B3"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Hapa A</td>
    <td><input type="text" name="HEPA_A"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Presasan</td>
    <td><input type="text" name="PN"style="width: 100%"></td>
  </tr>
  <tr>
    <td>Influeza</td>
    <td><input type="text" name="INF"style="width: 100%"></td>
  </tr>
  <tr>
    <td>Others:</td>
    <td><input type="text" name="others"style="width: 100%"></td>
  </tr>
</table>


<br />
<button class="btn btn-info" name="dsubmit">Save</button>
<br />
<br />
</div>
<select name="done_consult" style="width: 0%; height: 0px; color: gray; opacity: .8">
  <option value="Done consulting"></option>
</select>

<select name="old" style="width: 0px; height: 0px; color: white; opacity: .8">
  <option value="<?php echo $old; ?>"></option>
</select>
    </div>
  </form>
  <br />
<br />
<br />
<br />
  
<style>
a {
  color: white;
}
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;

}

th, td {
    padding: 5px;
}
b {
  font-family: calibri;
}
</style>

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
     
</body>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:04 GMT -->
</html> 