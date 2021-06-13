<?php


$data=file_get_contents('https://api.covid19india.org/data.json');
$coronadata=json_decode($data,true); 

echo "<pre>";
print_r($coronadata);
  
?>
