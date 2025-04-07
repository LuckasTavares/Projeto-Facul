<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $matricula = $_POST['matricula'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO alunos (nome, cpf, matricula, endereco, telefone) 
            VALUES ('$nome', '$cpf', '$matricula', '$endereco', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}

$conn->close();
?>