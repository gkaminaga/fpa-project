<?php
require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$id = $_POST['id'];
$nome=$_POST['nome'];
$ativo=$_POST['ativo'];
$data_evento=$_POST['data_evento'];
$motivo=$_POST['motivo'];
$obito=$_POST['obito'];
$data_obito=$_POST['data_obito'];

$params = array();
$params['id'] = $id;
$params['nome']=$nome;
$params['ativo']=$ativo;
$params['data_evento']=$data_evento;
$params['motivo']=$motivo;
$params['obito']=$obito;
$params['data_obito']=$data_obito;

$api->adicionar_historico($params);
?>