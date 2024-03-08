<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cetam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obter ID do registro da URL
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
}
else{
    echo "Erro ID nao informado na URL";
    exit;
}

// Buscar dados do registro no banco de dados

$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $user_id = $row["id"];

  // Atribuir valores às variáveis
  $nome = $row['nome'];
  $disciplina = $row['disciplina'];
  $carga_horaria = $row['carga_horaria'];
  $projeto = $row['projeto'];
  $ano = $row['ano'];
  $periodo = $row['periodo'];
  $rg = $row['rg'];
  $cpf = $row['cpf'];
} else {
  echo "Registro não encontrado.";
  exit;
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Registro</title>
</head>
<body>
  <h1>Editar Registro</h1>
  <form action="./atualizar2.php" method="get">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
    <br>
    <label for="disciplina">Disciplina:</label>
    <input type="text" name="disciplina" id="disciplina" value="<?php echo $disciplina; ?>">
    <br>
    <label for="carga_horaria">Carga Horária:</label>
    <input type="text" name="carga_horaria" id="carga_horaria" value="<?php echo $carga_horaria; ?>">
    <br>
    <label for="projeto">Projeto:</label>
    <input type="text" name="projeto" id="projeto" value="<?php echo $projeto; ?>">
    <br>
    <label for="ano">Ano:</label>
    <input type="text" name="ano" id="ano" value="<?php echo $ano; ?>">
    <br>
    <label for="periodo">Período:</label>
    <input type="text" name="periodo" id="periodo" value="<?php echo $periodo; ?>">
    <br>
    <label for="rg">RG:</label>
    <input type="text" name="rg" id="rg" value="<?php echo $rg; ?>">
    <br>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>">
    <br>
    <br>
    <button type="submit">Salvar Alterações</button>
  </form>
</body>
</html>
