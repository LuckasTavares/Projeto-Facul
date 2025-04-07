<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=alunos.xls");

include 'conexao.php';

echo "Nome\tCPF\tMatrícula\tEndereço\tTelefone\n";

$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "{$row['nome']}\t{$row['cpf']}\t{$row['matricula']}\t{$row['endereco']}\t{$row['telefone']}\n";
}

$conn->close();
?>