<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/head/head.php'; ?>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/header/b4head.php'; ?>
        <link rel="stylesheet" type="text/css" href="/css/b4css/b4universal.css" >
        <link rel="stylesheet" type="text/css" href="/css/b4css/b4episodes.css" >
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <title>
            Vol. 5 Episodes - Civil War Digital Digest
        </title>
        <style>
            #test-col {
                
            }
            
        </style>
        <script>
            $(document).ready(function() {
                $("#episodes-dropdown").addClass("highlight-tab");
            }); //end ready function
        </script>
        <!-- Google Analytics Code -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-81785309-2', 'auto');
            ga('send', 'pageview');

        </script>
        <script src="/javascript/slug-line-popup.js"></script>
        <script src="/javascript/navbar-mousing.js"></script>
        <link rel="icon" href="data:;base64,iVBORwOKGO=" />
    </head> 
    <body>
        <div id="main-container" class="container-fluid">
            <div class="row" id="header-row">
                <header id="header" class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="/images/cwddBanner.jpg" id="logo" class="img-fluid mx-auto d-block">
                </header>
            </div>
            <div class="row" id="nav-row">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/nav/b4-nav-bar.php'; ?>
            </div>
            <div class="row" id="content-row">
                <aside class="col-md-2 col-lg-2 justify-content-center" id="left-sidebar">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/sidebar/sidebar-ad.php'; ?>
                </aside>
                <div class="col-md-8 col-lg-8" id="content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <h1 class="center" id="header-title">Civil War Digital Digest</h1>
                            <h2 class="center">Episodes, Vol. V</h2>
                            <h4 class="center">Click on the image to view the episode</h4>
                            <br>
                        </div>
                    </div>
                    <div class="row episodes-row" id="1-3-row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12" id="test-col">
                            <div class="episode-div" id="v5e1-div" >
                                <p class="popup episode-title" onclick="popup()" id="episode-one-pop">Episode 1<br>Austrian Lorenz
                                    <span class="popuptext" id="episode-one-slugline">The Austrian Lorenz Rifle</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=O5q6O_5rvzA" target="_blank">
                                    <img class="episode-pic" src="/images/v5-episodes/v5e1.jpg" alt="Civil War Digital Digest Vol.5 Episode 1" id="v5e1">
                                </a>
                            </div>
                            <div class="episode-div" id="v5e2-div">
                                <p class="popup episode-title" onclick="popup()" id="episode-two-pop">Episode 2<br>From Erasers to Tires
                                    <span class="popuptext" id="episode-two-slugline">Introduction to Rubber in 19th Century</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=j-XmsKbXXoM" target="_blank">
                                    <img class="episode-pic" src="/images/v5-episodes/v5e2.jpg" alt="Civil War Digital Digest Vol.5 Episode 2" id="v5e2">
                                </a>
                            </div>
                            <div class="episode-div" id="v5e3-div">
                                <p class="popup episode-title" onclick="popup()" id="episode-three-pop">Episode 3<br>Brass Bands
                                    <span class="popuptext" id="episode-three-slugline">Brass Bands in the War</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=7cPbuTLVYJQ" target="_blank">
                                    <img class="episode-pic" src="/images/v5-episodes/v5e3.jpg" alt="Civil War Digital Digest Vol.5 Episode 3" id="v5e3">
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="row" id="4-6-row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="episode-div" id="v5e4-div">
                                <p class="popup episode-title" onclick="popup()" id="episode-four-pop">Episode 4<br>Pineapple
                                    <span class="popuptext" id="episode-four-slugline">To Eat Fresh Pineapple</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=Zz2QzqthBng" target="_blank">
                                    <img class="episode-pic" src="/images/v5-episodes/v5e4.jpg" alt="Civil War Digital Digest Vol.5 Episode 4" id="v5e4">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <aside class="col-md-2 col-lg-2 justify-content-center" id="right-sidebar">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/sidebar/sidebar-ad.php'; ?>
                </aside>
            </div>
            <div class="row" id="footer-row">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/b4-footer.php'; ?>
            </div>
        </div>
    </body>
</html>