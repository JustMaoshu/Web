<?php

include_once ("data/SportsData.php");

$sportsData = new SportsData();
//获得用户名
session_start();
$account = $_SESSION["account"];
$sportsInfo = $sportsData->getData($account);
$updateTime = $sportsInfo->getUpdateTime();
$numOfStep = $sportsInfo->getNumOfStep();
$burn = $sportsInfo->getBurn();
$percent = $sportsInfo->getPercent();
$bmi = $sportsInfo->getBmi();



echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FunnySports--运动数据</title>
    <!--公共脚本-->
    <!--jquery-->
    <script type="text/javascript" src="js/plugin/jquery/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="js/plugin/jquery/jquery.easing.1.3.js"></script>

    <!--公共样式-->
    <link rel="stylesheet" type="text/css" href="style/common.css"/>
    <link href="style/sportsdataStyle.css" rel="stylesheet"/>
</head>
<body>
<!--导航条Start-->
<div class="container container_nav cf">

    <a href="index.html" class="logo focus">
        <img src="image/logo/logo.png" width="276" height="95" />
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
        <li class="navItem_2 focus">
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
        <li class="navItem_4">
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


<!--尝试-->
<div class="jdbox"
     style="width:590px;height:380px;margin-top:30px;margin-right:10px;margin-left:30%;margin-bottom: 40px;">
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

        您今天一共走了：

        共消耗卡路里：

        运动目标完成：

        健康BMI指数：
    </pre>
    <pre class="labItem2">
        $updateTime

        $numOfStep

        $burn

        $percent

        $bmi
    </pre>

    <div class="container">
        <a href="history.html" class="txt">查看历史数据</a>
    </div>

</div>


</body>
</html>
EOT;
?>