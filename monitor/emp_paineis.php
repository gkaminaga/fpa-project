<?php
$confdb = json_decode(file_get_contents('../phpwsdb/configuration.json'), TRUE);

  $db = new mysqli($confdb['host_sqlsrv'],$confdb['user_sqlsrv'],$confdb['password_sqlsrv'],$confdb['database_sqlsrv']);

  $painelId = $_REQUEST['PainelId'];

  echo($painelId);
?>