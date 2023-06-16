<?php
require_once("conexao.php");
//sqp pergunta oq fazer ao banco de dados
$sql = $pdo_SQLITE->query("SELECT * FROM biblioteca order by nome");
$sql_dados = $sql->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($sql_dados);

echo "<center><h1> Você possui " . $linhas . " registros na tabela </h1>";
echo "<h3>Dados cadastrados na tabela</h3>";

for ($i = 0; $i < count($sql_dados); $i++) {
    //resgatando os dados na tabela
    foreach ($sql_dados[$i] as $key => $value) {
    }
    //extraindo os dados do json
    $id = $sql_dados[$i]['ID'];
    $nome = $sql_dados[$i]['nome'];
    $telefone = $sql_dados[$i]['telefone'];
    //montando a linha para mostrar no navegador
    echo "<h3>" . $id . " - " . $nome . " - " . $telefone . "</h3>";
}
//escrevendo html no navegador
echo "</></table>";
echo "<button>Criar o PDF</button>";
exit();