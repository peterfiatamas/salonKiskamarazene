<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="main.css" rel="stylesheet" />
        <link type="text/css" href="szalontrio.css" rel="stylesheet" />
        <link type="text/css" href="szalonkvartett.css" rel="stylesheet" />
        <link type="text/css" href="index.css" rel="stylesheet" />
        <link type="text/css" href="handeltrio.css" rel="stylesheet" />
        <link type="text/css" href="eskuvo.css" rel="stylesheet" />
        <link type="text/css" href="urlap.css" rel="stylesheet" />
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121900146-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-121900146-1');
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="urlap.js"></script>
        <script type="text/javascript" src="index.js"></script>
        <script type="text/javascript" src="szalontrio.js"></script>
        <script type="text/javascript" src="handeltrio.js"></script>
        <script type="text/javascript" src="felfedes.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <div class="col-xs-12 container-fluid head">
            <div class="container">
                <div class="row">
                    <h1 class="col-sm-6 cim">Kamarazene</h1>
                    <div class="col-sm-6 tel">
                        <span class="num">Az együttesek vezetője: Péterfia Tamás</span><br>
                        <span class="email">Emailcím:</span><span class="secret">Kapcsolat: handeltrio2008@gmail.com </span><span class="look">Megnézem</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid menu-container">
            <div class="container">
                <div class="row">
                    <nav class="menu col-xs-12">
                        <a href="index.php?oldal=index">Főoldal</a>
                        <a href="index.php?oldal=handeltrio">H&#228;ndel trió</a>
                        <a href="index.php?oldal=szalontrio">Szalon trió</a>
                        <a href="index.php?oldal=szalonkvartett">Szalon kvartett</a>
                        <a href="index.php?oldal=eskuvo">Esküvői zene</a>   
                        <a href="index.php?oldal=urlap">Üzenet küldése</a>   
                    </nav>
                </div>
            </div>
        </div>
        <?php include __DIR__ . "/" . $template; ?>
    </body>
</html>


