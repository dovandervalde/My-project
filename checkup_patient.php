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
    <a onclick="myAccFunc()" href="#" style="color: black;">Consultation Purpose</a>
    <div id="demoAcc" class="w3-accordion-content w3-white w3-card-4">
      <a href="adult_immu.php" style="color: black;">Adult Immunization</a>
      <a href="child_immu.php" style="color: black;">Child Immunization</a>
      <a href="family_planning.php" style="color: black;">Family Planning</a>
      <a href="#" style="color: black;">Postpatrum</a>
      <a href="#" style="color: black;">Prenatal</a>
    </div>
  </div>

  <div class="w3-accordion">
    <a onclick="myAccFunct()" href="#" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Medicine</a>
    <div id="demoAcct" class="w3-accordion-content w3-white w3-card-4">
      <a href="add_medicine.php" style="color: black;">Add Medicine</a>
      <a href="add_stock.php" style="color: black;">Add Stock</a>
      <a href="view_medicine.php" style="color: black;">View Stocks</a>
      <a href="checkup_patient.php" style="background-color: #099ca5; color: white" class="w3-round w3-card-4">Checkup Patient</a>
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
  <h2 class="w3-xxlarge w3-padding-" style="letter-spacing: 3px">Checkup Patient</h1>
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

<style>
  a {
    text-decoration: none;
    color: white;
  }
</style>
<div class="w3-container">
  <h2><button class="w3-btn w3-border w3-round" style="padding: 6px; margin-bottom: 7px; background-color: #099ca5; color: white"><a href="view_checkedup_patient.php">View Checkedup patient</a></button></h2>

<div class="w3-container w3-card-4 w3-white w3-round" style="width: 50%;">
<center><table border="5" bordercolor="grey" style="position:absolute;margin-top:0px;">
       <h2 style="padding: 8px; color: gray">Patient's Check up</h2>

<form class="form-inline" method="post">

<table>
<tr>
    <td><label><b>Last Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Lastname" required></td>

    <td><label><b>First Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Firstname" required></td>
</tr>
<tr>
    <td><label><b>Middle Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Middlename" required></td>
 
    <td><label><b>Gender:</b></label>
<input type="radio" name="Sex" value="Male" style="margin-left: 5%" required>Male
<input type="radio" name="Sex" value="Female" style="margin-left: 5%" required>Female

</td>
</tr>
<br />
<table>
  <tr>
    <td><label><b>Medicine:</b></label>
 <select class="w3-select w3-border w3-margin-bottom" name="medicine" required>
       <option disabled selected>Please select</option>
      <?php 
            include_once("dbcon.php");

            $query = mysql_query("SELECT medicine FROM stock_update WHERE quantity > 19 ORDER BY medicine ");
            while($row = mysql_fetch_array($query))
            {
             ?>
            <option value="<?php echo $row['medicine']; ?>"><?php echo $row['medicine'] ?></option>
            
            <?php 
            }
             ?>
            </select>
</td>
<td><label><b>Quantity:</b></label>
<select name="quantity" class="w3-select w3-border w3-margin-bottom" required>
          <option disabled selected>Please select</option>
          <option value="1">1</option>   
          <option value="2">2</option> 
          <option value="3">3</option> 
          <option value="4">4</option> 
          <option value="5">5</option> 
          <option value="6">6</option> 
          <option value="7">7</option> 
          <option value="8">8</option> 
          <option value="9">9</option> 
          <option value="10">10</option> 
      </select>
</td>
  </tr>
  <tr>
  <td><label><b>Progress report:</b></label>
<textarea class="w3-input w3-border w3-margin-bottom" type="text" name="progress_report" required></textarea>
</td>
<td style="width: 40%"><label><b>Date of Checkup:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="date_checkup" required>
</td>

  </tr>
</table>
<br />
    <button type="submit" name="submit" class="w3-btn w3-border w3-round" style="background-color: #099ca5; padding: 10px">Check up Patient</button>
<br />
<br />
   </div>
          </form>

<br />
<br />
<br />
<br />
<br />
<br />

<?php

    if (isset($_POST['submit'])){

        $Lastname=$_POST['Lastname'];
        $Firstname=$_POST['Firstname'];
        $Middlename =$_POST['Middlename'];
        $Sex=$_POST['Sex'];
        $medicine=$_POST['medicine'];
        $quantity=$_POST['quantity'];
        $progress_report =$_POST['progress_report'];
        $date_checkup  =$_POST['date_checkup'];


      $query = mysql_query("SELECT * FROM ad_patient WHERE Lastname = '$Lastname' AND Firstname = '$Firstname' AND Middlename = '$Middlename'");
    if(mysql_num_rows($query) < 1) {
        echo '<script type="text/javascript">window.alert("Cannot checkup patient!\nPatient does not exist in database!")</script>';
    echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    }
    
    else{


        mysql_query("INSERT INTO patient_medicine(Lastname,Firstname,Middlename,Sex,medicine,quantity,progress_report,date_checkup)VALUES('$Lastname','$Firstname','$Middlename','$Sex','$medicine','$quantity','$progress_report','$date_checkup')");


// para ni ma update ang stock inventory sa table stock_update sa medicine kung pila ang nakuha
    $medicine = $_POST['medicine'];
    $quantity = $_POST['quantity'];

    if($quantity == 1)
    {

      mysql_query("UPDATE stock_update SET quantity = quantity - 1 WHERE medicine = '$medicine'");
        echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
        echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
  

    }elseif($quantity == 2){
      mysql_query("UPDATE stock_update SET quantity = quantity - 2 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 3){
      mysql_query("UPDATE stock_update SET quantity = quantity - 3 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 4){
      mysql_query("UPDATE stock_update SET quantity = quantity - 4 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 5){
      mysql_query("UPDATE stock_update SET quantity = quantity - 5 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 6){
      mysql_query("UPDATE stock_update SET quantity = quantity - 6 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 7){
      mysql_query("UPDATE stock_update SET quantity = quantity - 7 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 8){
      mysql_query("UPDATE stock_update SET quantity = quantity - 8 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 9){
      mysql_query("UPDATE stock_update SET quantity = quantity - 9 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }elseif($quantity == 10){
      mysql_query("UPDATE stock_update SET quantity = quantity - 10 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient checked up Succesfully!")</script>';
      echo '<script type="text/javascript">window.location="checkup_patient.php"</script>';
    
    }


        echo '<script type="text/javascript">alert("The medicine does not have enough stock!");window.location=\'checkup_patient.php\';</script>';

    }


}

?>  
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