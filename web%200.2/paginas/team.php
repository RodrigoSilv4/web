﻿<?php
include 'rodrigosilvaconfig.php';
?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title><?=$title?></title>
<link rel="icon" href="../favicon.png" type="image/png">
<link rel="shortcut icon" href="#" type="img/x-icon">

<meta itemprop="name" content="<?= $pg_title; ?>"/>
<meta itemprop="description" content="#"/>
<meta property="og:description" content="#">
<meta itemprop="image" content="img/logo-branca.png"/>


<!-- GOOGLE -->
<meta name="google-site-verification" content="GOo0-in0bq4CHUR8m_eFhpSDpZWJXPR2Tm6TA64nsn8" />

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href=../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/remodal.css" rel="stylesheet" type="text/css">
<link href="../css/remodal-default-theme.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/classie.js"></script>
<script type="text/javascript" src="../js/geral.js"></script>
<script type="text/javascript" src="../js/remodal.min.js"></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>
<body>
<div class="floating-alert-messages"></div>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
  <div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="../img/logo.png" alt="" width="126" height="101"></a>
        </figure>
<!--
        <h1 class="animated fadeInDown delay-07s">SITES QUE SE ADAPTAM A TODOS OS APARELHOS</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>ALCAN�E CLIENTES EM TODAS AS PLATAFORMAS, COMO SMARTPHONE, TABLET, NOTEBOOK E DESKTOP.</li>
        </ul>

				<h1 class="animated fadeInDown delay-07s">O SEU SITE FEITO A M�O</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>UM SITE BEM FEITO � COMO UMA OBRA DE ARTE �NICA E EXCLUSIVA.</li>
        </ul>

				<h1 class="animated fadeInDown delay-07s">MARKETING DIGITAL</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>DIVULGUE SUA MARCA NA INTERNET E TENHA RESULTADOS EXPRESSIVOS EM SEU NEG�CIO.</li>
        </ul>
-->
	<section class="slide">
	  <article class="slide_item first">
							<h1 class="animated fadeInDown delay-07s"><?=$title?></h1>
						</article>
	</section>
            <a data-remodal-target="modal" class="link animated fadeInUp delay-1s" href="#">RC:<?=$rc?></a>
    </div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Download</a></li>
            <li class="small-logo"><a href="#header"><img src="../img/logo.png" alt=""></a></li>
<li><a href="team.html">Nossa Team</a></li>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->

<!--main-section team-start-->
<div class="container">
        <h2>TEAM<br><br>
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Conheça nosso time de trabalho.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/<?=$img1?>.png" alt="">
                    <ul>
                        <li><a href="h#" class="fa-facebook" target="blank"></a></li>
												<li><a href="#" class="fa-instagram" target="blank"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s"><?=$name1?></h3>
                <span class="wow fadeInDown delay-03s"><?=$cargo1?></span>
            </div>
            <div class="team-leader-box">
              <div class="team-leader  wow fadeInDown delay-06s">
                <div class="team-leader-shadow"><a href="#"></a></div>
                <img src="img/<?=$img2?>.png" alt="">
                <ul>
                  <li><a href="#7" target="blank" class="fa-facebook"></a></li>
                  <li><a href="#" target="blank" class="fa-linkedin"></a></li>
                </ul>
              </div>
              <h3 class="wow fadeInDown delay-06s"><?=$name2?></h3>
                <span class="wow fadeInDown delay-06s"><?=$cargo2?></span>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/<?=$img3?>.png" alt="">
                    <ul>

                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s"><?=$name3?></h3>
                <span class="wow fadeInDown delay-09s"><?=$cargo3?></span>
            </div>
						<div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/<?=$img4?>.png" alt="">
                    <ul>

                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s"><?=$name4?></h3>
                <span class="wow fadeInDown delay-03s"><?=$cargo4?></span>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/<?=$img5?>.png" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter" target="blank"></a></li>
                        <li><a href="#" class="fa-facebook" target="blank"></a></li>
                        <li><a href="#" class="fa-github"  target="blank"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s"><?=$name5?></h3>
                <span class="wow fadeInDown delay-06s"><?=$cargo5?></span>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->
        </h2>
        <p>&nbsp;</p>
  <div class="team-leader-block clearfix">
    <div class="team-leader-box"></div>
  </div>
  </div>
</section><!--main-section team-end--><br>
<!--main-section team-start-->
</section>
<!--main-section team-end-->
<h3>&nbsp;</h3>
      </div>
  </div>
</section><!--main-section-end--><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">

    <div class="row"></div>
</section>
</div>
<Script Language='Javascript'>
<!--
document.write(unescape('%3C%66%6F%6F%74%65%72%20%63%6C%61%73%73%3D%22%66%6F%6F%74%65%72%22%3E%0A%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6E%74%61%69%6E%65%72%22%3E%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%66%6F%6F%74%65%72%2D%6C%6F%67%6F%22%3E%3C%61%20%68%72%65%66%3D%22%23%22%3E%3C%69%6D%67%20%73%72%63%3D%22%69%6D%67%2F%6C%6F%67%6F%2E%70%6E%67%22%20%61%6C%74%3D%22%22%3E%3C%2F%61%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%70%3E%42%79%20%52%6F%64%72%69%67%6F%53%69%6C%76%61%40%30%36%2F%31%30%2F%32%30%31%36%3C%2F%70%3E%0A%20%20%20%20%3C%2F%64%69%76%3E'));
//-->
</Script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84861322-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
