<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$id=$_GET['id'];

$params = array();
$params['id']=$id;

$data = $api->prs_detalhado($params);



echo json_encode($data);

?>

