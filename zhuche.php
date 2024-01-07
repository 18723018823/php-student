<!DOCTYPE html>
<html>
<head>
    <title>学生注册</title>
   <link rel="stylesheet" href="3.css">
    <meta name="content-type"; charset="UTF-8">
</head>
<body>
<div id="bigBox">
        <h1>学生注册页面</h1>

        <form id="registerform" action="register1.php" method="post">
            <div class="inputBox">

                    <div class="inputText">
                        <input type="text" id="sid" name="sid" placeholder="身份证" value="">
                    </div>
                <div class="inputText">
                   <input type="text" id="name" name="username" placeholder="Username" value="">
                </div>
                <div class="inputText">
                   <input type="password" id="password" name="password" placeholder="Password">
                </div>


                <br >
                <div style="color: white;font-size: 12px" >
                    <?php
                    $err = isset($_GET["err"]) ? $_GET["err"] : "";
                    switch ($err) {
                        case 1:
                            echo "用户名已存在！";
                            break;

                        case 2:
                            echo "用户名或密码不能为空！";
                            break;

                        case 3:
                            echo "两次输入的密码不一致！";
                            break;

                        case 4:
                            echo "邮箱格式不正确！";
                            break;
                    } ?>
                </div>


            </div>
           <div>
               <input type="submit" id="submit" name="register" value="注册" class="loginButton">
               <input type="reset" id="reset" name="reset" value="重置" class="loginButton">
               <input type="button" id="register" name="back" value="返回登录" class="loginButton" onclick="window.location.href='login3.php'">
           </div>
</div>
</div>
</form>
</body>
</html>