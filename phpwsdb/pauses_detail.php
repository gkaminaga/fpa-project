<?php

require_once 'api.php';
$api = new api();

$pdv=$_GET['pdv'];
$datainicial=$_GET['datainicial'];
$datafinal=$_GET['datafinal'];

$params = array();
$params['eps']='';
$params['datainicial']=$datainicial;
$params['datafinal']=$datafinal;

if ($pdv == "0") {
    $params['eps'] = "'601','602','603','604','610','612','613','625'";
} elseif ($pdv == "V900955") {
    $params['eps'] = "'601','612'";
} elseif ($pdv == "V906935") {
    $params['eps'] = "'610','602','625'";
} elseif ($pdv == "V906152") {
    $params['eps'] = "'613','604'";
}elseif ($pdv == "V906390") {
    $params['eps'] = "'603'";
}

$data = $api->GetDataTablePausesDetail($params);

$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data
);

echo json_encode($results);

?>