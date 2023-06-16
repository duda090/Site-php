<?php
date_default_timezone_set('America/Sao_Paulo');
try{
    $pdo_SQLITE = new PDO('sqlite:./biblioteca.db3');
    echo "'Conectado'";
} catch (Exception $e){
    echo "Não concetado";

}