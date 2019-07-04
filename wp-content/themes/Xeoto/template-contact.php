<?php 
	/*
	Template name: contact
	Template Post Type: post, page
	*/ 
?>
<?php  
	get_header();
?>
<div class="lh-wrapper">
		<div class="module-contact">
			<div class="container">
				<div class="bread-crumb">
					<a href="">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Liên hệ</span>
				</div>
			</div>
			<div class="form">
				<div class="container">
					<div class="row">
						<div class="col-xl-6  col-lg-6 col-md-12 h-100 d-inline w-100 left">
							<p class="lh2-title1">Gửi liên hệ</p>
							<form action="">
								<div class="row">
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Name *">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Email *">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Subject *">
											<i class="fas fa-file-alt"></i>
										</div>
									</div>		
								</div>
								
								<div class="input-position">
									<textarea rows="5" placeholder="Tin nhắn"></textarea>
									<i class="fas fa-file-alt"></i>
								</div>
								<button class="lh2-button float-right">Send</button>
							</form>
						</div>
						<div class="col-xl-6  col-lg-6 right h-100">
							<p class="lh2-title1"><span>THÔNG TIN LIÊN HỆ</span></p>
							<p><b>Địa chỉ: </b>50 Ham Nghi TP.Da Nang</p>
							<p><b>Điện thoại: </b>0962 309 111</p>
							<p><b>Fax: </b>+997 318 323</p>
							<p><b>Email: </b>personal@website.com</p>
								
						</div>
					</div>
				</div>
			</div>
			<div class="block-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.642761357061!2d106.67164331428748!3d10.8386267610075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529ab7978c289%3A0xf3ef46abfb9dd98c!2zTmd1eeG7hW4gVsSDbiBMxrDhu6NuZywgR8OyIFbhuqVwLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1560855033305!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
<?php get_footer(); ?>