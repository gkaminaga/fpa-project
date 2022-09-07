<?php
require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$id=$_GET['id'];

$params = array();
$params['id']=$id;

$data = $api->historico_detalhado($params);

    if($data[0]->ativo == 0) $data[0]->ativo = "Inativo";
    if($data[0]->ativo == 1) $data[0]->ativo = "Ativo";
    
echo json_encode($data);
?>