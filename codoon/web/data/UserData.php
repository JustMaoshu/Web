<?php

include_once("DB.php");
include_once ("User.php");

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/1
 * Time: 22:00
 */
class UserData
{
    public function login($account, $password)
    {
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from user where account='$account' and password='$password'";
        $res = $sqlite3->query($sql);
        if ($arr=$res->fetchArray()) {
            return $arr['level'];
        }
        return 0;
    }

    public function getAllUsers(){
        $sqlite3=DB::getInstance()->getDB();
        $sql="select * from user";
        $res=$sqlite3->query($sql);
        $userArray=array();
        while($arr=$res->fetchArray()){
            $account=$arr["account"];
            $password=$arr["password"];
            $level=$arr["level"];
            $user=new User($account,$password,$level);
            if($level==2){                  //不是管理员
                array_push($userArray,$user);
            }
        }
        return $userArray;
    }

    public function register($account, $password, $level)
    {
        $sqlite3 = DB::getInstance()->getDB();
        $sql = "select * from user where account='$account'";
        $res = $sqlite3->query($sql);
        if ($res->fetchArray()) {
            return false;
        }
        $sql = "insert into user VALUES('$account','$password','$level')";
        return $sqlite3->exec($sql);
    }

    public function deleteUser($account){
        $sqlite3=DB::getInstance()->getDB();
        $sql="delete from user WHERE account='$account'";
        $res=$sqlite3->exec($sql);
        if(!$res){
            return false;
        }else{
            $sql="delete from user WHERE account='$account'";
            $res=$sqlite3->exec($sql);
            return $res;
        }
    }
}