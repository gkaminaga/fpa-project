<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$id = $_POST['id'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$id_responsavel = $_POST['id_responsavel'];
$responsavel = $_POST['responsavel'];

$params = array();
$params['id'] = $id;
$params['nome'] = $nome;
$params['tipo'] = $tipo;
$params['id_responsavel'] = $id_responsavel;
$params['responsavel'] = $responsavel; 

$api->alterar_projeto($params);
