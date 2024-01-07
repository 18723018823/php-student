<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>志愿推荐</title>
  <style type="text/css">
    table {
      margin: 0 auto;
    }

    td {
      text-align: center;
    }

    input[type="text"] {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 200px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>

<body>
<h1 style="text-align: center;color: #000000;">志愿推荐</h1>
<form name="frm1" method="post" >
    <table align="center" >
        <tr>

            <td width="100"><span>高考分数:</span></td>
            <td>
                <input name="mark" id="mark" type="text">
            </td>
            <td width="100"><span>生源地:</span></td>
            <td>
                <input name="sprovince" id="sprovince" type="text">
            </td>
            <td width="100"><span>选科:</span></td>
            <td>
                <input name="schoice" id="schoice" type="text">

                <input type="submit" name="test" value="查找">
            </td>
        </tr>
    </table>
</form>
<br>
<tr>
<td colspan="6"><p align="center">冲！</p></td>
</tr>
<table width="100%" border="1" cellpadding="0" cellspacing="0" height="21" bordercolor="#cccccc" style="border-collapse">
<tr backgorundcolor="#ffffff">
<td width="15%"><p align="center">学校</p></td>
<td width="20%"><p align="center">专业</p></td>
<td width="15%"><p align="center">专业最低分数线</p></td>
<td width="20%"><p align="center">校最低分数线</p></td>
<td width="15%"><p align="center">选科</p></td>
</tr>

<?php

$mark = @$_POST['mark'];
$sprovince = @$_POST['sprovince'];
$schoice = @$_POST['schoice'];
$conn=mysqli_connect("127.0.0.1", "root", "123456", "bisai");

$sql ="select  schoolname,major,mleastmark,sleastmark,schoice from school where schoice='$schoice'  and sprovince='$sprovince' and   mleastmark > {$mark}+10 and mleastmark <{$mark}+30";
$result= mysqli_query($conn, $sql);
while($s=mysqli_fetch_array($result)){
    echo "<tr><td height=24>$s[0]</td>";
    echo "<td height=24 >$s[1]</td>";
    echo "<td height=24 >$s[2]</td>";
    echo "<td height=24 >$s[3]</td>";
    echo "<td height=24 >$s[4]</td>";


}
    echo "</tr>";
?>
</table>
<tr>
<td colspan="6"><p align="center">稳！</p></td>
</tr>
<table width="100%" border="1" cellpadding="0" cellspacing="0" height="21" bordercolor="#cccccc" style="border-collapse">
<tr backgorundcolor="#ffffff">
<td width="15%"><p align="center">学校</p></td>
<td width="20%"><p align="center">专业</p></td>
<td width="15%"><p align="center">专业最低分数线</p></td>
<td width="20%"><p align="center">校最低分数线</p></td>
<td width="15%"><p align="center">选科</p></td>
</tr>

<?php
$conn=mysqli_connect("127.0.0.1", "root", "123456", "bisai");

$sql ="select  schoolname,major,mleastmark,sleastmark,schoice from school where schoice='$schoice'  and sprovince='$sprovince' and  mleastmark > {$mark}-10 and mleastmark <{$mark}+10";
$result= mysqli_query($conn, $sql);
while($s=mysqli_fetch_array($result)){
    echo "<tr><td height=24>$s[0]</td>";
    echo "<td height=24 >$s[1]</td>";
    echo "<td height=24 >$s[2]</td>";
    echo "<td height=24 >$s[3]</td>";
    echo "<td height=24 >$s[4]</td>";

}
 echo "</tr>";
?>
</table>
<tr>
<td colspan="6"><p align="center">保！</p></td>
</tr>
<table width="100%" border="1" cellpadding="0" cellspacing="0" height="21" bordercolor="#cccccc" style="border-collapse">
<tr backgorundcolor="#ffffff">
<td width="15%"><p align="center">学校</p></td>
<td width="20%"><p align="center">专业</p></td>
<td width="15%"><p align="center">专业最低分数线</p></td>
<td width="20%"><p align="center">校最低分数线</p></td>
<td width="15%"><p align="center">选科</p></td>
</tr>

<?php
$conn=mysqli_connect("127.0.0.1", "root", "123456", "bisai");

$sql ="select  schoolname,major,mleastmark,sleastmark,schoice from school where schoice='$schoice'  and sprovince='$sprovince' and  mleastmark > {$mark}-100 and mleastmark <{$mark}-10";
$result= mysqli_query($conn, $sql);
while($s=mysqli_fetch_array($result)){
    echo "<tr><td height=24>$s[0]</td>";
    echo "<td height=24 >$s[1]</td>";
    echo "<td height=24 >$s[2]</td>";
    echo "<td height=24 >$s[3]</td>";
    echo "<td height=24 >$s[4]</td>";
}
    echo "</tr>";
?>
</table>
</body>
</html>


