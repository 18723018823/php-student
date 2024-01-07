
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>一分段表查询</title>
  <style type="text/css">
    table {
      margin: 0 auto;
    }

    td {
      text-align: center;
    }

    input[type="text"] {
      width: 150px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
      color: #333;
      margin: 5px;
    }

    input[type="submit"] {
      background-color:#007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 5px;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<h1 style="text-align: center;color: #000000;">一分段表查询</h1>
<form name="frm1" method="post">
  <table align="center">
    <tr>
      <td><label for="sprovince">生源地：</label></td>
      <td>
        <input name="sprovince" id="sprovince" type="text" placeholder="请输入省份">
      </td>
      <td><label for="syear">年份:</label></td>
      <td>
        <input name="syear" id="syear" type="text" placeholder="请输入年份">
      </td>
      <td><label for="schoice">选科:</label></td>
      <td>
        <input name="schoice" id="schoice" type="text" placeholder="请输入选科">
        <input type="submit" name="test" value="查找">
      </td>
    </tr>
  </table>
</form>
<br>
<table width="100%" border="1" cellpadding="0" cellspacing="0" height="21" bordercolor="#cccccc" style="border-collapse">
  <tr backgorundcolor="#ffffff">
    <td width="15%"><p align="center">省份</p></td>
    <td width="15%"><p align="center">年份</p></td>
    <td width="15%"><p align="center">选科</p></td>
    <td width="15%"><p align="center">分数</p></td>
    <td width="15%"><p align="center">该分数人数</p></td>
    <td width="15%"><p align="center">排名</p></td>
  </tr>
  <?php
  $sprovince = @$_POST['sprovince'];
  $syear = @$_POST['syear'];
  $schoice = @$_POST['schoice'];
  $conn = mysqli_connect("127.0.0.1", "root", "123456", "bisai");

  $sql = "select  * from marks where sprovince='$sprovince'  and syear='$syear' and schoice='$schoice'";
  $result = mysqli_query($conn, $sql);
  while ($s = mysqli_fetch_array($result)) {
    echo "<tr><td height=24>$s[0]</td>";
    echo "<td height=24 >$s[1]</td>";
    echo "<td height=24 >$s[2]</td>";
    echo "<td height=24 >$s[3]</td>";
    echo "<td height=24 >$s[4]</td>";
    echo "<td height=24 >$s[5]</td>";

  }
  echo "</tr>";
  ?>

</table>
</body>
</html>