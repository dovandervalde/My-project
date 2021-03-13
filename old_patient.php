<?php include('server.php'); ?>
<?php include('server_consult.php'); ?>

<?php include('server_patient.php') ?>

<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "practice");
$query = "SELECT * FROM consultation ORDER BY consultation_purpose ASC";
$results = mysqli_query($connect, $query);
?>


<!DOCTYPE html>
<html>
<title>Barangay Health Center</title>


<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:00 GMT -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="icon" type="image/png" href="Pictures/logo2.jpg">
<link rel="stylesheet" href="../w3-theme-teal.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

<!--kani na codes para dli makabalik ang user sa previous page  -->
<script type="text/javascript">
  function preback(){window.history.forward();}
  setTimeout("preback()",0);
  window.onunload=function() {null};
</script>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}
a {
  color: black;
}
</style>
<body class="w3-light-grey">

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:5;width:300px;">
<a href="#" class="w3-border-bottom w3-large"><img src="Pictures/logo2.jpg" style="width:80%;"></a>
<a href="index.php" class="w3-teal w3-medium w3-card-4 w3-round">Home</a>
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" style="margin-left:310px;">

<div id="myTop" class="w3-top w3-container w3-padding-16 w3-teal w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Brgy.Health Center</span>
</div>

<header class="w3-container w3-card-4 w3-teal w3-round w3-padding-30 w3-padding-jumbo">
  <h1 class="w3-xxlarge w3-padding-" style="letter-spacing: 4px">Individual Treatment Record</h1>
</header>


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
</style>

<center>
<br />
<div class="w3-container w3-round w3-white w3-card-4" style="width: 98%">
  <br />
   <h5 style="color: gray; margin-top: 0px; float: left;"></h4>
    <br />
   
<form action="server_old_patient.php" method="POST">

<table>
  <tr>
    <p style="background-color: #eef6f6; margin-bottom: 0px; padding: 10px; font-size: 20px;; font-family: calibri"><b style="margin-right: 20%">PATIENT INFORMATION (Impormasyon ng Pasyente)</b></p>
  </tr>

<tr>
  
    <td><label><b>Last Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Apelyedo)" name="Lastname"></td>

    <td><label><b>First Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Pangalan)" name="Firstname" ></td>

    <td><label><b>Middle Name:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Gitnang Pangalan)" name="Middlename"></td>
  </tr>

  <tr>
    <td><label><b>Suffix:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(e.g,Jr.,Sr.,II,III)" name="Suffix"></td>

    <td><label><b>Age:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="(Age)" name="Age" ></td>

    <td><label><b>Residential Address:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Tirahan)" name="Residential_Address">
</td>
  </tr>

 

</table>
<br />
<table>
  <tr>
      <p style="background-color: #eef6f6; margin-bottom: 0px; padding: 10px; font-size: 20px;; font-family: calibri" ><b style="float: left;">For CHU/ RHU Personel only( Para sa kinatawan ng CHU/RHU lamang).</b>  
<b style="margin-left: %">
      Instructions: For refferral transaction only.</p>


    <td><label><b>Mode Transaction:</b></label>
          <select name="Mode_Transaction" class="w3-input w3-border" disabled>
          <option value="Walk-in">Walk-in</option>
          <option value="V-sited">V-sited</option>
          <option value="Referral">Referral</option>
          </select>
          </td>

   <td>

    <label><b>Reffered from:</b></label>
        <input class="w3-input w3-border" type="text" placeholder="Reffered from"name="Reffered_from" ></td>
      </tr>
   <tr>
      <td><label><b>Date Consultation:</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="(mm/dd/yyyy)" name="Date_Consultation" disabled>
      </td>

      <td>
        <label><b>Reffered to:</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Reffered to"name="Reffered_to" >
      </td>
      </tr>

      <tr>
        <td><label><b> Consulation Time:</b></label>
            <select name="Consulation_Time" class="w3-input w3-border" disabled>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
            </select>
        </td>

        <td>
          <label><b>Reason for Referral:</b></label>
         <div class="form-group">
            <label for="comment">Comment:</label>
             <textarea name="Reason_for_Referral" class="form-control" rows="5" id="comment" ></textarea>
          </div>
        </td>

      </tr>

      <tr>
        <td><label><b>Blood Pressure:</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="Blood_Pressure" disabled>
        </td>
        <td>
          <label><b>Reffered by:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Reffered by"name="Reffered_by" >

        </td>

      </tr>

      <tr>
        <td><label><b>Height:</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(cm)"name="Height" disabled>
        </td>

      </tr>

      <tr>
        <td>
        <label><b>Name of Attending Provider:</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder=""name="Name_of_Attending_Provider" disabled>
        </td>
      </tr>

      <tr>
        <td>
            <label><b>Temperature:</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="temperature"name="Temperature" disabled>
          </td>
      </tr>

      <tr>
        <td>
          <label><b>Weight:</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(kg)"name="Weight" disabled>
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
<select name="Nature_of_Visit" class="w3-input w3-border" style="padding: 13px;" required>
<option disabled selected>(Katayuan sa pagtatrabaho)</option>
<option value="New Consultation/case">New Consultation/case</option>
<option value="New Admission">New Admission</option>
<option value="Follow-up visit">follow-up visit</option>
</select>
    </td>
    <td>
         <div class="form-group">
  <label for="comment"><b>Chief Complaints:</b></label>
  <textarea name="Chief_Complaints" class="form-control" rows="5" id="comment"></textarea>
</div>
    </td> 
  </tr>
  <tr>
    <td>
      <label><b>Type of Consultation Purpose of visit:</b></label>
        <select name="Consultation_Purpose" class="w3-input w3-border" style="padding: 13px" required>
          <option disabled selected>Select Purpose of visit</option>
          <option value="Adult Immunization">Adult Immunization</option>
          <option value="Child Immunization">Child Immunization</option>
          <option value="Family Planning">Family Planning</option>
          <option value="Postpatrum">Postpatrum</option>
          <option value="Prenatal">Prenatal</option>
        </select>
  
<br>

<table>
  <tr>
     <p style="background-color: #eef6f6; margin-bottom: 0px; padding: 10px; font-size: 20px;; font-family: calibri"><br /></p>
  </tr>
  <tr>
    <td>
      <label><b>Diagnosis:</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="Diagnosis">
    </td>
  </tr>

  <tr>
    <td>
      <label><b>Medication Treatment:</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="Medication_Treatment">
    </td>
  </tr>

  <tr>
    <td>
      <label><b>Laboratory Findings/Impression:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="Lab_Findings_Impression">
    </td>
  </tr>
</table>

<select name="old" style="width: 0%">
  <option value="Old Patient returning"></option>
</select>
<select name="not_yet" style="width: 0%">
  <option value="not yet"></option>
</select>


<br> 
<button class="w3-btn w3-round w3-teal" type="submit" name="dsubmit" style="margin-left: 1%">Submit</button>
<br />
<br />
</form>

</div>
</div>
</div>
</div>
</div>
</div>    


<style>
  .hh{
    position: fixed;
  }

</style>
  <br>

</div>

</td>
</tr>
</table>
<br />
<br />
<br />
     </div>
     <br />
     <br />
</body>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:04 GMT -->
</html>