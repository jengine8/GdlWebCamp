
    

    <?php include_once 'includes/templates/header.php';?>

    <section class="seccion contenedor">
        <h2>La mejor conferencia sobre disenio web en Espaniol</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore perferendis sint, ut officia? Labore minus nam sapiente maxime corporis ullam alias, adipisci explicabo quod quo mollitia architecto odio excepturi?</p>
    </section>

    <section class="seccion-programa">
        <div class="contenedor-video ">
            <video autoplay muted loop poster="img/img/bg-talleres.jpg">
                <source src="resources/video/video.mp4" type="video/mp4">
                <source src="resources/video/video.webm" type="video/webm">
                <source src="resources/video/video.ogv" type="video/ogv">
            </video>
        </div>

        <div class="contenido-evento">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <nav class="barra-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="far fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fas fa-clock"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>20 de Diciembre</p>
                            <p><i class="fas fa-user"></i>JP Rodriguez</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Responsive Web Desing</h3>
                            <p><i class="fas fa-clock"></i>18:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>22 de Diciembre</p>
                            <p><i class="fas fa-user"></i>JP Rodriguez</p>
                        </div>

                        <a href="#" class="boton float-right">Ver Todos</a>
                    </div>
                    <!--Talleres-->

                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser Frelancer y no Morir en el intento</h3>
                            <p><i class="fas fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>20 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Rafael Bautista </p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Mundo Cloud</h3>
                            <p><i class="fas fa-clock"></i>13:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>22 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Susan Sanchez</p>
                        </div>

                        <a href="#" class="boton float-right">Ver Todos</a>
                    </div>
                    <!--conferencias-->

                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>GUI Desing</h3>
                            <p><i class="fas fa-clock"></i>14:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>20 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Harold Garcia</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Aprendiendo a Programar en una Tarde</h3>
                            <p><i class="fas fa-clock"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>22 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Shari Herrera</p>
                        </div>

                        <a href="#" class="boton float-right">Ver Todos</a>
                    </div>
                    <!--Seminarios-->
                </div>
                <!--Programa Evento-->
            </div>
            <!--contenedor-->
        </div>
        <!--contenido evento-->
    </section>

    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>

        <ul class="lista-invitados clearfix">
            <li class="invitado">
                <img src="img/img/invitado1.jpg" alt="imagen invitado">
                <p>Rafael Bautista</p>
            </li>
            <li class="invitado">
                <img src="img/img/invitado2.jpg" alt="imagen invitado">
                <p>Shari Herrera</p>
            </li>
            <li class="invitado">
                <img src="img/img/invitado3.jpg" alt="imagen invitado">
                <p>Gregorio Sanchez</p>
            </li>
            <li class="invitado">
                <img src="img/img/invitado4.jpg" alt="imagen invitado">
                <p>Susana Rivera</p>
            </li>
            <li class="invitado">
                <img src="img/img/invitado5.jpg" alt="imagen invitado">
                <p>Harold Garcia</p>
            </li>
            <li class="invitado">
                <img src="img/img/invitado6.jpg" alt="imagen invitado">
                <p>Susan Sanchez</p>
            </li>
        </ul>


    </section>

    <div class="contador paralax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>Invitados
                </li>
                <li>
                    <p class="numero"></p>Talleres
                </li>
                <li>
                    <p class="numero"></p>Dias
                </li>
                <li>
                    <p class="numero"></p>Conferencias
                </li>

            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precios">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul class="descripcion-curso">
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>

                </li>

                <li>
                    <div class="tabla-precios">
                        <h3>Pase Todos los Dias</h3>
                        <p class="numero">$80</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton ">Comprar</a>
                    </div>

                </li>

                <li>
                    <div class="tabla-precios">
                        <h3>Pase por dos dias</h3>
                        <p class="numero">$60</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>

                </li>
            </ul>
        </div>
    </section>

    <div id="mapa" class="mapa">

    </div>

    <section class="seccion">
        <h2>testimoniales</h2>

        <div class="testimoniales contenedor">

            <div class="testimonial">
                <blockquote>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi minima nobis culpa voluptate maiores tempore itaque, obcaecati autem fugit provident voluptatem eum suscipit hic eligendi impedit, amet natus earum et.</p>
                    <footer>
                        <img src="img/img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Luis Fernandez <span>Profesor en UPM</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!---testimonial-->

            <div class="testimonial">
                <blockquote>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi minima nobis culpa voluptate maiores tempore itaque, obcaecati autem fugit provident voluptatem eum suscipit hic eligendi impedit, amet natus earum et.</p>
                    <footer>
                        <img src="img/img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Luis Fernandez <span>Profesor en UPM</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!---testimonial-->

            <div class="testimonial">
                <blockquote>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi minima nobis culpa voluptate maiores tempore itaque, obcaecati autem fugit provident voluptatem eum suscipit hic eligendi impedit, amet natus earum et.</p>
                    <footer>
                        <img src="img/img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Luis Fernandez <span>Profesor en UPM</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!---testimonial-->

        </div>

    </section>

    <div class="newsletter paralax">
        <div class="contenido-news contenedor">
            <p>registrate al newsletter</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="boton transparente">Registro</a>
        </div>
    </div>

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="reloj">
                <li>
                    <p id="dias" class="numero"></p>dias
                </li>
                <li>
                    <p id="horas" class="numero"></p>horas
                </li>
                <li>
                    <p id="minutos" class="numero"></p>minutos
                </li>
                <li>
                    <p id="segundos" class="numero"></p>segundos
                </li>
            </ul>
        </div>
    </section>

    <?php include_once 'includes/templates/footer.php';?>


