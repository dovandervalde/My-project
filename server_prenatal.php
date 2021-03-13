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
    $gravidity=$_POST['gravidity'];
    $lmp=$_POST['lmp'];
    $parity=$_POST['parity'];
    $edc=$_POST['edc'];
    $term=$_POST['term'];
    $aog=$_POST['aog'];
    $preterm=$_POST['preterm'];
    $ti=$_POST['ti'];
    $iron=$_POST['iron'];
    $livebirth=$_POST['livebirth'];
    $abortion=$_POST['abortion'];
    $others=$_POST['others'];
    $syphills=$_POST['syphills'];
    $penicillin=$_POST['penicillin'];
    $Sched_next_visit=$_POST['Sched_next_visit'];
    $fundic_height=$_POST['fundic_height'];
    $fatal_heart=$_POST['fatal_heart'];
    $done_consult=$_POST['done_consult'];
    $old=$_POST['old'];
         
    mysql_query("INSERT into prenatal (patient_id,lastname,firstname,middlename,age,residential_address,consultation_purpose,gravidity,lmp,parity,edc,term,aog,preterm,ti,iron,livebirth,abortion,others,syphills,penicillin,Sched_next_visit,fundic_height,fatal_heart,done_consult,old) VALUES ('$patient_id','$lastname','$firstname','$middlename','$age','$residential_address','$consultation_purpose','$gravidity','$lmp','$parity','$edc','$term','$aog','$preterm','$ti','$iron','$livebirth','$abortion','$others','$syphills','$penicillin','$Sched_next_visit','$fundic_height','$fatal_heart','$done_consult','$old')");



$num=$_POST['num'];
          $lastname=$_POST['lastname'];
      
      mysql_query("UPDATE old_patient SET num = num + 1 WHERE lastname = '$lastname' AND firstname = '$firstname' AND middlename = '$middlename'");
echo '<script type="text/javascript">window.alert("Consulted successfully!")</script>';
    echo '<script type="text/javascript">window.location="prenatal.php"</script>';
   


}
    ?>