<?php
// Inclua o arquivo de conexão
include '../config/conexao.php';

// Consulta para buscar todos os assinantes
$sql = "SELECT Id_sub, Nome, Numero, Email, DataInscricao FROM subscribers_tb";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/objects.css">
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/midiaQ.css">
    <link rel="stylesheet" href="../assets/css/animations.css">
</head>
<body class="flex row">
    <header class="menu-lateral">
        <section class="logo-container">
            <img src="../assets/img/logo.svg" alt="">
        </section>
        <nav class="flex col">
            <a href="" class="ative">Dashboard</a>
            <a href="./admnewsletter.html">Newsletter</a>
            <a href="">Destaques</a>
            <a href="">Subscritos</a>
        </nav>
    </header>
    <main class="main-adm container"> 
        <section class="header-section flex row j-between">
            <h1>Lista de assinantes</h1>
            <section class="user-info flex row a-center" id="user-info">
                <p class="">useremail@maiskwanza.com</p>
                <ion-icon name="person-circle" ></ion-icon>
            </section>
        </section>
        <section class="off" id="user-modal">
            <section class="user-modal flex col" >
                <a href="">Configurações</a>
                <a href="">Sair</a>
            </section>
        </section>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Número</th>
                <th>Email</th>
                <th>Data de Inscrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Id_sub"] . "</td>";
                    echo "<td>" . $row["Nome"] . "</td>";
                    echo "<td>" . $row["Numero"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["DataInscricao"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum assinante encontrado</td></tr>";
            }
            ?>
        </tbody>
    </table>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        var userinfo = document.getElementById('user-info');
        var usermodal = document.getElementById('user-modal');
        userinfo.onclick = function () {
            usermodal.classList.toggle('off');
        }
    </script>
</body>
</html>