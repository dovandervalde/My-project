<?php
  
session_start();

  // variable declaration
  $Lastname = "";
  $Middlename = "";
  $Firstname = "";
  $Suffix = "";
  $Res_address = "";
  $patient_id = "";


  include("server.php");
  if (isset($_POST['dsubmit'])) {
    $patient_id=$_POST['patient_id'];
    $Lastname=$_POST['Lastname'];
    $Firstname=$_POST['Firstname'];
    $Middlename=$_POST['Middlename'];
    $Sex=$_POST['Sex'];
    $Birth_date=$_POST['Birth_date'];
    $Birth_place=$_POST['Birth_place'];
    $Bloodtype=$_POST['Bloodtype'];
    $Civil_status=$_POST['Civil_status'];
     $spouse_name=$_POST['spouse_name'];
    $Ed_attainment=$_POST['Ed_attainment'];
    $Emp_status=$_POST['Emp_status'];
    $Family_mem=$_POST['Family_mem'];
    $Suffix=$_POST['Suffix'];
    $Maiden_name=$_POST['Maiden_name'];
    $Mother_name=$_POST['Mother_name'];
    $Res_address=$_POST['Res_address'];
    $Contact_no=$_POST['Contact_no'];
     $Department=$_POST['Department'];
    $Fh_number=$_POST['Fh_number'];
    $Member=$_POST['Member'];
    $Household_no=$_POST['Household_no'];
    $Ph_member=$_POST['Ph_member'];
    $Status_type=$_POST['Status_type'];
    $Ph_no=$_POST['Ph_no'];
    $Category=$_POST['Category'];
    $Pcb_member=$_POST['Pcb_member'];

//para ni na code sa parehas last first og middlename sa database dapat d kasulod basta pareho ang tulo
   $query = mysql_query("SELECT * FROM ad_patient WHERE Firstname = '$Firstname' AND Lastname = '$Lastname' AND Middlename = '$Middlename'");
    if(mysql_num_rows($query) > 0) {
        echo '<script type="text/javascript">window.alert("The Last, First and Middle name has already been taken!\nPlease input different name")</script>';
    echo '<script type="text/javascript">window.location="new_patient.php"</script>';
    }
      $query = mysql_query("SELECT * FROM ad_patient WHERE Ph_no = '$Ph_no'");
    if(mysql_num_rows($query) > 0) {
        echo '<script type="text/javascript">window.alert("The Phil Health Number has already been taken!\nPlease input different Phil Health Number")</script>';
    echo '<script type="text/javascript">window.location="new_patient.php"</script>';
    }
   
   
    else{

    mysql_query("INSERT into ad_patient (patient_id,Lastname,Firstname,Middlename,Sex,Birth_date,Birth_place,Bloodtype,Civil_status,spouse_name,Ed_attainment,Emp_status,Family_mem,Suffix,Maiden_name,Mother_name,Res_address,Contact_no,Department,Fh_number,Member,Household_no,Ph_member,Status_type,Ph_no,Category,Pcb_member) VALUES ('$patient_id','$Lastname','$Firstname','$Middlename','$Sex','$Birth_date','$Birth_place','$Bloodtype','$Civil_status','$spouse_name','$Ed_attainment','$Emp_status','$Family_mem','$Suffix','$Maiden_name','$Mother_name','$Res_address','$Contact_no','$Department','$Fh_number','$Member','$Household_no','$Ph_member','$Status_type','$Ph_no','$Category','$Pcb_member')");

   $_SESSION['Lastname'] = $Lastname;
   $_SESSION['Middlename'] = $Middlename;
   $_SESSION['Firstname'] = $Firstname;
   $_SESSION['Suffix'] = $Suffix;
   $_SESSION['Res_address'] = $Res_address;
   $_SESSION['patient_id'] = $patient_id;

echo '<script type="text/javascript">window.alert("Enrolled successfully!\nYou will be directed in the next page! ")</script>';
    echo '<script type="text/javascript">window.location="old_individual.php"</script>';
  
}
}
    ?>