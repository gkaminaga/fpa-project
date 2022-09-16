<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$id = $_POST['id'];
$unidade = $_POST['unidade'];
$contato = $_POST['contato'];
$endereco = $_POST['endereco'];
$status = $_POST['status'];

$params = array();
$params['id'] = $id;
$params['unidade'] = $unidade;
$params['contato'] = $contato;
$params['endereco'] = $endereco;
$params['status'] = $status;

$api->alterar_unidade($params);
