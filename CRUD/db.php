<?php
$host = 'localhost';
$user = 'root'; // Usuário padrão do XAMPP
$password = ''; // Senha padrão (geralmente vazia)
$database = 'crud_produtos';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
