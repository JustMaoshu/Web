<?php
/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/1
 * Time: 23:23
 */

include_once "data/UserData.php";

$account = $_POST["account"];
$password = $_POST["password"];
$userData = new UserData();
$level = 2;
$res = $userData->register($account,$password,$level);
if($res){
    $arr=array('boolean'=>true,'msg'=>'注册成功');
    echo json_encode($arr);
}else{
    $arr=array('boolean'=>false,'msg'=>'该用户名已被注册');
    echo json_encode($arr);
}