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
<body class="w3-light-grey">
  
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:5;width:300px;">
<a href="#" class="w3-border-bottom w3-large"><img src="Pictures/logo2.jpg" style="width:80%;"></a>

  <a href="index.php" class="w3-teal w3-medium w3-card-4 w3-round">Home</a>
  <a href="new_patient.php">Patient Enrollment</a>
  <a href="old_patient.php">Old Patient</a>

  <a href="admin_login.php">Admin</a>   

 	
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" style="margin-left:310px;">

<div id="myTop" class="w3-top w3-container w3-padding-16 w3-large w3-teal">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Brgy. Health Center</span>
</div>

<header class="w3-container w3-round w3-card-4 w3-padding-30 w3-padding-jumbo w3-teal">
  <h1 class="w3-xxlarge w3-padding-" style="letter-spacing: 3px">BRGY. HEALTH CENTER</h1>
</header>

<div class="w3-container w3-padding-jumbo">
  <h1 class="w3-text-teal">What is Brgy. Health Center?</h1>
  <h5>The <b>Brgy Health</b> Care Management Information System is a community-based and patient-directed organization.</h5>
  <ul class="w3-leftbar w3-theme-border" style="list-style-type:none">
   <li>It's goal is to provide first aid,</li>
   <li>maternal and child <b>health</b> care,</li>
   <li>diagnosis of social diseases,</li>
   <li>and other basic <b>health services</b></li>
   <li>to all the members of the community it is serving.</li>
  </ul>
  <br>
  

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