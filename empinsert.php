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
            <a href= "index.html">กรอกข้อมูล</a>
            <a href= "utility.html">พนักงาน</a>
            <a href= "Employee.html">แก้ไข</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
<div class="container">
          <center><span id="text1">กรอกข้อมูลพนักงาน</span></center> 
    <center><table>
<form name="form1" method="post" action="empsave.php">
    <th>EmpID :</th>
    <td><input name="EmpID" type="int" id="EmpID"></td>
<tr>
    <th>Emp_Name : </th>
    <td><input name="Emp_Name" type="text" id="Emp_Name"></td>
</tr><tr>
    <th>Ages : </th>
    <td><input name="Ages" type="int" id="Ages"></td>
</tr><tr>
    <th>Tel : </th>
<td><input name="Tel" type="int" id="Tel"></td>
</tr><tr>
    <th>Address : </th>
<td><input name="Address" type="varchar" id="Address"></td>
</tr><tr>
    <th>Position : </th>
<td><input name="Position" type="varchar" id="Position"></td>
</tr><tr>
    <th>Password : </th>
<td><input name="Password" type="varchar" id="Password"></td>
</tr><tr> 
    <th>Location : </th>
<td><input name="Location" type="varchar" id="Location"></td>
</tr><tr>
    <th>Floor : </th>
<td><input name="Floor" type="int" id="Floor"></td> 
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
