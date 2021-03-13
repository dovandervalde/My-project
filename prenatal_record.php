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
      <a href="adult_immu.php" style="color: black;">Adult Immunization</a>
      <a href="child_immu.php" style="color: black;">Child Immunization</a>
      <a href="family_planning.php" style="color: black;">Family Planning </a>
      <a href="prenatal.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Prenatal</a>
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
    <h2 style="float: left;"><center>Prenatal</center></h2>
  </div>
  <br />
  <br />
<div class="w3-container w3-card-4 w3-white w3-round" style="width: 70%;">
<center><table border="5" bordercolor="grey" style="position:absolute;margin-top:0px;">
     
<form action="server_prenatal.php" method="post">

<table>
  <br />
  
  <input class="w3-input w3-border w3-margin-bottom" type="text" name="patient_id" value="<?php echo  $patient_id; ?>" style="width: 20%; float: left;" readonly>
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
 
  <tr>
    <td><label><b>Gravidity</b></label> <input type="text" name="gravidity"style="width: 100%"></td>
    <td><label><b>LMP</b></label> <input type="text" name="lmp"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Parity</b></label> <input type="text" name="parity"style="width: 100%"></td>
    <td><label><b>EDC</b></label> <input type="text" name="edc"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Term</b></label> <input type="text" name="term"style="width: 100%"></td>
    <td><label><b>AOG</b></label> <input type="text" name="aog"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Preterm</b></label> <input type="text" name="preterm"style="width: 100%"></td>
    <td><label><b>TI</b></label> <input type="text" name="ti"style="width: 100%"></td>
  </tr>
    <tr>
    <td><label><b>Livebirth</b></label> <input type="text" name="livebirth"style="width: 100%"></td>
    <td><label><b>Iron</b></label> <input type="text" name="iron"style="width: 100%"></td>
  </tr>
    <tr>
    <td><label><b>Abortion</b></label> <input type="text" name="abortion"style="width: 100%"></td>
    <td><label><b>Others</b></label> <input type="text" name="others"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Syphills:</b></label>
      <select name="syphills" class="w3-input w3-border">
      <option class="inp" disabled></option>
      <option value="negative">Negative</option>
      <option value="A-">Positive</option>
      </select>
  </td>

    <td><label><b>Penicillin:</b></label>
      <select name="penicillin" class="w3-input w3-border">
      <option class="inp"></option>
      <option value="no">No</option>
      <option value="yes">Yes</option>
      </select>
  </td>
  </tr>
   <tr>
    <td>Schedule of next visit</td>
    <td><input type="text" name="Sched_next_visit"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Fundic height(cm)</td>
    <td><input type="text" name="fundic_height"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Fatal Heart tone</td>
    <td><input type="text" name="fatal_heart"style="width: 100%"></td>
  </tr>
   
</table>


<br />
<button class="btn btn-info" name="dsubmit">Save</button>
<br />
<br />
</div>
<select name="done_consult" style="width: 0px; height: 0px; color: white; opacity: .8">
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