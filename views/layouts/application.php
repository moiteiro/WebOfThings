<?php

// prevent the direct access
defined('_PREVENT-DIRECT-ACCESS') or die ("Access restrict");

?>

<!doctype html>

<home>

    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
    
      <!-- Use the .htaccess and remove these lines to avoid edge case issues.
           More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Web das Coisas</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/scripts/libs/jquery-1.6.2.min.js"><\/script>')</script>

    <!-- scripts concatenated and minified via ant build script-->
    <script defer src="/scripts/jquery-1.6.2.min.js"></script> <!-- lightweight wrapper for consolelog, optional -->
    <script defer src="/scripts/jquery-ui-1.8.16.custom.min.js"></script> <!-- jQuery UI -->
    
      <!-- CSS: implied media=all -->
      <!-- CSS concatenated and minified via ant build script-->
    <link rel="stylesheet" href="/design/stylesheets/style.css"> <!-- Generic style -->
    <!-- end CSS-->
  
    <!-- Fonts -->
    <!-- end Fonts-->
    </head>
    
    <body id="top">

        ﻿﻿﻿<div id="container">

            <div id="banner" ><img src="/design/images/logo.gif" alt="" border="0" />
                <div id="menu">
                    <ul>
                        <li><a href="<?php echo WEBSITE ?>">Inicial</a></li>
                        <li><a href="<?php echo WEBSITE.DS.'gateways' ?>">Gateways</a></li>
                        <li><a href="<?php echo WEBSITE.DS.'dispositivos' ?>">Dispositivos</a></li>
                        <li><a href="<?php echo WEBSITE.DS.'recursos' ?>">Recursos</a></li>
                        <li><a href="<?php echo WEBSITE.DS.'acoes' ?>">Ações</a></li>
                        <li><a href="<?php echo WEBSITE.DS.'log' ?>">Log</a></li>
                    </ul>

                </div>
            </div>

            <div id="content">
                <?php include(VIEW_PATH.DS.'layouts'.DS.'messages.php') ?>
                    
                <?php 
        
                if(file_exists(VIEW_PATH.DS.$route['controller'].DS.$route['view'].".php"))
                    include(VIEW_PATH.DS.$route['controller'].DS.$route['view'].".php"); 
                ?>

            </div>
            <div id="footer"><h1>2011 - Ufba</h1></div>
        </div>
    </body>
    <!-- JavaScript at the bottom for fast page loading -->
</html> 