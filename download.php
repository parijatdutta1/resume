<?php

$file = $GET['resume'] .".pdf" ;

header("content-disposition: attachment; filename=" .urlencode($resume));

$fb = fopen($file, "r");

while(!feof($fb)){
  echo fread($fb, 8192);
  flush();
}
fclose($fb);
?>
