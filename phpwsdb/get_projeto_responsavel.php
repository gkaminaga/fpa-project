<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$data = $api->get_projeto_responsavel();

echo json_encode($data);
?>