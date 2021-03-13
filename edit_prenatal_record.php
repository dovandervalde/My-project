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
      <a href="child_immu.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Child Immunization</a>
      <a href="family_planning.php" style="color: black;">Family Planning</a>
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
    $iron=$row['iron'];
    $livebirth=$row['livebirth'];
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
  <h2 style="padding: 8px">Update Prenatal Record</h2>
</div>

<div class="w3-container w3-card-4 w3-white w3-round" style="width: 50%;">
<center><table border="5" bordercolor="grey" style="position:absolute;margin-top:0px;">
     
<form class="form-inline" method="post">

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
    <td><label><b>Gravidity</b></label> <input type="text" name="gravidity"  value="<?php echo  $gravidity; ?>"style="width: 100%"></td>
    <td><label><b>LMP</b></label> <input type="text" name="lmp"  value="<?php echo  $lmp; ?>"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Parity</b></label> <input type="text" name="parity"  value="<?php echo  $parity; ?>"style="width: 100%"></td>
    <td><label><b>EDC</b></label> <input type="text" name="edc"  value="<?php echo  $edc; ?>"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Term</b></label> <input type="text" name="term"  value="<?php echo  $term; ?>"style="width: 100%"></td>
    <td><label><b>AOG</b></label> <input type="text" name="aog"  value="<?php echo  $aog; ?>"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Preterm</b></label> <input type="text" name="preterm"  value="<?php echo  $preterm; ?>"style="width: 100%"></td>
    <td><label><b>TI</b></label> <input type="text" name="ti"  value="<?php echo  $ti; ?>"style="width: 100%"></td>
  </tr>
    <tr>
    <td><label><b>Livebirth</b></label> <input type="text" name="livebirth"  value="<?php echo  $livebirth; ?>"style="width: 100%"></td>
    <td><label><b>Iron</b></label> <input type="text" name="iron"  value="<?php echo  $iron; ?>"style="width: 100%"></td>
  </tr>
    <tr>
    <td><label><b>Abortion</b></label> <input type="text" name="abortion"  value="<?php echo  $abortion; ?>"style="width: 100%"></td>
    <td><label><b>Others</b></label> <input type="text" name="others"  value="<?php echo  $others; ?>"style="width: 100%"></td>
  </tr>
   <tr>
    <td><label><b>Syphills:</b></label>
      <select name="syphills"  value="<?php echo  $syphills; ?>" class="w3-input w3-border">
      <option class="inp"></option>
      <option value="negative">Negative</option>
      <option value="positive">Positive</option>
      </select>
  </td>

    <td><label><b>Penicillin:</b></label>
      <select name="penicillin"  value="<?php echo  $penicillin; ?>" class="w3-input w3-border">
      <option class="inp"></option>
      <option value="no">No</option>
      <option value="yes">Yes</option>
      </select>
  </td>
  </tr>
   <tr>
    <td>Schedule of next visit</td>
    <td><input type="text" name="Sched_next_visit"  value="<?php echo  $Sched_next_visit; ?>"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Fundic height(cm)</td>
    <td><input type="text" name="fundic_height"  value="<?php echo  $fundic_height; ?>"style="width: 100%"></td>
  </tr>
   <tr>
    <td>Fatal Heart tone</td>
    <td><input type="text" name="fatal_heart"  value="<?php echo  $fatal_heart; ?>"style="width: 100%"></td>
  </tr>
   
</table>
<br />
    <button type="dsubmit" name="update" class="w3-btn w3-border w3-round" style="background-color: #099ca5; padding: 10px">Update Record</button>
<br />
<br />
<br />
<br />
</div>

    <?php

   if (isset($_POST['update'])) {
    $patient_id=$_POST['patient_id'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $age=$_POST['age'];
    $residential_address=$_POST['residential_address'];
    $consultation_purpose=$_POST['consultation_purpose'];
    $gravidity=$_POST['gravidity'];
    $lmp=$_POST['lmp'];
    $parity=$_POST['parity'];
    $edc=$_POST['edc'];
    $term=$_POST['term'];
    $aog=$_POST['aog'];
    $preterm=$_POST['preterm'];
    $ti=$_POST['ti'];
    $iron=$_POST['iron'];
    $livebirth=$_POST['livebirth'];
    $abortion=$_POST['abortion'];
    $others=$_POST['others'];
    $syphills=$_POST['syphills'];
    $penicillin=$_POST['penicillin'];
    $Sched_next_visit=$_POST['Sched_next_visit'];
    $fundic_height=$_POST['fundic_height'];
    $fatal_heart=$_POST['fatal_heart'];


    mysql_query("update prenatal set patient_id='$patient_id',lastname='$lastname',firstname='$firstname',
            middlename='$middlename',age='$age',residential_address='$residential_address',
            consultation_purpose='$consultation_purpose',gravidity='$gravidity',lmp='$lmp',
            parity='$parity',edc='$edc',term='$term',aog='$aog',preterm='$preterm',ti='$ti',iron='$iron',livebirth='$livebirth',abortion='$abortion',others='$others',syphills='$syphills',penicillin='$penicillin',Sched_next_visit='$Sched_next_visit',fundic_height='$fundic_height',fatal_heart='$fatal_heart'

            where id='$get_id'")or die(mysql_error());



        echo '<script type="text/javascript">alert("Prenatal record updated succesfully!");window.location=\'view_prenatal.php\';</script>';

    }


?>  
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
