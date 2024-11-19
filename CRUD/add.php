<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form action="" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Site: <input type="text" name="site" required><br>
        <button type="submit" name="submit">Salvar</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $site = $_POST['site'];

        $conn->query("INSERT INTO produtos (nome, email, site) VALUES ('$nome', '$email', '$site')");
        echo "Produto adicionado com sucesso!";
        echo "<br><a href='index.php'>Voltar à lista</a>";
    }
    ?>
</body>
</html>
