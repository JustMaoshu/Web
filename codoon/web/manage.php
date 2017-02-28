<?php


include_once "data/UserData.php";
$userData=new UserData();
$userArray=$userData->getAllUsers();
//$arr=array('boolean'=>true,'msg'=>'注册成功');
echo json_encode($userArray);
//echo $userArray;
//echo $userArray[0]->getAccount();