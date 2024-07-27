<?php require_once 'controllers/conection.php'; 
include './config/conexao.php';

// Consulta para obter a última notícia postada
$sql = "SELECT Categoria, Titulo, Conteudo, ImgUrl, DataCriacao FROM Newsletter_tb ORDER BY DataCriacao DESC LIMIT 1";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $ultimaNoticia = $result->fetch_assoc();
} else {
    $ultimaNoticia = null;
}

$conexao->close();

?>


<!DOCTYPE html>

<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">

    <title> +Kwanza | sobre nós</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/objects.css">
    <link rel="stylesheet" href="./assets/css/root.css">
    <link rel="stylesheet" href="./assets/css/midiaQ.css">
    <link rel="stylesheet" href="./assets/css/animations.css">
</head>

<body>

    <!-- Header -->
    <header class="flex a-center j-between normal-font small-sz">
        <section class="logo-container">
            <a href="">
                <img src="./assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
            </a>
        </section>

        <!-- Destop Navgation -->
        <nav class="navbar menu-desktop hide-mobile flex row j-around a-center">

            <ul class="flex row">
                <li><a href="./index.php#home" class="page-scroll nav-link">Home</a></li>
                <li><a href="./index.php#podcast" class="page-scroll nav-link">Podcast</a></li>
                <li><a href="./sobrenos.php#about" class="page-scroll nav-link">Sobre nós</a></li>
                <li><a href="./index.php#contact" class="page-scroll nav-link">Contactos</a></li>
            </ul>

        </nav>

        <!-- Mobile Navgation -->
        <section class="hide-desktop">
            <nav class="navbar menu-mobile">
                <li>
                    <a href="#" class="flex row" id="menu-icon">
                        <img class="icon-menu" src="./assets/img/icon/menu.webp" alt="menu">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="./index.php#home" class="page-scroll nav-link">Home</a></li>
                        <li><a href="./index.php#podcast" class="page-scroll nav-link">Podcast</a></li>
                        <li><a href="./sobrenos.php#about" class="page-scroll nav-link">Sobre nós</a></li>
                        <li><a href="./index.php#contact" class="page-scroll nav-link">Contactos</a></li>
                        <li class=" dackmode-btn ">
                            <label class="switch hide-desktop nav-link">
                                <input type="checkbox" id="darkModeToggle-mobile">
                                <span class="icon-s sun">
                                    <ion-icon class="icon" name="moon"></ion-icon> Dark Mode
                                </span>
                                <span class="icon-s moon">
                                    <ion-icon class="icon" name="sunny"></ion-icon> Light Mode
                                </span>
                            </label>
                        </li>
                        <li><a href="./newsletter.php" class=" newsletter-button">Newsletter</a></li>
                    </ul>
                </li>
            </nav>
        </section>

        <!-- Darkmode btn -->
        <label class="switch">
            <input type="checkbox" id="darkModeToggle">
            <span class="icon-s sun">
                <ion-icon class="icon" name="sunny"></ion-icon>
            </span>
            <span class="icon-s moon">
                <ion-icon class="icon" name="moon"></ion-icon>
            </span>
        </label>

        <a href="#sub" class="hide-mobile newsletter-button">Assinar Newsletter</a>

    </header>

    <!-- Main Content -->
    <main class="container">
        <section class="newsletter-hero flex col">
            <section class="title">
                <h1>Newsletter</h1>
                <h2>Ultimas notícias</h2>
            </section>
            <section class="pesquisa-filtros-container flex row j-between">
                <form action="" method="get" class="search-form flex">
                    <input type="text" placeholder="Digite para procurar">
                    <button type="submit"><img src="./assets/img/icon/arrow-forward.svg" alt=""></button>
                </form>
                <section class="filters flex">
                    <a href="" class="ative">Tudo</a>
                    <a href="">Negócios</a>
                    <a href="">Finanças</a>
                    <a href="">Mercado</a>
                    <a href="">Inovação</a>
                    <a href="">Podcast</a>
                </section>
            </section>
        </section>
        <section class="content newsletter-container flex row">
            <section class="newsletter col flex">
                <section class="capa flex f-center">
                <?php if ($ultimaNoticia): ?>
                    <h2 class="data"><?php echo $ultimaNoticia['DataCriacao']; ?></h2>
                    <h2 class="assunto"><?php echo $ultimaNoticia['Categoria']; ?></h2>
                    <img src="<?php echo $ultimaNoticia['ImgUrl']; ?>" alt="Imagem da notícia" class="newsletter-background">
                    <section class="titulo t-center">
                        <h1><?php echo $ultimaNoticia['Titulo']; ?></h1>
                    </section>
                </section>
                <?php else: ?>
                    <p>Não há notícias disponíveis.</p>
                <?php endif; ?>
            <?php if ($ultimaNoticia): ?>
                <section class="newsletter-content">
                    <?php  echo $ultimaNoticia['Conteudo']; ?>
                </section>
            <?php endif; ?>
            </section>
            <section class="newsletter-recomendation">
                <section class="recomendation-card-area col flex f-center">
                    <?php if ($noticias && count($noticias) > 1): ?>
                        <?php for ($i = 1; $i < count($noticias); $i++): ?>
                            <a href="noticia.php?id=<?php echo $noticias[$i]['id']; ?>" class="newsletter-recomendation-card col flex f-center">
                                <img src="<?php echo htmlspecialchars($noticias[$i]['FotoCapa']); ?>" alt="Imagem da notícia" class="newsletter-background">
                                <h2 class="assunto"><?php echo htmlspecialchars($noticias[$i]['Categoria']); ?></h2>
                                <section class="description">
                                    <h1><?php echo htmlspecialchars($noticias[$i]['Titulo']); ?></h1>
                                    <h2><?php echo mb_strimwidth(strip_tags($noticias[$i]['Conteudo']), 0, 80, '...'); ?></h2>
                                </section>
                            </a>
                        <?php endfor; ?>
                    <?php else: ?>
                        <p>Não há notícias recomendadas disponíveis.</p>
                    <?php endif; ?>
                </section>
            </section>
        </section>
    </main>


    <!-- Footer -->
    <footer class="flex col j-evenly ">

        <section class="footer-container flex row j-around content ">
            <section class="logo-container">
                <img src="./assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
            </section>
            <section class="navegacao">
                <h1>Navegação</h1>
                <ul class="flex col">
                    <li><a href="./index.php#hero" class="nav-link">Home</a></li>
                    <li><a href="./podcast.php" class="nav-link">Podcast</a></li>
                    <li><a href="./sobrenos.php" class="nav-link">Sobre nós</a></li>
                    <li><a href="#contact" class="nav-link">Contactos</a></li>
                </ul>
            </section>
            <section class="suporte">
                <h1>Suporte</h1>
                <ul>
                    <li>+244 999 999 999</li>
                    <li>+244 222 222 222</li>
                    <li>suport@maiskwanza.com</li>
                    <li></li>
                </ul>
            </section>
            <section class="newsletter-sub" id="sub">
                <h1>Newsletter</h1>
                <p>Receba as noticias directo no seu email, ou no seu whatsapp</p>
                <form action="" class="newsletter-sub-form center">
                    <input type="text" placeholder="Nome">
                    <input type="text" placeholder="Número">
                    <input type="email" placeholder="Seu email">
                    <button type="submit" class=""><ion-icon name="send"></ion-icon></button>
                </form>
            </section>
        </section>
        <section class="copy t-center">
            <p>©+Kwanza 2024, Todos os direitos reservados</p>
        </section>
    </footer>

    <!-- Script -->
    <script src="./assets/js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- Smooth Scroll -->
    <script src="./assets/js/smoothScroll/jquery.js"></script>
    <script src="./assets/js/smoothScroll/jquery.parallax.js"></script>
    <script src="./assets/js/smoothScroll/owl.carousel.min.js"></script>
    <script src="./assets/js/smoothScroll/custom.js"></script>

</body>

<script src="./assets/js/lightMode.js"></script>

</html>