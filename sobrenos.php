<?php require_once 'controllers/conection.php'; ?>

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
                <li><a href="#about" class="page-scroll nav-link">Sobre nós</a></li>
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
                        <li><a href="#about" class="page-scroll nav-link">Sobre nós</a></li>
                        <li><a href="./index.php#contact" class="page-scroll nav-link">Contactos</a></li>
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

        <a href="" class="hide-mobile newsletter-button">Newsletter</a>

    </header>


    <!-- Main Content -->
    <!-- Main Content -->
    <main class="container">
        <section class="title">
            <h1>Sobre nós</h1>
            <h2>Saiba mais sobre o +Kwanza</h2>
        </section>
        <section class="Podcast-info flex a-center col t-center f-width">
            <section class="logo-container">
                <img src="./assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
            </section>
            <p class="text-sobrenos">Where can I get some?
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in </p>
        </section>
        <section class="info-container content flex row">
            <section class="aboutustext">
                <p class="scaleup">No +KWANZA, nossa missão é explorar e desvendar os meandros da economia, finanças, negócios e inovação, trazendo conteúdos de alta qualidade e relevância para o público angolano.</p>
                <h1 class="scaleup">Origem - como tudo começou: </h1>
                <p class="scaleup">O +KWANZA nasceu da vontade de oferecer informação valiosa e insights profundos sobre temas que impactam diretamente o desenvolvimento e crescimento do nosso país. Fundado em 2024, o podcast surgiu como resposta a um mercado digital muitas vezes saturado por conteúdos superficiais e desatualizados.
                    Percebemos uma lacuna significativa no fornecimento de conteúdo que realmente atendesse às necessidades e interesses do público angolano, e decidimos preencher essa lacuna com um conteúdo que seja útil, relevante e acessível.</p>
                <h1 class="scaleup">Missão: </h1>
                <p class="scaleup">Nossa missão é ser a principal fonte de conhecimento e inspiração para todos aqueles que buscam entender melhor o mundo dos negócios e da economia. Através de discussões aprofundadas, entrevistas com especialistas e análises de tendências, o +KWANZA se propõe a ajudar nossos ouvintes a gerar
                    "Mais Kwanzas" em suas vidas e negócios.
                    Acreditamos que, ao disseminar informação de qualidade, podemos capacitar nossos ouvintes e leitores a tomar decisões mais informadas e estratégicas.</p>
                <h1 class="scaleup">Visão: </h1>
                <p class="scaleup">Acreditamos que informação de qualidade é a chave para transformar a sociedade.
                    Nossa visão é ser referência em conteúdos sobre economia, finanças e inovação em Angola, promovendo um mercado mais informado e preparado para enfrentar os desafios do futuro.
                    Queremos ser reconhecidos pela excelência e pela capacidade de influenciar positivamente nossos ouvintes, ajudando a moldar um futuro próspero para Angola.</p>
                <h1>Valores: </h1>
                <p class="scaleup">Curabitur sollicitudin et leo vel vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet scelerisque lorem. Donec vitae luctus elit, non tempor elit. Quisque interdum massa ut aliquam tempus. Donec interdum lacus tempus ipsum dapibus ullamcorper. Nulla cursus massa risus, a sagittis lorem lacinia non. Ut semper mi justo, ut laoreet mi facilisis nec. Aenean volutpat tempus urna, quis malesuada ante tempor sit amet. Nulla dapibus ligula non erat tempus venenatis sed nec diam. Ut nec pretium est, non condimentum metus.</p>
            </section>
            <section class="hosts-card-area flex col a-center ">

                <div class="host-card sm-Card scaleup">
                    <section class="description">
                        <h1>Nuno Baio</h1>
                        <h2>Host</h2>
                    </section>
                    <p>Empreendedor | Criador de Conteúdos</p>
                    <section class="host-social-links flex">
                        <a href="https://www.linkedin.com/in/nuno-baio-17a446b1/" target="_blank"><img src="./assets/img/icon/linkedin_icon.svg" alt=""></a>
                        <a href="https://www.instagram.com/nuno_baio/" target="_blank"><img src="./assets/img/icon/instagram_icon.svg" alt=""></a>
                    </section>
                </div>

                <div class="host-card sm-Card scaleup">
                    <section class="description">
                        <h1>Vaneza Von-Haffe</h1>
                        <h2>Co-Host</h2>
                    </section>
                    <p>Empreendedora | Investidora</p>
                    <section class="host-social-links flex">
                        <a href="https://www.linkedin.com/in/vaneza-von-haffe-88836b131/" target="_blank"><img src="./assets/img/icon/linkedin_icon.svg" alt=""></a>
                        <a href="https://www.instagram.com/vaneza_vonhaffe/" target="_blank"><img src="./assets/img/icon/instagram_icon.svg" alt=""></a>
                    </section>
                </div>
            </section>
        </section>
        <section class="contact-container content scaleup">
            <section class="title">
                <h1>Junte-se a nós</h1>
            </section>
            <p>Se você compartilha da nossa paixão por conhecimento e inovação, convidamos você a seguir nossas redes sociais, assinar nossa newsletter e, claro, ouvir nossos episódios mais recentes.</p>
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
            <section class="newsletter-sub">
                <h1>Newsletter</h1>
                <p>Receba as noticias directo no seu email</p>
                <form action="" class="newsletter-sub-form center">
                    <input type="email" placeholder="Seu email">
                    <button type="submit" class=""><img src="assets/img/icon/send.svg" alt="" srcset=""></button>
                </form>
            </section>
        </section>
        <section class="copy t-center">
            <p>©+Kwanza 2024, Todos os direitos reservados</p>
        </section>
    </footer>

    <!-- Script -->
    <script src="./assets/js/index.js"></script>

    <!-- Smooth Scroll -->
    <script src="./assets/js/smoothScroll/jquery.js"></script>
    <script src="./assets/js/smoothScroll/jquery.parallax.js"></script>
    <script src="./assets/js/smoothScroll/owl.carousel.min.js"></script>
    <script src="./assets/js/smoothScroll/custom.js"></script>

</body>

<script>
    // Darck mode
    const toggle = document.getElementById('darkModeToggle');
    const body = document.body;

    toggle.addEventListener('change', () => {
        body.classList.toggle('dark-mode', toggle.checked);
    });
</script>

</html>