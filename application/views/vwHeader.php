<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo HTTP_CSS_PATH; ?>favicon.png">
    <title>Miami</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
	<script src="<?php echo HTTP_JS_PATH; ?>das.js"></script>


    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>slider/style.css" />
    <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->


  </head>
<body>
    <?php
    $pg = isset($page) && $page != '' ?  $page :'home'  ;    
    ?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>home">MIAMI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php echo  $pg =='home' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>">Home</a></li>
            <li <?php echo  $pg =='products' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>products">Products</a></li>
            <li <?php echo  $pg =='contact' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>contactus">Contact</a></li>
            <li <?php echo  $pg =='signup' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>signup">SignUp</a></li>
<li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
      
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>home/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>home/do_login">
            <div class="form-group">
              <input type="text" placeholder="Email" name="username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="password"class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>


        </div><!--/.navbar-collapse -->
      </div>
    </div>
