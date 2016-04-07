<!doctype html>
<html class="no-js" lang="">

    <?php include_once './layout/head.php'; ?>

    <body class="dark-bg">
        <?php include_once './layout/nav.php'; ?>

        <section id="estudio" class="intro-module fullheight">
            <div class="intro-module-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-module-title">
                                <h1>El estudio</h1>

                                <h2>Desde 2004 diseñando soluciones para industrias</h2>
                                <div class="separador-titulo"></div>
                            </div>                       

                        </div>
                    </div>
                </div>

                <div class="parallaxy-animate"  id="estudio-logo-big" parallaxy-options='{"multiplier":"0.2", "direction":"up", "positionType": "absolute"}'>
                    <img src="img/duranga.svg"/>
                </div>
            </div>
        </section>

        <section id="estudio-acerca">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Acerca de Durand Design</h3>
                        <h2>Somos un estudio especializado en brindar<br/>
                            asesoramiento en el diseño y desarrollo de productos.
                        </h2>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Durand Design es una empresa de diseño propiedad y conducida por Diego Durand,<br/>
                                    diseñador industrial de UNC y docente universitario en FADU UNL.
                                </p>
                                <p>Durand Design ofrece soluciones basadas en las herramientas del diseño industrial, la<br/>gestión del diseño y el desarrollo de productos. 
                                </p>
                                <p>
                                    Combinamos nuestro amplio conocimiento en los procesos de producción, materiales,<br/>
                                    ergonomia y los problemas ambientales, para llevar a cabo soluciones funcionales,<br/>
                                    estéticas e innovadoras. </p>
                                <p>
                                    El objetivo es siempre diseñar focalizándonos en el usuario final, y desarrollando un<br/>
                                    producto óptimo, dentro de los tiempos y los marcos económicos dados. </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    Dependiendo del tipo de proyecto trabajamos de forma independiente o en conjunto<br/>
                                    con los clientes y sus equipos de proyecto (representado por la I + D, gestión, ventas,<br/>
                                    marketing y departamentos de producción, ingeniería, modelistas, matriceros, etc). </p>
                                <p>Todos los proyectos se realizan basado en el uso efectivo de software de CAD en 3D desde<br/>
                                    la etapa concepto hasta la producción.  </p>
                                <p>Para los clientes más pequeños o sin equipos de diseño, podemos dar soporte durante<br/>
                                    todo el proceso de desarrollo, incluso, cuando sea necesario, podemos incluir nuestra propia red de asesores. </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section id="estudio-durand">


            <div id="estudio-bg">
                <div class="estudio-col estudio-col1" >
                    <div class="parallaxy-animate" id='e-pax1' parallaxy-options='{"multiplier":"0.025", "direction":"up", "positionType": "relative"}'>
                        <img src='img/diego-durand.jpg' alt='Diego Durand'/>
                    </div>
                </div>
                <div class="estudio-col estudio-col2">

                    <div class="estudio-col estudio-col3">
                        <div class="parallaxy-animate"  id='e-pax2'  parallaxy-options='{"multiplier":"0.03", "direction":"up", "positionType": "relative"}'>
                            <img src='img/estudio-paralax1.jpg' alt='Estudio'/>
                        </div>
                    </div>
                    <div class="estudio-col estudio-col4">
                        <div class="parallaxy-animate" id='e-pax4'  parallaxy-options='{"multiplier":"0.03", "direction":"up", "positionType": "relative"}'>
                            <img src='img/estudio-paralax3.png' alt='Estudio'/>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="estudio-col estudio-col5">
                        <div class="parallaxy-animate" id='e-pax3'   parallaxy-options='{"multiplier":"0.03", "direction":"up", "positionType": "relative"}'>
                            <img src='img/estudio-paralax2.jpg' alt='Estudio'/>
                        </div> 
                    </div>
                </div>
            </div>




            <div id="estudio-content" class="parallaxy-animate" parallaxy-options='{"multiplier":"0.07", "direction":"up", "positionType": "absolute"}'>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="durand-info">
                                <h1>Diego Durand</h1>
                                <p>Es un diseñador con trayectoria en el sector del
                                    transporte y sus derivados y en el diseño de productos variados, con experiencia, especialmente en proyectos grandes y complejos.</p>

                                <ul>
                                    <li>
                                        <span>≈</span>Fundador y Director en Durand Design.
                                    </li>
                                    <li>
                                        <span>≈</span>Diseñador industrial de UNC.
                                    </li>
                                    <li>
                                        <span>≈</span>Docente universitario en FADU UNL.
                                    </li>

                                </ul>
                                <a href="#"><img src='img/linkedin.png' alt="Linkedin" />Ver en Linkedin</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>

        <?php include_once './layout/asesoramiento-contacto.php'; ?>

        <?php include_once './layout/footer.php'; ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>



        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
