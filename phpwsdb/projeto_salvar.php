<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$responsavel = $_POST['id_responsavel'];

$params = array();
$params['nome'] = $nome;
$params['tipo'] = $tipo;
$params['id_responsavel'] = $responsavel;

$api->inserir_projeto($params);
