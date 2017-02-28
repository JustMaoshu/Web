<?php
/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/5
 * Time: 3:00
 */

include_once ("data/SportsData.php");

$sportsData = new SportsData();
$account = $_POST["account"];
$sportsInfo = $sportsData->getData($account);
$updateTime = $sportsInfo->getUpdateTime();
$numOfStep = $sportsInfo->getNumOfStep();
$burn = $sportsInfo->getBurn();
$percent = $sportsInfo->getPercent();
$bmi = $sportsInfo->getBmi();
$arr=array('updateTime'=>$updateTime,'numOfStep'=>$numOfStep,'burn'=>$burn,'percent'=>$percent,'bmi'=>$bmi);
echo json_encode($arr);