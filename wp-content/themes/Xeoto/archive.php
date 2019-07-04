<?php get_header(); ?>
<!-- content -->

<div class="module-product">
			<div class="container">
				<div class="bread-crumb">
					<a href="">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						   <div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
									<div class="img-height">
									<a class="img" href="<?php the_permalink(); ?>">
										<img class="img-fluid lh2-img" src="<?php echo p_link_img(get_the_id()); ?>" alt="">
									</a>
								</div>
								<div class="info-product">
									<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<?php if(get_field('gia')) : ?>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b>
											 	<?php echo get_field('gia'); ?>
											</p>
										<?php endif ?> 

										<?php if(get_field('so-cho')) :  ?>
											<p class="amout"><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>
												<span class="<?php echo get_field('so-cho') == "1" ? "maudo" : ""; ?>"><?php echo get_field('so-cho'); ?> chỗ </span>
											</p>
										<?php endif ?>

										<?php  ?>
										
										<?php if(get_field('thuong-hieu')) :?>
											<p class="trademark"><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php echo get_field('thuong-hieu'); ?></p>
										<?php endif ?>
								</div>
							</div>
							</div>
						<?php endwhile;?>
						<?php else:
							include get_template_directory() . '/content-none.php';	

						?>			
						<?php endif; ?>
					<div class="w-100"></div>
								
					<!-- end item -->
					<div class="lh2-pagging col-12">
						<ul class="pagination">
						  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-backward"></i></a></li>
						  <li class="page-item"><a class="page-link" href="#">1</a></li>
						  <li class="page-item"><a class="page-link" href="#">2</a></li>
						  <li class="page-item"><a class="page-link" href="#">3</a></li>
						  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-forward"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<!-- end content -->
<?php get_footer(); ?>