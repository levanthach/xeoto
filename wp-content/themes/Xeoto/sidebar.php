<div class="col-lg-3 d-none d-lg-block">
						<div class="box-cate">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Dịch vụ thuê xe</p>
							<div class="box-border">
								<ul class="lh2-ul">
									<?php 
										$args = array(
											'type' => 'post',
											'child_of' => 0,
											'exclude' => '1,10', // an chuyen muc chua duoc phan loai
											'parent' => ''
										);
										$categories = get_categories($args);
										
										echo $category_link;
										foreach ($categories as $category) { 
											$category_id = get_cat_ID($category->name);
											$category_link = get_category_link($category_id);
											?>
											<li><a href="<?php echo esc_url( $category_link ); ?>"><i class="fas fa-caret-right"></i><?php echo $category->name; ?></a></li> 
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="box-contact">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
							<div class="box-border">
								<ul class="lh2-ul">
									<li>Hotline: 0915 17 12 19</li>
									<li>Email: inb.mycar@gmail.com</li>
								</ul>
							</div>
						</div>
						<div class="box-hightlight-news">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Tin nỗi bật</p>
							<div class="box-border">
								<?php 
									$arrg = array(
										'post_status' => 'publish', // Chỉ lấy những bài viết được publish
										'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
										'showposts' => 5, // số lượng bài viết
										'cat' => 4, // lấy bài viết trong chuyên mục có id là 1
									);
								?>
								<?php  $getposts = new WP_query($arrg); ?>
								<?php global $wp_query;$wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="list-news">
									<a class="img" href="<?php the_permalink(); ?>"><img class="img-fluid lh2-img" src="<?php echo p_link_img(get_the_id());?>" alt=""></a>
									<div class="right-list">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<div class="lh2-date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date('Y/m/d'); ?></div>
									</div>
								</div>
								<?php endwhile; wp_reset_postdata(); ?>
								
								<!-- end item -->
							</div>
						</div>
					</div> <!-- end sidebar -->