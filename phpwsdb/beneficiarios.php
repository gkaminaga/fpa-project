<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$data = $api->beneficiarios();
$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data
);

echo json_encode($results);

?>

