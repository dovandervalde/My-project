<?php
include('connectDB.php');

$delete=$_GET['id'];

mysql_query("delete from old_patient where id='$delete'");

header('location:patient_record.php');

?>