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
      <a href="#" style="color: black;">Postpatrum</a>
      <a href="#" style="color: black;">Prenatal</a>
    </div>
  </li>
</ul>
</div>

<?php
        include('connectDB.php');
        $get_id=$_GET['id'];
        $result = mysql_query("SELECT * FROM family_planning WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
            $patient_id=$row['patient_id'];
            $lastname=$row['lastname'];
            $firstname=$row['firstname'];
            $middlename=$row['middlename'];
            $age=$row['age'];
            $residential_address=$row['residential_address'];
            $consultation_purpose=$row['consultation_purpose'];
            $type_client=$row['type_client'];
            $method=$row['method'];
            $drop_out=$row['drop_out'];
            $schedule_nxt_vist=$row['schedule_nxt_vist'];
           
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
  <h2 style="padding: 8px">Family Planning Record</h2>
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
    <td style="width: 30%">Type of Client</td>
    <td><input type="text" name="type_client" style="width: 100%" value="<?php echo  $type_client; ?>" ></td>
  </tr>
   <tr>
    <td>Method</td>
    <td><input type="text" name="method"style="width: 100%" value="<?php echo  $method; ?>" ></td>
  </tr>
   <tr>
    <td>Drop-out state reason</td>
    <td><input type="text" name="drop_out"style="width: 100%" value="<?php echo  $drop_out; ?>" ></td>
  </tr>
   <tr>
    <td>Schedule of next visit</td>
    <td><input type="text" name="schedule_nxt_vist"style="width: 100%" value="<?php echo  $schedule_nxt_vist; ?>" ></td>
  </tr>

</table>
<br />
    <button type="submit" name="update" class="w3-btn w3-border w3-round" style="background-color: #099ca5; padding: 10px">Update Record</button>

<br />
<br />
</div>

    <?php

    if (isset($_POST['update'])){

      $patient_id=$_POST['patient_id'];
        $lastname=$_POST['lastname'];
          $firstname=$_POST['firstname'];
            $middlename=$_POST['middlename'];
              $age=$_POST['age'];
                $residential_address=$_POST['residential_address'];
                  $consultation_purpose=$_POST['consultation_purpose'];
                    $type_client=$_POST['type_client'];
                       $method=$_POST['method'];
                          $drop_out=$_POST['drop_out'];
                              $schedule_nxt_vist=$_POST['schedule_nxt_vist'];
                          


    mysql_query("update family_planning set patient_id='$patient_id',lastname='$lastname',firstname='$firstname',
            middlename='$middlename',age='$age',residential_address='$residential_address',
            consultation_purpose='$consultation_purpose',type_client='$type_client',method='$method',
            drop_out='$drop_out',schedule_nxt_vist='$schedule_nxt_vist'

            where id='$get_id'")or die(mysql_error());



        echo '<script type="text/javascript">alert("Family Planning record updated succesfully!");window.location=\'view_family_planning.php\';</script>';

    }


?>  
<br />

</div>

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
