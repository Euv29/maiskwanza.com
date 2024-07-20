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

    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/objects.css">
    <link rel="stylesheet" href="./assets/css/root.css">
    <link rel="stylesheet" href="./assets/css/midiaQ.css">
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
                <li><a href="#home" class="page-scroll nav-link">Home</a></li>
                <li><a href="#podcast" class="page-scroll nav-link">Podcast</a></li>
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
                        <li><a href="#home" class="page-scroll nav-link">Home</a></li>
                        <li><a href="#podcast" class="page-scroll nav-link">Podcast</a></li>
                        <li><a href="#about" class="page-scroll nav-link">Sobre nós</a></li>
                        <li><a href="#contact" class="page-scroll nav-link">Contactos</a></li>
                    </ul>
                </li>
            </nav>
        </section>

        <a href="" class="hide-mobile newsletter-button">Newsletter</a>

    </header>


    <!-- Main Content -->
    <main class="container">
        <section class="title">
            <h1>Sobre nós</h1>
            <h2>Saiba mais sobre o +Kwanza</h2>
        </section>
        <section class="Podcast-info flex a-center col t-center f-width">
            <section class="logo-container">
                <img src="../assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
            </section>
            <p class="text-sobrenos">Where can I get some?
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in </p>
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

</html>