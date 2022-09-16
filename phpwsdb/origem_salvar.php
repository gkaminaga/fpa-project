<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$sigla = $_POST['sigla'];
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$endereco = $_POST['endereco'];

$params = array();
$params['sigla'] = $sigla;
$params['nome'] = $nome;
$params['contato'] = $contato;
$params['endereco'] = $endereco;

$api->inserir_origem($params);
