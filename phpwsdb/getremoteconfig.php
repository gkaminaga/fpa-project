<?php

require_once 'api.php';
$api = new api();
$data = $api->GetRemoteConfig();
$callbacks = array();
$callbacks = $data->callbacks;
$results = array(
	"sEcho" => 1,
"iTotalRecords" => count($callbacks),
"iTotalDisplayRecords" => count($callbacks),
  "aaData"=>$callbacks);

echo json_encode($results);

?>