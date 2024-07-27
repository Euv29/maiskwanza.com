<?php
//require_once 'controllers/conection.php'; 
require_once __DIR__ . '/controllers/conection.php';

include './config/conexao.php';

$sql = "SELECT id_noticia, Categoria, Titulo, ImgUrl FROM Newsletter_tb ORDER BY DataCriacao DESC LIMIT 2";
$result = $conexao->query($sql);

$noticias = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $noticias[] = $row;
    }
} else {
    $noticias = null;
}

$conexao->close();

?>

<!DOCTYPE html>

<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">

    <title> +Kwanza | Podcast</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/objects.css">
    <link rel="stylesheet" href="./assets/css/style.css">
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
                <li><a href="#home" class="page-scroll nav-link" id="btn-home-on">Home</a></li>
                <li><a href="./podcast.php" class="page-scroll nav-link">Podcast</a></li>
                <li><a href="#about" class="page-scroll nav-link">Sobre nós</a></li>
                <li><a href="#contact" class="page-scroll nav-link">Contactos</a></li>
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
                        <li><a href="#home" class="page-scroll nav-link" id="btn-home-on">Home</a></li>
                        <li><a href="pages/podcast.php" class="page-scroll nav-link">Podcast</a></li>
                        <li><a href="#about" class="page-scroll nav-link">Sobre nós</a></li>
                        <li><a href="#contact" class="page-scroll nav-link">Contactos</a></li>
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
        <label class="switch hide-mobile">
            <input type="checkbox" id="darkModeToggle">
            <span class="icon-s sun">
                <ion-icon class="icon" name="moon"></ion-icon>
            </span>
            <span class="icon-s moon">
                <ion-icon class="icon" name="sunny"></ion-icon>
            </span>
        </label>

        <a href="./newsletter.php" class="hide-mobile newsletter-button">Newsletter</a>


    </header>

    <!-- Main Content -->
    <main class="container">

        <!-- Hero Section -->
        <section id="home" class="hero flex j-between f-center f-width">
            <section class="hero-text flex col j-center">
                <section class="text">
                    <h1>Informação de qualidade, relevância e valor para o público angolano. Inscreva-se no Youtube.</h1>
                </section>
                <section class="flex t-center">
                    <a href="https://www.youtube.com/@maiskwanza" class="newsletter-button" target="_blank">Inscrever-se</a>
                </section>
            </section>

            <section class="qr-container over-hidden hide-mobile">
                <img src="./assets/img/QR code.png" alt="qr" class="full">
            </section>
        </section>

        <!-- PodCasts -->
        <section id="podcast" class="Podcasts content">
            <section class="title">
                <h1>Podcasts</h1>
                <h2>Últimos episódios</h2>
            </section>

            <section class="Card-Area flex scaleup">
                <?php foreach ($videoshome as $video) : ?>
                    <section>
                        <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" class="Podcast-Card" target="_blank">
                            <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="podcast-img">
                        </a>
                    </section>
                <?php endforeach; ?>

            </section>

            <section class="podcast-btn flex t-center f-center">
                <a href="./podcast.php" class="newsletter-button">Mais vídeos</a>
            </section>
        </section>

        <!-- "Sobre nós"-->

        <section id="about" class="sobrenos flex col a-center" id="about_us">
            <section class="Podcast-info flex a-center col t-center f-width">
                <section class="logo-container scaleup">
                    <img src="./assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
                </section>
                <p class="text-sobrenos scaleup">Where can I get some?
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in </p>

                <section class="social-links  flex row scaleup">
                    <a href="https://www.youtube.com/@maiskwanza" class="social-link-card youtube" target="_blank">
                        <img src="./assets/img/icon/logo-youtube.svg" alt="" class="icon">
                        <h2 class="hide-mobile">Youtube</h2>
                    </a>
                    <a href="https://www.instagram.com/mais_kwanza/" class="social-link-card instagram" target="_blank">
                        <img src="./assets/img/icon/logo-instagram.svg" alt="" class="icon">
                        <h2 class="hide-mobile">Instagram </h2>
                    </a>
                    <a href="https://open.spotify.com/user/31uoo2l4ln3wtnaie3bsoetfm5hq?si=7cf32883TWikedHt4gnNoA" class="social-link-card spotify" target="_blank">
                        <img src="./assets/img/icon/logo-spotify.svg" alt="" class="icon">
                        <h2 class="hide-mobile">Spotify</h2>
                    </a>
                </section>
                <a href="./sobrenos.php" class="newsletter-button scaleup">
                    <h2>Saber mais</h2>
                </a>
            </section>
            <section class="Podcast-hosts flex j-around a-center">
                <a href="https://www.instagram.com/nuno_baio/" class="host-card sm-Card" target="_blank">
                    <section class="description">
                        <h1>Nuno Baio</h1>
                        <h2>Host</h2>
                    </section>
                </a>
                <a href="https://www.instagram.com/vaneza_vonhaffe/" class="host-card sm-Card" target="_blank">
                    <section class="description">
                        <h1>Vaneza Von-Haffe</h1>
                        <h2>Co-Host</h2>
                    </section>
                </a>
            </section>
        </section>

        <!-- Newsletter -->
        <section class="newsletter-area content flex col a-center">
        <section class="title">
            <h1>Newsletter</h1>
            <h2>Saiba o que está a acontecer no mundo dos negócios</h2>
        </section>
        <section class="newsletter-card-area flex row scaleup">
            <?php if ($noticias && count($noticias) > 0): ?>
                <?php foreach ($noticias as $noticia): ?>
                    <a href="newsletter.php?id=<?php echo $noticia['id_noticia']; ?>" class="newsletter-card">
                        <h2 class="assunto"><?php echo htmlspecialchars($noticia['Categoria']); ?></h2>
                        <section class="description">
                            <h1><?php echo htmlspecialchars($noticia['Titulo']); ?></h1>
                            <h2><?php echo mb_strimwidth(strip_tags($noticia['Conteudo']), 0, 80, '...'); ?></h2>
                        </section>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Não há notícias disponíveis.</p>
            <?php endif; ?>
        </section>
        <a href="./newsletter.php" class="newsletter-button scaleup">
            <h2>Ver mais</h2>
        </a>
        </section>

        <!-- Contactos -->
        <section id="contact" class="contacts content">
            <section class="title">
                <h1>Contactos</h1>
                <h2>Saiba como nos contactar</h2>
            </section>
            <section class="contacts-area flex row j-between a-center ">
                <section class="contacts-links flex col">
                    <a href="https://www.youtube.com/@maiskwanza" class="social-link-card youtube" target="_blank">
                        <img src="./assets/img/icon/logo-youtube.svg" alt="" class="icon">
                        <h2 class="hide-mobile">Youtube</h2>
                    </a>
                    <a href="https://www.instagram.com/mais_kwanza/" class="social-link-card instagram" target="_blank">
                        <img src="./assets/img/icon/logo-instagram.svg" alt="" class="icon">
                        <h2 class="hide-mobile">Instagram </h2>
                    </a>
                    <a href="https://open.spotify.com/user/31uoo2l4ln3wtnaie3bsoetfm5hq?si=7cf32883TWikedHt4gnNoA" class="social-link-card spotify" target="_blank">
                        <img src="./assets/img/icon/logo-spotify.svg" alt="" class="icon">
                        <h2 class="hide-mobile">Spotify</h2>
                    </a>
                </section>
                <img src="assets/img/logo.svg" alt="" srcset="" class="contact-logo">
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
                    <li><a href="#hero" class="nav-link">Home</a></li>
                    <li><a href="#podcasts" class="nav-link">Podcast</a></li>
                    <li><a href="#about-us" class="nav-link">Sobre nós</a></li>
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
                <form action="./config/newsletterSub.php" method="post" class="newsletter-sub-form center">
                    <input type="text" placeholder="Nome" name="nome">
                    <input type="text" placeholder="Número" name="numero">
                    <input type="email" placeholder="Seu email" name="email">
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