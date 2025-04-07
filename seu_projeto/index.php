<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Cadastro de Alunos</h2>
    <form action="processa.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="text" name="matricula" placeholder="Matrícula" required>
        <input type="text" name="endereco" placeholder="Endereço" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Pesquisar Aluno</h2>
    <form action="" method="GET">
        <input type="text" name="busca" placeholder="Digite o nome ou matrícula">
        <button type="submit">Pesquisar</button>
    </form>

    <h2>Lista de Alunos</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Matrícula</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </tr>

        <?php
        include 'conexao.php';
        $busca = isset($_GET['busca']) ? $_GET['busca'] : '';
        $sql = "SELECT * FROM alunos WHERE nome LIKE '%$busca%' OR matricula LIKE '%$busca%'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['nome']}</td>
                <td>{$row['cpf']}</td>
                <td>{$row['matricula']}</td>
                <td>{$row['endereco']}</td>
                <td>{$row['telefone']}</td>
            </tr>";
        }
        ?>
    </table>

    <div class="export-links">
        <a href="export_xls.php">Baixar Excel</a>
        <a href="export_json.php">Baixar JSON</a>
    </div>

</div>

</body>
</html>