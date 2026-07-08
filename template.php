<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Casa Argentina — Página Nueva</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Unified Theme -->
    <link rel="stylesheet" href="assets/css/lacasa-theme.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Raleway:wght@300;400;500;700&display=swap">
</head>

<body>
    <!-- HEADER (Optional) -->
    <header class="lacasa-section-dark py-3 text-center">
        <h1 class="tall-slanted-text">La Casa Argentina</h1>
    </header>

    <!-- HERO / TOP SECTION -->
    <section class="lacasa-section" style="background-image:url('assets/images/lacasa-argentina-hero-background-new.png')">
        <div class="container text-center">
            <h2 class="tall-slanted-text mb-3">Título de la Página</h2>

            <div class="lacasa-divider">
                <div class="lacasa-divider-left"><div></div></div>
                <div class="lacasa-divider-center">
                    <img src="assets/images/lacasa-nosotros-pretty-divider.png">
                </div>
                <div class="lacasa-divider-right"><div></div></div>
            </div>

            <p class="lead mt-3">
                Subtítulo o descripción introductoria para esta nueva página.
            </p>

            <div class="lacasa-btn-outside mt-4">
                <div class="lacasa-btn-inside uppercase">
                    Acción Principal
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT SECTION TEMPLATE -->
    <section class="lacasa-section" style="background-image:url('assets/images/lacasa-argentina-cortes-background.png')">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <h3 class="tall-slanted-text">Título de Sección</h3>

                    <div class="lacasa-divider">
                        <div class="lacasa-divider-left"><div></div></div>
                        <div class="lacasa-divider-center">
                            <img src="assets/images/lacasa-nosotros-pretty-divider.png">
                        </div>
                        <div class="lacasa-divider-right"><div></div></div>
                    </div>

                    <p class="mt-3">
                        Texto descriptivo para esta sección. Puedes duplicar este bloque para crear tantas secciones como necesites.
                    </p>

                    <div class="lacasa-btn-outside mt-4">
                        <div class="lacasa-btn-inside uppercase">
                            Botón de Acción
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <img src="assets/images/lacasa-argentina-photo.png" class="img-fluid rounded shadow">
                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <section id="footer-section">
        <footer class="text-center py-3">
            <div class="footer-wrapper container">

                <div class="row footer-container">

                    <!-- INFO -->
                    <div class="col-lg-4 col-12 footer-info mb-4 mb-lg-0">
                        <span class="title">Ubicación:</span><br>
                        Profra. Hortencia Grajeda S/N<br>
                        Alamos, Sonora, Mexico<br>
                        <span class="title">Teléfono:</span><br>
                        (647) 428 1305
                    </div>

                    <!-- LINKS -->
                    <div class="col-lg-4 col-12 footer-links mb-4 mb-lg-0">
                        <div class="footer-links-title">Enlaces del sitio</div>
                        <div><a href="#cortes-section">Cortes</a></div>
                        <div><a href="#nosotros-section">Nosotros</a></div>
                        <div><a href="#menu-section">Menú</a></div>
                        <div><a href="#eventos-section">Eventos</a></div>
                        <div><a href="#reserva-section">Reservar</a></div>
                    </div>

                    <!-- SOCIAL -->
                    <div class="col-lg-4 col-12 footer-social">
                        Síguenos en las redes sociales
                        <div class="footer-social-icon-wrapper">
                            <div class="instagram">
                                <a href="https://www.instagram.com/la_casaargentina/" target="_blank">
                                    <svg aria-label="Instagram" fill="currentColor" height="36" role="img"
                                         viewBox="0 0 24 24" width="36">
                                        <path d="M12 2.982c2.937 0 3.285.011 4.445.064..."></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="facebook">
                                <a href="https://www.facebook.com/restaurante.la.casa.argentina.alamos.sonora" target="_blank">
                                    <svg viewBox="0 0 36 36" fill="currentColor" height="36" width="36">
                                        <path d="M20.181 35.87C29.094 34.791 36 27.202..."></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="x">
                                <a href="https://x.com/istataco" target="_blank">
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="36" height="36">
                                        <path d="M21.742 21.75l-7.563-11.179 7.056-8.321..."></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer-copyright mt-4">
                    © <span id="copyright-year"></span> La Casa Argentina. Todos los derechos reservados.<br>
                    Site created by <a href="mailto:toxicknightmare@outlook.com" style="text-decoration:underline">ToxicKaluchi</a>
                </div>

            </div>
        </footer>
    </section>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Auto-year -->
    <script>
        document.getElementById('copyright-year').textContent = new Date().getFullYear();
    </script>

</body>
</html>
