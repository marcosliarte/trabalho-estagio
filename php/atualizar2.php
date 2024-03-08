<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cetam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_GET['id'])) {
    echo "Erro: ID não encontrado.";
    exit;
}

// Capturar dados do formulário
$id = $_GET['id'];
$nome = $_GET['nome'];
$disciplina = $_GET['disciplina'];
$carga_horaria = $_GET['carga_horaria'];
$projeto = $_GET['projeto'];
$ano = $_GET['ano'];
$periodo = $_GET['periodo'];
$rg = $_GET['rg'];
$cpf = $_GET['cpf'];


// Gerar query SQL para atualização
$sql = "UPDATE users SET 
nome = '$nome', 
disciplina = '$disciplina', 
carga_horaria = '$carga_horaria', 
projeto = '$projeto', 
ano = '$ano', 
periodo = '$periodo', 
rg = '$rg', 
cpf = '$cpf' 
WHERE id = '$id'";

// Executar query e tratar resultado
$result = $conn->query($sql);

if ($result === TRUE) {
  echo "Registro atualizado com sucesso!";
} else {
  echo "Erro ao atualizar registro: " . $conn->error;
}

// Fechar conexão
$conn->close();

?>
