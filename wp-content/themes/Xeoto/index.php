<?php get_header();?>

		<div class="block-intro">
			<div class="container">
				<p class="lh2-title1">VỀ CHÚNG TÔI</p>
				<p class="lh2-caption">là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi du lịch tới các điểm đến nổi tiếng. Chúng tôi có một mạng lưới liên kết lữ hành rộng và cung cấp các dịch vụ hỗ trợ lập kế hoạch...</p>
				<div class="row">
					<div class="col-lg-4 item-intro">
						<div class="img-height">
							<a href=""><img src="<?php bloginfo('template_directory')?>/assests/img/icon1.png" alt=""></a>
						</div>
						<div class="item-info">
							<a href="">XE ĐỜI MỚI GIÁ CẢ CẠNH TRANH</a>
							<p>Với các mẫu xe mới nhất tại thị trường xe hơi tại Việt Nam. Giá cả cạnh tranh, ưu đãi thường xuyên cho khách hàng và lịch thuê dài ngày.</p>
						</div>
					</div>
					<div class="col-lg-4 item-intro">
						<div class="img-height">
							<a href=""><img src="<?php bloginfo('template_directory')?>/assests/img/icon3.png" alt=""></a>
						</div>
						<div class="item-info">
							<a href="">THỦ TỤC Nhanh gọn</a>
							<p>Với các mẫu xe mới nhất tại thị trường xe hơi tại Việt Nam. Giá cả cạnh tranh, ưu đãi thường xuyên cho khách hàng và lịch thuê dài ngày.</p>
						</div>
					</div>
					<div class="col-lg-4 item-intro">
						<div class="img-height">
							<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory')?>/assests/img/icon4.png" alt=""></a>
						</div>
						<div class="item-info">
							<a href="">ĐẶT XE BẤT KỲ LÚC NÀO</a>
							<p>Với các mẫu xe mới nhất tại thị trường xe hơi tại Việt Nam. Giá cả cạnh tranh, ưu đãi thường xuyên cho khách hàng và lịch thuê dài ngày.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-contact">
			<div class="container">
				<p class="lh2-title1">dỊCH VỤ CHO Bán xe DU LỊCH</p>
				<p class="caption">Cung cấp dịch vụ cho Bán xe tự lái, du lịch từ 4 đến 45 chỗ</p>
				<p class="bottom">Thủ tục nhanh gọn - Nhận xe nhanh chóng</p>
				<button class="lh3-button" type=""><span>Xem ngay</span></button>
			</div>
		</div>
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe TOYOTA</span></p>
				<div class="row">
					<?php 
						 $args = array(
							'post_status' => 'publish', // Chỉ lấy những bài viết được publish
							'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
							'showposts' => 6, // số lượng bài viết
							'order' => 'DESC',
							'cat' => 3, // lấy bài viết trong chuyên mục có id là 1
						);
					?>
					<?php  $getposts = new WP_query($args); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- end item -->
					
				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe Honda</span></p>
				<div class="row">
					<?php 
						 $args = array(
							'post_status' => 'publish', // Chỉ lấy những bài viết được publish
							'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
							'showposts' => 6, // số lượng bài viết
							'order' => 'DESC',
							'cat' => 4, // lấy bài viết trong chuyên mục có id là 1
						);
					?>
					<?php  $getposts = new WP_query($args); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- end item -->
					

				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title">
					<span>Bán xe BMW</span>
				</p>
				<div class="row">
					<?php 
						 $args = array(
							'post_status' => 'publish', // Chỉ lấy những bài viết được publish
							'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
							'showposts' => 6, // số lượng bài viết
							'order' => 'DESC',
							'cat' => 6, // lấy bài viết trong chuyên mục có id là 1
						);
					?>
					<?php  $getposts = new WP_query($args); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="bg">
								<div class="img-height">
									<a class="img" href="<?php the_permalink(); ?>">
										<img class="img-fluid lh2-img" src="<?php echo p_link_img(get_the_id()); ?>" alt="">
									</a>
								</div>
								<div class="info-product">
									<a class="name" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
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
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- end item -->
					

				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-partner">
			<div class="container">
				<div class="responsive">
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory')?>/assests/img/1.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory')?>/assests/img/2.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory')?>/assests/img/3.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory')?>/assests/img/4.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory')?>/assests/img/5.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory')?>/assests/img/6.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory')?>/assests/img/1.png" alt="">
						</div>
					</div>
				</div>
				<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
				<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
			</div>
		</div>
		
<?php get_footer(); ?>