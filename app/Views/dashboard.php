<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ticket App</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('bikin/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('bikin/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bikin/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bikin/css/overwrite.css') ?>">
    <link href="<?php echo base_url('bikin/css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('bikin/css/style.css') ?>" rel="stylesheet" />
    <!-- =======================================================
      Theme Name: Bikin
      Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ticket App</a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#header">Plane</a></li>
                    <li><a href="#feature">Bus</a></li>
                    <li><a href="#gallery">Hotel</a></li>

                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->

<!--/#slider-->

<div id="feature">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>Search</h3>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <input type="text" class="form form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="date" class="form form-control">
                    </div>

                    <div class="col-sm-3"></div>
                </div>
                 <br/>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-2">
                       <button class="btn btn-info">Search</button>
                    </div>
                    <div class="col-sm-2">

                    </div>

                    <div class="col-sm-3"></div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <i class="fa fa-laptop"></i>
                        <h2>Fully Responsive</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <i class="fa fa-heart-o"></i>
                        <h2>Retina Ready</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <i class="fa fa-cloud"></i>
                        <h2>Easily Customize</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <i class="fa fa-camera"></i>
                        <h2>Quality Code</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<footer>

    <!--/#contact-->

    <div class="social-icon">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <ul class="social-network">
                    <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="copyright">
            &copy; Bikin Theme. All Rights Reserved.
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bikin
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('bikin/js/jquery-2.1.1.min.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('bikin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('bikin/js/parallax.min.js') ?>"></script>
<script src="<?php echo base_url('bikin/js/wow.min.js') ?>"></script>
<script src="<?php echo base_url('bikin/js/jquery.easing.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('bikin/js/fliplightbox.min.js') ?>"></script>
<script src="<?php echo base_url('bikin/js/functions.js') ?>"></script>
<script src="<?php echo base_url('bikin/contactform/contactform.js') ?>"></script>

</body>

</html>
