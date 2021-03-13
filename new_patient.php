
<?php include('server_patient.php') ?>


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
  <a href="index.php" class="w3-teal w3-medium w3-round w3-card-4">Home</a>
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" style="margin-left:310px;">

<div id="myTop" class="w3-top w3-container w3-padding-16 w3-teal w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Brgy.Health Center</span>
</div>

<header class="w3-container w3-round w3-card-4 w3-teal w3-padding-30 w3-padding-jumbo">
  <h1 class="w3-xxlarge w3-padding-" style="letter-spacing: 4px">Patient Enrollment</h1>
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
      <h5 style="color: gray; margin-top: 0px; float: left;">Instructions: For new patient only (Para lamang sa bag-o na pasyente).</h4>
        <br />
<form action="server_patient.php" method="POST">


<table>
  <tr>
    <!--
    <p style="background-color: #eef6f6; margin-bottom: 0px; padding: 10px; font-size: 20px;; font-family: calibri"><input class="w3-input w3-border w3-margin-bottom" style="float: left; padding: 3px; width: 17%" name="patient_id" value=" 
   <?php 
    //function gen_random_string($length=4)
    {
        //$chars ="000001234567890";
        $final_rand ='';
       // for($i=0;$i<$length; $i++)
        {
        //    $final_rand .= $chars[ rand(0,strlen($chars)-1)];
        }
      //  return $final_rand;
    }
    //echo 'Patient ID-'." ". gen_random_string()."\n"; //generates a string 
    ?>" readonly />--><br /><p><b style="margin-right: 10%; font-size: 20px">PATIENT INFORMATION (Impormasyon ng Pasyente)</b></p>
  </tr>

<tr>

  <td><label><b>Last Name:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Apelyedo)" name="Lastname" required></td>
  <td><label><b>First Name:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Pangalan)" name="Firstname" value="<?php echo $Firstname; ?>" required></td>
  <td><label><b>Middle Name:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Gitnang Pangalan)" name="Middlename" required></td>
</tr>

<tr>
  <td><label><b>Sex:</b></label><br>
    <input type="radio" name="Sex" value="Male" required>Male&nbsp&nbsp&nbsp
    <input type="radio" name="Sex" value="Female" required>Female</td>

  <td><label><b>Birth Date:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(mm/dd/yyyy)" name="Birth_date" required></td>

  <td><label><b>Birth Place:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(lugar ng Kapanganakan)" name="Birth_place" required></td>
</tr>
  <tr>
    <td><label><b>Bloodtype:</b></label>
      <select name="Bloodtype" class="w3-input w3-border">
      <option class="inp" disabled>Select Bloodtype</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      </select>
  </td>

    <td><label><b>Civil Status:</b></label>
      <select name="Civil_status" class="w3-input w3-border">
      <option class="inp"></option>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Annulled">Annulled</option>
      <option value="Widowler">Widowler</option>
      <option value="Separated">Separated</option>
      <option value="Co-habitition">Co-habitition</option>
      </select>
  </td>
    <td><label><b>Spouse's Name:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Asawa)" name="spouse_name">
  </td>
  </tr>
    <tr>
    <td><label><b>Educational Attainment:</b></label>
      <select name="Ed_attainment" class="w3-input w3-border">
      <option class="inp"></option>&nbsp
      <option value="No Formal Education">No Formal Education</option>
      <option value="High School">High School</option>
      <option value="Annulled">Annulled</option>
      <option value="Widowler">Widowler</option>
      <option value="Separated">Separated</option>
      <option value="Co-habitition">Co-habitition</option>
      </select>
    </td>
    <td><label><b>Employment Status:</b></label>
      <select name="Emp_status" class="w3-input w3-border">
      <option class="inp"></option>
      <option value="Student">Student</option>
      <option value="Employed">Employed</option>
      <option value="Unknown">Unknown</option>
      <option value="Retired">Retired</option>
      </select>
    </td>
 <td><label><b>Family Member:</b></label>
      <select name="Family_mem" class="w3-input w3-border">
      <option class="inp"></option>
      <option value="Father">Father</option>
      <option value="Son">Son</option>
      <option value="Mother">Mother</option>
      <option value="Daughter">Daughter</option>
      </select>
  </td>

  </tr>
   <tr>
<td><label><b>Suffix:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(e.g.JR.SR.II.III)" name="Suffix">
</td>

<td><label><b>Please write Maiden Name(for married women):</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Pangalan sa Pagkadalaga(Para sa babaeng may asawa)" name="Maiden_name">
</td>
<td><label><b>Mother's Name:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Pangalan ng Ina)" name="Mother_name">
</td>
  </tr>
  <tr>
    <td><label><b>Residential Address:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="(Tirahan)" name="Res_address" required>
    </td>
    <td><label><b>Contact Number:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="(Contact Number)"name="Contact_no">
</td>
 <td><label><b>DSWD NHTS?:</b></label>
    <select name="Department" class="w3-input w3-border">
    <option class="inp"></option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
</td>

  </tr>
   <tr>
    <td><label><b>Facility Household No:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="(Contact Number)"name="Fh_number">
</td>
    <td><label><b>4Ps Member?:</b></label>
    <select name="Member" class="w3-input w3-border">
    <option class="inp"></option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
</td>
    <td><label><b>Household Number:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="(Household Number)"name="Household_no">
</td>
  </tr>
  <tr>
    <td><label><b>PhilHealth Member?:</b></label>
    <select name="Ph_member" class="w3-input w3-border">
    <option class="inp"></option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
</td>
    <td><label><b>Status Type:</b></label>
    <select name="Status_type" class="w3-input w3-border">
    <option class="inp"></option>
    <option value="Member">Member</option>
    <option value="Dependent">Dependent</option>
    </select>
</td>
 <td><label><b>PhilHealth No:</b></label>
<input class="w3-input w3-border w3-margin-bottom" type="text"placeholder="(PhilHealth No)"name="Ph_no" required>
</td>

  </tr>
   <tr>
    <td><label><b>If Member,please Indicate Category:</b></label>
    <select name="Category" class="w3-input w3-border">
    <option class="inp"></option>
    <option value="FE-Private">FE-Private</option>
    <option value="FE-Goverment">FE-Goverment</option>
    <option value="IE">IE</option>
    <option value="Others">Others</option>
    </select>
</td>
    <td><label><b>Primary Care Benefit (PCB) Member:</b></label>
    <select name="Pcb_member" class="w3-input w3-border">
    <option class="inp"></option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
</td>
 <td><label></label>

</td>
  </tr>
</table>

<br> 
<button class="w3-btn w3-round w3-teal" type="submit" name="dsubmit">Enroll Patient</button>
</form>

<br />
</div>
</div>
</div>
</div>
</div>
</div>    
</div>
</body>

<style>
  .hh{
    position: fixed;
  }

</style>
  <br>

<footer class="w3-container  w3-light-grey w3-padding-jumbo">
  <p>Copyright</p>
</footer>
     
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

     
</body>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:04 GMT -->
</html>