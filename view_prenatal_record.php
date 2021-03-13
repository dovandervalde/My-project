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
      <a href="adult_immu.php" style="color: black;">Adult Immunization</a>
      <a href="child_immu.php" style="color: black;">Child Immunization</a>
      <a href="family_planning.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Family Planning</a>
      <a href="prenatal.php" style="color: black;">Prenatal</a>
    </div>
  </li>
</ul>
</div>

<?php
        include('connectDB.php');
        $get_id=$_GET['id'];
        $result = mysql_query("SELECT * FROM prenatal WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
            $patient_id=$row['patient_id'];
            $lastname=$row['lastname'];
            $firstname=$row['firstname'];
            $middlename=$row['middlename'];
            $age=$row['age'];
            $residential_address=$row['residential_address'];
            $consultation_purpose=$row['consultation_purpose'];
            $gravidity=$row['gravidity'];
            $lmp=$row['lmp'];
            $parity=$row['parity'];
            $edc=$row['edc'];
           $term=$row['term'];
            $aog=$row['aog'];
            $preterm=$row['preterm'];
            $ti=$row['ti'];
            $livebirth=$row['livebirth'];
            $iron=$row['iron'];
            $abortion=$row['abortion'];
            $others=$row['others'];
            $syphills=$row['syphills'];
            $penicillin=$row['penicillin'];
            $Sched_next_visit=$row['Sched_next_visit'];
             $fundic_height=$row['fundic_height'];
            $fatal_heart=$row['fatal_heart'];
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
  <h2 style="padding: 8px">Prenatal Record</h2>
</div>

<div class="w3-container w3-card-4 w3-white w3-round" style="width: 50%;">
<center><table border="5" bordercolor="grey" style="position:absolute;margin-top:0px;">
     

<table>
  <br />
  
  <input class="w3-input w3-border w3-margin-bottom" type="text" name="patient_id" value="<?php echo  $patient_id; ?>" style="width: 20%; float: left;" readonly>
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
 
  <tr>
    <td><label><b>Gravidity</b></label> <input type="text" name="gravidity"style="width: 100%" value="<?php echo  $gravidity; ?>" readonly></td>
    <td><label><b>LMP</b></label> <input type="text" name="lmp"style="width: 100%" value="<?php echo  $lmp; ?>" readonly></td>
  </tr>
   <tr>
    <td><label><b>Parity</b></label> <input type="text" name="parity"style="width: 100%" value="<?php echo  $parity; ?>" readonly></td>
    <td><label><b>EDC</b></label> <input type="text" name="edc"style="width: 100%" value="<?php echo  $edc; ?>" readonly></td>
  </tr>
   <tr>
    <td><label><b>Term</b></label> <input type="text" name="term"style="width: 100%" value="<?php echo  $term; ?>" readonly></td>
    <td><label><b>AOG</b></label> <input type="text" name="aog"style="width: 100%" value="<?php echo  $aog; ?>" readonly></td>
  </tr>
   <tr>
    <td><label><b>Preterm</b></label> <input type="text" name="preterm"style="width: 100%" value="<?php echo  $preterm; ?>" readonly></td>
    <td><label><b>TI</b></label> <input type="text" name="ti"style="width: 100%" value="<?php echo  $ti; ?>" readonly></td>
  </tr>
    <tr>
    <td><label><b>Livebirth</b></label> <input type="text" name="livebirth"style="width: 100%" value="<?php echo  $livebirth; ?>" readonly></td>
    <td><label><b>Iron</b></label> <input type="text" name="iron"style="width: 100%" value="<?php echo  $iron; ?>" readonly></td>
  </tr>
    <tr>
    <td><label><b>Abortion</b></label> <input type="text" name="abortion"style="width: 100%" value="<?php echo  $abortion; ?>" readonly></td>
    <td><label><b>Others</b></label> <input type="text" name="others"style="width: 100%" value="<?php echo  $others; ?>" readonly></td>
  </tr>
   <tr>
    <td><label><b>Syphills:</b></label>
     <input type="text" name="syphills"style="width: 100%" value="<?php echo  $syphills; ?>" readonly>
  </td>

    <td><label><b>Penicillin:</b></label>
      <input type="text" name="penicillin"style="width: 100%" value="<?php echo  $penicillin; ?>" readonly>
  </td>
  </tr>
   <tr>
    <td>Schedule of next visit</td>
    <td><input type="text" name="Sched_next_visit"style="width: 100%" value="<?php echo  $Sched_next_visit; ?>" readonly></td>
  </tr>
   <tr>
    <td>Fundic height(cm)</td>
    <td><input type="text" name="fundic_height"style="width: 100%" value="<?php echo  $fundic_height; ?>" readonly></td>
  </tr>
   <tr>
    <td>Fatal Heart tone</td>
    <td><input type="text" name="fatal_heart"style="width: 100%" value="<?php echo  $fatal_heart; ?>" readonly></td>
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
