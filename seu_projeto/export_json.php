<?php
header("Content-Type: application/json");
header("Content-Disposition: attachment; filename=alunos.json");

include 'conexao.php';

$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);

$alunos = [];
while ($row = $result->fetch_assoc()) {
    $alunos[] = $row;
}

echo json_encode($alunos, JSON_PRETTY_PRINT);
$conn->close();
?>