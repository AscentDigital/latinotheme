<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">   -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php echo bloginfo('name'); ?></title>
    <!-- Bootstrap -->
    <?php wp_head(); ?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- @navbar -->
    <div class="navbar navbar-default no-margin hidden-xs">
      <div class="container"> 
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="text-capitalize text-white hidden-xs"><i class="fa fa-facebook"></i></a></li> 
            <li><a href="#" class="text-capitalize text-white hidden-xs"><i class="fa fa-twitter"></i></a></li> 
            <li><a href="#" class="text-capitalize text-white hidden-xs"><i class="fa fa-youtube"></i></a></li> 
            <li><a href="#" class="text-capitalize text-white hidden-xs"><i class="fa fa-instagram"></i></a></li>  
            <li><a href="#" class="text-shrink text-capitalize">login</a></li> 
            <li><a href="#" class="text-shrink text-capitalize">registro</a></li> 
            <li><a href="#" class="text-shrink text-capitalize">ciudades</a></li> 
          </ul>
      </div>
    </div>
    <div class="btn-group btn-group-justified visible-xs" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <a href="#" role="button" class="btn btn-info text-black text-uppercase">login</a>
      </div>
      <div class="btn-group" role="group">
        <a href="#" role="button" class="btn btn-info text-black text-uppercase">registro</a>
      </div>
      <div class="btn-group" role="group">
        <a href="#" role="button" class="btn btn-info text-black text-uppercase">ciudades</a>
      </div>
    </div>
    <!-- @site-banner -->
    <div class="bg-black text-white banner-jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logotop.png" class="img-responsive" alt="">
          </div>
          <div class="hidden-xs hidden-sm col-sm-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pepsi.jpg" class="img-responsive" alt="pepsi-ad">
          </div>
        </div>
      </div>
    </div>  
    <!-- @site-banner-ad-responsive -->
    <div class="visible-xs visible-sm ad-banner-img" style=""> 
          <img src="<?php echo get_template_directory_uri(); ?>/images/pepsi.jpg" class="img-responsive" width="100%" alt="pepsi-ad"> 
    </div>
    
    <!-- @secondary-navbar -->
    <nav class="navbar navbar-inverse relative no-side-padding banner depth-4 ">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header visible-xs">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Latino Noise</a>
        </div> 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <li class="active"><a href="./" class="padding-nav text-uppercase">inicio</a></li> 
              <li><a href="./noticias.html" class="padding-nav text-uppercase">noticias</a></li> 
              <li><a href="./musica.html" class="padding-nav text-uppercase">Música</a></li> 
              <li><a href="./club-y-mas.html" class="padding-nav text-uppercase">clubs y Mas</a></li> 
              <li><a href="./calendario.html" class="padding-nav text-uppercase">calendario</a></li> 
              <li><a href="./galerias.html" class="padding-nav text-uppercase">galerias</a></li> 
              <li><a href="./latinonoise-tv-lista.html" class="padding-nav text-uppercase">latino noise tv</a></li>  
              <li><a href="./ganatelo.html" class="padding-nav text-uppercase">ganatelo</a></li> 
          </ul>  
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid --> 
      <div class="banner-left absolute visible-lg" style="left: 0px;top:0px;"></div>
      <div class="banner-right absolute visible-lg" style="right: 0px;top:0px;"></div>
    </nav> 