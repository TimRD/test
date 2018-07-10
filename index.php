<!DOCTYPE html>
<html>
<!-- First commit under mac-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F9">
    <title>TrouveTonExcuse</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="red accent-4" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo">Trouve Ton Excuse</a>

                    <ul class="right hide-on-med-and-down">
                    <li><a href="#intro">Service</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#intro">Service</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot red accent-4" id="index-banner">
<?php 
if(isset($_GET['action'])){
    ?>
    <br><br><br>
    <?php
    if($_GET['action'] == "excusetype"){
    ?>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=latetype" >Retard</a>
        </p>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=absence" >Absence</a>
        </p>

    <?php
    }
    else if($_GET['action'] == "latetype"){
    ?>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=intercours" >Intercours</a>
        </p>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=bus" >Bus</a>
        </p>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=marche" >Marche</a>
        </p>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=train" >Train</a>
        </p>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=velo" >velo</a>
        </p>
    <?php
    }
    else if($_GET['action'] == "absence"){
    ?>
        <p class="center-align" >
            EXCUSE ABSENCE
        </p>
    <?php
    }
    else {
    ?>
        <p class="center-align" >
            <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=excusetype">Trouve ton excuse !</a>
        </p>
    <?php
    }
}
else{ ?>
    <div class="container ">
        <h1 class="text_h center header cd-headline letters type">
            <span>Excusez-moi madame</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">la CPE voulait me parler</b>
                <b>mon chien s'est cassé une patte</b>
                <b>je gardais ma petite soeur</b>
                <b>je me suis fais controler dans le bus</b>
                <b>j'étais aux toilettes</b>
            </span>
            <br/>
        </h1>
    </div>
    <p class="center-align" >
        <a class="waves-effect waves-light btn-large indigo darken-2" href="index.php?action=excusetype">Trouve ton excuse !</a>
    </p>
<?php
}
?>


</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2"> <span class="span_h2 indigo-text darken-4">Trouve Ton Excuse</span> est une application destinée aux jeunes fréquemment en retard. Elle vous permet d'accéder à plus de <span class="span_h2 indigo-text darken-4">200 excuses</span> en tout genre !</h2>
            </div>
            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-timer red-text accent-4"></i>
                    <h5 class="promo-caption">Ne perds pas de temps</h5>
                    <p class="light center">Fini de chercher une excuse valable tout le temps de ton trajet, tu peux directement la trouver ici et profiter pleinement de ton voyage !</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-center-focus-weak red-text accent-4"></i>
                    <h5 class="promo-caption">Trouver l'excuse qu'il te faut</h5>
                    <p class="light center">Grace à ses nombreuses catégories, tu peux trouver l'excuse qui correspond à ta situation.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-phone-android red-text accent-4"></i>
                    <h5 class="promo-caption">Télécharge l'application</h5>
                    <p class="light center">Tu peux dès à présent <a href="https://play.google.com/store/apps/details?id=com.ionicframework.excusezmoimadame397203&hl=fr">télécharger l'application sur le play store ! </a> </p>
                </div>
            </div>
        </div>
    </div>
</div>



<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/watch.jpg"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b indigo-text darken-4"> Our Team </h2>
        <div class="row">

            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Timothée<br>Marguier<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Co-founder/Developer</a></em></small></span>
                        <p>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://www.facebook.com/">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://twitter.com/">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://plus.google.com/u/0/">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://www.linkedin.com/in/">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar4.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Nicolas <br>Sebag<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Co-founder</a></em></small></span>
                        <p>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://www.facebook.com/theOneAI">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://twitter.com/theOneAI">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://plus.google.com/u/0/theOneAI">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="indigo-text darken-4 text-lighten-2" href="https://www.linkedin.com/in/theOneAI">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer red accent-4 scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <img src="img/trouvetonexcuse_logo.png" alt="logo not loaded" style="width: 50%;">
                <h6 class="white-text">TrouveTonExcuse.com</h6>
                <ul>
                    <li><a class="white-text" href="http://www.TrouveTonExcuse.com/">Home</a></li>
                    <li><a class="white-text" href="http://www.TrouveTonExcuse.com/">Blog</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/TrouveTonExcuse/">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/TimRD">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright red accent-4">
        <div class="container">
            Made by <a class="white-text" href="http://vps488780.ovh.net/">Timothée Marguier</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>

        </div>
    </div>
</footer>
    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>

    </body>
</html>
