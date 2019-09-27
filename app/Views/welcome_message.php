<!doctype html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <title>Ticket Solution </title>

        <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/coming-sssoon.css') ?>" rel="stylesheet" />

        <!--     Fonts     -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
<!--        <script src="--><?php //echo base_url('assets/js/jquery-1.10.2.js') ?><!--" type="text/javascript"></script>-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
        <!--        <script src="air-port-codes-api-min.js"></script>-->

        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/flight.js') ?>" type="text/javascript"></script>
<!--        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">-->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url('assets/js/air-port-codes-api-min.js') ?>"></script>

    </head>
</head>
<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--                        <img src="images/flags/US.png"/>-->
                        English(US)
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
<!--                        <li><a href="#"><img src="images/flags/DE.png"/> Deutsch</a></li>-->
<!--                        <li><a href="#"><img src="images/flags/GB.png"/> English(UK)</a></li>-->
<!--                        <li><a href="#"><img src="images/flags/FR.png"/> Français</a></li>-->
<!--                        <li><a href="#"><img src="images/flags/RO.png"/> Română</a></li>-->
<!--                        <li><a href="#"><img src="images/flags/IT.png"/> Italiano</a></li>-->
<!---->
<!--                        <li class="divider"></li>-->
<!--                        <li><a href="#"><img src="images/flags/ES.png"/> Español <span class="label label-default">soon</span></a></li>-->
<!--                        <li><a href="#"><img src="images/flags/BR.png"/> Português <span class="label label-default">soon</span></a></li>-->
<!--                        <li><a href="#"><img src="images/flags/JP.png"/> 日本語 <span class="label label-default">soon</span></a></li>-->
<!--                        <li><a href="#"><img src="images/flags/TR.png"/> Türkçe <span class="label label-default">soon</span></a></li>-->

                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
<!--                    <a href="#">-->
<!--                        <i class="fa fa-facebook-square"></i>-->
<!--                        Share-->
<!--                    </a>-->
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-register"></i>
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        Login
                    </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('<?php echo base_url("assets/images/gambar_header.jpg") ?>')">

    <!--    Change the image source '/images/default.jpg' with your favourite image.     -->

    <div class="cover black" data-color="black"></div>

    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            Ticket App
        </h1>
        <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->

        <div class="content">
            <h4 class="motto">Your Ticket Solution</h4>
            <div class="subscribe">
                <h5 class="info-text">
                    Temukan tiket pesawat disini
                </h5>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-inline">
                           <div class="row">
                               <div class="col-sm-3"><input type="text" name="term" class="autocomplete form form-control" id="from" placeholder="From" /></div>
                               <div class="col-sm-3"><input type="text" name="term" class="autocomplete form form-control" id="destination" placeholder="Destination" /></div>
                               <div class="col-sm-3"><input type="date" class="form form-control" id="date"></input></div>
                               <div class="col-sm-3"> <button style="width:100%;" type="submit" class="btn btn-danger btn-fill" onclick="searchFlight()">Search</button></div>


                           </div><br/>
                            <div class="row">


                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/coming-sssoon-page">here.</a>
        </div>
    </div>
</div>
</body>
</html>