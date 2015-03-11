<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?> class="container">

			<!-- header -->
			<header class="header clear" role="banner">

			<div class="container">
				<div class="col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 blank"></div>

					<!-- logo -->
					<div class="col-sm-4 col-md-4 logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/core_logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

				<div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-1 blank"></div>
			</div>



<!-- <nav-->
				<div class="row">


				<nav class="navbar navbar-default navbar-static-top">

						<div class="col-md-8 col-md-offset-2">
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
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<?php html5blank_nav(); ?>
								</ul>

							</div><!-- /.navbar-collapse -->
					
						</div>

				</nav>

				</div>
	<!-- end nav -->
				
				
				
				
			</header>
			<!-- /header -->
