<?php
require_once("core/conexao.php");
$conn = conexao();

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

$query = "INSERT INTO usuario(nome, email, telefone, senha) VALUES (?,?,?,?)";

$instrucao = $conn->prepare($query);

$instrucao->bind_param("ssss", $nome, $email, $telefone, $senha);   

if ($instrucao->execute()) {
    $instrucao->close();
    $conn->close();
    header ("location: index.php");

} else {
    // Exibir mensagem de erro para o usuário
    echo "Erro ao cadastrar usuário: " . $conn->error;
}