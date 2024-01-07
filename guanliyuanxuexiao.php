<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<title>学生信息查询</title>
        <style type="text/css">
        table{margin:0 auto;}
        td{text-align:center;}
      </style>
  </head>
<body>
<h1 style="text-align: center;color: #000000;">学生信息查询</h1>
<form name="frm1" method="post" >
    <table align="center" >
        <tr>
            <td width="100"><span>根据身份证号查询:</span></td>
            <td>
                <input name="sid" id="sid" type="text">
                <input type="submit" name="test" value="查找">
            </td>
        </tr>
    </table>
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

<form name="frm2" method="post" enctype="multipart/form-data">
    <table border="1" align="center">
        <tr>
            <td><span>身份证号：</span></td>
            <td>
                <input name="sid" type="text" value="<?php echo $row['sid']; ?>">
                <input name="h_sid" type="hidden" value="<?php echo $row['sid']; ?>">
            </td>
        </tr>
        <tr>
            <td><span>姓名：</span></td>
            <td><input name="sname" type="text" value="<?php echo $row['sname']; ?>"></td>
        </tr>
        <tr>
            <td><span>性别：</span></td>
            <td><input name="ssex" type="text" value="<?php echo $row['ssex']; ?>"></td>
        </tr>
         <tr>
            <td><span>出生日期：</span></td>
            <td><input name="sbirth" type="text" value="<?php echo $row['sbirth']; ?>"></td>
        </tr>
        <tr>
            <td><span>生源地：</span></td>
            <td><input name="sprovince" type="text" value="<?php echo $row['sprovince']; ?>"></td>
        </tr>
        <tr>
            <td><span>民族：</span></td>
            <td><input name="srace" type="text" value="<?php echo $row['srace']; ?>"></td>
        </tr>
        <tr>
            <td><span>高考分数：</span></td>
            <td><input name="smark" type="text" value="<?php echo $row['smark']; ?>"></td>
        </tr>
        <tr>
            <td><span>选科：</span></td>
            <td><input name="schoice" type="text" value="<?php echo $row['schoice']; ?>"></td>
        </tr>

    </table>
</form>

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