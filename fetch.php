<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "practice");
 $query = "SELECT * FROM consultation WHERE consultation_purpose = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["consultation_purpose"] = $row["consultation_purpose"];
  $data["medicine"] = $row["medicine"];
  $data["quantity"] = $row["quantity"];

 }

 echo json_encode($data);
}
?>
