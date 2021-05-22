<?php
//Servidor de trabajo
$serverName = "mercadito.axolotlteam.com";
//Datos referentes a la conexión
$connectioninfo=array(
        "database" => "BeeCare",
        "uid" => "apiAxolotl",
        "pwd" => "Test3312"
    );
    $conn = sqlsrv_connect($serverName,$connectioninfo);
?>