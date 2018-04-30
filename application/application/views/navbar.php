<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 12/4/18
 * Time: 10:20 AM
 */
?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">


    .navbar-brand { position: relative; z-index: 2; }

    .navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

    .navbar .navbar-collapse { position: relative; overflow: hidden !important; }
    .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

    .navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
    .navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
    .navbar.navbar-inverse .nav-collapse { background-color: #222; }
    .navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
    .nav-collapse>li { float: right; }

    .btn.btn-circle { border-radius: 50px; }
    .btn.btn-outline { background-color: transparent; }

    .navbar-nav.navbar-right .btn:not(.collapsed) {
        background-color: rgb(111, 84, 153);
        border-color: rgb(111, 84, 153);
        color: rgb(255, 255, 255);
    }

    .navbar.navbar-default .nav-collapse,
    .navbar.navbar-inverse .nav-collapse {
        height: auto !important;
        transition: transform 0.3s;
        transform: translate(0px,-50px);
    }
    .navbar.navbar-default .nav-collapse.in,
    .navbar.navbar-inverse .nav-collapse.in {
        transform: translate(0px,0px);
    }


    @media screen and (max-width: 767px) {
        .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; }

        .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
        .navbar .nav-collapse .navbar-form { margin: 0; }
        .nav-collapse>li { float: none; }

        .navbar.navbar-default .nav-collapse,
        .navbar.navbar-inverse .nav-collapse {
            transform: translate(-100%,0px);
        }
        .navbar.navbar-default .nav-collapse.in,
        .navbar.navbar-inverse .nav-collapse.in {
            transform: translate(0px,0px);
        }

        .navbar.navbar-default .nav-collapse.slide-down,
        .navbar.navbar-inverse .nav-collapse.slide-down {
            transform: translate(0px,-100%);
        }
        .navbar.navbar-default .nav-collapse.in.slide-down,
        .navbar.navbar-inverse .nav-collapse.in.slide-down {
            transform: translate(0px,0px);
        }
    }
</style>
</head>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
    <!-- Second navbar for profile settings -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
<!--          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">-->
<!--            <span class="sr-only">Toggle navigation</span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--          </button>-->
          <div class="navbar-brand">INDIAN PUBLIC SCHOOL</div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-4">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=base_url()?>index.php/Welcome/loginCheck">Registration</a></li>
            <li><a href="<?=base_url()?>index.php/Student/search">Search</a></li>
<!--            <li><a href="#">Services</a></li>-->
<!--            <li><a href="#">Works</a></li>-->
<!--            <li><a href="#">News</a></li>-->
<!--            <li><a href="#">Contact</a></li>-->
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="<?=base_url()?>index.php/welcome/logout" aria-expanded="false" aria-controls="nav-collapse4">Logout <i class=""></i> </a>
            </li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse slide-down" role="search" id="nav-collapse4">
            <li><a href="#">Support</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="img-circle" src="https://pbs.twimg.com/profile_images/588909533428322304/Gxuyp46N.jpg" alt="maridlcrmn" width="20" /> Maridlcrmn <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=base_url()?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->
