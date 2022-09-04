<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$id=$_POST['id'];
$data_saida=$_POST['data_saida'];
$ativo=$_POST['ativo'];
$motivo_saida=$_POST['motivo_saida'];
$obito=$_POST['obito'];
$data_obito=$_POST['data_obito'];

$params = array();
$params['id']=$id;
$params['data_saida']=$data_saida;
$params['ativo']=$ativo;
$params['motivo_saida']=$motivo_saida;
$params['obito']=$obito;
$params['data_obito']=$data_obito;

$data = $api->inativar_beneficiario($params);

echo json_encode($data);
?>