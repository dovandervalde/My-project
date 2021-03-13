<?php

include("server.php");
  include("dbcon.php");

  if (isset($_POST['dsubmit'])) {

    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $age=$_POST['age'];
    $residential_address=$_POST['residential_address'];
    $consultation_purpose=$_POST['consultation_purpose'];
    $PNL=$_POST['PNL'];
    $FL=$_POST['FL'];
    $others=$_POST['others'];
     $done_consult=$_POST['done_consult'];
     $old=$_POST['old'];

    mysql_query("INSERT into adult_immunization (lastname,firstname,middlename,age,residential_address,consultation_purpose,PNL,FL,others,done_consult,old) VALUES ('$lastname','$firstname','$middlename','$age','$residential_address','$consultation_purpose','$PNL','$FL','$others','$done_consult','$old')");

     $num=$_POST['num'];
          $lastname=$_POST['lastname'];
      
      mysql_query("UPDATE old_patient SET num = num + 1 WHERE lastname = '$lastname' AND firstname = '$firstname' AND middlename = '$middlename'");
echo '<script type="text/javascript">window.alert("Consulted successfully!")</script>';
    echo '<script type="text/javascript">window.location="adult_immu.php"</script>';
   


}
    ?>