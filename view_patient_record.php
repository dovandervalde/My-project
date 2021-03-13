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
  <li><a href="patient_enrollment_record.php"  style="color: gray" class="w3-pale-blue w3-round">Patient Enrollment Record</a></li>
  <li><a href="patient_record.php">Individual Treatment Record</a></li>
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
        $result = mysql_query("SELECT * FROM ad_patient WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
             $patient_id=$row['patient_id'];
            $Lastname=$row['Lastname'];
            $Firstname=$row['Firstname'];
            $Middlename=$row['Middlename'];
            $Sex=$row['Sex'];
            $Birth_date=$row['Birth_date'];
            $Birth_place=$row['Birth_place'];
            $Bloodtype=$row['Bloodtype'];
            $Civil_status=$row['Civil_status'];
            $spouse_name=$row['spouse_name'];
            $Ed_attainment=$row['Ed_attainment'];
            $Emp_status=$row['Emp_status'];
            $Family_mem=$row['Family_mem'];
            $Suffix=$row['Suffix'];
            $Maiden_name=$row['Maiden_name'];
        
                        $Mother_name=$row['Mother_name'];
                        $Res_address=$row['Res_address'];
                        $Contact_no=$row['Contact_no'];
                        $Department=$row['Department'];
                        $Fh_number=$row['Fh_number'];
                        $Member=$row['Member'];
                        $Household_no=$row['Household_no'];
                        $Ph_member=$row['Ph_member'];
                        $Status_type=$row['Status_type'];
                        $Ph_no=$row['Ph_no'];
                        $Category=$row['Category'];
                         $Pcb_member=$row['Pcb_member'];
            
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
    padding: 15px;
    text-align: left;
}
</style>
<body>

<button onclick="printContent('div1')">Print Content</button>

    
<center>
  <script>
  function printContent(el) {
    var restorepage = document.body.innerHTML;
    var printContent = document.getElementById(el).innerHTML;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>
<div class="w3-card-4 w3-round" style="width: 70%; background-color: #eef6f6; color: ; letter-spacing: 3px; padding: px">
  <h2 style="padding: 8px">Patient's Enrollment Record</h2>
</div>
<div class="w3-container w3-card-4 w3-white w3-round" style="width: 70%;">



<table>
<div id="div1">
<table>
   <tr>
    <p style="background-color: #; margin-bottom: 0px; padding: 15px; font-size: 15px;; font-family: calibri;"><b style="float: left;"><br /></b></p>
  </tr>

    <h4 style="float: left;"><b><?php echo  $patient_id; ?></b></h3>
  <br />
  <tr>
    <td><b>Last Name: </b><?php echo  $Lastname; ?></td>
    <td><b>First Name: </b><?php echo  $Firstname; ?></td>
    <td><b>Middle Name: </b><?php echo  $Middlename; ?></td>
  </tr>


  <tr>
    <td><b>Sex:</b> <?php echo  $Sex; ?></td>
    <td><b>Birthdate: </b><?php echo  $Birth_date; ?></td>
    <td><b>Birthplace: </b><?php echo  $Birth_place; ?></td>
  </tr>

   <tr>
    <td><b>Bloodtype:</b> <?php echo  $Bloodtype; ?></td>
    <td><b>Civil Status: </b><?php echo  $Civil_status; ?></td>
    <td><b>Spouse's Name: </b><?php echo  $spouse_name; ?></td>
  </tr>

  <tr>
    <td><b>Educational Attainment:</b> <?php echo  $Ed_attainment; ?></td>
    <td><b>Employment Status: </b><?php echo  $Emp_status; ?></td>
    <td><b>Family Member: </b><?php echo  $Family_mem; ?></td>
  </tr>

  <tr>
    <td><b>Suffix:</b> <?php echo  $Suffix; ?></td>
    <td><b>Maiden Name(for married women): </b><?php echo  $Maiden_name; ?></td>
    <td><b>Mother's Name: </b><?php echo  $Mother_name; ?></td>
  </tr>

   <tr>
    <td><b>Residential Address:</b> <?php echo  $Res_address; ?></td>
    <td><b>Contact Number: </b><?php echo  $Contact_no; ?></td>
    <td><b>DSWD NHTS: </b><?php echo  $Department; ?></td>
  </tr>

 <tr>
    <td><b>Facility Household No:</b> <?php echo  $Fh_number; ?></td>
    <td><b>4Ps Member: </b><?php echo  $Member; ?></td>
    <td><b>Household Number: </b><?php echo  $Household_no; ?></td>
  </tr>

   <tr>
    <td><b>PhilHealth Member:</b> <?php echo  $Ph_member; ?></td>
    <td><b>Status Type: </b><?php echo  $Status_type; ?></td>
    <td><b>PhilHealth No: </b><?php echo  $Ph_no; ?></td>
  </tr>

 <tr>
    <td><b>If Member,please Indicate Category:</b> <?php echo  $Category; ?></td>
    <td><b>Primary Care Benefit (PCB) Member: </b><?php echo  $Pcb_member; ?></td>
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

         
