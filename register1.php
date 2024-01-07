<?php
$conn = mysqli_connect("127.0.0.1", "root", "123456", "bisai");

$name = $_POST['username'];
$pwd = $_POST['password'];
$pin =$_POST['sid'];
// Check if the username already exists in the database
$sql = "SELECT * FROM students WHERE sid='$pin'";
$result=mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) {
    // Username already exists, show error message
    echo "<script>alert('该身份证已被注册，请重新选择');location='zhuche.php'</script>";
} else {
    // Username is available, add the new user to the database
    $sql = "INSERT INTO students (sid,username, password) VALUES ('$pin','$name', '$pwd')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // User was successfully added, show success message
        echo "<script>alert('注册成功');location='login3.php'</script>";
    } else {
        // Failed to add user, show error message
        echo "<script>alert('注册失败，请重试');location='zhuche.php'</script>";
    }
}
?>
