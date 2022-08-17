<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$Id=$_POST['Id'];
$eps=$_POST['eps'];
$descr=$_POST['descr'];
$url=$_POST['url'];

$params = array();
$params['Id']=$Id;
$params['eps']=$eps;
$params['descr']=$descr;
$params['url']=$url;

if ($Id == 0){
    $api->InsertPainel($params);
} else {
    $api->UpdatePainel($params);
}

?>