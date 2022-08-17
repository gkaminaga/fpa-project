<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$email=$_POST['email'];
$senha=$_POST['senha'];
$params = array();
$params['email']=$email;
$params['senha']=$senha;
$data = $api->Login($params);

echo json_encode($data);

?>