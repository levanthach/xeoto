<?php 
	/* Template name: news
	   Template Post Type : post, page
	*/
?>
<?php get_header(); ?>
	<div class="lh-wrapper">
		
		<!-- end lh-header -->
		<div class="module-news">
			<div class="container">
				<div class="bread-crumb">
					<a href="">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Tin tức</span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
								<?php 
									 $args = array(
										'post_status' => 'publish', // Chỉ lấy những bài viết được publish
										'post_type' => 'news', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
										'showposts' => 10, // số lượng bài viết
									);
								?>
								<?php  $getposts = new WP_query($args); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item-news">
										<div class="row">
											<div class="col-4 img">
												<a href="<?php the_permalink(); ?>">
													<img class="img-fluid lh2-img" src="<?php echo p_link_img(get_the_id()); ?>" alt="">
												</a>
											</div>
											<div class="col-8 text">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<p><?php the_excerpt(); ?></p>
												<div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date("Y/m/d"); ?></div>
											</div>
										</div>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
					
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
					<?php get_sidebar(); ?>
					
				</div>
				
			</div>
		</div>
<?php get_footer(); ?>