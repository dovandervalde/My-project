<?php
  include("dbcon.php");
  if (isset($_POST['dsubmit'])) {

    $patient_id=$_POST['patient_id'];
    $Lastname=$_POST['Lastname'];
    $Firstname=$_POST['Firstname'];
    $Middlename=$_POST['Middlename'];
    $Suffix=$_POST['Suffix'];
    $Age=$_POST['Age'];
    $Residential_Address=$_POST['Residential_Address'];
    $Mode_Transaction=$_POST['Mode_Transaction'];
    $Reffered_from=$_POST['Reffered_from'];
    $Date_Consultation=$_POST['Date_Consultation'];
    $Reffered_to=$_POST['Reffered_to'];
    $Consulation_Time=$_POST['Consulation_Time'];
    $Reason_for_Referral=$_POST['Reason_for_Referral'];
    $Blood_Pressure=$_POST['Blood_Pressure'];
    $Reffered_by=$_POST['Reffered_by'];
    $Height=$_POST['Height'];
    $Name_of_Attending_Provider=$_POST['Name_of_Attending_Provider'];
    $Temperature=$_POST['Temperature'];
    $Weight=$_POST['Weight'];
    $Nature_of_Visit=$_POST['Nature_of_Visit'];
    $Chief_Complaints=$_POST['Chief_Complaints'];
    $Consultation_Purpose=$_POST['Consultation_Purpose'];
    $Diagnosis=$_POST['Diagnosis'];
    $Medication_Treatment=$_POST['Medication_Treatment'];
    $Lab_Findings_Impression=$_POST['Lab_Findings_Impression'];
    $old=$_POST['old'];

    $not_yet = $_POST['not_yet'];
    $num = $_POST['num'];
  
  
    mysql_query("INSERT INTO old_patient (patient_id,Lastname,Firstname,Middlename,Suffix,Age,Residential_Address,Mode_Transaction,Reffered_from,Date_Consultation,Reffered_to,Consulation_Time,Reason_for_Referral,Blood_Pressure,Reffered_by,Height,Name_of_Attending_Provider,Temperature,Weight,Nature_of_Visit,Chief_Complaints,Consultation_Purpose,Diagnosis,Medication_Treatment,Lab_Findings_Impression,old,not_yet) VALUES ('$patient_id','$Lastname','$Firstname','$Middlename','$Suffix','$Age','$Residential_Address','$Mode_Transaction','$Reffered_from','$Date_Consultation','$Reffered_to','$Consulation_Time','$Reason_for_Referral','$Blood_Pressure','$Reffered_by','$Height','$Name_of_Attending_Provider','$Temperature','$Weight','$Nature_of_Visit','$Chief_Complaints','$Consultation_Purpose','$Diagnosis','$Medication_Treatment','$Lab_Findings_Impression','$old','$not_yet')");




echo '<script type="text/javascript">window.alert("Patient saved successfully")</script>';
    echo '<script type="text/javascript">window.location="done_enroll.php"</script>';


  ?>
 
  
<?php    
}


    ?>