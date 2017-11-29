<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Project Website</title>
            <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
            <link href="data.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        </head>
<!-- เริ่มช่วง JS -->
<script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
                } else {
                    x.className = "topnav";
    }
}

</script>  
<!-- <จบช่วย JS  -->
    <body>
        <header>
            <center><h4>ระบบรายงานปัญหาสาธารณูปโภคอัจฉริยะ ของคณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี</h4></center>
            <center><h4>Smart public utility reporting system for faculty of industrial education and technology</h4></center>
        </header>
         <div class="topnav" id="myTopnav">
          <a href= "reportshow.php">หน้าหลัก</a>
          <a href= "locationInsert.php">กรอกข้อมูล</a>
          <a href= "locationShow.php">สถานที่</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        
        <?php include("connect_db.php"); ?>
        <?php
                $sql = "SELECT * FROM location ";
                $result = $conn->query($sql);
                if(!result)
                {
                  echo "Not found id=".$_GET["location"];
                }

      ?>

        <div class="container">
          <center><span id="text1"> ข้อมูลห้อง(Location) </span></center> 
       <div style="overflow-x:auto;">
        <center><table border="2">
    <tr>
      
      <th>ID</th>
      <th>ชื่อห้อง</th>
      <th>ชนิดห้อง</th> 
      <th>ชั้น</th> 
      <th>อาคาร</th> 
      <th>ผู้รับผิดชอบ</th> 
    </tr>
     <?php
            while($row = $result->fetch_assoc()){
        ?> 
    <tr>
      
      <td><?php echo $row["idRoom"];?></td>
      <td><?php echo $row["roomName"];?></td>
      <td><?php echo $row["typeRoom"];?></td>
      <td><?php echo $row["Floor"];?></td>
      <td><?php echo $row["buildingName"];?></td>
      <td><?php echo $row["Responsible"];?></td>

      
       
    </tr>
     <?php
        }
            $conn->close();
        ?>
    
        </table>
        <button><a href="locationInsert.php">เพิ่มข้อมูลสถานที่</a></button>
      </center>
        </div>
        </div>
    <link href="web.js" rel="stylesheet">   
    </body>
    <footer>
    <div class="footer">
    <center><div class="q1">Website Project</div></center>
    <center><div class="q2">ระบบรายงานสาธารณูปโภค</div></center>
</div>
    </footer>
</html>
