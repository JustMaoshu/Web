<?php
/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/4
 * Time: 21:42
 */
include_once "data/FriendData.php";

$friendaccount = $_POST["account"];
session_start();
$account=$_SESSION["account"];
$friendData = new FriendData();
$res=$friendData->addFriend($account,$friendaccount);
echo $res;
