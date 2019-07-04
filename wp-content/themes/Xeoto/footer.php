	<!-- Javascript -->

    <div class="footer-bg">
			<div class="block-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">GIỚI THIỆU</p>
							<p class="caption">ABC là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi...</p>
							<ul class="lh2-ul">
								<li><i class="fas fa-map-marker-alt"></i> 244 Điện Biên Phủ, Q. Thanh Khê, TP Đà Nẵng</li>
								<li><i class="fas fa-phone"></i> 0905 548 836</li>
								<li><i class="fas fa-envelope"></i> Email: inb.mycar@gmail.com</li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">Hỗ trợ khách hàng</p>
							<ul class="lh2-ul">
								<li><a href="">Liên hệ với chúng tôi</a></li>
								<li><a href="">Câu hỏi thường gặp</a></li>
								<li><a href="">Điều khoản và chính sách</a></li>
								<li><a href="">Chăm sóc khách hàng</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">DỊCH VỤ</p>
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
											<li><a href="<?php echo esc_url( $category_link ); ?>"><i class="fas fa-caret-right"></i>  <?php echo $category->name; ?></a></li> 
									<?php } ?>
							</ul>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">GỬI LIÊN HỆ</p>
							<p>Liên hệ ngay với chúng tôi để nhận được những ưu đãi mới nhất</p>
							<?php echo do_shortcode('[contact-form-7 id="143" title="Liên hệ"]'); ?>
							<!-- <input type="" name="" placeholder="Nhập email của bạn">
							<button type="">Gửi</button> -->
							<p class="title">Kết nối</p>
							<ul class="lh2-ul share-h2">
								<li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block-copyright">
				<div class="container">
					<p>Copyright © 2019 BABYLON Group. All Right Reserved.</p>
				</div>
			</div>
		</div>
		<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
