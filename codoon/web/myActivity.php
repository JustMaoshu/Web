<?php

include_once("data/ActivityData.php");
session_start();
$account=$_SESSION["account"];
$activityData = new ActivityData();
$myactivity = $activityData->getMyActivity($account);

$myLength = count($myactivity);


echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FunnySports--我的活动</title>
    <!--公共脚本-->
    <!--jquery-->
    <script type="text/javascript" src="js/plugin/jquery/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="js/plugin/jquery/jquery.easing.1.3.js"></script>

    <!--公共样式-->
    <link rel="stylesheet" type="text/css" href="style/common.css"/>

    <link rel="stylesheet" href="style/activityStyle.css"/>
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
        <li class="navItem_2">
            <span class="gaoguang"></span>
            <a href="sportsdata.php" class="icon_nav icon_nav_2">
                <img src="image/icon_2.png" width="70" height="126"/>
            </a>
            <a href="sportsdata.php" class="nav_txt">运动数据</a>
            <div class="choose"></div>
        </li>
        <li class="navItem_3 focus">
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

<!--标题-->
<div class="container  container_full title_coloumn">
    <span class="cn">
        我的活动
    </span>
    <div class="title_coloumn_line"></div>
</div>
<div class="form-group" id="butDiv">
                    <div class="list">
                        <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='activity.php'">活动列表</button>
                    </div>
                    <div class="create">
                        <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='addActivity.html'">发布活动</button>
                    </div>
                    <div class="my">
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='myActivity.php'">我的活动</button>
                    </div>
            </div>



<!--&lt;!&ndash;分类&ndash;&gt;-->
<!--<div class="container container_full m_center cf b_70">-->
<!--<div class="container container_1000 m_center b_30 align_center case_item">-->
<!--<a href="#this" class="focus">全部</a>-->
<!--<a href="#this">跑步</a>-->
<!--<a href="#this">游泳</a>-->
<!--<a href="#this">上山</a>-->
<!--<a href="#this">打球</a>-->
<!--</div>-->

<!--活动列表-->
<div class="case_list cf">
EOT;
//通过循环添加活动
for ($i = 0; $i < $myLength; $i++) {
    $flag = true;

    if($flag) {
        $activity = $myactivity[$i];
        $id = $activity->getId();
        $name = $activity->getName();
        $time = $activity->getTime();
        $place = $activity->getPlace();
        $num = $activity->getNum();

        echo <<<EOT
    <div class="cell_wrap cell_wrap_case">
        <div class="cell_wrap_b">
            <div class="cell_wrap_container">
                <a href="myActivityDetail.php?id=$id">
                    <div class="activity_title">
                        $name
                    </div>
                </a>
            </div>
            <div class="cf case_txt">
                <a href="myActivityDetail.php?id=$id" class="f_left">
                    时间：$time
                    <br>
                    地点：$place
                    <br>
                    参加人数：$num 人
                </a>
            </div>
        </div>
        <div class="after"></div>
    </div>
EOT;
    }
}
echo <<<EOT

</div>

</body>
</html>
EOT;
?>