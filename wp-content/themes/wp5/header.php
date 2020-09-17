<!DOCTYPE html>
<html>
<head><title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fitness Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- for bootstrap working -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<?php wp_head(); ?>
</head>
<body>
	<!-- header-section-starts -->	
			<div class="header-top">
			<div class="logo text-center">
				<h1><a href="<?php echo home_url(); ?>/index">Fitness Zone</a></h1>
			</div>
			<!-- navigation -->
<div class="navigation">
	<div class="container">
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
				  <ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom active"><a href="<?php echo home_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo home_url(); ?>/reserve">Services</a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo home_url(); ?>/gallery">GALLERY</a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo home_url(); ?>/contact">Contact Us</a></li>
				  </ul>
			  <div class="clearfix"></div>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</div>
<!-- //navigation -->


				<div class="clearfix"></div>
			</div>