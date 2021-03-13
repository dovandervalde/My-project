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




<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "practice");
$query = "SELECT  FROM old_patient";
$result3 = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
 <title>Barangay Health Center</title>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:00 GMT -->
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
<ul class="w3-navbar w3-card-2" style="background-color: #099ca5; padding: 10px;">
  <li><a href="admin_home.php" style="color: white">Home</a></li>
  <li><a href="#" style="color: white">Patient Enrollment Record</a></li>
  <li><a href="patient_record.php" style="color: white" class="w3-pale-blue w3-round">Individual Treatment Record</a></li>
  <li style="float: right;"><a href="logout.php?logout" style="color: white">Log out</a></li>

</ul>
<br />


     <?php
          include('connectDB.php');
        $get_id=$_GET['id'];
        $result = mysql_query("SELECT * FROM patient_medicine WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
            $Lastname=$row['Lastname'];
            $Firstname=$row['Firstname'];
            $Middlename=$row['Middlename'];
            $Suffix=$row['Suffix'];
            $Age=$row['Age'];
            $Residential_Address=$row['Residential_Address'];
        
              $medicine=$row['medicine'];
              $quantity=$row['quantity'];
              $progress_report=$row['progress_report'];
              $date_checkup=$row['date_checkup'];
          }
            ?>

  

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
<br />
<center>
 <!--
   <h5 style="color: gray; margin-top: 0px; margin-left: 10%;px; float: left;">Instructions: Please do not put: ( ' ) or ("").</h4>
-->



          
