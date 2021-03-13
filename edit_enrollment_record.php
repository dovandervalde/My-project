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
$query = "SELECT  FROM ad_patient";
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
  <li><a href="patient_enrollment_record.php" style="color: white" class="w3-pale-blue w3-round">Patient Enrollment Record</a></li>
  <li><a href="patient_record.php" >Individual Treatment Record</a></li>
  <li style="float: right;"><a href="logout.php?logout" style="color: white">Log out</a></li>
</ul>
</div>
<br />
<br />
<br />
     <?php
          include('connectDB.php');
        $get_id=$_GET['id'];
        $result = mysql_query("SELECT * FROM ad_patient WHERE id='$get_id'");
        while($row = mysql_fetch_array($result))
          {
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

  <h3 style="padding: 8px">Update Patient's Enrollment Record</h2>
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
    <td><label><b>Sex:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Sex" value="<?php echo $Sex; ?>"></td>

    <td><label><b>Birthdate:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Birth_date" value="<?php echo  $Birth_date; ?>"></td>


    <td><label><b>Birthplace:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Birth_place" value="<?php echo  $Birth_place; ?>">
</td>
  </tr>

    <tr>
      <td><label><b>Bloodtype:</b></label>
      <select name="Bloodtype" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo  $Bloodtype; ?>"><?php echo  $Bloodtype; ?></option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
      </td>

    <td><label><b>Civil Status:</b></label>
<select name="Civil_status" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo $Civil_status; ?>"><?php echo $Civil_status; ?></option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Annulled">Annulled</option>
<option value="Widowler">Widowler</option>
<option value="Separated">Separated</option>
<option value="Co-habitition">Co-habitition</option>
</select>
</td>

    <td><label><b>Spouse's Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="spouse_name" value="<?php echo  $spouse_name; ?>">
</td>
  </tr>

   <tr>
    <td><label><b>Educational Attainment:</b></label>
<select name="Ed_attainment" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo $Ed_attainment; ?>"><?php echo $Ed_attainment; ?></option>
<option value="No Formal Education">No Formal Education</option>
<option value="High School">High School</option>
<option value="Annulled">Annulled</option>
<option value="Widowler">Widowler</option>
<option value="Separated">Separated</option>
<option value="Co-habitition">Co-habitition</option>
</select>
</td>

    <td><label><b>Employment Status:</b></label>
<select name="Emp_status" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo  $Emp_status; ?>"><?php echo  $Emp_status; ?></option>
<option value="Student">Student</option>
<option value="Employed">Employed</option>
<option value="Unknown">Unknown</option>
<option value="Retired">Retired</option>
</select>
</td>

    <td><label><b>Family Member:</b></label>
<select name="Family_mem" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo $Family_mem; ?>"><?php echo $Family_mem; ?></option>
<option value="Father">Father</option>
<option value="Son">Son</option>
<option value="Mother">Mother</option>
<option value="Daughter">Daughter</option>
</select>
</td>

  </tr>

     <tr>
    <td><label><b>Suffix:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Suffix" value="<?php echo  $Suffix; ?>"></td>

    <td><label><b>Maiden Name(for married women):</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Maiden_name" value="<?php echo  $Maiden_name; ?>"></td>

    <td><label><b>Mother's Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Mother_name" value="<?php echo  $Mother_name; ?>">
</td>
  </tr>

   <tr>
    <td><label><b>Residential Address:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Res_address" value="<?php echo  $Res_address; ?>"></td>

    <td><label><b>Contact Number:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="number" name="Contact_no" value="<?php echo  $Contact_no; ?>"></td>

    <td><label><b>DSWD NHTS:</b></label>
<select name="Department" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo  $Department; ?>"><?php echo  $Department; ?></option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</td>

  </tr>

    <tr>
    <td><label><b>Facility Household No:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" name="Fh_number" value="<?php echo  $Fh_number; ?>"></td>

    <td><label><b>4Ps Member:</b></label>
<select name="Member" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo $Member; ?>"><?php echo $Member; ?></option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</td>


    <td><label><b>Household Number:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="number" name="Household_no" value="<?php echo  $Household_no; ?>">
</td>
  </tr>

   <tr>
    <td><label><b>PhilHealth Member:</b></label>
<select name="Ph_member" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo  $Ph_member; ?>"><?php echo  $Ph_member; ?></option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</td>

    <td><label><b>Status Type:</b></label>
<select name="Status_type" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo $Status_type; ?>"><?php echo $Status_type; ?></option>
<option value="Member">Member</option>
<option value="Dependent">Dependent</option>
</select>
</td>

    <td><label><b>PhilHealth No::</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="number" name="Ph_no" value="<?php echo  $Ph_no; ?>">
</td>
  </tr>

   <tr>
    <td><label><b>If Member,please Indicate Category:</b></label>
<select name="Category" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo  $Category; ?>"><?php echo  $Category; ?></option>
<option value="FE-Private">FE-Private</option>
<option value="FE-Goverment">FE-Goverment</option>
<option value="IE">IE</option>
<option value="Others">Others</option>
</select>
</td>


    <td><label><b>Primary Care Benefit (PCB) Member:</b></label>
<select name="Pcb_member" class="w3-input w3-border w3-margin-bottom">
<option value="<?php echo $Pcb_member; ?>"><?php echo  $Pcb_member; ?></option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
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
            $Sex=$_POST['Sex'];
              $Birth_date=$_POST['Birth_date'];
                $Birth_place=$_POST['Birth_place'];
                   $Bloodtype=$_POST['Bloodtype'];
                      $Civil_status=$_POST['Civil_status'];
                        $spouse_name=$_POST['spouse_name'];
                          $Ed_attainment=$_POST['Ed_attainment'];
                            $Emp_status=$_POST['Emp_status'];
                              $Family_mem=$_POST['Family_mem'];
                                $Suffix=$_POST['Suffix'];
                                  $Maiden_name=$_POST['Maiden_name'];
                                    $Mother_name=$_POST['Mother_name'];
                                      $Res_address=$_POST['Res_address'];
                                        $Contact_no=$_POST['Contact_no'];
                                          $Department=$_POST['Department'];
                                            $Fh_number=$_POST['Fh_number'];
                                          $Member=$_POST['Member'];
                                        $Household_no=$_POST['Household_no'];
                                      $Ph_member=$_POST['Ph_member'];
                                    $Status_type=$_POST['Status_type'];
                                  $Ph_no=$_POST['Ph_no'];
                                $Category=$_POST['Category'];
                              $Pcb_member=$_POST['Pcb_member'];

    mysql_query("update ad_patient set Lastname='$Lastname',Firstname='$Firstname',Middlename='$Middlename',
            Sex='$Sex',Birth_date='$Birth_date',Birth_place='$Birth_place',
            Bloodtype='$Bloodtype',Civil_status='$Civil_status',spouse_name='$spouse_name',
            Ed_attainment='$Ed_attainment',Emp_status='$Emp_status',Family_mem='$Family_mem',Suffix='$Suffix',Maiden_name='$Maiden_name',Mother_name='$Mother_name',Res_address='$Res_address',Contact_no='$Contact_no',Department='$Department',Fh_number='$Fh_number',Member='$Member',Household_no='$Household_no',Ph_member='$Ph_member',Status_type='$Status_type',Ph_no='$Ph_no',Category='$Category',Pcb_member='$Pcb_member'

            where id='$get_id'")or die(mysql_error());



        echo '<script type="text/javascript">alert("Patient Enrollment Record updated Succesfully!");window.location=\'patient_enrollment_record.php\';</script>';

    }


?>  

          
    