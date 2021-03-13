<?php 
include("dbcon.php");

if(isset($_POST['dsubmit']))
{
  

$name=$_POST['name'];
$address=$_POST['address'];
$age=$_POST['age'];
$medicine=$_POST['medicine'];
$quantity=$_POST['quantity'];



    mysql_query("INSERT INTO report_patient(name,address,age,medicine,quantity)VALUES('$name','$address','$age','$medicine','$quantity')");


    $medicine = $_POST['medicine'];
    $quantity = $_POST['quantity'];

    if($quantity == 1)
    {
      mysql_query("UPDATE stock_update SET quantity = quantity - 1 WHERE medicine = '$medicine'");
        echo '<script type="text/javascript">window.alert("Patient Successfully Get 1 Bag of medicine")</script>';
        echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    }elseif($quantity == 2){
      mysql_query("UPDATE stock_update SET quantity = quantity - 2 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 2 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 3){
      mysql_query("UPDATE stock_update SET quantity = quantity - 3 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 3 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 4){
      mysql_query("UPDATE stock_update SET quantity = quantity - 4 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 4 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 5){
      mysql_query("UPDATE stock_update SET quantity = quantity - 5 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 5 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 6){
      mysql_query("UPDATE stock_update SET quantity = quantity - 6 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 6 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 7){
      mysql_query("UPDATE stock_update SET quantity = quantity - 7 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 7 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 8){
      mysql_query("UPDATE stock_update SET quantity = quantity - 8 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 8 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 9){
      mysql_query("UPDATE stock_update SET quantity = quantity - 9 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 9 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }elseif($quantity == 10){
      mysql_query("UPDATE stock_update SET quantity = quantity - 10 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Patient Successfully Get 10 Bags of Blood")</script>';
      echo '<script type="text/javascript">window.location="medicine_stock.php"</script>';
    
    }
  
}
 ?>