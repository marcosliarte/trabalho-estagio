<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cetam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!empty($_GET['id'])) {
    $userId = $_GET['id'];

    // Prepared statement for security
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        echo "Sucesso ao excluir o registro.";
    } else {
        echo "Erro ao excluir o registro: " . mysqli_error($conn);
    }

    $stmt->close();
}

mysqli_close($conn);
?>
