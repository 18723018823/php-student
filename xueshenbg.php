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
<h1 style="text-align: center;color: #000000;">学生表管理</h1>
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
$sql = "select sid,username,password from students where sid='$number'";
$result = mysqli_query($conn, $sql);
$row = @mysqli_fetch_array($result);
if (empty($row)) {
    $row = array('sid' => '', 'username' => '', 'password' => '','h_mid' => '');
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

            <td><span>用户名：</span></td>
            <td><input name="username" type="text" value="<?php echo $row['username']; ?>"></td>
        </tr>
        <tr>
            <td><span>密码：</span></td>
            <td><input name="password" type="text" value="<?php echo $row['password']; ?>"></td>
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
$num = @$_POST['sid'];
$SFZH=@$_POST['sid'];
$YHM = @$_POST['username'];
$MM = @$_POST['password'];




if (@$_POST["b"] == '修改')
{
    if ($num!=$SFZH){
        echo "<script>alert('身份证号与原数据有异，无法修改!');location.href='xsb.php'</script>";
    }
    else {

        $update_sql="update students set username='$YHM',password='$MM'  where sid='$SFZH'";
       $update_result=  mysqli_query($conn,$update_sql);
       if (mysqli_affected_rows($conn) != 0){
            echo "<script>alert('修改成功!');location.href='xueshenbg.php'</script>";

        }  else {
            echo "<script>alert('修改失败!');location.href='xueshenbg.php'</script>";
        }
    }
}

if (@$_POST["b"] == '添加') {



     $insert_sql = "insert into students(username,password) values('$YHM','$MM')";

        $insert_result = mysqli_query($conn, $insert_sql);
        if (mysqli_affected_rows($conn) != 0){
            echo "<script>alert('添加成功!');location.href='xueshenbg.php'</script>";

        }  else {
            echo "<script>alert('添加失败!');location.href='xueshenbg.php'</script>";
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

