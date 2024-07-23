<?php
require_once '../controllers/conection.php';
require_once '../components/head.php';
?>

<body>

    <?php require_once '/../components/header.php' ?>

    <span class="modeswitcher" id="colorMode"><ion-icon name="sunny"></ion-icon></span>
    <!-- Main Content -->
    <main class="container">
        <section class="newsletter-hero flex col">
            <section class="title">
                <h1>Podcast</h1>
                <h2>Veja os ultimos episódios</h2>
            </section>
            <section class="order-views-container container flex row j-between">
                <select name="order" id="order" class="order">
                    <option value="">Ordenar por</option>
                    <option value="">Mais recentes</option>
                    <option value="">Popularidade</option>
                    <option value="">Mais antigos</option>
                </select>
                <section class="views flex row">
                    <a class="ative " id="list-view"><ion-icon name="list"></ion-icon></a>
                    <a class="" id="grid-view"><ion-icon name="grid"></ion-icon></a>
                </section>
            </section>
        </section>
        <section class="view-main content flex  col a-center">

            <section class="view-wrap list-view" id="view-wrap">
                <section class="view-item">
                    <img src="../assets/img/PodCastSection/sddefault 1.png" alt="" class="thumbnail">
                    <section class="view-content flex col j-between">
                        <h1>O IMPACTO DA AGT NA ECONOMIA com ANISIO SAMANDJATA</h1>
                        <a href="" class="canallink">+Kwanza</a>
                        <p>Anísio Samandjata é um jovem que sonha com uma Angola melhor, ele é Mestre em Ciências Jurídico-Políticas,
                            Chefe do Departamento dos serviços Fiscais na Administração Geral
                            Tributaria e esteve no @maiskwanza Podcast onde falamos sobre temas diversos ligados a economia Angolana...</p>
                        <h2>19 de jul. de 2024 | 1.176 visualizações</h2>
                    </section>
                    <a href="" class="play-icon"><img src="../assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                </section>
                <section class="view-item">
                    <img src="../assets/img/PodCastSection/sddefault 1.png" alt="" class="thumbnail">
                    <section class="view-content flex col j-between">
                        <h1>O IMPACTO DA AGT NA ECONOMIA com ANISIO SAMANDJATA</h1>
                        <a href="" class="canallink">+Kwanza</a>
                        <p>Anísio Samandjata é um jovem que sonha com uma Angola melhor, ele é Mestre em Ciências Jurídico-Políticas,
                            Chefe do Departamento dos serviços Fiscais na Administração Geral
                            Tributaria e esteve no @maiskwanza Podcast onde falamos sobre temas diversos ligados a economia Angolana...</p>
                        <h2>19 de jul. de 2024 | 1.176 visualizações</h2>
                    </section>
                    <a href="" class="play-icon"><img src="../assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                </section>
                <section class="view-item">
                    <img src="../assets/img/PodCastSection/sddefault 1.png" alt="" class="thumbnail">
                    <section class="view-content flex col j-between">
                        <h1>O IMPACTO DA AGT NA ECONOMIA com ANISIO SAMANDJATA</h1>
                        <a href="" class="canallink">+Kwanza</a>
                        <p>Anísio Samandjata é um jovem que sonha com uma Angola melhor, ele é Mestre em Ciências Jurídico-Políticas,
                            Chefe do Departamento dos serviços Fiscais na Administração Geral
                            Tributaria e esteve no @maiskwanza Podcast onde falamos sobre temas diversos ligados a economia Angolana...</p>
                        <h2>19 de jul. de 2024 | 1.176 visualizações</h2>
                    </section>
                    <a href="" class="play-icon"><img src="../assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                </section>
                <section class="view-item">
                    <img src="../assets/img/PodCastSection/sddefault 1.png" alt="" class="thumbnail">
                    <section class="view-content flex col j-between">
                        <h1>O IMPACTO DA AGT NA ECONOMIA com ANISIO SAMANDJATA</h1>
                        <a href="" class="canallink">+Kwanza</a>
                        <p>Anísio Samandjata é um jovem que sonha com uma Angola melhor, ele é Mestre em Ciências Jurídico-Políticas,
                            Chefe do Departamento dos serviços Fiscais na Administração Geral
                            Tributaria e esteve no @maiskwanza Podcast onde falamos sobre temas diversos ligados a economia Angolana...</p>
                        <h2>19 de jul. de 2024 | 1.176 visualizações</h2>
                    </section>
                    <a href="" class="play-icon"><img src="../assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                </section>
            </section>

            <a href="" class="hide-mobile newsletter-button">Carregar mais</a>
        </section>
    </main>

    <!-- Footer -->
    <footer class="flex col content">
        <section class="test"></section>
        <section class="footer-container flex row j-around a-center">
            <section class="logo-container">
                <img src="../assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
            </section>
            <section class="navegacao">
                <h1>Navegaçao</h1>
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
                <p>Receba as noticias direto no seu email</p>
                <form action="" class="newsletter-sub-form">
                    <input type="email" placeholder="Seu email">
                    <button type="submit" class=""><img src="../assets/img/icon/send.svg" alt="" srcset=""></button>
                </form>
            </section>
        </section>
        <section class="t-center">
            <p>©+Kwanza All directs reserved</p>
        </section>
    </footer>

    <!-- Script -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/switchView.js"></script>
    <script src="../assets/js/lightMode.js"></script>
</body>

</html>