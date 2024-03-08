<?php

require_once("dbconfig.php");

$nome = $_POST['nome'];
$disciplina = $_POST['disciplina'];
$carga_horaria = $_POST['carga_horaria'];
$projeto = $_POST['projeto'];
$ano = $_POST['ano'];
$periodo = $_POST['periodo'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$curso = $_POST['curso'];

$conn = mysqli_connect("localhost", "root", "", "cetam");
if (!$conn) {
    echo "Erro: a conexão com o banco de dados falhou.";
    exit;
}

$sql = "INSERT INTO users (nome, disciplina, carga_horaria, projeto, ano, periodo, rg, cpf, curso) VALUES ('$nome', '$disciplina', '$carga_horaria', '$projeto', '$ano', '$periodo', '$rg', '$cpf', '$curso')";

$resultado = mysqli_query($conn, $sql);

mysqli_close($conn);

if($resultado){
    echo "Usuário cadastrado com sucesso!";
}
else{
    echo "Falha ao cadastrar o usuário";
}
?>