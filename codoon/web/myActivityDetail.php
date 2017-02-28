<?php

include_once ("data/ActivityData.php");

$id = $_GET['id'];
$activityData = new ActivityData();
$activity = $activityData->getConcreteData($id);
$name = $activity->getName();
$time = $activity->getTime();
$place = $activity->getPlace();
$num = $activity->getNum();
$detail = $activity->getDetail();



echo <<<EOT



<!DOCTYPE html>
<html lang="en">
<head>
    <title>FunnySports--活动信息</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/loginStyle.css" rel="stylesheet"/>
    
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        function quitactivity() {
            $.ajax({
                type:"POST",
                url:"quitActivity.php",
                data:{
                    "id":$id
                },
                dataType:"text",
                success:function (data) {
                    if(data){
                        alert("退出成功");
                        window.location.href="activity.php";
                    }else{
                        alert("退出失败");
                    }
                },
                error:function (data,a,b) {
                    alert("错误");
                }
            })
        }
    </script>
    
</head>
<body style="background-image:url(image/background.jpg)" ;>

<a href="index.html" class="logo focus">
    <img src="image/logo/logo.png" width="276" height="95"/>
</a>

<div class="container">
    <form id="loginForm" method="post" class="form-horizontal">
        <fieldset>
            <legend><label><span class="glyphicon glyphicon-user"></span>&nbsp;活动详情</label></legend>
            <div class="table-responsive">
                <table class="table table-striped">
                    <caption class="cn"><label>$name</label></caption>
                    <thead>
                    <tr>
                        <!--<th>名称</th>-->
                        <!--<th>城市</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>活动时间：</td>
                        <td>$time</td>
                    </tr>
                    <tr>
                        <td>活动地点：</td>
                        <td>$place</td>
                    </tr>
                    <tr>
                        <td>已参加人数：</td>
                        <td>$num</td>
                    </tr>
                    <tr>
                        <td>详细信息：</td>
                        <td>$detail</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group" id="butDiv">
                <div class="col-md-6 col-md-offset-3">
                    <button type="reset" id="rstBut" class="btn btn-warning" onclick="quitactivity()">退出</button>
                    <a href="activity.php" class="pull-right return"> 返回 </a>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>
EOT;
?>