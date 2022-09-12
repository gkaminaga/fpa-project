<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$id=$_POST['id'];
$sigla=$_POST['sigla'];
$descricao=$_POST['descricao'];
$pdv=$_POST['pdv'];

$params = array();
$params['id']=$id;
$params['sigla']=$sigla;
$params['descricao']=$descricao;
$params['pdv']=$pdv;

if ($id == 0){
    $api->InsertEps($params);
} else {
    $api->UpdateEps($params);
}

?>