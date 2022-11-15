<?php require_once "controllerUserData.php"; ?>
<?php require_once "otpsadasd.php"; ?>

<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>BBETTI | Logare</title>
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
    <link rel="stylesheet" href="css/loginregister.css" type="text/css">
    <link rel="stylesheet" href="css/2fa.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->

    <!-- Header Section Begin -->
       <header class="header" style="background-color: #cd242d; background: rgba(205, 36, 45, .9);">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Acasa</a></li>
                                <!--<li><a href="./about.php">Despre</a></li>-->
                                <li><a href="./contact.php">Contact</a></li>
                                <?php 

if( $_SESSION['email']){
  echo' <li><a href="./logout-user.php">Logout</a></li>';
}
else echo' <li  class="active"><a href="./login-user.php">Logare</a></li>';
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
    </div>
    <!-- Breadcrumb End --> 
    
    <div style="width: 100%; text-align: center;">
        
        <style>
            
            #otp-pc{
                display: block;
            }
            
            #otp-tel{
                display: none;
            }
            
            @media only screen and (min-width: 992px){
                #otp-pc{
                    margin-left: 35%;
                }
            }
            
            @media only screen and (max-width: 900px){
            
                #otp-pc{
                    display: none;
                }
            
                #otp-tel{
                    display: block;
                }
            
        </style>
        
        <section id="otp-pc" class="blog-principal" style="padding: 0;" >
        <div class="container col-lg-12 col-sm-3" style="padding-top: 6.25rem;">
            <div class="row" style="padding: 1rem;">
                <div class="col-lg-3 blog-container-div" style="padding-bottom: 6.25rem; text-align: left; margin-left: 0px; margin-right: 0px; padding-right: 0px; padding-left: 0px;">
                    <div class="blog__sidebar blog-container">
                        <div class="blog__sidebar__item">
                            <form action="user-otp.php" method="POST" autocomplete="off">
                                 <h2 class="text-center" style="width: 100%; margin-bottom: 10px; margin-left: 4rem;">Verificare cod</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="margin:auto; width:24.375rem; height: 4rem; padding:0.8rem; text-align: center; box-sizing: content-box;">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center" style="margin:auto; width:24.375rem; height: 4rem; padding:10px; text-align: center; box-sizing: content-box;">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group" style="margin:auto; width:24.375rem; height: 4rem; padding:0.8rem; text-align: center; box-sizing: content-box;">
                        <input class="form-control" type="number" name="otp" placeholder="Introdu codul de verificare" required>
                    </div>
                   <div style ="text-align: center;">
                        <div class="form-group" style="margin:auto; width:10rem; height: 4.625rem; padding:0.8rem; text-align: center; box-sizing: content-box; margin-left: 100px;">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                   </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    
    <section id="otp-tel" class="blog-principal" style="padding: 0; margin-left: auto;" >
        <div class="container col-lg-12 col-sm-3" style="padding-top: 6.25rem;">
            <div class="row" style="padding: 1rem;">
                <div class="col-lg-3 blog-container-div" style="padding-bottom: 6.25rem; text-align: left; margin-left: 0px; margin-right: 0px; padding-right: 0px; padding-left: 0px;">
                    <div class="blog__sidebar blog-container">
                        <div class="blog__sidebar__item" style="">
                            <form action="user-otp.php" method="POST" autocomplete="off">
                                 <h2 class="text-center" style="">Verificare cod</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="margin:auto; width:24.375rem; height: 4rem; padding:0.8rem; text-align: center; box-sizing: content-box;">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center" style="margin:auto; width:24.375rem; height: 4rem; padding:10px; text-align: center; box-sizing: content-box;">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group" style="margin:auto; width:24.375rem; height: 4rem; padding:0.8rem; text-align: center; box-sizing: content-box;">
                        <input class="form-control" type="number" name="otp" placeholder="Introdu codul de verificare" required>
                    </div>
                   <div style ="text-align: center;">
                        <div class="form-group" style="margin:auto; width:10rem; height: 4.625rem; padding:0.8rem; text-align: center; box-sizing: content-box; margin-left: 100px;">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                   </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    </div>
    

    <!-- Blog Section Begin --> <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="img/countdown-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>BBETTI 2022</h1>
                        <h4 style="padding-top: 14rem;">Votul se termina in: </h4>
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