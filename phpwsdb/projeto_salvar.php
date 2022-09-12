<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$responsavel = $_POST['responsavel'];

$params = array();
$params['nome'] = $id;
$params['tipo'] = $sigla;
$params['responsavel'] = $descricao;

$api->InsertEps($params);
