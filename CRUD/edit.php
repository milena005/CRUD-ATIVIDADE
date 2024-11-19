<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <?php
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM produtos WHERE id=$id");
    $row = $result->fetch_assoc();
    ?>
    <form action="" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        Site: <input type="text" name="site" value="<?php echo $row['site']; ?>" required><br>
        <button type="submit" name="update">Atualizar</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $site = $_POST['site'];

        $conn->query("UPDATE produtos SET nome='$nome', email='$email', site='$site' WHERE id=$id");
        echo "Produto atualizado com sucesso!";
        echo "<br><a href='index.php'>Voltar à lista</a>";
    }
    ?>
</body>
</html>
