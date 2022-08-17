<?php

// the API file
require_once 'api.php';

// creates a new instance of the api class
$api = new api();

// message to return
$message = array();

switch($_POST["action"])
{
	case 'get':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if (is_array($data = $api->get($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
		
	case 'LicenseControl':
		$params = $_POST;
		if (is_array($data = $api->LicenseControl($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;		
		
	case 'InteractionAdd':
		$params = $_POST;
		$params['tries'] = isset($_POST["tries"]) ? $_POST["tries"] : '0';
		if (is_array($data = $api->InteractionAdd($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;	
		
	case 'OnGetAgentState':
		$params = $_POST;	
		$params['tries'] = isset($_POST["tries"]) ? $_POST["tries"] : '0';
		if (is_array($data = $api->OnGetAgentState($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
		
	case 'SessionRemove':
		$params = $_POST;
		$params['tries'] = isset($_POST["tries"]) ? $_POST["tries"] : '0';
		if (is_array($data = $api->SessionRemove($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
	case 'GetLoggedAgents':
	
		$data = $api->GetDataTable();
		$message = array(
			"sEcho" => 1,
			"iTotalRecords" => count($data),
			"iTotalDisplayRecords" => count($data),
			"aaData"=>$data);
		
		break;
	case 'GetSumCallback':
	    $params['interval'] = isset($_POST["interval"]) ? $_POST["interval"] : 'd';
		$data = $api->GetSumCallback($params);
		$message = array("data"=>$data);
		
		break;
		
	case 'OnCallback':
		$params = $_POST;
		$params['tries'] = isset($_POST["tries"]) ? $_POST["tries"] : '0';
		$params['seconds'] = isset($_POST["seconds"]) ? $_POST["seconds"] : '0';
		$params['duration'] = isset($_POST["duration"]) ? $_POST["duration"] : '0';
		if (is_array($data = $api->OnCallback($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
	case 'StartCallback':
		$params = $_POST;
		$params['tries'] = isset($_POST["tries"]) ? $_POST["tries"] : '0';
		$params['seconds'] = isset($_POST["seconds"]) ? $_POST["seconds"] : '0';
		$params['duration'] = isset($_POST["duration"]) ? $_POST["duration"] : '0';
		if (is_array($data = $api->CallbackHistory($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
	case 'CancelCallback':
		$params = $_POST;
		$params['tries'] = isset($_POST["tries"]) ? $_POST["tries"] : '0';
		$params['seconds'] = isset($_POST["seconds"]) ? $_POST["seconds"] : '0';
		$params['duration'] = isset($_POST["duration"]) ? $_POST["duration"] : '0';
		if (is_array($data = $api->CallbackHistory($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;	
	case 'GetRemoteConfig':
		$data = $api->GetRemoteConfig();
		$message["data"] = $data;
		break;		
	case 'SaveConfigCallback':
		$params = $_POST;
		if (is_array($data = $api->SaveConfigCallback($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;		
	default:
		$message["code"] = "2";
		$message["message"] = "Unknown method " . $_POST["action"];
		break;
}

//the JSON message
header('Content-type: application/json; charset=utf-8');
echo json_encode($message, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHED);

?>
