<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    
    <title>Nidoo</title>
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    
    <!-- IE10 viewport hack para Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> 
    
    <!-- Pickadate -->
    <link rel="stylesheet" href="<?php echo base_url('assets/js/pickadate/themes/default.css'); ?>">
    
    
    <!-- HTML5 shiv y Respond.js -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/js/owl-carousel/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/owl-carousel/assets/owl.theme.default.min.css'); ?>">
    
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
</head>
<body>

<!-- header -->

<div class="fullw topmenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <span><img src="<?php echo base_url('assets/images/envelope.svg'); ?>" alt=""> <a href="mailto:info@nidoo.com">info@nidoo.com</a></span>
              <span><img src="<?php echo base_url('assets/images/phone-01.svg'); ?>" alt=""> <a href="tel:+57 310 300 0000">+57 310 300 0000</a></span>
               
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-nidoo">
  <div class="container">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('site/home'); ?>">
          <img src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="Nidoo"><!-- logo nidoo -->
      </a>
    </div>

    <!-- Menú -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">BUSCA TU NIDOO</a></li>
        <li><a href="#">COMO FUNCIONA</a></li>   
        <li><a href="#" data-toggle="modal" data-target="#login">MI CUENTA</a></li>   
        <li><a href="#" class="btn btn-default">OFRECE TU NIDOO</a></li>           
      </ul>
      
    </div>
  </div>
</nav>

<!-- /header -->