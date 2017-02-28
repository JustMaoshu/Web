<?php
/**
 * Created by PhpStorm.
 * User: song4
 * Date: 2016/11/30
 * Time: 19:46
 */
/*
 * xml格式为
 * <xml>
 *  <account></account>
 *  <time></time>
 *  <numOfStep></numOfStep>
 *  <burn></burn>
 *  <percent></percent>
 *  <bmi></bmi>
 *</xml>
 */
include_once "data/SportsData.php";
include_once "data/SportsInfo.php";
$xml=file_get_contents("php://input");
$xml=urldecode($xml);
$xmlElement=new SimpleXMLElement($xml);
$account=$xmlElement->account;
$time=$xmlElement->time;
$numOfStep=$xmlElement->numOfStep;
$burn=$xmlElement->burn;
$percent=$xmlElement->percent;
$bmi=$xmlElement->bmi;
$sportData=new SportsData();
$sportInfo=new SportsInfo($time, $numOfStep, $burn, $percent, $bmi);
echo $sportData->insertData($account,$sportInfo);
