<?php
require '../vendor/autoload.php';
include 'conexao.php';
use Twilio\Rest\Client;

// Função para enviar mensagem no WhatsApp
function enviarMensagemWhatsApp($numero, $mensagem) {
    $sid = 'SEU_ACCOUNT_SID';
    $token = 'SEU_AUTH_TOKEN';
    $twilioNumber = 'whatsapp:+SEU_NUMERO_TWILIO';
    $client = new Client($sid, $token);

    $message = $client->messages->create(
        'whatsapp:+' . $numero,
        [
            'from' => $twilioNumber,
            'body' => $mensagem
        ]
    );

    return $message->sid;
}

// Captura os dados do formulário
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$fotoCapa = $_FILES['foto_capa']['name'];
$fotoCapaTmp = $_FILES['foto_capa']['tmp_name'];

// Move a imagem para o diretório de destino
$destino = '../assets/img/' . $fotoCapa;
move_uploaded_file($fotoCapaTmp, $destino);

// Insere os dados no banco de dados
$sql = "INSERT INTO newsletter_tb (Categoria, Titulo, Conteudo, imgUrl) VALUES (?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param('ssss', $categoria, $titulo, $conteudo, $destino);

if ($stmt->execute()) {

    echo "Notícia postada e mensagens enviadas com sucesso.";
} else {
    echo "Erro ao postar notícia: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>