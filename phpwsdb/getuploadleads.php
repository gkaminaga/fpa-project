<?php

require_once 'api.php';
$api = new api();
$data = $api->GetUploadLeads();

$results = array(
	"sEcho" => 1,
"iTotalRecords" => count($data),
"iTotalDisplayRecords" => count($data),
  "aaData"=>$data);

echo json_encode($results);

?>