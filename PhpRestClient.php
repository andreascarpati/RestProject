<?php
$json = file_get_contents("http://localhost:8080/RestProject/Rest/courseService/courses");
$json_o = json_decode($json);
 
$msg = "";
foreach($json_o as $item)
{
$msg .= "Course ID : ". $item->id. "<br>";
$msg .= "Course Name : ". $item->name. "<br>";
$msg .= "Duration  : ". $item->duration. "<br>";
$msg .= "Course fee : ". $item->fee. "<br><br>";
}
echo $msg;
?>