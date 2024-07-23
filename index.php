<?php 
    require_once 'controllers/conection.php'; 
    require_once 'components\head.php';
?>

<body>

    <?php require_once 'components\header.php' ?>

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
                <?php foreach ($videos['items'] as $video) :
                    if ($video['snippet']['title'] != 'Private video') {
                ?>
                        <section>
                            <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" class="Podcast-Card" target="_blank">
                                <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="podcast-img">
                            </a>
                        </section>
                <?php }
                endforeach; ?>
            </section>

            <section class="podcast-btn flex f-center f-width">
                <a href="pages/podcast.html" class="newsletter-button">Ver mais</a>
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
                <a class="newsletter-card">
                    <h2 class="assunto">Economia</h2>
                    <section class="description">
                        <h1>Os Bancos mais lucrativos em 2023</h1>
                        <h2>Lorem ipsum dolor sit amet consectetur...</h2>
                    </section>
                </a>
                <a class="newsletter-card">
                    <h2 class="assunto">Startups</h2>
                    <section class="description">
                        <h1>Conheça a startup vencedora do centro de ivest...</h1>
                        <h2>A xtal é uma startup de Lorem ipsum dolor sit amet consectetur </h2>
                    </section>
                </a>
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

    <?php
        require_once 'components\footer.php';
        require_once 'components\scripts.php';
    ?>

</body>

</html>