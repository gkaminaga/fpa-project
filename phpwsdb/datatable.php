<?php
//include_once("api.php");

require_once 'api.php';

$api = new api();

$data = $api->GetSumCallback();

  
$results = array(
  "data"=>$data);
echo json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHED);

?>