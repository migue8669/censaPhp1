<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pushy - Off-Canvas Navigation Menu</title>
        <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="../css/pushy.css">
         <link rel="stylesheet" href="../css/estilos.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>
          
        <header class="site-header push">Programación a PHP</header>

        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link">Formularios</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Productos</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="">Item 3</a></li>
                            <li class="pushy-link"><a href="#">Item 4</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Titulo</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                            <li class="pushy-link"><a href="#">Item 4</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 3</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 4</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-link"><a href="#">Item 1</a></li>
                    <li class="pushy-link"><a href="#">Item 2</a></li>
                    <li class="pushy-link"><a href="#">Item 3</a></li>
                    <li class="pushy-link"><a href="#">Item 4</a></li>
                </ul>
            </div>
        </nav>

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
            <!-- Menu Button -->
            <button class="menu-btn">&#9776; Menu</button>

            <!-- Código del formulario -->


        </div>

        <footer class="site-footer push">This is a footer</footer>

        <!-- Pushy JS -->
        <script src="../js/pushy.min.js"></script>

    </body>
</html>
