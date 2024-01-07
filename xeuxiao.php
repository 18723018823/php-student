<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>学校分数线查询</title>
  <style type="text/css">
    table{margin:0 auto;}
    td{text-align:center;}

    input[type="text"] {
      padding: 10px;
      border: 1px solid #999999;
      border-radius: 5px;
      font-size: 16px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #007bff;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1 style="text-align: center;color: #000000;">学校分数线查询</h1>
  <form name="frm1" method="post" >
    <table align="center" >
      <tr>

        <td>
          <input name="schoolname" id="schoolname" type="text" placeholder="请填写学校">
        </td>

        <td>
          <input name="sprovince" id="sprovince" type="text"placeholder="请填写生源地">
          <input type="submit" name="test" value="查找">
        </td>
      </tr>
    </table>
  </form>
  <br>
  <table width="100%" border="1" cellpadding="0" cellspacing="0" height="21" bordercolor="#cccccc" style="border-collapse">
    <tr backgorundcolor="#ffffff">
      <td width="15%" ><p align="center">学校</td>
      <td width="15%" ><p align="center">年份</td>
      <td width="20%" ><p align="center">专业</td>
      <td width="15%" ><p align="center">专业最低分数线</td>
      <td width="20%" ><p align="center">校最低分数线</td>
      <td width="15%" ><p align="center">选科</td>
      <tr>
        <?php
        $sno = @$_POST['sno'];
        $schoolname = @$_POST['schoolname'];
        $sprovince = @$_POST['sprovince'];
        $conn=mysqli_connect("127.0.0.1", "root", "123456", "bisai");

        $sql ="select  schoolname,syear,major,mleastmark,sleastmark,schoice from school where schoolname='$schoolname'  and sprovince='$sprovince'";
        $result= mysqli_query($conn, $sql);
        while($s=mysqli_fetch_array($result)){
          echo "<tr><td height=24>$s[0]</td>";
          echo "<td height=24 >$s[1]</td>";
          echo "<td height=24 >$s[2]</td>";
          echo "<td height=24 >$s[3]</td>";
          echo "<td height=24 >$s[4]</td>";
          echo "<td height=24 >$s[5]</td>";

        }
        echo "</tr>";
        ?>

      </body>
      </html>
