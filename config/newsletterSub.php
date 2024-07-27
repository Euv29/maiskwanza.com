<?php 
include('./conexao.php');~

$nome = $_POST['nome'];
$numero = $_POST['numero'];
$email = $_POST['email'];


if (empty($nome) || empty($email)) {
    die("Nome e email são obrigatórios.");
}

$stmt = $conexao->prepare("INSERT INTO subscribers_tb (Nome, Numero, Email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $numero, $email);

if ($stmt->execute()) {
    echo "Inscrição realizada com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();

?>