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
    $birth_weight=$_POST['birth_weight'];
    $HP_B1=$_POST['HP_B1'];
    $HP_B2=$_POST['HP_B2'];
    $PENTA_1=$_POST['PENTA_1'];
    $PENTA_2=$_POST['PENTA_2'];
    $PENTA_3=$_POST['PENTA_3'];
    $OPV_1=$_POST['OPV_1'];
    $OPV_2=$_POST['OPV_2'];
    $OPV_3=$_POST['OPV_3'];
    $MCV_1=$_POST['MCV_1'];
    $MCV_2=$_POST['MCV_2'];
    $ROTA_1=$_POST['ROTA_1'];
    $ROTA_2=$_POST['ROTA_2'];
    $PCV_1=$_POST['PCV_1'];
    $PCV_2=$_POST['PCV_2'];
    $PCV_3=$_POST['PCV_3'];
    $HEPA_B2=$_POST['HEPA_B2'];
     $HEPA_B3=$_POST['HEPA_B3'];
    $HEPA_A=$_POST['HEPA_A'];
    $PN=$_POST['PN'];
    $INF=$_POST['INF'];
    $others=$_POST['others'];
    $done_consult=$_POST['done_consult'];
    $old=$_POST['old'];
         
    mysql_query("INSERT into child_immunization (patient_id,lastname,firstname,middlename,age,residential_address,consultation_purpose,birth_weight,HP_B1,HP_B2,PENTA_1,PENTA_2,PENTA_3,OPV_1,OPV_2,OPV_3,MCV_1,MCV_2,ROTA_1,ROTA_2,PCV_1,PCV_2,PCV_3,HEPA_B2,HEPA_B3,HEPA_A,PN,INF,others,done_consult,old) VALUES ('$patient_id','$lastname','$firstname','$middlename','$age','$residential_address','$consultation_purpose','$birth_weight','$HP_B1','$HP_B2','$PENTA_1','$PENTA_2','$PENTA_3','$OPV_1','$OPV_2','$OPV_3','$MCV_1','$MCV_2','$ROTA_1','$ROTA_2','$PCV_1','$PCV_2','$PCV_3','$HEPA_B2','$HEPA_B3','$HEPA_A','$PN','$INF','$others','$done_consult','$old')");

   
        $num=$_POST['num'];
          $lastname=$_POST['lastname'];
            $firstname=$_POST['firstname'];
            $middlename=$_POST['middlename'];

      mysql_query("UPDATE old_patient SET num = num + 1 WHERE lastname = '$lastname' AND firstname = '$firstname' AND middlename = '$middlename'");

        echo '<script type="text/javascript">window.alert("Consulted successfully!")</script>';
        echo '<script type="text/javascript">window.location="child_immu.php"</script>';
   
}
    ?>