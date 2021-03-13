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
$connect = mysqli_connect("localhost", "root", "", "health_center");
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
  <div class="w3-top">
<ul class="w3-navbar w3-card-4" style="background-color: #099ca5; padding: 10px;">
  <li><a href="admin_home.php" style="color: white">Home</a></li>
  <li><a href="patient_enrollment_record.php" style="color: white">Patient Enrollment Record</a></li>
  <li><a href="patient_record.php" style="color: white" class="w3-pale-blue w3-round">Individual Treatment Record</a></li>
  <li style="float: right;"><a href="logout.php?logout" style="color: white">Log out</a></li>
</ul>
</div>
<br />
<br />
<br />
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

<div class="w3-card-4 w3-round" style="width: 70%; background-color: #eef6f6; color: ; letter-spacing: 3px; padding: px">

  <h3 style="padding: 8px">Update Patient's Information</h2>
</div>

<div class="w3-container w3-card-4 w3-white w3-round" style="width: 70%;">
<center><table border="5" bordercolor="grey" style="position:absolute;margin-top:0px;">
     
<form class="form-inline" method="post">

<table>
 <br />
<tr>
    <td><label><b>Last Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Lastname" value="<?php echo  $Lastname; ?>"></td>

    <td><label><b>First Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Firstname" value="<?php echo  $Firstname; ?>"></td>

    <td><label><b>Middle Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Middlename" value="<?php echo  $Middlename; ?>"></td>
  </tr>
  <tr>
    <td><label><b>Suffix:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Suffix" value="<?php echo  $Suffix; ?>"></td>

    <td><label><b>Age:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Age" value="<?php echo  $Age; ?>"></td>

    <td><label><b>Residential Address:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Residential_Address" value="<?php echo  $Residential_Address; ?>">
</td>
  </tr>
</table>
<br />
<table>
  <tr>
      <p style="background-color: #eef6f6; margin-bottom: 0px; padding: 10px; font-size: 20px;; font-family: calibri" >CHU/ RHU Personel only( Para sa kinatawan ng CHU/RHU lamang)</b>  
<b style="margin-left: 3%">
   </p>


    <td><label><b>Mode Transaction:</b></label>
          <select name="Mode_Transaction" class="w3-input w3-border">
            <option value="<?php echo  $Mode_Transaction; ?>"><?php echo  $Mode_Transaction; ?></option>
          <option value="Walk-in">Walk-in</option>
          <option value="V-sited">V-sited</option>
          <option value="Referral">Referral</option>
          </select>
          </td>

   <td>

    <label><b>Reffered from:</b></label>
        <input class="w3-input w3-border" type="text" name="Reffered_from" value="<?php echo  $Reffered_from; ?>"></td>
      </tr>
   <tr>
      <td><label><b>Date Consultation:</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="date" name="Date_Consultation" value="<?php echo  $Date_Consultation; ?>">
      </td>

      <td>
        <label><b>Reffered to:</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="Reffered_to" value="<?php echo  $Reffered_to; ?>">
      </td>
      </tr>

      <tr>
        <td><label><b> Consulation Time:</b></label>
            <select name="Consulation_Time" class="w3-input w3-border">
            <option value="<?php echo  $Consulation_Time; ?>"><?php echo  $Consulation_Time; ?></option>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
            </select>
        </td>

        <td>
          <label><b>Reason for Referral:</b></label>
         <div class="form-group">
            <label for="comment">Comment:</label>
             <textarea name="Reason_for_Referral" class="form-control" rows="5" id="comment" value="<?php echo  $Reason_for_Referral; ?>" disabled><?php echo  $Reason_for_Referral; ?></textarea>
          </div>
        </td>

      </tr>

      <tr>
        <td><label><b>Blood Pressure:</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="Blood_Pressure" value="<?php echo  $Blood_Pressure; ?>">
        </td>
        <td>
          <label><b>Reffered by:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Reffered_by" value="<?php echo  $Reffered_by; ?>">

        </td>

      </tr>

      <tr>
        <td><label><b>Height:</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" name="Height" value="<?php echo  $Height; ?>">
        </td>

      </tr>

      <tr>
        <td>
        <label><b>Name of Attending Provider:</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="Name_of_Attending_Provider" value="<?php echo  $Name_of_Attending_Provider; ?>">
        </td>
      </tr>

      <tr>
        <td>
            <label><b>Temperature:</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" name="Temperature" value="<?php echo  $Temperature; ?>">
          </td>
      </tr>

      <tr>
        <td>
          <label><b>Weight:</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" name="Weight" value="<?php echo  $Weight; ?>">
        </td>
      </tr>
</table>

<table>
   <tr>
    <p style="background-color: #eef6f6; margin-bottom: 0px; padding: 10px; font-size: 20px;; font-family: calibri"><br /></p>
  </tr>
  <tr>
    <td>
      <label><b>Nature of Visit:</b></label>
<select name="Nature_of_Visit" class="w3-input w3-border" style="padding: 13px;">
<option value="<?php echo $Nature_of_Visit; ?>"><?php echo $Nature_of_Visit; ?></option>
<option class="inp">(Katayuan sa pagtatrabaho)</option>
<option value="New Consultation/case">New Consultation/case</option>
<option value="New Admission">New Admission</option>
<option value="Follow-up visit">Follow-up visit</option>
</select>
    </td>
    <td>
         <div class="form-group">
  <label for="comment"><b>Chief Complaints:</b></label>
  <textarea name="Chief_Complaints" class="form-control" rows="5" id="comment" value="<?php echo $Chief_Complaints; ?>" disabled><?php echo $Chief_Complaints; ?></textarea>
</div>
    </td> 
  </tr>
  <tr>
    <td>
      <label><b>Type of Consultation Purpose of visit:</b></label>
        <select name="Consultation_Purpose" class="w3-input w3-border" style="padding: 13px">
        <option value="<?php echo  $Consultation_Purpose; ?>"><?php echo  $Consultation_Purpose; ?></option>
        <option value="General">General</option>
        <option value="Prenatal">Prenatal</option>
        <option value="Dental Care">Dental Care</option>
        <option value="Child Care">Child Care</option>
        <option value="Child Nutrition">Child Nutrition</option>
        <option value="Injury">Injury</option>
        <option value="Adult Immunization">Adult Immunization</option>
        <option value="Family Planning">Family Planning</option>
        <option value="Postpartum">Postpartum</option>
        <option value="Tuberculoses">Tuberculoses</option>
        <option value="Child Immunization">Child Immunization</option>
        <option value="Sick Children">Sick Children</option>
        <option value="Fire Cracker Injury">Fire Cracker Injury</option>
        </select>
    </td>
        <td></td>

  </tr>
</table>


<br>

<table>
  <tr>
     <p style="background-color: #eef6f6; margin-bottom: 0px; padding: 10px; font-size: 20px;; font-family: calibri"><br /></p>
  </tr>
  <tr>
    <td>
      <label><b>Diagnosis:</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="Diagnosis" value="<?php echo  $Diagnosis; ?>">
    </td>
  </tr>

  <tr>
    <td>
      <label><b>Medication Treatment:</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="Medication_Treatment" value="<?php echo  $Medication_Treatment; ?>">
    </td>
  </tr>

  <tr>
    <td>
      <label><b>Laboratory Findings/Impression:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="Lab_Findings_Impression" value="<?php echo  $Lab_Findings_Impression; ?>">
    </td>
  </tr>
</table>
<br />
    <button type="submit" name="update" class="w3-btn w3-border w3-round" style="background-color: #099ca5; padding: 10px">Update Record</button>
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

    if (isset($_POST['update'])){

      $Lastname=$_POST['Lastname'];
        $Firstname=$_POST['Firstname'];
          $Middlename=$_POST['Middlename'];
            $Suffix=$_POST['Suffix'];
              $Age=$_POST['Age'];
                $Residential_Address=$_POST['Residential_Address'];
                  $Mode_Transaction=$_POST['Mode_Transaction'];
                    $Reffered_from=$_POST['Reffered_from'];
                       $Date_Consultation=$_POST['Date_Consultation'];
                          $Reffered_to=$_POST['Reffered_to'];
                              $Consulation_Time=$_POST['Consulation_Time'];
                                 $Reason_for_Referral=$_POST['Reason_for_Referral'];
                                    $Blood_Pressure=$_POST['Blood_Pressure'];
                                  $Reffered_by =$_POST['Reffered_by'];
                                $Height=$_POST['Height'];
                          $Name_of_Attending_Provider=$_POST['Name_of_Attending_Provider'];
                        $Temperature=$_POST['Temperature'];
                      $Weight=$_POST['Weight'];
                    $Nature_of_Visit=$_POST['Nature_of_Visit'];
                $Chief_Complaints =$_POST['Chief_Complaints'];
          $Consultation_Purpose=$_POST['Consultation_Purpose'];
        $Diagnosis=$_POST['Diagnosis'];
    $Medication_Treatment =$_POST['Medication_Treatment'];
  $Lab_Findings_Impression  =$_POST['Lab_Findings_Impression'];

    mysql_query("update old_patient set Lastname='$Lastname',Firstname='$Firstname',Middlename='$Middlename',
            Suffix='$Suffix',Age='$Age',Residential_Address='$Residential_Address',
            Mode_Transaction='$Mode_Transaction',Reffered_from='$Reffered_from',Date_Consultation='$Date_Consultation',
            Reffered_to='$Reffered_to',Consulation_Time='$Consulation_Time',Reason_for_Referral='$Reason_for_Referral',Blood_Pressure='$Blood_Pressure',Reffered_by='$Reffered_by',Height='$Height',Name_of_Attending_Provider='$Name_of_Attending_Provider',Temperature='$Temperature',Weight='$Weight',Nature_of_Visit='$Nature_of_Visit',Chief_Complaints='$Chief_Complaints',Consultation_Purpose='$Consultation_Purpose',Diagnosis='$Diagnosis',Medication_Treatment='$Medication_Treatment',Lab_Findings_Impression='$Lab_Findings_Impression'

            where id='$get_id'")or die(mysql_error());



        echo '<script type="text/javascript">alert("Patient Record updated Succesfully!");window.location=\'patient_record.php\';</script>';

    }


?>  

          
    