<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$usuario=$_POST['usuario'];
$datetime=$_POST['datetime'];
$acao=$_POST['acao'];
$nomeAntigo=$_POST['nomeAntigo'];
$emailAntigo=$_POST['emailAntigo'];
$ativoAntigo=$_POST['ativoAntigo'];
$adminAntigo=$_POST['adminAntigo'];
$epsAntiga=$_POST['epsAntiga'];
$nomeNovo=$_POST['nomeNovo'];
$emailNovo=$_POST['emailNovo'];
$ativoNovo=$_POST['ativoNovo'];
$adminNovo=$_POST['adminNovo'];
$epsNova=$_POST['epsNova'];


$params = array();
$params['usuario']=$usuario;
$params['datetime']=$datetime;
$params['acao']=$acao;
$params['nomeAntigo']=$nomeAntigo;
$params['emailAntigo']=$emailAntigo;
$params['ativoAntigo']=$ativoAntigo;
$params['adminAntigo']=$adminAntigo;
$params['epsAntiga']=$epsAntiga;
$params['nomeNovo']=$nomeNovo;
$params['emailNovo']=$emailNovo;
$params['ativoNovo']=$ativoNovo;
$params['adminNovo']=$adminNovo;
$params['epsNova']=$epsNova;

$api->InsertLogUsuario($params);


?>
