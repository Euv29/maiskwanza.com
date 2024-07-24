<?php
//require_once '../controllers/conection.php';
require_once __DIR__ . '/../controllers/conection.php';
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

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/objects.css">
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/midiaQ.css">
</head>

<!-- Coloca em um CSS -->
<style>
    .off {
        display:none;
    }
</style>

<body>

    <!-- Header -->
    <header class="flex a-center j-between normal-font small-sz">
        <section class="logo-container">
            <img src="../assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
        </section>

        <!-- Destop Navgation -->
        <nav class="menu-desktop hide-mobile flex row j-around a-center">

            <ul class="flex row">
                <li><a href="../index.php" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link" id="btn-podcast-on">Podcast</a></li>
                <li><a href="../index.php/#about-us" class="nav-link">Sobre nós</a></li>
                <li><a href="#contact" class="nav-link">Contactos</a></li>
            </ul>

        </nav>

        <!-- Mobile Navgation -->
        <section class="hide-desktop">
            <nav class="navbar menu-mobile">
                <li>
                    <a href="#" class="flex row" id="menu-icon">
                        <img class="icon-menu" src="../assets/img/icon/menu.webp" alt="menu">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="nav-link">Home</a></li>
                        <li><a href="" class="nav-link">Podcast</a></li>
                        <li><a href="" class="nav-link">Sobre nós</a></li>
                        <li><a href="" class="nav-link">Contactos</a></li>
                    </ul>
                </li>
            </nav>
        </section>

        <a href="" class="hide-mobile newsletter-button">Newsletter</a>

    </header>

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


                    <!-- Faz um JS tipo o do darkmode para Actualizar e activar/desactivar os filtros e não se perder tempo na renderização -->



                    <option id="recente">Mais recentes</option>
                    <option id="popular">Popularidade</option>
                    <option id="antigo">Mais antigos</option>
                </select>
                <section class="views flex row">
                    <a class="ative " id="list-view"><ion-icon name="list"></ion-icon></a>
                    <a class="" id="grid-view"><ion-icon name="grid"></ion-icon></a>
                </section>
            </section>
        </section>
        <section class="view-main content flex  col a-center">

            <section class="view-wrap list-view" id="view-wrap">
                <!-- Apresentar pelo mais recente -->
                <section class="mais-recente">
                    <?php foreach ($videos as $video) : ?>
                        <section class="view-item">
                            <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="thumbnail">
                            <section class="view-content flex col j-between">
                                <h1><?php echo $video['snippet']['title'] ?></h1>
                                <a href="" class="canallink">+Kwanza</a>
                                <p><?php echo $video['snippet']['description'] ?></p>
                                <p></p>
                                <h2><?php echo date("d-m-Y", strtotime($video['snippet']['publishedAt'])); ?> | <?php echo showViews($video['snippet']['resourceId']['videoId'], $videosStat); ?> visualizações</h2>
                            </section>
                            <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" target="_blank" class="play-icon"><img src="../assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                        </section>
                    <?php endforeach; ?>
                </section>

                <!-- Apresentar por views -->
                <section class="popularidade off">
                    <?php foreach ($videosStat as $video) : ?>
                            <section class="view-item">
                                <img src="<?php echo $video['conteudo']['thumbnails']['standard']['url'] ?>" alt="" class="thumbnail">
                                <section class="view-content flex col j-between">
                                    <h1><?php echo $video['conteudo']['title'] ?></h1>
                                    <a href="" class="canallink">+Kwanza</a>
                                    <p><?php echo $video['conteudo']['description'] ?></p>
                                    <p></p>
                                    <h2><?php echo date("d-m-Y", strtotime($video['conteudo']['publishedAt'])); ?> | <?php echo showViews($video['conteudo']['resourceId']['videoId'], $videosStat); ?> visualizações</h2>
                                </section>
                                <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['conteudo']['resourceId']['videoId'] ?>" target="_blank" class="play-icon"><img src="../assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                            </section>
                        <?php endforeach; ?>
                </section>


                <!-- Apresentar pelo mais antigo -->
                <section class="mais-antigo off">
                    <?php foreach ($oldestVideos as $video) : ?>
                        <section class="view-item">
                            <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="thumbnail">
                            <section class="view-content flex col j-between">
                                <h1><?php echo $video['snippet']['title'] ?></h1>
                                <a href="" class="canallink">+Kwanza</a>
                                <p><?php echo $video['snippet']['description'] ?></p>
                                <p></p>
                                <h2><?php echo date("d-m-Y", strtotime($video['snippet']['publishedAt'])); ?> | <?php echo showViews($video['snippet']['resourceId']['videoId'], $videosStat); ?> visualizações</h2>
                            </section>
                            <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" target="_blank" class="play-icon"><img src="../assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                        </section>
                    <?php endforeach; ?>
                </section>
            </section>

            <!-- <a href="" class="hide-mobile newsletter-button">Carregar mais</a> -->
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

    <script>
        let selectAntigo = document.getElementById("antigo");
        let selectPopular = document.getElementById("popular");
        let selectRecente = document.getElementById("recente");

        selectAntigo.onclick = function() {
            let popular = document.getElementsByClassName('popularidade').classList.add('off');
            let recente = document.getElementsByClassName('recente').classList.add('off');
            let antigo = document.getElementsByClassName('mais-antigo').classList.remove('off');
        }

        selectPopular.onclick = function() {
            document.getElementsByClassName('popularidade').classList.remove('off');
            document.getElementsByClassName('recente').classList.add('off');
            document.getElementsByClassName('mais-antigo').classList.add('off');
        }

        selectRecente.onclick = function() {
            let popular = document.getElementsByClassName('popularidade').classList.add('off');
            let recente = document.getElementsByClassName('recente').classList.remove('off');
            let antigo = document.getElementsByClassName('mais-antigo').classList.add('off');
        }

    </script>
</body>

</html>