<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <meta name = "description" content = "Learn to code by simulating reality.">
        
        <link rel = "stylesheet" type = "text/css" href = "vendors/css/normalize.css">
        <link rel = "stylesheet" type = "text/css" href = "vendors/css/grid.css">
        <link rel = "stylesheet" type = "text/css" href = "vendors/css/ionicons.min.css">
        <link rel = "stylesheet" type = "text/css" href = "resources/css/style.css">
        <link rel = "stylesheet" type = "text/css" href = "resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,300i,400" rel="stylesheet">
        
        <title>Life is Code</title>
        
        <link rel="apple-touch-icon" sizes="120x120" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>
    
    <body>
        <header>
            <nav class = "#">
                <div class = "row">
                    <div class = "logo">LIFEISCODE.CO.UK</div>
                    <ul class = "main-nav js--main-nav">
                        <li><a href = "#">TUTORIALS</a></li>
                        <li><a href = "#">SIMULATIONS</a></li>
                        <li><a href = "#">GAMES</a></li>
                        <li><a href = "#">ABOUT US</a></li>
                    </ul>
                </div>
            </nav>
            <div class = "header-text-box">
                <h1>Life Is Code</h1>
                <h2>Learn to code by simulating reality.</h2>
                <a class = "btn btn-full" href = "#">Start here</a>
                <a class = "btn btn-ghost js--scroll-to-tutorials" href = "#">Learn more</a>
            </div>      
        </header>
        
        <section class = "section-tutorials js--section-tutorials">
            <div class = "row">
                <h3>Video tutorials designed to educate and inspire.</h3>
                <p class = "long-copy">
                    Hand-crafted modules developed to teach coding whilst studying a diverse range of systems in nature.
                </p>
            </div>
            <div class = "row">
                <div class = "col span-1-of-4 box">
                    <i class = "ion-flame icon-big"></i>
                    <h4>Brownian motion</h4>
                    <p>
                        Learn the basics of coding by simulating a box of particles. Study concepts in physics such as molecules, random walks and kinetic energy.
                    </p>
                </div>
                <div class = "col span-1-of-4 box">
                    <i class = "ion-flash icon-big"></i>
                    <h4>Physics engine</h4>
                    <p>
                        Feel the inertia. Learn to model forces such as gravity to study acceleration and rotation and build your own physics toy box.
                    </p>
                </div>
                <div class = "col span-1-of-4 box">
                    <i class = "ion-ios-snowy icon-big"></i>
                    <h4>Fractals</h4>
                    <p>
                        Discover how to compute your own infinitely complex patterns such as the Sierpinski triangle, the Koch snowflake, and the Mandelbrot set.
                    </p>
                </div>
                <div class = "col span-1-of-4 box">
                    <i class = "ion-eye icon-big"></i>
                    <h4>Artificial Intelligence</h4>
                    <p>
                        Bring your creations to life with intelligent pathfinding, genetic algorithms and neural networks.
                    </p>
                </div>
            </div>
        </section>
        
        <section class = "section-simulations">
            <ul class = "simulation-showcase clearfix">
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase1.jpg" alt="Showcase 1">
                    </figure>
                </li>
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase2.jpg" alt="Showcase 2">
                    </figure>
                </li>
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase3.png" alt="Showcase 3">
                    </figure>
                </li>
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase4.jpg" alt="Showcase 4">
                    </figure>
                </li>
            </ul>
            <ul class = "simulation-showcase clearfix">
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase5.jpg" alt="Showcase 5">
                    </figure>
                </li>
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase6.jpg" alt="Showcase 6">
                    </figure>
                </li>
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase7.jpg" alt="Showcase 7">
                    </figure>
                </li>
                <li>
                    <figure class = "showcase-image">
                        <img src = "resources/img/Showcase8.jpg" alt="Showcase 8">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class = "section-applets">
            <div class = "row">
                <h3>Share your creations online.</h3>
            </div>
            <div class = "row">
                <figure class = "example-image">
                    <img src = "resources/img/Example.jpg" alt="Example applet">
                </figure>
            </div>
            <p class = "long-copy">
                    Experiment with open-source p5.js applets online.
            </p>
        </section>
        
        <section class = "section-form" id="form">
            <div class = "row">
                <h3 class = "white-heading"> Get in touch! </h3>
            </div>
            <div class = "row">
                <form method = "post" action = "mailer.php" class = "contact-form">
                    <div class = "row">
                        <?php
                            if($_GET['success'] == 1)
                            {
                                echo "<div class =\"form-messages success\"> Thank you for your comments! </div>";
                            }
                            if($_GET['success'] == -1)
                            {
                                echo "<div class =\"form-messages error\"> Uh oh! Something went wrong! </div>";
                            }
                        ?>
                    </div>
                    <div class = "row">
                        <div class = "col span-1-of-3">
                            <label for = "name" class = "form-label">Name</label>
                        </div>
                        <div class = "col span-2-of-3">
                            <input type = "text" name = "name" id = "name" placeholder = "Name" required>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col span-1-of-3">
                            <label for = "email" class = "form-label">Email</label>
                        </div>
                        <div class = "col span-2-of-3">
                            <input type = "email" name = "email" id = "email" placeholder = "Email" required>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col span-1-of-3">
                            <label for = "comments" class = "form-label">Comments</label>
                        </div>
                        <div class = "col span-2-of-3">
                            <textarea name = "comments" placeholder = "Your comments"></textarea>
                        </div>
                    </div>
                   <div class = "row">
                        <div class = "col span-1-of-3">
                            <label for = "submit">&nbsp;</label>
                        </div>
                        <div class = "col span-2-of-3">
                            <input type = "submit" value = "Join" class = "join-button">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <footer>
            <div class = "row">
                <div class = "col span-1-of-2">
                    <ul class = "footer-nav">
                        <li><a href = "#">Tutorials</a></li>
                        <li><a href = "#">Simulations</a></li>
                        <li><a href = "#">Games</a></li>
                        <li><a href = "#">About us</a></li>
                    </ul>
                </div>
                <div class = "col span-1-of-2">
                    <ul class = "footer-social">
                        <li><a href = "#"><i class = "ion-social-facebook"></i></a></li>
                        <li><a href = "#"><i class = "ion-social-twitter"></i></a></li>
                        <li><a href = "#"><i class = "ion-social-googleplus"></i></a></li>
                        <li><a href = "#"><i class = "ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class = "row">
                <p>
                    Copyright &copy; 2019 by Cosmic Bison Studios. All rights reserved.
                </p>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/script.js"></script>
        
    </body>
</html>