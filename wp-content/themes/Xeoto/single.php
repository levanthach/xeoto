<?php get_header(); ?>
<!-- end block-menu -->
</div>
<div class="block-slider">

</div>
<!-- end block-slider -->
</div>
<!-- end lh-header -->
<div class="module-product-detail">
	<div class="container">
		<div class="bread-crumb">
			<a href="">Trang chủ</a>
			<span class="dot">/</span>
			<?php $categories = get_the_category();
				foreach ($categories as $categorie) {
					echo '<a href="">'. $categorie->name .',</a>';
				}
			 ?>
			
			<span class="dot">/</span>
			<span class="name"><?php the_title(); ?></span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="block-product-slider">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6  left">
							<ul id="imageGallery">
								<li data-thumb="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg" data-src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg">
									<div class="img-height">
										<img  class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg"/>
										<div class="overlay">
											<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
										</div>
									</div>
								</li>
								<li data-thumb="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg" data-src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg">
									<div class="img-height">
										<img  class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg"/>
										<div class="overlay">
											<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
										</div>
									</div>
								</li>
								<li data-thumb="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg" data-src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg">
									<div class="img-height">
										<img  class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg"/>
										<div class="overlay">
											<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
										</div>
									</div>
								</li>
								<li data-thumb="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg" data-src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg">
									<div class="img-height">
										<img  class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/assests/img/product1.jpg"/>
										<div class="overlay">
											<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-6  col-sm-6 col-xs-6 right">
							<div class="border">
								<b class="name">HUYNDAI ACCENT BLUE 2017</b>
								<?php if(get_field('gia')) : ?><p><b>Giá:</b> <?php the_field('gia'); ?></p><?php endif; ?>
								<?php if(get_field('so-cho')) : ?><p><b>Số chỗ: </b><?php the_field('so-cho') ?></p><?php endif; ?>
								<?php if(get_field('thuong-hieu')) : ?><p><b>Thương hiệu:</b> <?php the_field('thuong-hieu') ?></p><?php endif; ?>
								<?php if(get_field('mau-sac')) : ?><p><b>Màu sắc:</b> <?php the_field('mau-sac'); ?></p><?php endif; ?>
								<?php if(get_field('doi-xe')) : ?><p><b>Đời xe:</b> <?php the_field('doi-xe'); ?></p><?php endif; ?>
								<button class="lh2-button lh-show-bk">Thuê ngay</a>
								</div>
							</div>
						</div>
					</div>
					<!-- end block-slider -->
					<div class="block-info-product-detail">
						<p class="title-other"><span>Thông tin chi tiết</span></p>
						<div class="box-content"> <!-- content demo -->
							<b>1. GIÁ XE BAO GỒM:</b>
							<p>- Xe, xăng dầu, phí cầu đường, lương lái xe.
								- Bảo hiểm hành khách đi xe mức đền bù tối đa 50.000.000đồng/vụ
								- Lái xe được đào tạo các kỹ năng phục vụ khách hàng một cách chuyên nghiệp.
								- Xe đời mới, đẹp, sang trọng, lái xe phục vụ nhiệt tình, chu đáo, tiếng anh giao tiếp.
							- Giá trên áp dụng tất cả các ngày trong tuần vui lòng liên hệ để được giá tốt nhất.</p>
							<b>2. GIÁ KHÔNG BAO GỒM:</b>
							<p>- Thuế GTGT 10%
								- Chi phí xe đi qua phà ( Nếu có)
								- Các chi phí thuê xe đi phát sinh theo yêu cầu của quý khách
							- Chi phí ăn nghỉ, lưu đêm cho xe và lái xe khi đi tỉnh nhiều ngày</p>
						</div>
					</div>
					<!-- block-inffo -->
					<div class="block-product-other">
						<p class="title-other"><span>Xe liên quan</span></p>
						<div class="slider-product">

							<?php
							$categories = get_the_category($post->ID);
							if ($categories) 
							{
								$category_ids = array();
								foreach($categories as $individual_category) 
									$category_ids[] = $individual_category->term_id;

								$args=array(
									'category__in' => $category_ids,
									'post__not_in' => array($post->ID),
							        'showposts'=> 5, // Số bài viết bạn muốn hiển thị.
							        'caller_get_posts'=>1
							    );
								$my_query = new wp_query($args);
								if( $my_query->have_posts() ) 
								{
								
									while ($my_query->have_posts())
									{
										$my_query->the_post();
										?>
										<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="bg">
												<div class="img-height">
													<a class="img" href="">
														<img class="img-fluid lh2-img" src="<?php echo p_link_img(get_the_id()) ?>" alt="">
													</a>
												</div>
												<div class="info-product">
													<a class="name" href=""><?php the_title(); ?></a>
													<?php if(get_field('gia')) : ?><p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia'); ?></p><?php endif; ?>
													<?php if(get_field('gia')) : ?><p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('so-cho'); ?></p><?php endif; ?>
													<?php if(get_field('gia')) : ?><p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong-hieu'); ?></p><?php endif; ?>
												</div>
											</div>
										</div>
										<!-- end item -->
										<?php
									}
									
								}
							}
							?>

						</div>
						<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
						<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
					</div>
					<!-- end block-product-other -->
				</div>
				<?php get_sidebar(); ?>
			</div>

		</div>
	</div>
	<?php get_footer(); ?>