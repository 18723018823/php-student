<?php
 $conn=mysqli_connect("127.0.0.1", "root", "123456", "bisai");

$name=$_POST['username'];
$pwd=$_POST['password'];
$sql="select students.sid,username,password from students where username='$name' AND password='$pwd';";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);

if(!$row){

        echo "<script>alert('密码错误，请重新输入');location='login3.php'</script>";

    }
    else{

        echo "<script>alert('登录成功');location='text_1.php'</script>";
    };
?>