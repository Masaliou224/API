<?php 

$url = "http://localhost/api/";

$data = file_get_contents($url);

$result = json_decode($data, true);

var_dump($result);

?>