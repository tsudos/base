<!doctype html>
<html>
    <head>
        <title>Title</title>
        
        <meta name="author" content="Stéphane DUFOUR" />
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
        
        <!--La balise Copyright pour protéger son site au besoin : <meta name="copyright" content="TsudWeb" />-->
        <meta name="doc-rights" content="Copywritten Work">
        <meta name="description" content="base site PHP"/>
        <!--<meta name="generator" content="? Framework utilisé / CMS / ?" />-->

        <!--Si on veut être indéxé sur les news google : <meta name="news_keywords" content="Base, HTML, CSS,...">-->
        <meta name="google" content="index, follow"> 
        <meta name="bingbot" content="index, follow">


        <meta name="language" content="Fr">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <link rel="stylesheet" media="(min-width: 666px)" href="css/style_desktop.css" type="text/css">
        <link rel="stylesheet" href="css/form.css" type="text/css">
        <link rel="stylesheet" href="css/formMaps.css" type="text/css">
        <link rel="stylesheet" media="(max-width: 665px)" href="css/style_tab.css" type="text/css" />

        <!--Pour du Style css interne-->
        <style>
        /*style dans html prioritaire sur le css dans un fichier style*/
        </style>


        </head>

    <body>
        <div id="Ma_Page">
        <!--barre header - nav -->

            <!--Réseaux Sociaux-->
            <div id="social" class="box-social-link">
                <a href='https://github.com/'target='_blank'><i class="fab fa-github fa-1x "></i></a>
                <a href='https://www.linkedin.com/' target='_blank'><i class="fab fa-linkedin fa-1x"></i></a>
                <a href='https://www.instagram.com/'target='_blank'><i class="fab fa-instagram fa-1x"></i></a>
                <a href='https://www.facebook.com/'target='_blank'><i class="fab fa-facebook fa-1x "></i></a>
            </div>
            <!--Fin Réseaux Sociaux-->

            <!--Logo-->
            <div id="Logo">
            </div>
            <!--Fin Logo-->

            
            <!--Nav principale-->
            <div class="navigation">
                <ul>
                    <li><a href="index.php" class="menu_nav">Prez</a></li>
                    <li><a href="Front-End.php" class="menu_nav">Front-End</a></li>			
                    <li><a href="Back-End.php" class="menu_nav">Back-End</a></li>
                    <li><a href="Realisations.php" class="menu_nav">Realisations</a></li>
                    <li><a href="Projets.php" class="menu_nav">Projets</a></li>
                </ul>	
            </div>
            <!--Fin Nav principale-->

            <?php
                include('_animation.php');
            ?>