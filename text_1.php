<html>
    <head>
        <title>志愿填报信息查询系统</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
        body{
        background:url("2.jpg") no-repeat;
        background-size: 100%;
        }
        div{

            font-size: 30px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 15px;
        }
.navbar {
    overflow: hidden;
    background-color: #333;
    display: flex;
    justify-content: center;
}


.navbar a {
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.navbar a:before {
    content: "\f015";
    font-family: FontAwesome;
    margin-right: 5px;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.navbar a.active {
    background-color: #4CAF50;
    color: white;
}

.left-icon {
    float: left;
    margin-right: 10px;
}

.right-icon {
    float: right;
    margin-left: 10px;
}

        </style>
    <body>
            <div style="text-align: center;color: #000000;" >志愿填报信息查询系统</div>
            <div style="text-align: center;color: #000000;">

            <table style="width: 100%;">
                <tr>
                    <td style="width: 10%; text-align: center;"><a href="login3.php"><i class="fa fa-home left-icon"></i></a></td>
                    <td style="width: 80%; text-align: center;">
                        <div class="navbar">
                            <a href="gonggaoxues.php" target="test"><i class="fa fa-bullhorn"></i>公告</a>
                            <a href="xuexio.php" target="test"><i class="fa fa-university"></i>院校总览</a>
                            <a href="xuesheng.php" target="test"><i class="fa fa-user"></i>学生信息查询</a>
                            <a href="zyuan.php" target="test"><i class="fa fa-graduation-cap"></i>志愿填报推荐</a>
                            <a href="yifenyiduan.php" target="test"><i class="fa fa-map-marker"></i>地区一分段表查询</a>
                            <a href="xeuxiao.php" target="test"><i class="fa fa-search"></i>学校分数线</a>
                        </div>
                    </td>
                    <td style="width: 10%; text-align: center;"><a href="login.html"><i class="fa fa-cog right-icon"></i></a></td>
                </tr>
              <tr>
    <td colspan="3" style="text-align: center;">
        <iframe src="" height="800px" width="1200px" name="test" id="test" scrolling="yes" frameborder="0"></iframe>
    </td>
</tr>


            </table>

        </div>
    </body>
</html>
