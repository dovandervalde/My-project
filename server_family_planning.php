<?php
  
include("server.php");
  include("dbcon.php");
  if (isset($_POST['dsubmit'])) {
    $patient_id=$_POST['patient_id'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $age=$_POST['age'];
    $residential_address=$_POST['residential_address'];
    $consultation_purpose=$_POST['consultation_purpose'];
    $type_client=$_POST['type_client'];
    $method=$_POST['method'];
    $drop_out=$_POST['drop_out'];
    $schedule_nxt_vist=$_POST['schedule_nxt_vist'];
    $done_consult=$_POST['done_consult'];
     $old=$_POST['old'];
         
    mysql_query("INSERT into family_planning (patient_id,lastname,firstname,middlename,age,residential_address,consultation_purpose,type_client,method,drop_out,schedule_nxt_vist,done_consult,old) VALUES ('$patient_id','$lastname','$firstname','$middlename','$age','$residential_address','$consultation_purpose','$type_client','$method','$drop_out','$schedule_nxt_vist','$done_consult','$old')");

         $num=$_POST['num'];
          $lastname=$_POST['lastname'];
      
      mysql_query("UPDATE old_patient SET num = num + 1 WHERE lastname = '$lastname'");

echo '<script type="text/javascript">window.alert("Consulted successfully!")</script>';
    echo '<script type="text/javascript">window.location="family_planning.php"</script>';
   

}
    ?>