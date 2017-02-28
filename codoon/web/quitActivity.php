<?php
/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/5
 * Time: 0:02
 */

include_once "data/ActivityData.php";

$activityData = new ActivityData();

$id = $_POST["id"];
//获得用户名
session_start();
$account = $_SESSION['account'];
$res=$activityData->quitActivity($account,$id);
if($res){
    $activityData->changeNumOfActivity($id,-1);
}
echo $res;
