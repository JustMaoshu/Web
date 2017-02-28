<?php

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/3
 * Time: 14:05
 */

include_once ("DB.php");
include_once ("Activity.php");

class ActivityData
{
    public function getActivityList(){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from activity";
        $res = $sqlite3->query($sql);

        $activityArray = array();
        while($arr = $res->fetchArray()){
            $id = $arr["id"];
            $name = $arr["name"];
            $time = $arr["time"];
            $place = $arr["place"];
            $num = $arr["num"];
            $detail = $arr["detail"];
            $activity = new Activity($id,$name,$time,$place,$num,$detail);
            array_push($activityArray,$activity);
        }
        return $activityArray;
    }

    public function getConcreteData($id){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from activity where id='$id'";
        $res = $sqlite3->query($sql);

        $arr = $res->fetchArray();
        $id = $arr["id"];
        $name = $arr["name"];
        $time = $arr["time"];
        $place = $arr["place"];
        $num = $arr["num"];
        $detail = $arr["detail"];

        $activity = new Activity($id,$name,$time,$place,$num,$detail);
        return $activity;
    }

    //发布活动
    public function addActivity($account,$activity){
        $id = $activity->getId();
        $name = $activity->getName();
        $time = $activity->getTime();
        $place = $activity->getPlace();
        $num = $activity->getNum();
        $detail = $activity->getDetail();

        $sqlite3 = DB::getInstance()->getDB();
        $sql = "insert into activity values('$id','$name','$time','$place','$num','$detail')";
        $sqlite3->exec($sql);
        $sql = "insert into myactivity values('$account','$id')";
        return $sqlite3->exec($sql);
    }

    public function getMyActivity($account){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from myactivity where account='$account'";
        $res = $sqlite3->query($sql);

        $activityArray = array();
        while($arr = $res->fetchArray()){
//            $id = $arr["id"];
//            $name = $arr["name"];
//            $time = $arr["time"];
//            $place = $arr["place"];
//            $num = $arr["num"];
//            $detail = $arr["detail"];
            $activity = $this->getConcreteData($arr["activityid"]);
            array_push($activityArray,$activity);
        }
        return $activityArray;
    }

    public function joinActivity($account,$id){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "insert into myactivity values('$account','$id')";
        return $res=$sqlite3->exec($sql);
    }

    public function quitActivity($account,$id){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "delete from myactivity where account='$account' and activityid='$id'";
        return $res=$sqlite3->exec($sql);
    }

    public function getActivityNum(){
        $activityList = $this->getActivityList();
        return count($activityList);
    }

    //改变参加该活动的人数
    public function changeNumOfActivity($id,$i){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from activity where id='$id'";
        $res = $sqlite3->query($sql);
        $arr = $res->fetchArray();
        $num = $arr["num"];
        //$i为活动参加人数的改变量
        $change = $num+$i;
        $sql = "update activity set num='$change' where id='$id'";
        $res = $sqlite3->exec($sql);
        return $res;
    }
}