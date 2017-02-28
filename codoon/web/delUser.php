<?php
/**
 * Created by PhpStorm.
 * User: song4
 * Date: 2016/11/30
 * Time: 21:07
 */
include_once "data/UserData.php";
$account=$_POST["account"];
$userData=new UserData();
$boolanswer=$userData->deleteUser($account);
//if($boolanswer){
//    echo "true";
//}else{
//    echo "false";
//}
echo $boolanswer;