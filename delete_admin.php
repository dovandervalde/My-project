<?php
include('connectDB.php');

$delete=$_GET['id'];

mysql_query("delete from admin where id='$delete'");

header('location:view_admin_account.php');

?>