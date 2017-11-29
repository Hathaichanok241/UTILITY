<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Project Website</title>
            <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
            <link href="NewCssdata.css" rel="stylesheet">
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
            <a href= "index.html">สาธารณูปโภค</a>
            <a href= "utility.html">พนักงาน</a>
            <a href= "Employee.html">รายงานปัญหา</a>
            <a href= "reporting.html">ติดต่อผู้ดูแล</a>
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
      <th>URL</th>
      <th>QRcode</th> 
    </tr>
     <?php
            while($row = $result->fetch_assoc()){
        ?> 
    <tr>
      
      <td><?php echo $row["id"];?></td>
      <td>
        <?php   
                   $id1=$row['IDNumber'];
                 echo $string ="https://webserv.kmitl.ac.th/utilityreport/Utility_project/reportFnum.php?IDNumber=".$id1."";
        ?>
      </td>
      <td>
        <img src="gen_qrcode.php?w=<?php echo $string;?>" alt="">
      </td>
       
    </tr>
     <?php
        }
            $conn->close();
        ?>
    
        </table></center>
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
