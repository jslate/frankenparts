<html>
<head>
  <script type="text/javascript" src="<?php echo site_url('/../javascripts/jquery-1.9.1.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo site_url('/../javascripts/scripts.js'); ?>"></script>
  <link href="<?php echo site_url('/../bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

  <style>
    body {
      padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
  </style>
  <link href="<?php echo site_url('/../bootstrap/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
  <link href="<?php echo site_url('/../css/styles.css'); ?>" rel="stylesheet">
  <title><?php echo $title ?> - FrankenParts</title>
</head>
<body>

  <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo site_url('/') ?>">
              <img src="<?php echo site_url('/../images/title.png'); ?>" alt="FrankenParts" />
            </a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="<?php echo site_url('/categories') ?>">Categories</a></li>
                <li class="active"><a href="<?php echo site_url('/parts') ?>">Parts</a></li>
                <li class="active"><a href="<?php echo site_url('/order') ?>">Current Order</a></li>
                <li class="active"><a href="<?php echo site_url('/orders/past_orders') ?>">Past Orders</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>


  <div class="container">
    <div class="logo">
      <img src="<?php echo site_url('/../images/logo.png'); ?>" alt="logo" />
    </div>

    <h1><?php echo $title ?></h1>
