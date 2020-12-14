<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "biblioteca";
    $conecta = mysqli_connect($host, $username, $password, $database);
        
    if(!$conecta){
        print"Falha na conexão.";
    }else{
        echo "Conectado";
    }

?>