<?php include('server.php'); ?>
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
    <title>Barangay Health Center</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="icon" type="image/png" href="Pictures/logo2.jpg">


 
<body class="w3-light-grey">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}
</style>
<body>
  <div class="w3-top">
<ul class="w3-navbar w3-card-4" style="background-color: #099ca5; padding: 10px;">
  <li><a href="admin_home.php" style="color: white">Home</a></li>
  <li><a href="patient_enrollment_record.php"  style="color: white" >Patient Enrollment Record</a></li>
  <li><a href="patient_record.php" style="color: white">Individual Treatment Record</a></li>
  <li style="float: right;"><a href="logout.php?logout" style="color: white">Log out</a></li>
  <li class="w3-dropdown-hover">
    <a href="#" class="w3-pale-blue w3-round">Consultation Purpose <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-4 w3-round" style="width: 15%">
      <a href="#" style="color: black;">Adult Immunization</a>
      <a href="child_immu.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Child Immunization</a>
      <a href="#" style="color: black;">Family Planning</a>
      <a href="#" style="color: black;">Postpatrum</a>
      <a href="#" style="color: black;">Prenatal</a>
    </div>
  </li>
</ul>
</div>

<?php
        include('connectDB.php');
        $get_id=$_GET['id'];
        $result = mysql_query("SELECT * FROM child_immunization WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
            $patient_id=$row['patient_id'];
            $lastname=$row['lastname'];
            $firstname=$row['firstname'];
            $middlename=$row['middlename'];
            $age=$row['age'];
            $residential_address=$row['residential_address'];
            $consultation_purpose=$row['consultation_purpose'];
            $birth_weight=$row['birth_weight'];
            $HP_B1=$row['HP_B1'];
            $HP_B2=$row['HP_B2'];
            $PENTA_1=$row['PENTA_1'];
            $PENTA_2=$row['PENTA_2'];
            $PENTA_3=$row['PENTA_3'];
            $OPV_1=$row['OPV_1'];
        
                        $OPV_2=$row['OPV_2'];
                        $OPV_3=$row['OPV_3'];
                        $MCV_1=$row['MCV_1'];
                        $MCV_2=$row['MCV_2'];
                        $ROTA_1=$row['ROTA_1'];
                        $ROTA_2=$row['ROTA_2'];
                        $PCV_1=$row['PCV_1'];
                        $PCV_2=$row['PCV_2'];
                        $PCV_3=$row['PCV_3'];
                        $HEPA_B2=$row['HEPA_B2'];
                        $HEPA_B3=$row['HEPA_B3'];
                         
                         $HEPA_A=$row['HEPA_A'];
              $PN=$row['PN'];
              $INF=$row['INF'];
              $others=$row['others'];
          }
          ?>

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
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}
a {
  color: white;
}
</style>
<center>
  <br />
<div class="w3-card-4 w3-round" style="width: 50%; background-color: #eef6f6; color: ; letter-spacing: 3px; padding: px">
  <h2 style="padding: 8px">Child Immunization Record</h2>
</div>

<div class="w3-container w3-card-4 w3-white w3-round" style="width: 50%;">
<center><table border="5" bordercolor="grey" style="position:absolute;margin-top:0px;">
     

<table>
  <br />

<tr>
    <td><label><b>Last Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="lastname" value="<?php echo  $lastname; ?>" readonly></td>

    <td><label><b>First Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="firstname" value="<?php echo  $firstname; ?>" readonly></td>

    <td><label><b>Middle Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="middlename" value="<?php echo  $middlename; ?>" readonly></td>
  </tr>
  <tr>
    <td><label><b>Age:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="age" value="<?php echo  $age; ?>" readonly></td>

    <td><label><b>Residential Address:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="residential_address" value="<?php echo  $residential_address; ?>" readonly></td>

    <td><label><b>Consultation Purpose:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="consultation_purpose" value="<?php echo  $consultation_purpose; ?>" readonly>
</td>
  </tr>
</table>

<br />

  <tr>
     
<table>
    <td width="30%">Birth Weight:</td>
    <td><input type="text" name="birth_weight" value="<?php echo  $birth_weight; ?>" readonly style="width: 100%"></td>
  </tr>
  <tr>
    <td><center><b>Immunization</b></center></td>
    <td><b style="margin-left: 40%">Date</b></td>
  </tr>
  <tr>
    <td>Hapa B within 24 hrs</td>
    <td><input type="text" name="HP_B1" style="width: 100%" value="<?php echo  $HP_B1; ?>" readonly></td>
  </tr>
   <tr>
    <td>Hapa B 24 hrs</td>
    <td><input type="text" name="HP_B2"style="width: 100%" value="<?php echo  $HP_B2; ?>" readonly></td>
  </tr>
   <tr>
    <td>PENTA 1</td>
    <td><input type="text" name="PENTA_1"style="width: 100%" value="<?php echo  $PENTA_1; ?>" readonly></td>
  </tr>
   <tr>
    <td>PENTA 2</td>
    <td><input type="text" name="PENTA_2"style="width: 100%" value="<?php echo  $PENTA_2; ?>" readonly></td>
  </tr>
   <tr>
    <td>PENTA 3</td>
    <td><input type="text" name="PENTA_3"style="width: 100%" value="<?php echo  $PENTA_3; ?>" readonly></td>
  </tr>
   <tr>
    <td>OPV 1</td>
    <td><input type="text" name="OPV_1"style="width: 100%" value="<?php echo  $OPV_1; ?>" readonly></td>
  </tr>
   <tr>
    <td>OPV 2</td>
    <td><input type="text" name="OPV_2"style="width: 100%" value="<?php echo  $OPV_2; ?>" readonly></td>
  </tr>
   <tr>
    <td>OPV3</td>
    <td><input type="text" name="OPV_3"style="width: 100%" value="<?php echo  $OPV_3; ?>" readonly></td>
  </tr>
   <tr>
    <td>MCV 1 (AMV)</td>
    <td><input type="text" name="MCV_1" style="width: 100%" value="<?php echo  $MCV_1; ?>" readonly></td>
  </tr>
   <tr>
    <td>MCV 2 (MMB)</td>
    <td><input type="text" name="MCV_2" style="width: 100%" value="<?php echo  $MCV_2; ?>" readonly></td>
  </tr>
   <tr>
    <td>ROTA 1</td>
    <td><input type="text" name="ROTA_1" style="width: 100%" value="<?php echo  $ROTA_1; ?>" readonly></td>
  </tr>
   <tr>
    <td>ROTA 2</td>
    <td><input type="text" name="ROTA_2" style="width: 100%" value="<?php echo  $ROTA_2; ?>" readonly></td>
  </tr>
   <tr>
    <td>PCV 1</td>
    <td><input type="text" name="PCV_1" style="width: 100%" value="<?php echo  $PCV_1; ?>" readonly></td>
  </tr>
   <tr>
    <td>PCV 2</td>
    <td><input type="text" name="PCV_2"style="width: 100%"value="<?php echo  $PCV_2; ?>" readonly></td>
  </tr>
   <tr>
    <td>PCV 3</td>
    <td><input type="text" name="PCV_3"style="width: 100%" value="<?php echo  $PCV_3; ?>" readonly></td>
  </tr>
   <tr>
    <td>Hapa B2</td>
    <td><input type="text" name="HEPA_B2"style="width: 100%" value="<?php echo  $HEPA_B2; ?>" readonly></td>
  </tr>
   <tr>
    <td>Hapa B3</td>
    <td><input type="text" name="HEPA_B3"style="width: 100%" value="<?php echo  $HEPA_B3; ?>" readonly></td>
  </tr>
   <tr>
    <td>Hapa A</td>
    <td><input type="text" name="HEPA_A"style="width: 100%" value="<?php echo  $HEPA_A; ?>" readonly></td>
  </tr>
   <tr>
    <td>Presasan</td>
    <td><input type="text" name="PN"style="width: 100%" value="<?php echo  $PN; ?>" readonly></td>
  </tr>
  <tr>
    <td>Influeza</td>
    <td><input type="text" name="INF"style="width: 100%" value="<?php echo  $INF; ?>" readonly></td>
  </tr>
  <tr>
    <td>Others:</td>
    <td><input type="text" name="others" style="width: 100%" value="<?php echo  $others; ?>" readonly></td>
  </tr>
</table>

<br />
<br />
</div>
<br />
<br />
<br />
<br />
<br />
<br />
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
