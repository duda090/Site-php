<?php
date_default_timezone_set('America/Sao_Paulo');
try{
    $pdo_SQLITE = new PDO('sqlite:clientes.db3');
    echo "'Conectado'";
} catch (Exception $e){
    echo "NAO conectado - crie o banco de dados SQLITE";

}