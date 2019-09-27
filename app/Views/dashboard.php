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
    <script src="<?php echo base_url('assets/js/air-port-codes-api-min.js') ?>"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>-->
    <style>
        body{

            background-color: #eee;
        }

        table th , table td{
            text-align: center;
        }

        table tr:nth-child(even){
            background-color: #e4e3e3
        }

        th {
            background: #6dedde;
            color: #fff;
        }

        .pagination {
            margin: 0;
        }

        .pagination li:hover{
            cursor: pointer;
        }

        .header_wrap {
            padding:30px 0;
        }
        .num_rows {
            width: 20%;
            float:left;
        }
        .tb_search{
            width: 20%;
            float:right;
        }
        .pagination-container {
            width: 70%;
            float:left;
        }

        .rows_count {
            width: 20%;
            float:right;
            text-align:right;
            color: #999;
        }
    </style>
    <!-- =======================================================
      Theme Name: Bikin
      Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body onload="hideRecommend()">
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
                <a class="navbar-brand" href="<?php echo base_url('public'); ?>">Ticket App</a>
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
                        <input type="text" id="from" class="form form-control autocomplete">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" id="destination" class="form form-control autocomplete">
                    </div>
                    <div class="col-sm-2">
                        <input id="date" type="date" class="form form-control">
                    </div>

                    <div class="col-sm-3"></div>
                </div>
                 <br/>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-2">
                       <button class="btn btn-info" onclick="dashboardSearch()">Search</button>
                        <br>
                        <h1><b>Rekomendasi</b></h1>
                    </div>
                    <div class="col-sm-2">

                    </div>

                    <div class="col-sm-3"></div>
                </div>
            </div>

            <div class="recommend">
                <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="hi-icon-wrap hi-icon-effect" style="height:200px;">
                            <img  class="img-responsive" src="<?php echo base_url('assets/images/garuda.png'); ?>" alt="">


                        </div>
                        <h2>Fully Responsive</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>

                    </div>
                </div>
                <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="hi-icon-wrap hi-icon-effect" style="height:200px;">
                            <img  class="img-responsive" src="<?php echo base_url('assets/images/airasia.png'); ?>" alt="">


                        </div>
                        <h2>Retina Ready</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>

                    </div>
                </div>
                <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="hi-icon-wrap hi-icon-effect" style="height:200px;">
                            <img  class="img-responsive" src="<?php echo base_url('assets/images/batikair.png'); ?>" alt="">


                        </div>
                        <h2>Easily Customize</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>

                    </div>
                </div>
                <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="hi-icon-wrap hi-icon-effect" style="height:200px;">
                            <img  class="img-responsive" src="<?php echo base_url('assets/images/lion.png'); ?>" alt="">


                        </div>
                        <h2>Quality Code</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="recommend">
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">


                    </div>
                    <button class="btn btn-sucess">Beli</button>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">

                    </div>
                    <button class="btn btn-sucess">Beli</button>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">


                    </div>
                    <button class="btn btn-sucess">Beli</button>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">


                    </div>
                    <button class="btn btn-sucess">Beli</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container recommend">
        <div class="header_wrap">
            <div class="num_rows">

                <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
                    <select class  ="form-control" name="state" id="maxRows">


                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                        <option value="5000">Show ALL Rows</option>
                    </select>

                </div>
            </div>
            <div class="tb_search">
                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
            </div>
        </div>
        <table class="table table-striped table-class" id= "table-id">


            <thead>
            <tr>
                <th>From</th>
                <th>Destination</th>
                <th>Maskapai</th>
                <th>Date</th>
                <th>Info</th>
                 <th>Price</th>
                 <th>Buy</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">
                    <!--	Here the JS Function Will Add the Rows -->
                </ul>
            </nav>
        </div>
        <div class="rows_count">Showing 11 to 20 of 91 entries</div>

    </div> <!-- 		End of Container -->



    <!--  Developed By Yasser Mas -->
</div>







<footer>

    <!--/#contact-->

<!--    <div class="social-icon">-->
<!--        <div class="container">-->
<!--            <div class="col-md-6 col-md-offset-3">-->
<!--                <ul class="social-network">-->
<!--                    <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>-->
<!--                    <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>-->
<!--                    <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>-->
<!--                    <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>-->
<!--                    <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>-->
<!--                    <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
<!--                    <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<!--        <script src="air-port-codes-api-min.js"></script>-->

<script src="<?php echo base_url('assets/js/flight.js') ?>"></script>
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
