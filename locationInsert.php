<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Website</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="edit.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

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
    <div class="container">
      <center><span id="text1">กรอกข้อมูลสถานที่</span></center> 
      <center><table>
        <form name="form1" method="post" action="locationAdd.php">
            <th>ID :</th>
            <td><input name="idRoom" type="int" id="idRoom"></td>
            <tr>
                <th>=ชื่อห้อง : </th>
                <td><input name="roomName" type="varchar" id="roomName"></td>
            </tr>
            <tr>
                <th>ชนิดห้อง : </th>
                <td><input name="typeRoom" type="varchar" id="typeRoom"></td>
            </tr>
            <tr>
                <th>ชั้น : </th>
                <td><input name="Floor" type="int" id="Floor"></td>
            </tr>
            <tr>
                <th>อาคาร : </th>
                <td><input name="buildingName" type="varchar" id="buildingName"></td>
            </tr>
            <tr>
                <th>ผู้รับผิดชอบ : </th>
                <td><input name="Responsible" type="varchar" id="Responsible"></td>
            </tr>
            
            <th><input type="submit" name="Submit" value="Add Data" id="click1"></th>
            <td><input type="reset" name="Submit2" value="Reset" id="click2"></td>
        </form></table></center>
    </div>
</body>
<footer>
    <div class="footer">
        <center><p></p></center>
        <center><div class="q1">Website Project</div></center>
        <center><div class="q2">ระบบรายงานสาธารณูปโภค</div></center>
    </div>
</footer>
</html>
