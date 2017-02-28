<?php
/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/4
 * Time: 0:50
 */

include_once ("data/ActivityData.php");
//获得用户名
session_start();
$account = $_SESSION['account'];
$activityData = new ActivityData();

$id = $activityData->getActivityNum() + 1;
$name = $_POST["name"];
$time = $_POST["time"];
$place = $_POST["place"];
$num = 1;
$detail = $_POST["detail"];

$activity = new Activity($id,$name,$time,$place,$num,$detail);
$res = $activityData->addActivity($account,$activity);
if($res){
    $arr=array('boolean'=>true,'msg'=>'发布成功');
    echo json_encode($arr);
}else{
    $arr=array('boolean'=>true,'msg'=>'发布失败');
    echo json_encode($arr);
}