<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$eps=$_POST['eps'];
$admin=$_POST['admin'];
$ativo=$_POST['ativo'];

$params = array();
$params['id']=$id;
$params['nome']=$nome;
$params['email']=$email;
$params['senha']=$senha;
$params['eps']=$eps;
$params['admin']=$admin;
$params['ativo']=$ativo;

if ($id == 0){
    $api->Insert($params);
} else {
    $api->Update($params);
}

?>