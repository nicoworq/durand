<!doctype html>
<html class="no-js" lang="">

    <?php include_once './layout/head.php'; ?>

    <body class="dark-bg">
        <?php include_once './layout/nav.php'; ?>


        <section id="proyectos" class="intro-module fullheight">
            <div class="intro-module-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-module-title">
                                <h1>Proyectos</h1>

                                <h2>Soluciones de diseño industrial 100% a su medida.</h2>
                                <div class="separador-titulo"></div>
                            </div>
                            <div class="intro-module-content">


                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>




        <section id="listado-proyectos">

            <div class="container">

                <div class="col-md-12">

                    <div id="filtro-proyectos">

                        <ul>
                            <li class="active">Ver Todos</li>
                            <li>Agro</li>
                            <li>Autopartes</li>
                            <li>Productos</li>
                            <li>Transporte</li>
                        </ul>

                    </div>

                </div>
            </div>


        </section>

        <?php
        $footerContacto = false;
        include_once './layout/footer.php';
        ?>

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
