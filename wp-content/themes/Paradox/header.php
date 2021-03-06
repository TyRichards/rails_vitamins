<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<meta name="author" content="Shelly Morgan">
		<title><?php wp_title('|', true, 'right'); ?></title>		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">	

		<?php wp_head(); ?>
	
		<!--[if lte IE 8]>
			<meta http-equiv="REFRESH" content="0;url=http://www.browsehappy.com/">
		<![endif]-->	
		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-54073020-1', 'auto');
		  ga('send', 'pageview');

		</script>		
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Analytics -->	
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-52032811-1', 'theparadoxjournal.com');
		  ga('send', 'pageview');

		</script>		

		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->	

		<div id="bg">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg" alt="Sullivan Chimney Sweep"> -->
		</div>				
		
		<?php do_action('before'); ?> 
		<header>
			<section class="top-navbar">				
				<nav class="navbar navbar-default" role="navigation">
				  	<div class="container-fluid">				    	
				    	<div class="navbar-header">
					      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					      	</button>				      	
							<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" 
							   title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">					
								<img alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" src="<?php echo get_template_directory_uri(); ?>/assets/images/do_rails_logo_sm.png">
							</a>												      
				    	</div>
						<div class="collapse navbar-collapse" id="header-navbar-collapse">							
							<?php wp_nav_menu(array('theme_location' => 'primary', 
													'container' => false, 
													'menu_class' => 'nav navbar-nav navbar-right', 
													'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
						</div> <!--.navbar-collapse-->				    
				 	</div><!-- /.container-fluid -->
				</nav>				
			</section> <!-- section-navbar -->
		</header>					
			
		<div class="body-content">				