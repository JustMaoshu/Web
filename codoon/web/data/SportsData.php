<?php

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/3
 * Time: 0:19
 */

include_once ("DB.php");
include_once("SportsInfo.php");

class SportsData
{
    public function insertData($account,$sportsInfo){
        $sqlite3 = DB::getInstance()->getDB();
        $updateTime = $sportsInfo->getUpdateTime();
        $numOfStep = $sportsInfo->getNumOfStep();
        $burn = $sportsInfo->getBurn();
        $percent = $sportsInfo->getPercent();
        $bmi = $sportsInfo->getBmi();
        $sql="insert into sportsdata values('$account','$updateTime',$numOfStep,$burn,$percent,$bmi)";
        return $sqlite3->exec($sql);
    }

    public function getData($account){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from sportsdata where account='$account' order by updateTime desc";
        $res = $sqlite3->query($sql);
        $array = $res->fetchArray();
        $updateTime = $array["updateTime"];
        $numOfStep = $array["numOfStep"];
        $burn = $array["burn"];
        $percent = $array["percent"];
        $bmi = $array["bmi"];
        $sportsInfo = new SportsInfo($updateTime,$numOfStep,$burn,$percent,$bmi);
        return $sportsInfo;
    }

    public function getDataOfDate($account,$date){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from sportsdata where account='$account' and updateTime='$date'";
        $res = $sqlite3->query($sql);
        $array = $res->fetchArray();
        $updateTime = $array['updateTime'];
        $numOfStep = $array['numOfStep'];
        $burn = $array['burn'];
        $percent = $array['percent'];
        $bmi = $array['bmi'];
        $sportsInfo = new SportsInfo($updateTime,$numOfStep,$burn,$percent,$bmi);
        return $sportsInfo;
    }
}

