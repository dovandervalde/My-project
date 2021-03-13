<!DOCTYPE html>
<html>
<title>Barangay Health Center</title>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:00 GMT -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="icon" type="image/png" href="Pictures/logo2.jpg">
<link rel="stylesheet" href="../w3-theme-teal.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}
a {
  color: black;
}
</style>
<body>

  <header class="w3-container w3-card-4 w3-teal w3-padding-64 w3-padding-jumbo">
    <h1 class="w3-xxxlarge w3-padding-16" style="letter-spacing: 4px;">BRGY. HEALTH CENTER</h1>
  </header>

<br />
   <h5 style="color: gray; margin-top: 0px; margin-left: 20%">Instructions: For admin only.</h4>

<br />
<div class="w3-container w3-padding-jumbo" style="margin-left: 30%">
  
    
      <table>
        <div style="max-width:500px;">
        <center>
          
        <h4 style="color: red">Admin username or Password is INCORRECT!</h3>
          <h5 style="color: red">Please Try again</center></h3>
            <br />
           
            <center>
        <button class="w3-btn w3-round w3-btn-block w3-teal" style="width: 20%"><a href="admin_login.php" style=" color: white;
  text-decoration: none;">Login</a></button>
      </center>
       
     
</table>
<br />

</body>

<style>
a {
  color: white;
  text-decoration: none;
}
  .hh{
    position: fixed;
  }

</style>
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