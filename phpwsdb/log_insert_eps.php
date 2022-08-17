<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$usuario=$_POST['usuario'];
$datetime=$_POST['datetime'];
$acao=$_POST['acao'];
$siglaAntiga=$_POST['siglaAntiga'];
$pdvAntigo=$_POST['pdvAntigo'];
$siglaNova=$_POST['siglaNova'];
$pdvNovo=$_POST['pdvNovo'];

$params = array();
$params['usuario']=$usuario;
$params['datetime']=$datetime;
$params['acao']=$acao;
$params['siglaAntiga']=$siglaAntiga;
$params['pdvAntigo']=$pdvAntigo;
$params['siglaNova']=$siglaNova;
$params['pdvNovo']=$pdvNovo;

$api->InsertLogEps($params);


?>

