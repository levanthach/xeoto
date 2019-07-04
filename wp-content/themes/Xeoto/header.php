<!DOCTYPE html>
<html>
<head>
	<title>Xe Ô Tô</title>
	<meta name="description" content="Description Web"/>
	<meta name="keywords" content="" />
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.png" type="image/x-icon"/>
    <?php  wp_head(); ?>
</head>
<body>
	<div class="lh-wrapper">
		<div class="lh-header">
			<div class="header-position">
				<!-- end block-header -->
				<div class="block-menu">
					<div class="container">
						<div class="row">
							<div class="box-logo col-lg-2 col-4">
								<a href="" class="logo"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/assests/img/phan-gia-huy.png" alt=""></a>
							</div>
							<div class="box-menu col-lg-10">
								<nav id="drop_down">
									<ul class="lh2-ul">
										<?php wp_nav_menu( 
										  array( 
										      'theme_location' => 'topmenu', 
										      'container' => 'false', 
										      'menu_id' => 'header-menu', 
										      'menu_class' => 'top-menu'
										   ) 
										); ?>
									</ul>
								</nav>
							</div>
						</div>
						<button class="d-lg-none d-md-none" id="menu"><span></span></button>
					</div>
				</div>
				<!-- end block-menu -->
			</div>
			<div class="block-slider">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						  </ol>
				    	<div class="carousel-item active">
				      		<a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php bloginfo('template_directory')?>/assests/img/bg_footer.jpg" alt="First slide"></a>

				       	</div>
					    <div class="carousel-item">
					      <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php bloginfo('template_directory')?>/assests/img/bg_footer.jpg" alt="First slide"></a>
					    </div>
					    <div class="carousel-item">
					      <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php bloginfo('template_directory')?>/assests/img/bg_footer.jpg" alt="First slide"></a>
					    </div>
					    <div class="carousel-item">
					      <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php bloginfo('template_directory')?>/assests/img/bg_footer.jpg" alt="First slide"></a>
					    </div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<!-- end block-slider -->

		</div>
		<!-- end lh-header -->