<?php
/**
 * The template for displaying the header
 *
 * @package Ave theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#3ed2a7">
	
	<link rel="shortcut icon" href="./favicon.png" />
	
	<title>Ave HTML Template</title>
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600,700" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/liquid-icon/liquid-icon.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme-vendors.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/themes/virtus-1.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/revolution/css/settings.css">
	
	<!-- Head Libs -->
	<script async src="<?php echo get_template_directory_uri(); ?>/assets/vendors/modernizr.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="classic" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
	<?php wp_body_open(); ?>
	<div id="wrap">
		
		<header class="main-header main-header-overlay bb-fade-white-015" data-sticky-header="true" data-sticky-options='{ "stickyTrigger": "first-section" }'>
			
			<div class="mainbar-wrap">
				<div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
				<div class="container-fluid mainbar-container">
					<div class="mainbar">
						<div class="row mainbar-row align-items-lg-stretch px-4">
							
							<div class="col pr-5">
								<div class="navbar-header">
									<a class="navbar-brand pt-20 pb-20" href=""<?php bloginfo('url'); ?>/" rel="home">
										<span class="navbar-brand-inner">
											<img class="logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/opus-dark.svg" alt="Ave WordPress Theme">
											<img class="mobile-logo-default" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/opus-dark.svg" alt="Ave HTML Template">
											<img class="logo-default" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/opus-blue.svg" alt="Ave HTML Template">
										</span>
									</a>
									<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
										<span class="sr-only">Toggle navigation</span>
										<span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>
										</span>
									</button>
								</div><!-- /.navbar-header -->
							</div><!-- /.col -->
							
							<div class="col">
								
								<div class="collapse navbar-collapse" id="main-header-collapse">
									
									<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-center" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">
										
										<li class="active">
											<a href="#content">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Home</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#features">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Features</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#case-studies">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Case Studies</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#services">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Services</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#team">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Team</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#blog">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Blog</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#contact">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Contact</span>
												</span>
											</a>
										</li>
									
									</ul><!-- /#primary-nav  -->
								
								</div><!-- /#main-header-collapse -->
								
							</div><!-- /.col -->
						
							<div class="col text-right">

								<div class="header-module">
									<a href="https://www.youtube.com/watch?v=A_6uV9A12ok" class="btn btn-solid text-uppercase circle btn-bordered border-thick fresco font-size-12 lh-15 font-weight-bold ltr-sp-2 px-2">
										<span>
											<span class="btn-txt">Discover</span>
										</span>
									</a>
								</div><!-- /.header-module -->
								
							</div><!-- /.col -->
						
						</div><!-- /.mainbar-row -->
					</div><!-- /.mainbar -->
				</div><!-- /.mainbar-container -->
			</div><!-- /.mainbar-wrap -->
			
		</header><!-- /.main-header -->
