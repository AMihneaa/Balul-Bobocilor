<!DOCTYPE html>
<?php require_once "castigatori.php"; ?>



<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>BBETTI | VOTE</title>
    <link rel="icon" type="image/x-icon" href="/img/LSE favi.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    
      <meta name="description" content="Balul Bobocilor ETTI">
  <meta name="keywords" content="ETTI, BBETTI, LSE, DEPARTAMENTUL IT, Facultatea de Electronică, Telecomunicaţii şi Tehnologia Informaţiei">
  <meta name="author" content="Departamentul IT LSE">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Acasa</a></li>
                                <li><a href="./about.php">Despre</a></li>
                                <li><a href="./tours.php">Votati acum</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                                <?php 

if( $_SESSION['email']){
  echo' <li><a href="./logout-user.php">Logout</a></li>';
}
else echo' <li><a href="./login-user.php">Logare</a></li>';
?>
                                
                            </ul>
                        </nav>
                        <div class="header__right__social">
                            <a href="https://www.facebook.com/lseorgro/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/ligastudentilorelectronistilse/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/user/lsebucuresti/videos?app=desktop" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Countdown Section Begin -->
    <section class="countdown countdown--page spad set-bg" data-setbg="img/countdown-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>Tomorrowland 2020</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>20</span>
                            <p>days</p>
                        </div>
                        <div class="countdown__item">
                            <span>45</span>
                            <p>hours</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class="countdown__item">
                            <span>09</span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class="buy__tickets">
                        <a href="#" class="primary-btn">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Tours Section Begin -->
    
    
    <div>
    <section class="tours spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Concurenti</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                            <a href="oteseanu.php">
                             
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata5.avif" ></div>
                            <div class="event__item__text">
                                <h4>Oteseanu Alexandra Maria</h4>
                                 <p><i class="fa fa-map-marker"></i>Perechea 1</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="oteseanu.php">
                                
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat2.avif"></div>
                            <div class="event__item__text">
                                <h4>Rosu Vlad Florin</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 1</p>
                            </div>
                               
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="oteseanu.php">
                               
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata1.avif"></div>
                            <div class="event__item__text">
                                <h4>Soare Cristina-Gabriela</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 2</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="oteseanu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat1.avif"></div>
                            <div class="event__item__text">
                                <h4>Lupu Dan Mihai</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 2</p>
                            </div>
                     
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="oteseanu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata6.avif"></div>
                            <div class="event__item__text">
                                <h4>Cucoanes Georgiana</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 3</p>
                            </div>
                             
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="oteseanu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat4.avif"></div>
                            <div class="event__item__text">
                                <h4>Hinsea Mihai</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 3</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                                 <a href="oteseanu.php">
                               
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata3.avif"></div>
                            <div class="event__item__text">
                                <h4>Paraschiv Irina</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 4</p>
                            </div>
                           
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="oteseanu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat5.avif"></div>
                            <div class="event__item__text">
                                <h4>Simion Valentin</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 4</p>
                            </div>
                          
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                            <a href="oteseanu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata4.avif"></div> 
                            <div class="event__item__text">
                                <h4>Popa Ioana-Diana</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 5</p>
                            </div>
                              
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="oteseanu.php">
                               
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat3.avif"></div>
                            <div class="event__item__text">
                                <h4>Borza Iustin-Lucian</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 5</p>
                            </div>
                           
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="oteseanu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata2.avif"></div>
                            <div class="event__item__text">
                                <h4>Sandu Diana Ioana</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 6</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">  <a href="oteseanu.php">
                            
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat6.avif"></div>
                            <div class="event__item__text">
                                <h4>Pirlog Andrei Cristian</h4>
                                <p><i class="fa fa-map-marker"></i>Perechea 6</p>
                            </div>
                         
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- Tours Section End -->
   

    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="img/footer-bg.png" style="margin-top:-34rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>DJoz</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Music Plugin -->
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3227970,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>

</html>