<?php
/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/2
 * Time: 17:20
 */

include_once "data/UserData.php";

$account = $_POST["account"];
$password = $_POST["password"];
$userData = new UserData();
$level = $userData->login($account, $password);
if($level>0){   //用户名和密码正确
    session_start();
    $_SESSION['account']=$account;
}
echo $level;
