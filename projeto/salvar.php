<?php
require_once("conexao.php");
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email =  $_POST['email'];
$cidade =  $_POST['cidade'];
$bairro =  $_POST['bairro'];

if(empty($nome)||empty($telefone)){
    echo "<script>alert('por favor, preencha todos os capos');</script>";
    exit();
}

$sql_inserir = $pdo_SQLITE->prepare("INSERT INTO agenda (nome, telefone, email, cidade, bairro) VALUES (:nome, :telefone, :email, :cidade, :bairro)");
$sql_inserir->bindValue(":nome", $nome);
$sql_inserir->bindValue(":telefone", $telefone);
$sql_inserir->bindValue(":email", $email);
$sql_inserir->bindValue(":cidade", $cidade);
$sql_inserir->bindValue(":bairro", $bairro);
$sql_inserir->execute();

$nomeUPPER = strtoupper($nome);
echo "Contato Cadastrado com Sucesso" . $nomeUPPER ." - " . $telefone ." - " . $email ." - " . $cidade ." - " . $bairro;
