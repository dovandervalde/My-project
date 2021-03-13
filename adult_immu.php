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
      <a href="adult_immu.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Adult Immunization</a>
      <a href="child_immu.php" style="color: black;">Child Immunization</a>
      <a href="family_planning.php" style="color: black;">Family Planning</a>
      <a href="prenatal.php" style="color: black;">Prenatal</a>
    </div>
  </div>
  <div class="w3-accordion">
    <a onclick="myAccFunct()" href="#" style="color: black">Medicine</a>
    <div id="demoAcct" class="w3-accordion-content w3-white w3-card-4">
      <a href="add_medicine.php" style="color: black">Add Medicine</a>
      <a href="add_stock.php" style="color: black">Add Stock</a>
      <a href="view_medicine.php" style="color: black">View Stocks</a>
      <a href="checkup_patient.php" style="color: black">Checkup Patient</a>
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
    <h2 style="float: left;"><center>Adult Immunization</center></h2>
    <h2 style="float: right; "><button class="w3-btn w3-round" style="background-color: #099ca5; color: white; font-size: 15px; margin-bottom: 10px; padding: 10px; letter-spacing: 3px"><a href="view_adult_immu.php" style="color: white">View Records</a></button></h2>
  </div>
  <br />
  <br />
<table class="users-table">
  <div class="demo_jui">
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
    <thead>
        <tr>
          <th>No.</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Age</th>
      <th>Residential Address</th>
      
      <th>Consultation Purpose</th>
      <th>Current/Old Patient</th>
       <th>Consulted</th>
      <th>Action</th>
        </tr>
    </thead>
<tbody>

<?php
  // for viewing in child immunization
 $query = "SELECT * FROM old_patient WHERE Consultation_Purpose = 'Adult Immunization' AND num = '0'";
    $result = mysqli_query($connection, $query);  
     
      while($row = mysqli_fetch_array($result)){ $id=$row['id']; 
      ?>

    <tr class="del<?php echo $id ?>" >
       <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['Lastname']; ?></td>
      <td><?php echo $row['Firstname']; ?></td>
      <td><?php echo $row['Middlename']; ?></td>
      <td><?php echo $row['Age']; ?></td>
      <td><?php echo $row['Residential_Address']; ?></td>
     
      <td><?php echo $row['Consultation_Purpose']; ?></td>
      <td><?php echo $row['old']; ?></td>
        <td style="color: gray"><?php echo $row['not_yet']; ?></td>
      <td align="center" width="200">      
      <script type="text/javascript">
      jQuery(document).ready(function() {
      $('#p<?php echo $id; ?>').popover('show')
      $('#p<?php echo $id; ?>').popover('hide')
      });
      </script>
      
        
            <a class="btn btn-info"  id="a<?php echo $id; ?>" data-content="Click here to Edit Employee" rel="popover" data-original-title="Edit?"  href="adult_immu_record.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i> Consult</a>&nbsp;
           
        <!--
          <a class="btn btn-danger1" data-toggle="modal" style="width:35px;height:26px;" href="#d<?php //echo $id; ?>"><i class="icon-trash icon-large"></i></a>
                                <?php
                                   // include('button_delete.php');
                                ?>
                            -->
            </td>
        </tr>
<?php }
  
?>

        </tbody>
    </table>
</div>

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
     
</body>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:04 GMT -->
</html> 