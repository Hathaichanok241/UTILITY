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
<!-- เริ่มช่วง JS  -->
<script>
        function myFunction() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
                } else {
                    x.className = "navbar";
    }
}

</script>  
<!-- จบช่วย JS  -->
<body>
  <header>
    <center><h4>ระบบรายงานปัญหาสาธารณูปโภคอัจฉริยะ ของคณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี</h4></center>
    <center><h4>Smart public utility reporting system for faculty of industrial education and technology</h4></center>
  </header>
 <!-- เมนู -->
  <div class="navbar">
                <div class="dropdown">
                    <button class="dropbtn">รายงานปัญหา
                    </button>
                </div>   
                <div class="dropdown">
                    <button class="dropbtn">ข้อมูลสาธารณูปโภค
                    </button>
                <div class="dropdown-content">
                    <a href="#">เพิ่มข้อมูลสาธารณูปโภค</a>
                    <a href="#">QR-Code สาธารณูปโภค</a>

                </div>  
                </div>
             <div class="dropdown">
                    <button class="dropbtn">ข้อมูลพนักงาน
                    </button>
                <div class="dropdown-content">
                    <a href="#">เพิ่มข้อมูลพนักงาน</a>
                    <a href="#">QR Code พนักงาน</a>

                </div>  
                </div>
             <div class="dropdown">
                    <button class="dropbtn">ข้อมูลสถานที่
                    </button>
                <div class="dropdown-content">
                    <a href="#">เพิ่มข้อมูลสถานที่</a>

                </div>  
                </div>
        </div>
        
        <div class="vertical-menu">
            <a href="#" class="active">Home</a>
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>

            
        </div>
 <!-- ปิดเมนู -->

  <?php include("connect_db.php"); ?>
  <?php
  $sql = "SELECT * FROM Report ";
  $result = $conn->query($sql);
  if(!result)
  {
    echo "Not found id=".$_GET["Report"];
  }

  ?>

  <div class="container">
    <center><span id="text1"> ข้อมูลพนักงาน </span></center> 
    <div style="overflow-x:auto;">
      <center><table border="2">
        <tr>

          <th>วันที่</th>
          <th>ชื่อสาธารณูปโภค</th>
          <th>ปัญหา</th> 
          <th>ชื่อห้อง</th> 
          <th>ผู้รับผิดชอบ่</th> 
          <th>สถานะ</th> 
          <th>วันที่แก้ไข</th> 
          <th>เวลาที่แก้ไข</th> 

        </tr>
        <?php
        while($row = $result->fetch_assoc()){
          ?> 
          <tr>

           <td ><?php echo $row["Date/Time"];?></td>
           <td ><?php echo $row["Utility_Name"];?></td>
           <td ><?php echo $row["Problem"];?></td>
           <td ><?php echo $row["Location"];?></td>
           <td ><?php echo $row["Reponsible"];?></td>
           <td><?php echo $row["status"];?></td>
           <td><?php echo $row["Date_repair"];?></td>
           <td ><?php echo $row["Time_repair"];?></td>
         </tr>
         <?php
       }
       $conn->close();
       ?>

     </table>

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
