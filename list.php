



<?php



 $dir = 'Downloads/';
  $file = scandir($dir, 1);
$curt = '';
  for ($i=0;$i < count($file)-2; $i++){

       $curt .= '<img class Name src="'.$dir .  $file[$i].'" width = "400" >';

  }



include_once 'list.html';













