<?php
require_once("conexao.php");
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email =$_POST['email'];
$senha =$_POST['senha'];
$rua =$_POST['rua'];
$bairro = $_POST['bairro'];
$numero =$_POST['numero'];

if(empty($nome)||empty($celular)){
    echo "<script>alert('por favor, preencha todos os capos');</script>";
    exit();
}

$sql_inserir = $pdo_SQLITE->prepare("INSERT INTO usuario (nome, celular, email, rua, senha, bairro, numero) VALUES (:nome, :celular, :email, :rua, :senha, :bairro, :numero)");
$sql_inserir->bindValue(":nome", $nome);
$sql_inserir->bindValue(":celular", $celular);
$sql_inserir->bindValue(":email", $email);
$sql_inserir->bindValue(":senha", $senha);
$sql_inserir->bindValue(":rua", $rua);
$sql_inserir->bindValue(":bairro", $bairro);
$sql_inserir->bindValue(":numero", $numero);
$sql_inserir->execute();


