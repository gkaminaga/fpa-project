<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$unidade = $_POST['unidade'];
$contato = $_POST['contato'];
$endereco = $_POST['endereco'];

$params = array();
$params['unidade'] = $unidade;
$params['contato'] = $contato;
$params['endereco'] = $endereco;

$api->inserir_unidade($params);
