<!doctype html>
<html class="no-js" lang="">

    <?php include_once './layout/head.php'; ?>

    <body class="dark-bg">
        <?php include_once './layout/nav.php'; ?>

        <section id="clientes" class="intro-module fullheight">
            <div class="intro-module-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-module-title">
                                <div class="col-50">
                                    <h1>Nuestros clientes</h1>
                                    <h2>Cuidamos cada detalle, desde la etapa de desarrollo<br/>
                                        hasta el producto final porque la satisfacción de nuestros<br/>
                                        clientes es nuestro compromiso.</h2>
                                    <div class="separador-titulo"></div>
                                </div>
                                <div class="col-50">
                                    <div id="clientes-top" >
                                        <div class="cliente-top cl-top1">
                                            <img src="img/cliente-top1.png"/>
                                        </div>
                                        <div class="cliente-top cl-top2">
                                            <img src="img/cliente-top2.jpg"/>
                                        </div>
                                        <div class="cliente-top cl-top3">
                                            <img src="img/cliente-top3.png"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="intro-module-content">
                                <img src="img/clientes-seccion-logos.jpg" alt="Clientes Durand"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="clientes-eligen">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Porqué nos eligen</h3>
                        <h2>Brindamos asesoramiento directo y pensamos<br/>
                            en las necesidades productivas de cada empresa.</h2>
                        <p>Durand Design es una empresa de diseño propiedad y conducida por Diego Durand,<br/>
                            diseñador industrial de UNC y docente universitario en FADU UNL. Durand Design<br/>
                            ofrece soluciones basadas en las herramientas del diseño industrial, la gestión del<br/> diseño y el desarrollo de productos. </p>

                        <p>El objetivo es siempre diseñar focalizándonos en el usuario final, y desarrollando un<br/>
                            producto óptimo, dentro de los tiempos y los marcos económicos dados.</p>
                    </div>
                </div>

            </div>
        </section>
        <section id="clientes-testimonio">
            <strong>“</strong>
            <h2>Durand Design realmente nos ayudó a mejorar nuestra línea<br/> productiva de carrocerías, con soluciones innovadoras.</h2>
            <h3>Juan Carlos Saldivia, Socio Gerente.</h3>
            <div class="logo-testimonio">
                <img src="img/logo-testimonio.png" alt="Testimonio" />
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
