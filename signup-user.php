<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>BBETTI | Sign-up user</title>
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

</head>

<body>


    <!-- Header Section Begin -->
     <header class="header" style="background-color: #cd242d; background: rgba(205, 36, 45, .9);">
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
else echo' <li class="active"><a href="./login-user.php">Logare</a></li>';
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
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links" style="margin-bottom: 7rem;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="blog-principal" style="padding: 0;">
        <div class="container col-lg-12 col-sm-3" style="padding-top: 6.25rem;">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="section-title" style="margin-bottom: 0rem;">
                        <h2 class="text-principal"></h2>
                        <h1 class = "text-bbetti-principal" style="font-size: 2.0625rem; color: black;">B B E T T I</h1>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 blog-container-div">
                    <div class="blog__sidebar blog-container">
                        <div class="blog__sidebar__item" >
                            <form action="signup-user.php" method="POST" autocomplete="">
                                 <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                                <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Nume" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail Upb" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Parola" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirmare parola" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Ai deja cont? <a href="login-user.php">Loghează-te aici</a></div>
                </form>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <div class="blog__sidebar__title">
                                <h4>Retele sociale</h4>
                            </div>
                            <div class="blog__sidebar__social"style="margin-bottom:10rem;">
                                <a href="https://www.facebook.com/lseorgro/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.youtube.com/user/lsebucuresti/videos?app=desktop"><i class="fa fa-youtube"></i></a>
                                <a href="https://www.instagram.com/ligastudentilorelectronistilse/"><i class="fa fa-instagram"></i></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
 <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="img/countdown-bg.webp" >
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
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
</body>

</html>