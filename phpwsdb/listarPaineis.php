<?php

private $db;


        $confdb = json_decode(file_get_contents('configuration.json'), TRUE);
        $serverName = $confdb['host_sqlsrv'];
        $connectionInfo = array( "Database"=>$confdb['database_sqlsrv'], "UID"=>$confdb['user_sqlsrv'], "PWD"=>$confdb['password_sqlsrv']);
        //$db = sqlsrv_connect( $serverName, $connectionInfo);
        $db = new mysqli($confdb['host_sqlsrv'],$confdb['user_sqlsrv'],$confdb['password_sqlsrv'],$confdb['database_sqlsrv']);

        $query = "SELECT p.PainelId, e.Sigla, p.Descricao, p.url FROM Painel p, Eps e where  p.EpsId = e.Id";       

        $result = mysqli_query( $db, $query);

        if (!$result) {
            echo "Problem with query " . $query . "<br/>";
            echo mysqli_errors();
            exit();
        }       
        $list = array();
        while($myrow = mysqli_fetch_object($result)) 
        {
            $list[] = $myrow;
        }       
        return $list;
        $db->close();

?>