<!DOCTYPE html>
<html>
<head>


        <meta charset="UTF-8">
	<title>学生信息查询</title>
        <style >
          form {
        text-align: center;
        margin: 20px auto;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
    input[type="text"], input[type="submit"] {
        font-size: 18px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    input[type="submit"]:hover {
        background-color: #0062cc;
    }
         table {
        border-collapse: collapse;
        margin: 0 auto;
    }
    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid black;
    }
    th {
        background-color: #ccc;
    }
        table{margin:0 auto;}
        td{text-align:center;}
      </style>
  </head>
<body>
<h1 style="text-align: center;color: #000000;">学生信息查询</h1>
<form class="form" name="frm1" method="post">

    <input name="sid" id="sid" type="text" placeholder="根据身份证号查询">
    <input type="submit" name="test" value="查找">
</form>

<br>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "123456", "bisai");

session_start();
$number = @$_POST['sid'];
$_SESSION['number']=$number;
$sql = "select * from students where sid='$number'";
$result = mysqli_query($conn, $sql);
$row = @mysqli_fetch_array($result);

if (empty($row)) {
    $row = array('sid' => '', 'sname' => '', 'ssex' => '', 'sbirth' => '', 'sprovince' => '', 'srace' => '', 'smark' => '', 'schoice' => '');
}
?>

<table class="table" align="center">
    <tr>
        <th>身份证号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>出生日期</th>
        <th>生源地</th>
        <th>民族</th>
        <th>高考分数</th>
        <th>选科</th>
    </tr>
    <tr>
        <td><?php echo $row['sid']; ?></td>
        <td><?php echo $row['sname']; ?></td>
        <td><?php echo $row['ssex']; ?></td>
        <td><?php echo $row['sbirth']; ?></td>
        <td><?php echo $row['sprovince']; ?></td>
        <td><?php echo $row['srace']; ?></td>
        <td><?php echo $row['smark']; ?></td>
        <td><?php echo $row['schoice']; ?></td>
    </tr>
</table>
</body>
</html>
<?php
$num = @$_POST['sid'];
$SFZH=@$_POST['sid'];
$name = @$_POST['sname'];
$XB = @$_POST['ssex'];
$CSRQ = @$_POST['sbirth'];
$SYD = @$_POST['sprovince'];
$MZ = @$_POST['srace'];
$GKFS = @$_POST['smark'];
$XK = @$_POST['schoice'];
$YHM = @$_POST['username'];
$MM = @$_POST['password'];
$GKFS = intval($GKFS);
?>