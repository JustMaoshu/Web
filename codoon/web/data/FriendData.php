<?php

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/4
 * Time: 21:50
 */

include_once ("DB.php");

class FriendData
{
    public function getFriends($account){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from friend where account='$account'";
        $res = $sqlite3->query($sql);
        $friendArray=array();
        while($array=$res->fetchArray()){
            $friend = $array["friendaccount"];
            array_push($friendArray,$friend);
        }
        return $friendArray;
    }

    public function searchFriend($account,$friendaccount){
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from friend where account='$account' and friendaccount='$friendaccount'";
        $res = $sqlite3->query($sql);
        //已是好友
        if($arr=$res->fetchArray()){
            return 0;
        }
        $sql = "select * from user where account='$friendaccount'";
        $res = $sqlite3->query($sql);
        //找到该用户
        if($arr=$res->fetchArray()){
            return 1;
        }else{
            return 2;   //没找到该用户
        }
    }

    public function addFriend($account,$friendaccount){
        $res=$this->searchFriend($account,$friendaccount);
        if($res==0||$res==2){
            return $res;
        }
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "insert into friend VALUES('$account','$friendaccount')";
        $sqlite3->exec($sql);
        return 1;
    }
}