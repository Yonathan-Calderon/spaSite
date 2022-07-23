<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Sito Web Spa en Casa</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">SPA<span class="nav__logo__color">EN</span>CASA</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Inicio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Acerca de nosotros</a>
                        </li>
                        <li class="nav__item">
                            <a href="#discover" class="nav__link">Tratamientos</a>
                        </li>
                        <li class="nav__item">
                            <a href="#place" class="nav__link">Servicios</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contacto</a>
                        </li>
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="assets/img/bannerSpaEnCasaOscuro.webp" alt="Banner Spa en Casa" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle"></span>
                        <h1 class="home__data-title">Centro de Estetica  a <b> <br> tu domicilio</b></h1>
                        <a href="#place" class="button">Descubri Nuestros Servicios...</a>
                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/spaencasa94/" target="_blank" class="home__social-link"><i class="ri-instagram-fill"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Acerca de nosotros...</h2>
                        <p class="about__description">Tu salud y seguridad son lo más importante para nosotros, es por esto que en DropSpa cumplimos con todos los protocolos exigidos. Esperamos que todos los clientes sigan pautas estrictas y mantengan una buena salud e higiene, para mantenernos todos a salvo.
                        </p>
                        <a href="#contact" class="button">Reserva un lugar</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/bioseguridad3.webp" alt="Spa en Casa - Normas de Seguridad" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/bioseguridad2.webp" alt="Spa en Casa - Normas de seguridad" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Descubre nuestros <br> atractivos tratamientos</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/tratamientosFacialesOscuro.webp" alt="Spa en Casa - Tratamientos Faciales" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">TRATAMIENTOS FACIALES</h2>
                                <span class="discover__description">Podes setirte en armonia con tu imagen corporal</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/manicurePedicureOscuro.webp" alt="Spa en Casa - Manicuria y Pedicuria" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">MANICURE Y PEDICURE</h2>
                                <span class="discover__description">Servicio de Manicuria y Pedicuria</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/depilacionOscuro.webp" alt="Spa en Casa - Depilacion" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">DEPILACION</h2>
                                <span class="discover__description">Servicio de depilacion</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/masajesCorporalesOscuro.webp" alt="Spa en Casa - Masajes Corporales" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">MASAJES CORPORALES</h2>
                                <span class="discover__description">Servicio de Masajes Corporales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Algunos de nuestros servicios...</h2>
                
                <div class="place__container container grid">
                    @yield('content')
                    <!--==================== PLACES CARD 1 ====================-->
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            
            <section class="content section" id="contact">

                <h1 class="section__title">Contactanos.</h1>

                <div class="contact-wrapper animated bounceInUp">
                    <div class="contact-info">
                            <div class="contact__box">
                                <h2 class="section__title">
                                Comuníquese con nosotros, <br>A través de...<br> 
                                </h2>
                                </br>
                                <div class="contact__data">
                                    <div class="contact__information">
                                        <h3 class="contact__subtitle">Whatsapp</h3>
                                        <span class="contact__description">
                                            <i class="ri-phone-line contact__icon"></i>
                                            +123  456  789
                                        </span>
                                    </div>

                                    <div class="contact__information">
                                        <h3 class="contact__subtitle">Correo Electronico.</h3>
                                        <span class="contact__description">
                                            <i class="ri-mail-line contact__icon"></i>
                                            consultas@spaencasa.com
                                        </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="contact-form">
                            <form action="">
                                <p>
                                    <label>Nombre</label>
                                    <input type="text" name="fullname" class="contact1">
                                </p>
                                <p>
                                    <label>Numero de contacto</label>
                                    <input type="tel" name="phone">
                                </p>
                                <p class="block1">
                                <label>Mensaje</label> 
                                <textarea name="" id="" cols="0" rows="10" class="contact__input" ></textarea>
                                </p>
                                <p class="block">
                                    <button class="b">
                                        Enviar
                                    </button>
                                </p>
                            </form>
                        </div>
                    
                    </div>

                </div>
            </section>    

            

        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2022 CalderonDev. Todos los derechos reservados.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terminos y condiciones.</a>
                        <a href="#" class="footer__terms-link">Politicas de privacidad.</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>