<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>A new education era</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="RSINIG CHILD Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="<?=base_url()?>Static/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url()?>Static/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <link rel="stylesheet" href="<?=base_url()?>Static/home/css/flexslider.css" type="text/css" media="screen" />
    <script src="<?=base_url()?>Static/home/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Peralta' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?=base_url()?>Static/home/js/move-top.js"></script>
    <script type="text/javascript" src="<?=base_url()?>Static/home/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- body -->
<div class="body-content">
    <div class="container">
        <div class="body-content1">
            <!-- header -->
            <div class="logo-search">
                <div class="logo">
                    <h1><a href="<?=base_url('index.php/Student/home')?>">INDIAN<span class="color">&nbsp;PUBLIC</span><span class="color1">&nbsp;SCHOOL</span><span class="color2"></span> <span></span> <i></i></a></h1>
                </div>
<!--                <div class="search">-->
<!--                    <form>-->
<!--                        <input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here...';}" required="">-->
<!--                        <input type="submit" value=" " >-->
<!--                    </form>-->
<!--                </div>-->
                <div class="clearfix"> </div>
            </div>
            <!-- //header -->
            <!-- nav -->
            <div class="navigation">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="stroke">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?=base_url('index.php/Student/home')?>">Home</a></li>
                                <li><a href="<?=base_url('index.php/Student/services')?>" class="hvr-rectangle-out">Services</a></li>
                                <li><a href="<?=base_url('index.php/Student/events')?>" class="hvr-rectangle-out">News & Events</a></li>
                                <li><a href="#" class="hvr-rectangle-out">About</a></li>
                                <li><a href="<?=base_url('index.php/Student/gallery')?>" class="hvr-rectangle-out">Gallery</a></li>
                                <li><a href="<?=base_url('index.php/Student/mail')?>" class="hvr-rectangle-out">Mail Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- //nav -->