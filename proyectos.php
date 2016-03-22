<!doctype html>
<html class="no-js" lang="">

    <?php include_once './layout/head.php'; ?>

    <body>
        <?php include_once './layout/nav.php'; ?>


        <section id="proyectos">
            <h1>Proyectos</h1>
            <p>
                La experiencia nos demuestran que cada empresa, tiene sus propias necesidades, requerimientos y posibilidades.<br/> 
                Trabajamos en estrecha colaboración con nuestros clientes, formando equipos de trabajo con ellos, sus proveedores <br/>
                y todos los involucrados en el desarrollo de sus productos.
            </p>
        </section>




        <?php $footerContacto = false;
        include_once './layout/footer.php'; ?>

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
