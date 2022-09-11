<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$data = $api->get_origem();

echo json_encode($data);

?>