


<?php require_once "castigatori.php"; ?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
      <meta name="description" content="Balul Bobocilor ETTI">
  <meta name="keywords" content="ETTI, BBETTI, LSE, DEPARTAMENTUL IT, Facultatea de Electronică, Telecomunicaţii şi Tehnologia Informaţiei">
  <meta name="author" content="Departamentul IT LSE">
    
    <title>BBETTI</title>
    <link rel="icon" type="image/x-icon" href="/img/LSE favi.png">
    <!-- Google Font -->

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
    <link rel="icon" type="image/x-icon" href="/img/LSE favi.png">
</head>

<body >
    
    <!--<body>-->
    <!-- Page Preloder -->


    <!-- Header Section Begin -->
    <header class="header" style="background-color: #cd242d; background: rgba(205, 36, 45, .5);">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo" style="margin-top:0.65rem;">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Acasa</a></li>
                                <!--<li><a href="./about.php">Despre</a></li>-->
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
                            <!--<a href="https://www.tiktok.com/@lsebucuresti.ro" target="_blank"><i class="fa-brands fa-tiktok"></i>-->
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

  
        

     <section id="bbetti-section-pc" class="hero-img-bg spad set-bg" data-setbg="img/bbetti.webp" style= " width: 100%; height: 100%;" class="_hiddentel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span style="padding-top: 20rem;">#BBETTI2022 #LSE #ETTI #ONEclub</span>
                        <h1 style="text-align: left; margin-top: 5rem;font-family:Arial;"><font size = "+7">Balul Bobocilor Electronisti</h1>
                        <div style="margin-top: 0.625rem; text-align: left;">
                            <p style="padding-top: 2rem">Balul Bobocilor Electroniști revine cu promisiunea unei seri în care visele devin realitate, <br> o seară în care putem fi oricine și orice!
                            Tematica ”Lights, Camera, Action!”</br></p>
                            <a href="https://www.youtube.com/watch?v=uDk5AEKViVc" class="play-btn video-popup" style="margin-left: 14rem;margin-top: 7rem;"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    
         
    <style>
    
        #bbetti-section-pc{
            display: block;
        }
        
        #bbetti-section-tel{
            display: none;
        }
        
        @media only screen and (max-width: 900px){
            #bbetti-section-pc{
                display: none;
            }
            
            #bbetti-section-tel{
                display: block;
                height: 100%;
            }
        }
        
    </style>
        
    <section id="bbetti-section-tel" class="hero-img-bg spad set-bg" data-setbg="img/bbetti-tel.webp" style= " width: 100%; height: 100%;" class="_hiddentel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span style="padding-top: 20rem; display: none;">#BBETTI2022 #LSE #ETTI #ONEclub</span>
                        <h1 style="text-align: left; margin-top: 5rem; display: none;"><font size = "+7">Balul Bobocilor Electronisti</h1>
                        <div style="margin-top: 0.625rem; text-align: left;">
                            <p style="padding-top: 2rem; display: none;">Balul Bobocilor Electroniști revine cu promisiunea unei seri în care visele devin realitate, <br> o seară în care putem fi oricine și orice!
                            Tematica ”Lights, Camera, Action!”</br></p>
                            <a href="https://www.youtube.com/watch?v=uDk5AEKViVc" class="play-btn video-popup" style="margin-left: 7.2rem; margin-top: 36rem;"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    
    
    <!-- Hero Section End -->

        
    <!-- Event Section Begin -->
    <section class="event spad">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 >Concurenți</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                            <a href="otesanu.php">
                             
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata5.webp" ></div>
                            <div class="event__item__text">
                                <h4 >Oteșanu Alexandra Maria</h4>
                                 <p>Perechea 1</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="rosu.php">
                                
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat2.webp"></div>
                            <div class="event__item__text">
                                <h4 >Roșu Vlad Florin</h4>
                                <p >Perechea 1</p>
                            </div>
                               
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="soare.php">
                               
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata1.webp"></div>
                            <div class="event__item__text">
                                <h4 >Soare Cristina-Gabriela</h4>
                                <p>Perechea 2</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="lupu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat1.webp"></div>
                            <div class="event__item__text">
                                <h4 >Lupu Dan Mihai</h4>
                                <p >Perechea 2</p>
                            </div>
                     
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="cucoanes.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata6.webp"></div>
                            <div class="event__item__text">
                                <h4 >Cucoaneș Georgiana</h4>
                                <p >Perechea 3</p>
                            </div>
                             
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="hinsea.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat4.webp"></div>
                            <div class="event__item__text">
                                <h4 >Hînsea Mihai</h4>
                                <p>Perechea 3</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                                 <a href="paraschiv.php">
                               
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata3.webp"></div>
                            <div class="event__item__text">
                                <h4 >Paraschiv Irina</h4>
                                <p >Perechea 4</p>
                            </div>
                           
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                              <a href="simion.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat5.webp"></div>
                            <div class="event__item__text">
                                <h4>Simion Valentin</h4>
                                <p >Perechea 4</p>
                            </div>
                          
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                            <a href="popa.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata4.webp"></div> 
                            <div class="event__item__text">
                                <h4 >Popa Ioana-Diana</h4>
                                <p >Perechea 5</p>
                            </div>
                              
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="borza.php">
                               
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat3.webp"></div>
                            <div class="event__item__text">
                                <h4 >Borza Iustin-Lucian</h4>
                                <p>Perechea 5</p>
                            </div>
                           
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event__item">
                             <a href="sandu.php">
                              
                            <div class="event__item__pic set-bg" data-setbg="img/events/fata2.webp"></div>
                            <div class="event__item__text">
                                <h4 >Sandu Diana Ioana</h4>
                                <p >Perechea 6</p>
                            </div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">  <a href="pirlog.php">
                            
                            <div class="event__item__pic set-bg" data-setbg="img/events/baiat6.webp"></div>
                            <div class="event__item__text">
                                <h4>Pîrlog Andrei Cristian</h4>
                                <p>Perechea 6</p>
                            </div>
                         
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="img/ana_moga_6.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: -5rem;">
                    <div class="about__text" style="font-size: 2.1rem;">
                        <div class="section-title">
                            <h2 >MC Ana Moga</h2>
                           
                        </div>
                        <p >Cele 6 perechi de boboci, zicem noi curajoși și talentați, care pornesc spre cucerirea titlurilor de Miss și Mister Boboc ETTI 2022 vor fi introduse de Ana Moga, prezentatoarea matinalului de la Kiss FM, "Foarte bună dimineaţa". Suntem ferm convinși că și seara va fi pe frecvență cu tine și va fi pregătită să îți aducă zâmbetul pe buze.</p>
                        <p >”Mă duc în fiecare zi cu zâmbetul pe buze la radio. Cred că scopul meu în viață e să fac oamenii fericiți”, spune Ana Moga despre pasiunea căreia îi dă viaţă de pe vremea când avea doar 18 ani.</p>
                        <p >Ana Moga este în echipa Kiss FM de 11 ani, iar în fiecare zi este pe frecvență cu tine și este pregătită să îți aducă zâmbetul pe buze și să îți prezinte cele mai tari hituri ale momentului. O poți asculta de luni până vineri, între orele 13:00 – 16:00, pe Kiss FM.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

        
    </div>
    

    <!-- Track Section Begin -->
  

   

    <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="img/countdown-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>BBETTI 2022</h1>
                        <h4 style="padding-top: 14rem;">VOTUL SE TERMINA IN: </h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>50</span>
                            <p>zile</p>
                        </div>
                        <div class="countdown__item">
                            <span>45</span>
                            <p>ore</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>minute</p>
                        </div>
                        <div class="countdown__item">
                            <span>09</span>
                            <p>secunde</p>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
  <footer class="footer footer--normal spad set-bg" data-setbg="img/footer-bg.webp" style="margin-top:-34rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address" style="align-content: center;">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Telefon</p>
                                <h6 style="margin-top: -1rem;"><font size="-1">Eduard Răcoare - 0744 433 380</br>Iulia Orvas - 0756 682 936</font></h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>suport@lsebucuresti.org</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2 style="text-align: center;">#BBETTI</h2>
                        <div class="footer__social__links" style="text-align: center;">
                            <a href="https://www.facebook.com/lseorgro/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/ligastudentilorelectronistilse/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/user/lsebucuresti/videos?app=desktop" target="_blank"><i class="fa fa-youtube"></i></a>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h5 class="text-white" style="text-align: center; padding-top: 0.9rem;">© 2022 Copyright:</h5>
                        <h5 style="text-align: center; padding-top: 4.2rem;"><b>
                            <a class="text-white" href="https://lsebucuresti.org/">Departamentul IT LSE</a></b>
                        </h5>
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

    <!-- Music Plugin -->
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
    <!-- Hotjar Tracking Code for https://bbetti.lsebucuresti.org/ -->
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