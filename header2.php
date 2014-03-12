<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // wp_head(); ?>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>

    <!-- Le styles -->
    <link href="<?php echo get_bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_url' ); ?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet">
  </head>

  <style type="text/css">
  	#carosel {
  		background-image: url("<?php echo get_bloginfo( 'template_url' ); ?>/img/aqua.jpg");
  	}
 	</style>

  <body>
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div id="main_nav" class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<? echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->