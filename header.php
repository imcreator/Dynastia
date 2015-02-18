<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ); ?> || <?php wp_title(); ?> </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="wrap">

		<header>
			
			<!-- Bootstrap Container  -->

			<div class="fluid-container">
				
				<!-- Bootstrap Row-->

				<div class="row kontener">

						<!-- Logo -->

						<div id="logo">

							<h1><a href="index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/dynastia-logo.png" width="240" height="120px" alt=""></a></h1>

						</div><!-- Koniec Logo -->

					

						<!-- Dynamiczne Menu -->
				
						<nav>

							<ul>

								<?php wp_nav_menu( array( 'theme_location' => 'hodowla-menu') ); ?>

							</ul>

						</nav><!-- Koniec Dynamicznego Menu -->
					
					

				</div><!-- End Bootstrap Row-->

			</div><!-- End Bootstrap Container-->
		
			<div id="dashed"></div>
			 
		</header>

	