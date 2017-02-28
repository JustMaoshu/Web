<?php
/**
 * Created by PhpStorm.
 * User: song4
 * Date: 2016/11/30
 * Time: 21:40
 */
for($i=0;$i<1000;$i++){
    $tempTime='-'.$i.'day';
    $date=date("Y-m-d",strtotime($tempTime));
    $data="<xml><account>suyanzi</account><time>$date</time><burn>473819</burn><percent>31</percent><bmi>5.3</bmi><numOfStep>2300</numOfStep></xml>";
    $data=urlencode($data);
    $opts=array(
      'http'=>array(
          'method'=>'post',
          'header'=>'Content-type: application/x-www-form-urlencodedrn',
          'content'=>$data
      )
    );
    $context=stream_context_create($opts);
    $res=file_get_contents('http://localhost/codoon/web/addData.php', false, $context);
}