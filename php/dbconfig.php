<?php

$config = array("host" => "localhost",
"database" => "cetam",
"user" => "root",
"password" => "",);

$mysqli = mysqli_connect($config["host"], $config["user"], $config["password"], $config["database"]);

if(!$mysqli){
    echo "Erro ao se conectar ao banco de dados " . mysqli_connect_error();
    exit;
}

?>
