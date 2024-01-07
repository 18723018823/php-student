<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<title>补考</title>
        <style type="text/css">
        table{margin:0 auto;}
        td{text-align:center;}
      </style>
  </head>
<body>


<table width="100%" border="1" cellpadding="0" cellspacing="0" height="21" bordercolor="#cccccc" style="border-collapse">
<h1 style="text-align: center;color: #000000;">院校总览表</h1>  <!--查询所有的院校的表-->
<tr backgorundcolor="#ffffff">
<td width="10%" ><p align="center">学校</td>
<td width="10%" ><p align="center">年份</td>
<td width="10%" ><p align="center">专业</td>
<td width="10%" ><p align="center">专业最低分</td>
<td width="10%" ><p align="center">学校最低分</td>
<td width="10%" ><p align="center">生源地</td>
<td width="10%" ><p align="center">选科</td>

<tr>
<?php

$conn=mysqli_connect("127.0.0.1", "root", "123456", "bisai");
// mysqli_set_charset($conn, "set names 'utf8'");
$sql ="select * from school";
$result= mysqli_query($conn, $sql);
while($s=mysqli_fetch_array($result)){
    echo "<tr><td height=24>$s[0]</td>";
    echo "<td height=24 >$s[1]</td>";
    echo "<td height=24 >$s[2]</td>";
    echo "<td height=24 >$s[3]</td>";
    echo "<td height=24 >$s[4]</td>";
    echo "<td height=24 >$s[5]</td>";
    echo "<td height=24 >$s[6]</td>";
}
    echo "</tr>";
?>

</body>
</html>
