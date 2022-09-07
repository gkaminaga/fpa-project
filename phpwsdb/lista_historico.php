<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();

$dataList = $api->lista_historico();

$data = [];
    foreach ($dataList as $key) {
        if ($key->ativo == 0) $key->ativo = "Inativo";
        if ($key->ativo == 1) $key->ativo = "Ativo";

        $data[] = $key;
    }

$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData" => $data
);

echo json_encode($results);
