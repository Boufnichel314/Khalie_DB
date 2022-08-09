<?php include 'sendemail.php';
      include 'responduser.php';
            include 'config.php';
            include 'login.php';
            include 'signin.php';
        ////////////////////
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khalie Ahl Fes</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>
 <?php echo $alert; ?>
 <?php echo $alertt; ?>
 <?php echo $alerttt; ?>
<!-- header section starts  -->
<header class="header" style="z-index:1;">

    <a href="http://localhost/Testing_php/Testing/" class="logo"> <i class="fas fa-shopping-basket"></i> Khalie Ahl Fes </a>

    <nav class="navbar">
        <a href="http://localhost/Testing_php/Testing/">home</a>
        <a href="#">Khalie Traditionnel</a>
        <a href="#">Khalie a l'huile d'olive</a>
        <a href="#">Khalie Agrich</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

     <div class="shopping-cart">
        <div class="box">
            <!-- <i class="fas fa-trash"></i> -->
            <img src="image/feature-img-1.jpg" alt="">
            <div class="content">
                <h3>Traditionnel</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <!-- <i class="fas fa-trash"></i> -->
            <img src="image/feature-img-2.png" alt="">
            <div class="content">
                <h3>A l'huile</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <!-- <i class="fas fa-trash"></i> -->
            <img src="image/feature-img-3.jpg" alt="">
            <div class="content">
                <h3>Agrich</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>
     <form action="" method="post" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" name="txt_uname" required class="box">
        <input type="password" placeholder="your password" name="txt_pwd" required class="box">
        <p><a href="#"></a></p>
        <p>don't have an account <a href="#" class="create">create now</a></p>
        <input type="submit" value="login now" name="but_submit" class="btn">
    </form>
    <form action="" method="post" class="signin-form login-form">
        <h3>signin now</h3>
        <input type="text" placeholder="your name" name="namme" class="box" required>
        <input type="email" placeholder="your email" name="email" class="box" required>
        <input type="password" placeholder="your password" name="passwordd" class="box" required>
        <input type="password" placeholder="confirm password" name="cpasswordd" class="box" required>
        <input type="submit" value="signin now" name="sign_btn" class="btn btn-signin">
        <!-- <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p> -->
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Bienvenue chez <span>Khalie</span> Ahl Fes</h3>
        <p>la societe Khalie Ahl Fes, crees en 2008 est agree sur le plan sanitaire par <span>l'ONSSA</span></p>
        <!-- <a href="#" class="btn">shop now</a> -->
    </div>

</section>

<!-- home section ends -->
<section class="about" id="about">

    <h1 class="heading"> <span>historique</span> Khalie Ahl Fes </h1>

    <div class="row">

        <div class="image">
            <video src="./WhatsApp Video 2022-07-18 at 11.28.40 AM.mp4" controls autoplay muted></video>
        </div>

        <div class="content">
            <h3>qui sommes-nous ?</h3>
            <p>La societe KHALIE AHL Fes, creee en 2008 est agreee sur le plan sanitaire apr l"ONSSA sous le numero PAV.9.8.13, suivi d'un deuxieme agrement sous le numero PAV.10.1.20 pour l'exercice d'activites : Production et Commercialisation de Khahlia</p>
            <!-- <a href="#" class="btn">learn more</a> -->
        </div>

    </div>

</section>

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> notre <span>produits</span> </h1>

    <div class="box-container">

        <div class="box" id="boxing">
            <div class="badge">Halal et 100% marocaine</div>
            <img src="image/feature-img-1.jpg" alt="">
            <h3>Khalie Traditionnel</h3>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
            <a href="#" class="btn">Visitez</a>
        </div>

        <div class="box">
            <div class="badge">Halal et 100% marocaine</div>
            <img src="image/feature-img-2.png" alt="">
            <h3>Khalie a l'huile d'olive</h3>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
            <a href="#" class="btn">Visitez</a>
        </div>

        <div class="box">
            <div class="badge">Halal et 100% marocaine</div>
            <img src="image/feature-img-3.jpg" alt="">
            <h3>Khalie Agrich</h3>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
            <a href="#" class="btn">Visitez</a>
        </div>
    </div>
</section>
<div class="select">
		
</div>
<!-- features section ends -->
<section class="delivery" id="delivery">
    <div class="container">
        <div class="delivery-data">
            <h1>notre historique</h1>
            <h2>Originaire de la ville Fes, capitale spirituelle et 
                culturelle du Maroc, connue par ses oulemas, ses artisans
                 et son art culinaire, provient cette recette savoureuse a 
                 base de viande appelee KHALIA <br>
                 Il y a bien longtemps a l'occasion de la fete religieuse AID AL ADHA et en absence de moyens de
                  conservation frigorifiques, une grand partie de la viande ovine etait conservee traditionnellement.</h2>

            <h2>Au fil du temps, les habitants de Fes ont bien maitrise cette recette et
                    traditionnel du produit en creant la societe Khlie Ahl Fes</h2>
            <a href="#maps" class="btn">Visitez</a>

        </div>
    </div>
</section>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--Start last section-->
<section class="last"> 
<div class="last-text">

</div>
<div class="last-img">

</div>

</section>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<section class = "padding-y about" id = "about">
    <div class = "container">
      <div class = "about-row">
        <div class = "about-col-1">
          <img src = "image/1320x1320.webp" alt = "">
        </div>
        <div class = "about-col-2">
          <!-- title -->
          <div class = "title">
            <h2>La securite Alimentaire notre priorite</h2>
            <div class = "line center">
              <div></div>
              <span><i class = "fas fa-utensils"></i></span>
              <div></div>
            </div>
          </div>
          <!-- end of title -->
          <p class = "text">l'Hygiene, la securite, la qualite et la preservaton de l'environnement sont des domaines etroitement lies que KHLIE AHL FES developpe de plus en plus. Depuis la creation, la societe ne cesse d;asseoir son pricessus de respect strict des normes en vue d'assurer une qualite et une securite alimentaire irreprochable de ses produis.</p>
          <p class = "text">Les normes HACCP sont de rigueur au sein de la societe, jusqu'a la decoupe et la prerparation des produits Khlia.</p>
        </div>
        <div class = "about-col-3">
          <img src = "image/3e14f180a9247fb2da48aae2dab01d98-1-270x258.jpg" alt = "">
        </div>
      </div>
    </div>
  </section>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row" id="maps">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.1181847147677!2d-5.035308315169683!3d33.98949798062299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8a422cf8506d%3A0x48bb128e0317d15e!2sKhlia%20Ahl%20Fes!5e0!3m2!1sar!2sma!4v1658745124764!5m2!1sar!2sma" allowfullscreen="" loading="lazy"></iframe>
        <form action="" method="post" autocomplete="off">
        <input autocomplete="false" name="hidden" type="text" style="display:none;">
            <h3>Contactez-nous</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <span class="fas fa-comments"></span>
                <textarea type="text" name="message" placeholder="Message" rows="1" style="resize:none; overflow: hidden"></textarea>
            </div>
            <input type="submit" name="submit" value="contact now" class="btn">
        </form>

    </div>

</section>
<div class="cover">
    <!--Clients section starts-->
<section class="clients-container">
    <div class="boxx">
        <div class="clients-text">
            <h1 class="heading"> Nous <span>clients</span></h1>
            <!-- <h3>Nos clients privilegies</h3> -->
        <!-- <p>se sont des personnes physiques, des hotels, des restaurants</p> -->
        </div>
        <div class="clients">
        <a href="https://www.carrefourmarket.ma/"><img src="clients/carrefour.png" alt=""></a>
        <a href="https://www.aswakassalam.com/"><img src="clients/aswak_salam.png" alt=""></a>
        <a href="https://www.facebook.com/Boucherie-Ahl-Fes-146424359314908/"><img src="clients/boucherie_ahlfes.png" alt=""></a>
        <a href="https://atacadaomaroc.ma/"><img src="clients/atakadao.png" alt=""></a>
        </div>
    </div>
</section>
<!-- footer section starts  -->

 <section class="footer">
    <h1 class="heading"><span>Appelez </span>nous</h1>
    <div class="box-container">

        <div class="box">
            <h3> Khalie Ahl Fes <i class="fas fa-shopping-basket"></i> </h3>
            <p>Lotissement inbiath III, lot S6-3, ZI Ras El Ma, Fes Moulay Yacoub-Maroc</p>
            <div class="share">
                <a href="https://www.facebook.com/Khlie-Ahl-Fes-100190415429700" class="fab fa-facebook-f"></a>
                <!-- <a href="#" class="fab fa-twitter"></a> -->
                <a href="https://www.instagram.com/khlieahlfes/?fbclid=IwAR2_ZZTq78s1NKgh8udsyvLRKUrPwdP7V9yOoUGP9ZQ07Xhk0nmo-gqf1QA" class="fab fa-instagram"></a>
                <!-- <a href="#" class="fab fa-linkedin"></a> -->
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> 05.35.60.13.13 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +212 666199971 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> khlia_ahl_fes@yahoo.fr </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Ras El Ma, Fes Moulay Yacoub </a>
        </div>
    </div>
</section>
</div> 

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>
<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>