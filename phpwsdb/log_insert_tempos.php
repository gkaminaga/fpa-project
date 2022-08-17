<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$usuario=$_POST['usuario'];
$datetime=$_POST['datetime'];
$acao=$_POST['acao'];
$dataInicio=$_POST['dataInicio'];
$dataFinal=$_POST['dataFinal'];
$pdv=$_POST['pdv'];



$params = array();
$params['usuario']=$usuario;
$params['datetime']=$datetime;
$params['acao']=$acao;
$params['dataInicio']=$dataInicio;
$params['dataFinal']=$dataFinal;
$params['pdv']=$pdv;


$api->InsertLogTempos($params);


?>

