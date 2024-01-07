<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<title>学生信息更新</title>
        <style type="text/css">
        table{margin:0 auto;}
        td{text-align:center;}
      </style>
  </head>
<body>
<h1 style="text-align: center;color: #000000;">学生信息管理</h1>
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
        <tr>


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


if (@$_POST["b"] == '修改')
{
     if ($SFZH!=$num){
         echo "<script>alert('身份证与原数据有异，无法修改!');location.href='xuesheng.php'</script>";
     }
    else {

        $update_sql="update students set sname='$name',ssex='$XB',sbirth='$CSRQ',sprovince='$SYD',srace='$MZ',smark='$GKFS',schoice='$XK'  where sid='$SFZH'";
       $update_result=  mysqli_query($conn,$update_sql);
       if (mysqli_affected_rows($conn) != 0){
            echo "<script>alert('修改成功!');location.href='guanli.php'</script>";

        }  else {
            echo "<script>alert('修改失败!');location.href='guanli.php'</script>";
        }
    }
}

if (@$_POST["b"] == '添加') {



     $insert_sql = "insert into students(sid,sname,ssex,sbirth,sprovince,srace,smark,schoice,username,password) values('$SFZH','$name','$XB','$CSRQ','$SYD','$MZ','$GKFS','$XK','$YHM','$MM')";

        $insert_result = mysqli_query($conn, $insert_sql);
        if (mysqli_affected_rows($conn) != 0){
            echo "<script>alert('添加成功!');location.href='guanli.php'</script>";

        }  else {
            echo "<script>alert('添加失败!');location.href='guanli.php'</script>";
        }
    }


if (@$_POST["b"] == '删除') {
    if ($num==null) {
        echo "<script>alert('请输入要删除的学号!')</script>";
    } else {
        $de_sql = "select sid from students where sid='$num'";
        $de_result = mysqli_query($conn, $de_sql);
        $de_row = mysqli_fetch_array($de_result);
        if (!$de_row)
            echo "<script>alert('学号不存在，无法删除!')</script>";
        else {
            $del_sql = "delete from students where sid='$num'";
            $del_result = mysqli_query($conn, $del_sql);
            if (mysqli_affected_rows($conn) != 0)
                echo "<script>alert('删除学号为" . $num . "的学生成功！')</script>";
        }
    }
}
?>