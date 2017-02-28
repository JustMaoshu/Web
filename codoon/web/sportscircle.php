<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FunnySports--运动圈</title>
    <!--公共脚本-->
    <!--jquery-->
    <script type="text/javascript" src="js/plugin/jquery/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="js/plugin/jquery/jquery.easing.1.3.js"></script>

    <!--公共样式-->
    <link rel="stylesheet" type="text/css" href="style/common.css"/>
    <link rel="stylesheet" href="style/sportscircleStyle.css"/>

    <link rel="stylesheet" href="style/activityStyle.css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        function search() {
            var account = document.getElementById("mid").value;
            $.ajax({
                type: "POST",
                url: "search.php",
                data: {
                    "account": account
                },
                dataType: "text",
                success: function (data) {
                    if (data == 1) {
                        //添加成功
                        alert("添加成功");
                    } else if (data == 2) {
                        alert("没有找到该用户");
                    } else if (data == 0) {
                        alert("该用户已在您的好友列表中");
                    }
                },
                error: function (data) {
                    alert("error");
                    alert(data);
                }
            })
        }

        function show1() {
            var friendAccount = document.getElementById("friendAccount1");
            var account = friendAccount.innerHTML;
            $.ajax({
                type: "POST",
                url: "getSportsData.php",
                data: {
                    "account": account
                },
                dataType: "json",
                success: function (data) {
                    var array = eval(data);
                    var string = array.updateTime+"\n\n"+array.numOfStep+"\n\n"+array.burn+"\n\n"+array.percent+"\n\n"+array.bmi;
                    document.getElementById("item").innerHTML = string;
                },
                error: function (data) {
                    alert("error");
                    alert(data);
                }
            })
        }

        function show2() {
            var friendAccount = document.getElementById("friendAccount2");
            var account = friendAccount.innerHTML;
            $.ajax({
                type: "POST",
                url: "getSportsData.php",
                data: {
                    "account": account
                },
                dataType: "json",
                success: function (data) {
                    var array = eval(data);
                    var string = array.updateTime+"\n\n"+array.numOfStep+"\n\n"+array.burn+"\n\n"+array.percent+"\n\n"+array.bmi;
                    document.getElementById("item").innerHTML = string;
                },
                error: function (data) {
                    alert("error");
                    alert(data);
                }
            })
        }

        function show3() {
            var friendAccount = document.getElementById("friendAccount3");
            var account = friendAccount.innerHTML;
            $.ajax({
                type: "POST",
                url: "getSportsData.php",
                data: {
                    "account": account
                },
                dataType: "json",
                success: function (data) {
                    var array = eval(data);
                    var string = array.updateTime+"\n\n"+array.numOfStep+"\n\n"+array.burn+"\n\n"+array.percent+"\n\n"+array.bmi;
                    document.getElementById("item").innerHTML = string;
                },
                error: function (data) {
                    alert("error");
                    alert(data);
                }
            })
        }

        function show4() {
            var friendAccount = document.getElementById("friendAccount4");
            var account = friendAccount.innerHTML;
            $.ajax({
                type: "POST",
                url: "getSportsData.php",
                data: {
                    "account": account
                },
                dataType: "json",
                success: function (data) {
                    var array = eval(data);
                    var string = array.updateTime+"\n\n"+array.numOfStep+"\n\n"+array.burn+"\n\n"+array.percent+"\n\n"+array.bmi;
                    document.getElementById("item").innerHTML = string;
                },
                error: function (data) {
                    alert("error");
                    alert(data);
                }
            })
        }
    </script>
</head>
<body>
<!--导航条Start-->
<div class="container container_nav cf">

    <a href="index.html" class="logo focus">
        <img src="image/logo/logo.png" width="276" height="95"/>
    </a>

    <ul class="nav">
        <li class="navItem_1">
            <a href="home.html" class="icon_nav icon_nav_1">
                <span class="gaoguang"></span>
                <img src="image/icon_4.png" width="89" height="89"/>
            </a>
            <a href="home.html" class="nav_txt">首页</a>
            <div class="choose"></div>
        </li>
        <li class="navItem_2">
            <span class="gaoguang"></span>
            <a href="sportsdata.php" class="icon_nav icon_nav_2">
                <img src="image/icon_2.png" width="70" height="126"/>
            </a>
            <a href="sportsdata.php" class="nav_txt">运动数据</a>
            <div class="choose"></div>
        </li>
        <li class="navItem_3">
            <span class="gaoguang"></span>
            <a href="activity.php" class="icon_nav icon_nav_3">
                <img src="image/jishiben.jpg" width="81" height="100"/>
            </a>
            <a href="activity.php" class="nav_txt">活动列表</a>
            <div class="choose"></div>
        </li>
        <li class="navItem_4 focus">
            <span class="gaoguang"></span>
            <a href="sportscircle.php" class="icon_nav icon_nav_4">
                <img src="image/icon_1.png" width="95" height="145"/>
            </a>
            <a href="sportscircle.php" class="nav_txt">运动圈</a>
            <div class="choose"></div>
        </li>
        <li class="nav_select">
            <select>
                <option value="用户名">个人设置</option>
                <option>我的账户</option>
                <option onclick="window.location.href='login.html'">退出登录</option>
            </select>
        </li>
    </ul>
</div>
<!--导航条End-->

<!--标题-->
<div class="container  container_full friend_coloumn">
    <span class="cn">好友列表</span>
</div>
<div class="friend_coloumn">
    <input type="text" placeholder="请输入要添加的账号" class="input form-control" id="mid">
    <button class="btn btn-primary button" type="button" onclick="search()">添加</button>
</div>
<!--标题-->
<div class="container  container_full topic_coloumn">
    <span class="cn">Ta的运动数据</span>
</div>


<div class="jdbox"
     style="width:790px;height:375px;margin-top:-106px;margin-right:10px;margin-left:30%;">
    <div class="boxtop">
        <div class="ltcorner"></div>
        <div class="lrline"></div>
        <div class="rtcorner"></div>
    </div>
    <div class="boxcenter">
        <div class="ltbline"></div>
        <div class="content">
        </div>
        <div class="rtbline"></div>
    </div>
    <div class="boxbottom">
        <div class="lbcorner"></div>
        <div class="lrline"></div>
        <div class="rbcorner"></div>
    </div>

    <pre class="labItem1">
        更新日期：

        Ta今天一共走了：

        共消耗卡路里：

        运动目标完成：

        健康BMI指数：
    </pre>
    <pre class="labItem2" id="item"></pre>
</div>

<!--好友列表-->
<div class="friend_wrap friend_wrap_case">
    <div class="friend_wrap_container">
        <a href="javascript:show1()" class="friend_txt" id="friendAccount1">霍建华</a>
    </div>
    <div class="friend_wrap_container">
        <a href="javascript:show2()" class="friend_txt" id="friendAccount2">123</a>
    </div>
    <div class="friend_wrap_container">
        <a href="javascript:show3()" class="friend_txt" id="friendAccount3">suyanzi1</a>
    </div>
    <div class="friend_wrap_container">
        <a href="javascript:show4()" class="friend_txt" id="friendAccount4">susu</a>
    </div>
</div>

</body>
</html>