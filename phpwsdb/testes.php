<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$data = $api->Select();
echo json_encode($data);

?>