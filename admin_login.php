<?php include('admin_server.php') ?>

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
<body class="w3-light-grey">
  <header class="w3-container w3-card-4 w3-teal w3-padding-64 w3-padding-jumbo">
    <h1 class="w3-xxxlarge w3-padding-16" style="letter-spacing: 4px;">BRGY. HEALTH CENTER</h1>
  </header>

<br />
   <h5 style="color: gray; margin-top: 0px; margin-left: 20%">Instructions: For admin only.</h4>



<br />
<div class="w3-card-4 w3-white w3-round w3-container w3-padding-jumbo" style="margin-left: 33%; max-width:500px;">

       <form action="admin_login.php" method="POST">

        <div style="max-width:550px;">
    
        <?php include('errors.php'); ?>
        <br />
          <label class="w3-label">Admin Username</label>
          <input class="w3-input w3-round" type="text" name="username" value="<?php echo $username; ?>">
          <br />
          <label class="w3-label">Password</label>
          <input class="w3-input w3-round" type="password" name="password">

<br />  

        <button class="w3-btn w3-round w3-btn-block w3-teal" type="submit" name="login_user" style="width: 20%">Login</button>
        <a href="index.php" style="color: teal; text-decoration: none; float: right; margin-top: 3px">Home</a>
      
  
     
</table>
<br />

</body>

<style>
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
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