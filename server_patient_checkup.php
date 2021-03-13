<?php
include("dbcon.php");
if(isset($_POST['submit']))
{
$m=$_POST['medicine'];
	
	   $query = mysql_query("SELECT * FROM stock WHERE medicine = '$m'");
    if(mysql_num_rows($query) > 0) {
        echo '<script type="text/javascript">window.alert("Medicine already exists!")</script>';
    echo '<script type="text/javascript">window.location="add_medicine.php"</script>';
    }
   
    else{

    	  mysql_query("INSERT INTO patient_medicine (medicine)VALUES('$m')");


    mysql_query("INSERT INTO stock (medicine) VALUES ('$m')");

echo '<script type="text/javascript">window.alert("Medicine saved successfully!")</script>';
    echo '<script type="text/javascript">window.location="add_medicine.php"</script>';


}
}

?>