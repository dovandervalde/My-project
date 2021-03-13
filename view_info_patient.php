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
  <li><a href="patient_enrollment_record.php" style="color: white">Patient Enrollment Record</a></li>
  <li><a href="patient_record.php" style="color: gray" class="w3-pale-blue w3-round">Individual Treatment Record</a></li>

  <li style="float: right;"><a href="logout.php?logout" style="color: white">Log out</a></li>
</ul>
</div>
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

<body>
       <?php // include('nav-top.php'); ?>


 <?php
        include('connectDB.php');
        $get_id=$_GET['id'];
        $result = mysql_query("SELECT * FROM old_patient WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
            $Lastname=$row['Lastname'];
            $Firstname=$row['Firstname'];
            $Middlename=$row['Middlename'];
            $Suffix=$row['Suffix'];
            $Age=$row['Age'];
            $Residential_Address=$row['Residential_Address'];
            $Mode_Transaction=$row['Mode_Transaction'];
            $Reffered_from=$row['Reffered_from'];
            $Date_Consultation=$row['Date_Consultation'];
            $Reffered_to=$row['Reffered_to'];
            $Consulation_Time=$row['Consulation_Time'];
            $Reason_for_Referral=$row['Reason_for_Referral'];
            $Blood_Pressure=$row['Blood_Pressure'];
        
                        $Reffered_by=$row['Reffered_by'];
                        $Height=$row['Height'];
                        $Name_of_Attending_Provider=$row['Name_of_Attending_Provider'];
                        $Temperature=$row['Temperature'];
                        $Weight=$row['Weight'];
                        $Nature_of_Visit=$row['Nature_of_Visit'];
                        $Chief_Complaints=$row['Chief_Complaints'];
                        $Consultation_Purpose=$row['Consultation_Purpose'];
                        $Diagnosis=$row['Diagnosis'];
                        $Medication_Treatment=$row['Medication_Treatment'];
                        $Lab_Findings_Impression=$row['Lab_Findings_Impression'];
                         
                         $medicine=$row['medicine'];
              $quantity=$row['quantity'];
              $progress_report=$row['progress_report'];
              $date_checkup=$row['date_checkup'];
          }
          ?>
 
</head>

<style>
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
th, td {
    padding: 10px;
    text-align: left;
}
</style>
<body>


    
<center>
  <script>
  function printContent(el) {
    var restorepage = document.body.innerHTML;
    var printContent = document.getElementById(el).innerHTML;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>
<div class="w3-card-4 w3-round" style="width: 60%; background-color: #eef6f6; color: ; letter-spacing: 3px; padding: px">
  <h2 style="padding: 8px">Patient's Information</h2>
</div>
<div class="w3-container w3-card-4 w3-white w3-round" style="width: 60%;">



<table>
<div id="div1">
<table>
   <br />
   <br />

  <tr>
    <td><b>Last Name: </b><?php echo  $Lastname; ?></td>
    <td><b>First Name: </b><?php echo  $Firstname; ?></td>
    <td><b>Middle Name: </b><?php echo  $Middlename; ?></td>
  </tr>


  <tr>
    <td><b>Suffix:</b> <?php echo  $Suffix; ?></td>
    <td><b>Age: </b><?php echo  $Age; ?></td>
    <td><b>Residential Address: </b><?php echo  $Residential_Address; ?></td>
  </tr>
</table>
<tr>
    <p style="background-color: #; margin-bottom: 0px; padding: 15px; font-size: 15px;; font-family: calibri"><b style="float: left;"><br /> </b> </p>
  </tr>
<table>
 <tr>
    <td><b>Mode Transaction:</b> <?php echo  $Mode_Transaction; ?></td>
    <td style="width: 50%"><b>Reffered from: </b><?php echo  $Reffered_from; ?></td>
  </tr>

  <tr>
    <td><b>Date Consultation: </b><?php echo  $Date_Consultation; ?></td>
    <td><b>Reffered to: </b><?php echo  $Reffered_to; ?></td>
  </tr>
  <tr>
    <td><b>Consulation Time: </b><?php echo  $Consulation_Time; ?></td>
    <td><b>Reason for Referral: </b><?php echo  $Reason_for_Referral; ?></td> 
    </tr>
   <tr>
    <td><b>Blood Pressure: </b><?php echo  $Blood_Pressure; ?></td>
    <td><b>Reffered by: </b><?php echo  $Reffered_by; ?></td> 
    </tr>
     <tr>
        <td><b>Height: </b><?php echo  $Height; ?></td>
    </tr>
    <tr>
        <td><b>Name of Attending Provider: </b><?php echo  $Name_of_Attending_Provider; ?></td>
    </tr>
    <tr>
        <td><b>Temperature: </b><?php echo  $Temperature; ?></td>
    </tr>
    <tr>
        <td><b>Weight: </b><?php echo  $Weight; ?></td>
    </tr>
</table>
<table>
      <p style="background-color: #; margin-bottom: 0px; padding: 5px; font-size: 15px;; font-family: calibri;"><b style="float: left;"></b></p>
  </tr>
  <tr>
        <td><b>Nature of Visit: </b><?php echo  $Nature_of_Visit; ?></td>
        <td><b>Chief Complaints: </b><?php echo  $Chief_Complaints; ?></td>
    </tr>
    <tr>
        <td><b>Consultation Purpose: </b><?php echo  $Consultation_Purpose; ?></td>
    </tr>

</table>
<table>
      <p style="background-color: #; margin-bottom: 0px; padding: 5px; font-size: 15px;; font-family: calibri;"><b style="float: left;"></b></p>

     <tr>
        <td><b>Diagnosis: </b><?php echo  $Diagnosis; ?></td>
    </tr>
    <tr>
        <td><b>Medication Treatment: </b><?php echo  $Medication_Treatment; ?></td>
    </tr>
    <tr>
        <td><b>Lab Findings Impression: </b><?php echo  $Lab_Findings_Impression; ?></td>
    </tr>
</table>
<br />
</div>
</div>
<br />

<br />
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
<br />
<br />

         
