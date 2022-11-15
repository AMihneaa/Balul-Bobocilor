<!DOCTYPE html>
<?php require_once "controllerUserData.php"; ?>
 <?php require_once "bagplinmasa.php"; 
 

 ?>

<?php require_once "bagplinmasaconcurenti.php";
?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>BBETTI | Lupu Dan Mihai</title>
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
<header class="header">
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
                            <li ><a href="./index.php">Acasa</a></li>
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
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End -->

<!-- Countdown Section Begin -->

<!-- Countdown Section End -->

<!-- Tours Section Begin -->


<div>
    <section class="tours spad" style="margin-top:5rem;">
        <div class="container">
            <div class="row">


                <div class="col-lg-6 order-lg-4">
                    <div class="tours__item__text tours__item__text--right" style="margin-top: 9rem;">
                        <h2>Lupu Dan Mihai</h2>
                        <div class="tours__text__widget">

                        </div>
                        <div class="tours__text__desc">
                            <p>Mihai a fost întotdeauna atras de sporturi precum fotbalul sau handbalul.  </p>
                            <p>Calitatea sa este faptul ca privește partea plină a paharului indiferent de situație și că reușește de fiecare dată să transforme aspectele negative în unele pozitive.</p>
                        </div>
                           <?php 
                            
     $emailus=$_SESSION["email"];

    $usercheck=(string)$_POST['numeconcurent'];
    
    echo $usercheck;
    
       $sql1_=$con->query("SELECT vot_baieti FROM usertable WHERE email='$emailus'");
 
 
    
    if($sql1_->fetch_assoc()["vot_baieti"])
    
    {    
    
      echo ' <form action="votare_baieti.php" method="post" class = "text">
                            <button type="submit" name="numeconcurent" value="Lupu Dan Mihai" class="primary-btn border-btn"> Votează  </button>
                        </form>';
        
    }
    else echo' <form action="" method="post" class = "text">
                            <button type="submit" name="numeconcurent" value="" class="primary-btn border-btn"> Ai votat! </button>
                        </form>';
    
                    
                        
                        ?>


                    </div>


                </div>
                <div class="col-lg-6 order-lg-3">
                    <div class="tours__item__pic tours__item__pic--left">
                        <img src="img/events/baiat1.webp" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- Tours Section End -->
 <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="img/countdown-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>BBETTI 2022</h1>
                        <h4 style="padding-top: 14rem;">Votul se termina in:</h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>50</span>
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