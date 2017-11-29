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
        <a href= "utilityInsert.php">กรอกข้อมูล</a>
        <a href= "utishow.php">สาธารณูปโภค</a>
        <a href= "utilityInsert.php">แก้ไข</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div class="container">
      <center><span id="text1">กรอกข้อมูลสาธารณูปโภค</span></center> 
      <center><table>
        <form name="form1" method="post" action="utiadd.php">
            <th>ID :</th>
            <td><input name="id" type="int" id="id"></td>
            <tr>
                <th>Name : </th>
                <td><input name="Utility_Name" type="text" id="Utility_Name"></td>
            </tr>
            <tr>
                <th>Room : </th>
                <td><input name="Room" type="int" id="Room"></td>
            </tr>
            <tr>
                <th>floor : </th>
                <td><input name="Floor" type="int" id="floor"></td>
            </tr>
            <tr>
                <th>Location : </th>
                <td><input name="Location" type="varchar" id="Location"></td>
            </tr>
            <tr>
                <th>Responsible : </th>
                <td><input name="Reponsible" type="varchar" id="Reponsible"></td>
            </tr>
            <tr>
                <th>IDNumber : </th>
                <td><input name="IDNumber" type="varchar" id="IDNumber"></td>
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
