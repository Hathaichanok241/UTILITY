<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Project Website</title>
            <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
            <link rel="stylesheet" href="skinall.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        </head>
  <body>
     <?php include("connect_db.php"); ?>
      <?php
                $sql = "SELECT * FROM Utility WHERE id ='".$_GET["id"]."'";
                $result = $conn->query($sql);
                if(!result)
                {
                  echo "Not found CustomerID=".$_GET["id"];
                }
      ?>
        <div class="container">
        <?php
            while($row = $result->fetch_assoc()){
        ?> 
            <center><img src= "picture/<?php echo $row['Utility_Name'];?>.png"></center>
    
 
        <div class="text">
            <center><font color=“blue”><span>ตำแหน่ง</span></font>
        
            <font color=“yellow”> :  <?=$row['Room_name']?>       
              <br> <p><?=$row['builingName']?></p>
              <br> <p><?=$row['Utliity_Name']?></p>
            <span>คณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี</span></font></center>  
        <?php
          }
            $conn->close();
        ?>
            <div class="box">
            <center><button class="button"><a href= "https://webserv.kmitl.ac.th/utilityreport/report/complete/">เสีย</a></button></center>
            <center><button class="button"><a href= "https://webserv.kmitl.ac.th/utilityreport/report/complete/">น้ำแอร์หยด</a></button></center>
            </div>
        </div>
      
      </div>
  
  </body>
</html>