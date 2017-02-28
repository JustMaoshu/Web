<?php

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/1
 * Time: 21:27
 */
class DB
{
    private static $instance = null;
    private static $sqlite ;

    private function __construct(){}
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getDB(){
        if(self::$sqlite==null){
            self::$sqlite = new SQLite3("web.db");
//            self::$sqlite = new PDO('sqlite:web.db');
        }
        return self::$sqlite;
    }
}