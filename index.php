<?php
/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/1
 * Time: 11:02
 */
//$db = sqlite_open("D:/大三上/网络/sqlite-tools-win32-x86-3150200/codoon.db");
//if($db){
//    $sql = "select * from user order by id desc limit 20";
//    $res = sqlite_unbuffered_query($db, $sql);
//    while ($item = sqlite_fetch_array($res, SQLITE_ASSOC)) {
//        print "ID:".$item["id"] ."NAME:".$item["name"];
//        print "<BR>";
//    };
//    sqlite_close($db);
//}else{
//    print "error";
//}
//phpinfo();
$path = "D:/大三上/网络/sqlite-tools-win32-x86-3150200/codoon.db";
$db = sqlite_open($path);
//$db= new PDO($path) ;
print_r($db);
$sth = $db->query("select * from user");