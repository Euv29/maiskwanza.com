<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    

    $sql = "SELECT Email FROM Subscribers_tb WHERE status = 'ativo";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
            
            $mail->isSMTP();
            $mail->Host = 'smtp.seuservidor.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'seuemail@dominio.com'; 
            $mail->Password = 'suasenha';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('seuemail@dominio.com', 'Seu Nome');
            $mail->Subject = $titulo;
            $mail->Body = $conteudo;

            while($row = $result->fetch_assoc()) {
                $mail->addAddress($row["Email"]);
            }

            $mail->send();
            echo 'Notícia enviada com sucesso para todos os assinantes!';
        } catch (Exception $e) {
            echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
        }
    } else {
        echo "Nenhum assinante encontrado.";
    }

    $conexao->close();
}
?>
