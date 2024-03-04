<?php

// Replace with your actual database connection credentials
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

if(isset($_GET['pesquisa'])){
  $cpf = $_GET['pesquisa'];
  $sql = "SELECT * FROM users WHERE cpf ='$cpf'";
}
else{
  $sql = "SELECT * FROM users";
}
// Specify the correct table name (replace with your actual table name)
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $user_id = $row["id"]; // Assuming an "id" column for identification
        
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["disciplina"] . "</td>";
        echo "<td>" . $row["carga_horaria"] . "</td>";
        echo "<td>" . $row["projeto"] . "</td>";
        echo "<td>" . $row["ano"] . "</td>";
        echo "<td>" . $row["periodo"] . "</td>";
        echo "<td>" . $row["rg"] . "</td>";
        echo "<td>" . $row["cpf"] . "</td>";
        echo "<td>";
        // Include buttons with data-id attributes for JavaScript access
        echo "<a class='btn-edit' href='./atualizar.php')>Editar</a>";
        echo "<a class='btn-delete' href='/excluir.php')>Excluir</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='10'>Nenhum registro encontrado</td></tr>";
}

$conn->close();

?>
