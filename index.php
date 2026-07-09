<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La Casa Argentina - Alamos Sonora Mexico</title>
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MJP5LLRK');</script>
        <!-- End Google Tag Manager -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap-icons.css"/>
        <link rel="stylesheet" href="assets/css/lacasa-theme.css"/>
        <link rel="stylesheet" href="assets/css/index-style.css"/>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script> 
        <script src="assets/js/main.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="page-wrapper">
            <?php
                include 'containers/header.html';
                include 'containers/hero.html';
                include 'containers/cortes.html';
                include 'containers/nosotros.html';
                include 'containers/menu.html';
                include 'containers/eventos.html';
                include 'containers/reserva.html';
                //include 'containers/social.html';
                include 'containers/footer.html';
            ?>
        </div>
        <script src="assets/js/footer.js" type="text/javascript"></script>
    </body>
</html>