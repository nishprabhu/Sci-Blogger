<?php
$title = @$_REQUEST['title'];
$abstract = @$_REQUEST['abstract'];
$id=md5(rand(1,10000));
$json_obj=['id'=>$id,'title'=>$title, 'abstract'=>$abstract];
#print_r($json_obj);
$json_request = json_encode($json_obj,true);

require("phpMQTT.php");

$mqtt = new phpMQTT("localhost", 1883, $id);
//Change client name to something unique

if ($mqtt->connect()) {
  $mqtt->publish("request",$json_request,0);
  echo "<!--published-->";
}
$topics[$id] = ["qos"=>0, "function"=>"myresponse"];
$mqtt->subscribe($topics,0);
while($mqtt->proc())
{
}

function myresponse($topic, $message)
{
#global $mqtt;
#echo "Entered myresponse with $topic, $message";
  $json_obj = json_decode($message,true);
  $response = $json_obj['title'];
  //call the result view
include "newresult.php";
#$mqtt->close();
exit();
}
?>
