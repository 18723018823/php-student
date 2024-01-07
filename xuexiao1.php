<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<title>学校信息管理</title>
        <style type="text/css">
        table{margin:0 auto;}
        td{text-align:center;}
      </style>
  </head>
<body>
<h1 style="text-align: center;color: #000000;">学校信息管理</h1>
<form name="frm1" method="post" >
    <table align="center" >
        <tr>
            <td width="100"><span>学校名:</span></td>
            <td>
                <input name="schoolname" id="schoolname" type="text">
            </td>
            <td width="100"><span>专业名:</span></td>
            <td>
                <input name="major" id="major" type="text">
            </td>
            <td width="100"><span>年份:</span></td>
            <td>
                <input name="syear" id="syear" type="text">
            </td>
            <td width="100"><span>省份:</span></td>
            <td>
                <input name="sprovince" id="sprovince" type="text">


                <input type="submit" name="test" value="查找">
                </td>
        </tr>
    </table>
</form>
<br>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "123456", "bisai");

session_start();
$XXM = @$_POST['schoolname'];
$_SESSION['XXM']=$XXM;
$ZY = @$_POST['major'];
$_SESSION['ZY']=$ZY;
$NF = @$_POST['syear'];
$_SESSION['NF']=$NF;
$SF = @$_POST['sprovince'];
$_SESSION['SF']=$SF;

$sql = "select * from school where schoolname='$XXM' and syear='$NF' and major='$ZY' and sprovince='$SF'";
$result = mysqli_query($conn, $sql);
$row = @mysqli_fetch_array($result);
if (empty($row)) {
    $row = array('schoolname' => '', 'syear' => '', 'major' => '','sprovince' => '','mleastmark' => '','sleastmark' => '','schoice' => '');
}
?>

<form name="frm2" method="post" enctype="multipart/form-data">
    <table border="1" align="center">
        <tr>
            <td><span>学校名：</span></td>
            <td>
                <input name="schoolname" type="text" value="<?php echo $row['schoolname']; ?>">
                <input name="h_schoolname" type="hidden" value="<?php echo $row['schoolname']; ?>">
            </td>
        </tr>
        <tr>
            <td><span>年份：</span></td>
            <td><input name="syear" type="text" value="<?php echo $row['syear']; ?>"></td>
        </tr>
        <tr>
            <td><span>专业：</span></td>
            <td><input name="major" type="text" value="<?php echo $row['major']; ?>"></td>
        </tr>

        <tr>
            <td><span>生源地：</span></td>
            <td><input name="sprovince" type="text" value="<?php echo $row['sprovince']; ?>"></td>
        </tr>
        <tr>
            <td><span>专业最低分：</span></td>
            <td><input name="mleastmark" type="text" value="<?php echo $row['mleastmark']; ?>"></td>
        </tr>

        <tr>
            <td><span>学校最低分：</span></td>
            <td><input name="sleastmark" type="text" value="<?php echo $row['sleastmark']; ?>"></td>
        </tr>
        <tr>
            <td><span>选科：</span></td>
            <td><input name="schoice" type="text" value="<?php echo $row['schoice']; ?>"></td>
        </tr>

            <td align="center" colspan="2">
                <input name="b" type="submit" value="修改">&nbsp;
                <input name="b" type="submit" value="添加">&nbsp;
                <input name="b" type="submit" value="删除">&nbsp;
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
$num = @$_POST['schoolname'];
$XXM=@$_POST['schoolname'];
$NF = @$_POST['syear'];
$ZY = @$_POST['major'];
$SF = @$_POST['sprovince'];
$ZYZDF = @$_POST['mleastmark'];
$XXZDF = @$_POST['sleastmark'];
$XK = @$_POST['schoice'];

$XXZDF = intval($XXZDF);
$ZYZDF = intval($ZYZDF);

if (@$_POST["b"] == '修改')
{
    if ($num!=$XXM){
        echo "<script>alert('学号与原数据有异，无法修改!');location.href='xsb.php'</script>";
    }
    else {

        $update_sql="update school set schoolname='$XXM',syear='$NF',major='$ZY',sprovince='$SF',mleastmark={$ZYZDF},sleastmark={$XXZDF},schoice='$XK' where schoolname='$num' and syear='$NF' and major='$ZY' and sprovince='$SF' and schoice='$XK'";
       $update_result=  mysqli_query($conn,$update_sql);
       if (mysqli_affected_rows($conn) != 0){
            echo "<script>alert('修改成功!');location.href='xuexiao1.php'</script>";

        }  else {
            echo "<script>alert('修改失败!');location.href='xuexiao1.php'</script>";
        }
    }
}

if (@$_POST["b"] == '添加') {


$XXZDF = intval($XXZDF);
$ZYZDF = intval($ZYZDF);
     $insert_sql = "insert into school(schoolname,syear,major,sprovince,mleastmark,sleastmark,schoice) values('$XXM','$NF','$ZY','$SF',{$ZYZDF},{$XXZDF},'$XK')";

        $insert_result = mysqli_query($conn, $insert_sql);
        if (mysqli_affected_rows($conn) != 0){
            echo "<script>alert('添加成功!');location.href='xuexiao1.php'</script>";

        }  else {
            echo "<script>alert('添加失败!');location.href='xuexiao1.php'</script>";
        }
    }


?>

