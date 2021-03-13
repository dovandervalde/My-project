<?php
include("dbcon.php");
if(isset($_POST['submit']))
{

 $medicine = $_POST['medicine'];
    $quantity = $_POST['quantity'];



    if($quantity == 10)
    {
      mysql_query("UPDATE stock_update SET quantity = quantity + 10 WHERE medicine = '$medicine'");
        echo '<script type="text/javascript">window.alert("Added 10 Successfully!")</script>';
        echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    }elseif($quantity == 20){
      mysql_query("UPDATE stock_update SET quantity = quantity + 20 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 20 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 30){
      mysql_query("UPDATE stock_update SET quantity = quantity + 30 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 30 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 40){
      mysql_query("UPDATE stock_update SET quantity = quantity + 40 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 40 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 50){
      mysql_query("UPDATE stock_update SET quantity = quantity + 50 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 50 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 60){
      mysql_query("UPDATE stock_update SET quantity = quantity + 60 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 60 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 70){
      mysql_query("UPDATE stock_update SET quantity = quantity + 70 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 70 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 80){
      mysql_query("UPDATE stock_update SET quantity = quantity + 80 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 80 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 90){
      mysql_query("UPDATE stock_update SET quantity = quantity + 90 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 90 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }elseif($quantity == 100){
      mysql_query("UPDATE stock_update SET quantity = quantity + 100 WHERE medicine = '$medicine'");

      echo '<script type="text/javascript">window.alert("Added 100 Successfully!")</script>';
      echo '<script type="text/javascript">window.location="add_stock.php"</script>';
    
    }
  
}
?>