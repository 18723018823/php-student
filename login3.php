<!DOCTYPE html>
<html>
<head>
    <title>学生登录</title>
    <link rel="stylesheet" href="login.css">
    <meta name="content-type"; charset="UTF-8">
</head>
<body>
<div id="bigBox">
        <h1>学生登录页面</h1>

        <form id="loginform" action="login1.php" method="post">
            <div class="inputBox">

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
                            echo "用户名或密码错误！";
                            break;

                        case 2:
                            echo "用户名或密码不能为空！";
                            break;
                    } ?>
                </div>
            </div>
           <div>
               <input type="submit" id="login" name="login" value="登录" class="loginButton">
               <input type="reset" id="reset" name="reset" value="重置" class="loginButton">
               <input type="button" id="register" name="register" value="注册" class="loginButton" onclick="window.location.href='zhuche.php'">
           </div>
</div>
</div>
</form>
</body>
</html>
