<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$data = $api->lista_prs();
$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data
);

echo json_encode($results);

?>