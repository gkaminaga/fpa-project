<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$id=$_POST['id'];
$senha=$_POST['senha'];


$params = array();
$params['id']=$id;
$params['senha']=$senha;


$api->UpdateSenha($params);


?>