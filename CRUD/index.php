<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="add.php">Adicionar Produto</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Site</th>
            <th>Ações</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM produtos");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
                <td>{$row['site']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Editar</a> | 
                    <a href='delete.php?id={$row['id']}'>Excluir</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
