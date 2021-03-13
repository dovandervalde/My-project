<?php
  include("server.php");
  if (isset($_POST['dsubmit'])) {
    $consultation_purpose=$_POST['consultation_purpose'];
    $medicine=$_POST['medicine'];
 
    mysql_query("INSERT INTO consultation (consultation_purpose,medicine) VALUES ('$consultation_purpose','$medicine')");
    

echo '<script type="text/javascript">window.alert("Patient Registered Successfully")</script>';
    echo '<script type="text/javascript">window.location="index.php"</script>';


  ?>
 
  
<?php    
}

    ?>