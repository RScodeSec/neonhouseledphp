<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led</title>
    <link rel="stylesheet" href="public/css/shared/header.css">
    <link rel="stylesheet" href="public/css/shared/footer.css">
    <link rel="stylesheet" href="public/css/shared/categoria_index.css">
    <link rel="stylesheet" href="public/css/shared/auspicio.css">
</head>

<body>
<header class="header">
        <figure class="logo-container">
            <a href="index.php">
                <img src="public/imagenes/Neon_House_Logo.webp" alt="">
            </a>
        </figure>
        <nav class="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li class="parent-first">
                    <p>¿Quiénes somos?</p><i class="fas fa-chevron-down first"></i>
                    <ul class="submenu first">
                        <li class="submenu-element first">
                            <a href="vistas/nosotros.php">Nosotros</a>
                        </li>
                        <li class="submenu-element first">
                            <a href="vistas/work_us.php">Trabaja con nosotros</a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-desk first">
                    <a href="vistas/nosotros.php">Nosotros</a>
                </li>
                <li class="hidden-desk second">
                    <a href="vistas/work_us.php">Trabaja con nosotros</a>
                </li>
                <li class="parent-second">
                    <p>Nhl Collection</p><i class="fas fa-chevron-down second"></i>
                    <ul class="submenu second">
                        <li class="submenu-element second">
                            <a href="vistas/servicios.php">Servicios</a>
                        </li>
                        <li class="submenu-element second">
                            <a href="vistas/categoria.php">Categorías</a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-desk third">
                    <a href="vistas/servicios.php">Servicios</a>
                </li>
                <li class="hidden-desk fourth">
                    <a href="vistas/categoria.php">Categorías</a>
                </li>
                <li>
                    <a href="vistas/proyectos.php">Proyectos</a>
                </li>
                <li>
                    <a href="vistas/contacto.php">Contáctenos</a>
                </li>
            </ul>
        </nav>
        <div class="burger-button">
            <i class="fas fa-bars"></i>
        </div>
    </header>

<section class="hero-container">
        <article id="slider">
            <div id="carouselExampleControls" class="carousel_slide" data-ride="carousel">
                <!-- Slider 1 -->
                <figure class="img-container">
                    <img src="public/imagenes/index/sliders/slider1.webp" alt="">
                </figure>
                <!-- Slider 2 -->
                <figure class="img-container">
                    <img src="public/imagenes/index/sliders/slider2.webp" alt="">
                </figure>
                <!-- Slider 3 -->
                <figure class="img-container">
                    <img data-src="public/imagenes/index/sliders/slider3.webp" class="lazyload" alt="">
                </figure>
                <!-- Slider 4 -->
                <figure class="img-container">
                    <img data-src="public/imagenes/index/sliders/slider4.webp" class="lazyload" alt="">
                </figure>
            </div>
        </article>
        <div class="title-hero-container">
            <p>Diseñando y <br> creando espacios ideales</p>
        </div>
    </section>

    <section class="about-us">
        <h2 class="about-us-title">¿Quiénes somos?</h2>
        <div class="about-us-content">
            <figure class="video-container">
                <div class="flexible-video">
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/NnkbMaaskLY" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </figure>
            <div class="description-container">
                <p>Somos Neon House Led empresa dedicada a la decoración y diseño de interiores así como la fabricación,
                    importación y distribución de letreros y anuncios publicitarios. Por ello, contamos con un equipo de
                    profesionales expertos que van a satisfacer la más grande expectativa de comunicación visual y de
                    proyección de imagen que requieren nuestros clientes a nivel nacional e internacional, desarrollando
                    sus ideas, y haciéndolas realidad con la mejor tecnología y creatividad para su satisfacción.</p>
            </div>
        </div>
    </section>

    <section class="quote">
        <h2 class="quote-title">Creamos los mejores espacios en todos los rubros</h2>
        <a href="vistas/contacto.php" class="quote-link">Cotiza aquí</a>
    </section>

    <section class="services">
        <h2 class="services-title">Servicios</h2>
        <div class="services-items-container">
            <div class="services-item">
                <figure class="img-item-container">
                    <img src="public/imagenes/index/arquitectura.webp" alt="">
                </figure>
                <h3>Arquitectura comercial</h3>
            </div>
            <div class="services-item">
                <figure class="img-item-container">
                    <img src="public/imagenes/index/mobiliaria.webp" alt="">
                </figure>
                <h3>Fabricación mobiliaria</h3>
            </div>
            <div class="services-item">
                <figure class="img-item-container">
                    <img src="public/imagenes/index/remodelacion.webp" alt="">
                </figure>
                <h3>Decoración y remodelación</h3>
            </div>
            <div class="services-item">
                <figure class="img-item-container">
                    <img src="public/imagenes/index/neon.webp" alt="">
                </figure>
                <h3>Fabricación neón</h3>
            </div>
            <div class="services-item">
                <figure class="img-item-container">
                    <img src="public/imagenes/index/letreros.webp" alt="">
                </figure>
                <h3>Letreros luminosos</h3>
            </div>
            <div class="services-item">
                <figure class="img-item-container">
                    <img src="public/imagenes/index/paneles.webp" alt="">
                </figure>
                <h3>Paneles LED</h3>
            </div>



        </div>
    </section>

    <!-- -------------------------------------------------------------- -->

    <!-- Espacio para Edward -->
    <div class="categoria">
        <h2 class="categoria__titulo titulo">CATEGORÍAS</h2>
        <div class="categoria__section">
            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_1" src="public/imagenes/AnyConv.com__Cevicheria.webp" alt="">
                <figcaption class="categoria__desc">CEVICHERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_2" src="public/imagenes/AnyConv.com__Sangucheria.webp" alt="">
                <figcaption class="categoria__desc">SANGUCHERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_3" src="public/imagenes/AnyConv.com__Discoteca.webp" alt="">
                <figcaption class="categoria__desc">DISCOTECA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_4" src="public/imagenes/AnyConv.com__Polleria.webp" alt="">
                <figcaption class="categoria__desc">POLLERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_5" src="public/imagenes/AnyConv.com__Restaurante.webp" alt="">
                <figcaption class="categoria__desc">RESTAURANTE</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_6" src="public/imagenes/AnyConv.com__Bar.webp" alt="">
                <figcaption class="categoria__desc">BAR</figcaption>
            </figure>



            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_7" src="public/imagenes/AnyConv.com__Fast Food.webp" alt="">
                <figcaption class="categoria__desc">FAST FOOD</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_8" src="public/imagenes/AnyConv.com__Salon y Spa.webp" alt="">
                <figcaption class="categoria__desc">SALON SPA Y BARBERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_9" src="public/imagenes/AnyConv.com__Hogar.webp " alt="">
                <figcaption class="categoria__desc">HOGAR</figcaption>
            </figure>




            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen_10" src="public/imagenes/AnyConv.com__Pizzeria.webp" alt="">
                <figcaption class="categoria__desc">PIZZERIA</figcaption>
            </figure>


            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen__11" src="public/imagenes/AnyConv.com__Panaderia.webp" alt="">
                <figcaption class="categoria__desc">PANADERIA Y PASTELERIA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <img class="categoria__img" id="imagen__12" src="public/imagenes/AnyConv.com__Cafeteria y Jugueria.webp" alt="">
                <figcaption class="categoria__desc">CAFETERIA Y JUGUERIA</figcaption>
            </figure>


           

        </div>
    </div>

<div class="nuestros__clientes">

<h2 class="nuestros__titulo">NUESTROS CLIENTES</h2>




<section class="hero-container clientes__section" >
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 arti" id="clientes " style="width: 100%;">
       
           <footer class="page1-footer">
                <center>  <p class="marquesina">
                <span><a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                <a  ><img src="public/imagenes/auspicios/nhl-vladi-logo-01.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hilton-logo-02.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-sagafalabella-03.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-touloulause-04.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-hotel-colors-05.webp"   class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-petro-peru-06.webp"  class="icon-img-empresa"></a>
                <a ><img src="public/imagenes/auspicios/nhl-entel-logo-07.webp"  class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-cristal-logo-08.webp"   class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-backus-09.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-olympuz-10.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-Ripley-11.webp"   
                class="icon-img-empresa"></a>
                <a ><img  src="public/imagenes/auspicios/nhl-utilex-12.webp"   
                class="icon-img-empresa"></a>
                </span>
                </p>
                </center>     
                </footer>
           
            
        
    
        </div>
    </div>
   
</section>







</div>


    <div class="ubicanos">

        <h2 class="ubicanos__titulo titulo">UBÍCANOS</h2>

        <iframe class="ubicanos__map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d344.8735326589209!2d-77.02562462910566!3d-12.057372695863704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89ce2c672f2aa0c!2sNeon%20House%20Led!5e0!3m2!1ses!2spe!4v1611855698005!5m2!1ses!2spe"
            width="600" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>


    <div class="overlay" id="overlay">
        <figure class="overlay__imagen">
            <a href="#" id="x" class="overlay__item x">X</a>
            <a href="#" id="derecha" class="overlay__item right"><i class="fas fa-arrow-right"></i></a>
            <a href="#" id="isquierda" class="overlay__item left"><i class="fas fa-arrow-left"></i></a>
            <img class="overlay__img imagen1" src="public/imagenes/CEVICHERIA.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/SANGUCHERIA.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/DISCOTECA.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/POLLERIA.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/RESTAURANTE.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/BAR.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/FAST FOOD.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/SALON SPA y BARBERIA.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/HOGAR.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/PIZZERIA.webp" alt="">

            <img class="overlay__img imagen1" src="public/imagenes/PANADERIA y PASTELERIA.webp" alt="">
            <img class="overlay__img imagen1" src="public/imagenes/CAFETERIA Y JUGUERIA.webp" alt="">

        </figure>

    </div>
    <footer>

        <div class="direccion">
            <p class="direccion__item">Jr. Paruro 1401 tda. 130 sótano, CC Shopping Center, Cercado de Lima</p>
            <p class="direccion__item">936910425 - 994078320 </p>
            <p class="direccion__item">ventasneonhouse@gmail.com</p>
            <p class="direccion__item">www.facebook.com/nhldecoracioncomercial</p>
            <p class="direccion__item">@nhldecoracioncomercial </p>


        </div>

        <div class="ultimo">
            <a class="boton_final"href="admin/index.php">
                <img class="imagen_final" border="0" alt="neon" src="public/imagenes/lupa.webp" width="219px" height="100px">
            </a>
        </div>

        <div class="sociales">
            <a class="sociales__item" href="https://www.instagram.com/neon_led_store/"><i class="fab fa-instagram-square"></i></a>
            <a class="sociales__item" href="https://www.facebook.com/nhldecoracioncomercial"> <i class="fab fa-facebook"></i></a>
            <a class="sociales__item" href="https://www.youtube.com/user/NEONHOUSELEDS"> <i class="fab fa-youtube"></i></a>
            <a class="sociales__item" href="https://twitter.com/NEONHOUSELEDS"><i class="fab fa-twitter-square"></i></a>
            <a class="sociales__item" href="https://www.linkedin.com/in/neonhouseled/"><i class="fab fa-invision"></i></a>

            



        </div>
        

    </footer>
    <!--<script type="text/javascript" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="public/js/menu.js"></script>
    <script type="text/javascript" src="public/js/categoria.js"></script>
    <script src="public/js/lazysizes.min.js" async></script>

</body>

</html>