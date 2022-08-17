<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$id=$_GET['id'];

$params = array();
$params['id']=$id;

$data = $api->GetPainelById($params);

$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data);

echo json_encode($results);

?>