<?php
require_once 'controllers/conection.php';
require_once 'components/head.php';
?>

<body>

    <?php require_once 'components/header.php' ?>

    <!-- Main Content -->
    <main class="container">

        <?php
        // Hero
        require_once 'components/hero.php';

        // Podcast
        require_once 'components/podcast.php';

        // Sobre nós
        require_once 'components/about.php';

        // Newsletter
        require_once 'components/newsletter.php';

        // Contactos
        require_once 'components/contact.php';
        ?>
    </main>

    <?php
    require_once 'components/footer.php';
    require_once 'components/scripts.php';
    ?>

</body>

</html>