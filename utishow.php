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
            <a href= "reportshow.php">การรายงานปัญหา</a>
            <a href= "utishow.php">สาธารณูปโภค</a>
            <a href= "empshow1.php">ข้อมูลพนักงาน</a>
            <a href= "data.php">QRcode</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        
        <?php include("connect_db.php"); ?>
        <?php
                $sql = "SELECT * FROM Utility ";
                $result = $conn->query($sql);
                if(!result)
                {
                  echo "Not found id=".$_GET["Utility"];
                }

      ?>

        <div class="container">
          <center><span id="text1"> ข้อมูลสาธารณูปโภค/Utility </span></center> 
       <div style="overflow-x:auto;">
        <center><table border="2">
    <tr>
      
      <th>ID</th>
      <th>Name</th>
      <th>Room</th> 
      <th>Floor</th> 
      <th>Location</th> 
      <th>Responsible</th> 
    </tr>
     <?php
            while($row = $result->fetch_assoc()){
        ?> 
    <tr>
      
      <td><?php echo $row["id"];?></td>
       <td><?php echo $row["Utility_Name"];?></td>
       <td><?php echo $row["Room"];?></td>
      <td><?php echo $row["Floor"];?></td>
       <td><?php echo $row["Location"];?></td>
        <td><?php echo $row[">Reponsible"];?></td>

      
       
    </tr>
     <?php
        }
            $conn->close();
        ?>
    
        </table>
        <button><a href="utilityInsert.php">เพิ่มข้อมูลกสาธารณูปโภค</a></button>
      </center>
        </div>
        </div>
    <link href="web.js" rel="stylesheet">   
    </body>
    <footer>
    <div class="footer">
    <center><p></p></center>
    <center><div class="q1">Website Project</div></center>
    <center><div class="q2">ระบบรายงานสาธารณูปโภค</div></center>
</div>
    </footer>
</html>
