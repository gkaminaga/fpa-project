<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$data = $api->lista_unidade();
$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data
);
var_dump($results);
echo json_encode($results);

?>