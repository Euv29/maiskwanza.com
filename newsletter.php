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

        <a href="" class="hide-mobile newsletter-button">Newsletter</a>

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
                    <h2 class="data">21/07/2024</h2>
                    <h2 class="assunto">Finanças</h2>
                    <img src="./assets/img/primary.png" alt="" class="newsletter-background">
                    <section class="titulo t-center">
                        <h1>Os Bancos mais lucrativos em Angola em 2024</h1>
                        <p>Bancos Angolanos Registram Lucros Recordes em 2024</p>
                    </section>
                </section>

                <section class="newsletter-content">
                    <p>
                        Luanda, 20 de julho de 2024 – Em um cenário econômico desafiador, os bancos angolanos se destacaram ao registrar
                        lucros recordes no primeiro semestre de 2024. A estabilidade econômica, as reformas no setor financeiro e o aumento
                        da confiança dos investidores foram fatores cruciais para esse desempenho excepcional.</p>

                    <h2>Banco Nacional de Angola Lidera o Ranking</h2>
                    <p> O Banco Nacional de Angola (BNA) lidera a lista dos bancos mais lucrativos, reportando um lucro líquido de 150 bilhões
                        de kwanzas no primeiro semestre de 2024. Este resultado representa um aumento de 25% em relação ao mesmo período do ano anterior.
                        O crescimento foi impulsionado pela expansão das operações de crédito e pela melhoria na gestão de ativos.</p>

                    <h2>Banco de Poupança e Crédito (BPC) Apresenta Resultados Sólidos</h2>
                    <p>O Banco de Poupança e Crédito (BPC) também registrou um desempenho impressionante, com um lucro líquido de 120 bilhões de kwanzas,
                        um aumento de 20% em comparação com 2023. A digitalização dos serviços bancários e a implementação de novas tecnologias de pagamento
                        foram fundamentais para este crescimento.</p>

                    <h2>Banco de Fomento Angola (BFA) Continua a Crescer</h2>
                    <p>O Banco de Fomento Angola (BFA) manteve sua trajetória de crescimento, alcançando um lucro líquido de 110 bilhões de kwanzas.
                        A instituição se destacou pela diversificação de seus produtos financeiros e pela forte presença no mercado de câmbio.</p>

                    <h2>Reformas e Estabilidade Econômica Impulsionam o Setor</h2>
                    <p>Analistas atribuem esses resultados positivos às recentes reformas econômicas implementadas pelo governo angolano,
                        que visam melhorar o ambiente de negócios e atrair investimentos estrangeiros.
                        A estabilidade da taxa de câmbio e a inflação controlada também contribuíram para a confiança dos investidores e para o crescimento do setor bancário.</p>

                    <h2>Perspectivas para o Futuro</h2>
                    <p>Olhando para o futuro, os bancos angolanos estão otimistas. A expectativa é de que o setor continue a crescer, impulsionado pela recuperação econômica global e pelo aumento da demanda
                        por serviços financeiros modernos. A digitalização e a inovação serão fatores chave para manter o crescimento e a competitividade no mercado.</p>

                    <h2>Comentários de Especialistas</h2>
                    <p><em>“Os resultados dos bancos angolanos em 2024 são um reflexo direto das reformas econômicas e da melhoria do ambiente de negócios no país. A continuidade dessas políticas será essencial para sustentar o crescimento do setor financeiro nos próximos anos”</em>, afirmou João Mendes, economista do Instituto de Pesquisa Econômica de Angola.</p>
                    <br>
                    <p><em>“Os bancos que investiram em tecnologia e inovação estão colhendo os frutos agora. A digitalização não é apenas uma tendência, mas uma necessidade para permanecer competitivo”</em>, comentou Maria Silva, especialista em Finanças do Banco Mundial.</p>
                </section>
            </section>
            <section class="newsletter-recomendation">
                <section class="recomendation-card-area col flex f-center">

                    <a href="" class="newsletter-recomendation-card col flex f-center">
                        <img src="./assets/img/micro.jpg" alt="" class="newsletter-background">
                        <h2 class="assunto">Startups</h2>
                        <section class="description">
                            <h1>Conheça a startup vencedora do centro de ivest...</h1>
                            <h2>A xtal é uma startup de Lorem ipsum dolor sit amet consectetur </h2>
                        </section>

                    </a>

                    <a class="newsletter-recomendation-card col flex f-center">
                        <img src="./assets/img/micro.jpg" alt="" class="newsletter-background">
                        <h2 class="assunto">Startups</h2>
                        <section class="description">
                            <h1>Conheça a startup vencedora do centro de ivest...</h1>
                            <h2>A xtal é uma startup de Lorem ipsum dolor sit amet consectetur </h2>
                        </section>
                    </a>
                    <a class="newsletter-recomendation-card col flex f-center">
                        <img src="./assets/img/micro.jpg" alt="" class="newsletter-background">
                        <h2 class="assunto">Startups</h2>
                        <section class="description">
                            <h1>Conheça a startup vencedora do centro de ivest...</h1>
                            <h2>A xtal é uma startup de Lorem ipsum dolor sit amet consectetur </h2>
                        </section>
                    </a>
                    <a class="newsletter-recomendation-card col flex f-center">
                        <img src="./assets/img/micro.jpg" alt="" class="newsletter-background">
                        <h2 class="assunto">Startups</h2>
                        <section class="description">
                            <h1>Conheça a startup vencedora do centro de ivest...</h1>
                            <h2>A xtal é uma startup de Lorem ipsum dolor sit amet consectetur </h2>
                        </section>
                    </a>
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
    const toggleMb = document.getElementById('darkModeToggle-mobile');
    const body = document.body;

    toggle.addEventListener('change', () => {
        body.classList.toggle('dark-mode', toggle.checked);
    });

    toggleMb.addEventListener('change', () => {
        body.classList.toggle('dark-mode', toggleMb.checked);
    });
</script>

</html>