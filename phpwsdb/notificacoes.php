<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$data_inicial=$_GET['data_inicial'];
$data_final=$_GET['data_final'];

$params = array();
$params['data_inicial']=$data_inicial;
$params['data_final']=$data_final;
$data = $api->notificacoes($params);






$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data
);

echo json_encode($results);

?>