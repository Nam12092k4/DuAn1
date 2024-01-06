
	
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/boostrap.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/swal.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/jquery.jgrowl.min.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/hstatic.css" />
	

<style>
	:root {
		--footer-bg-color-1: #131313;
		--footer-bg-color-2: #333333;
		--footer-bg-color-copyright: #222222;
		--footer-color-title: #f7efe8;
		--footer-color-text: #ffffff;
		--footer-color-hover: #45c9e3;
	} 
	@font-face{   
		font-family:'FontAwesome'; 
		src:url('//theme.hstatic.net/200000565469/1000915384/14/fontawesome-webfont.eot?v=328');
		src:url('//theme.hstatic.net/200000565469/1000915384/14/fontawesome-webfont.eot?v=328') format('embedded-opentype'),url('//theme.hstatic.net/200000565469/1000915384/14/fontawesome-webfont.woff2?v=328') format('woff2'),url('//theme.hstatic.net/200000565469/1000915384/14/fontawesome-webfont.woff?v=328') format('woff'),url('//theme.hstatic.net/200000565469/1000915384/14/fontawesome-webfont.ttf?v=328') format('truetype'),url('//theme.hstatic.net/200000565469/1000915384/14/fontawesome-webfont.svg?v=328') format('svg');
		font-weight:normal;font-style:normal;font-display:swap;
	}   
</style>
<link rel="preload" href="//theme.hstatic.net/200000565469/1000915384/14/logo.png?v=328" as="image">
<link rel="preconnect" href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;display=swap" crossorigin="">
<link rel="preload stylesheet" href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;display=swap" as="style"> 
<link rel="preload" href="//theme.hstatic.net/200000565469/1000915384/14/fontawesome-webfont.woff?v=328" as="font" type="font/woff2" crossorigin="anonymous">
	<script  src="<?= BASE_URL ?>/MVC/public/js/bot.js"></script>
<script src="//hstatic.net/0/0/global/api.jquery.js"></script>
<script  src="<?= BASE_URL ?>/MVC/public/js/popper.min.js"></script>
<script  src="<?= BASE_URL ?>/MVC/public/js/bootrap.js"></script>
<script  src="<?= BASE_URL ?>/MVC/public/js/jquery.jgrowl.min.js"></script>
<script  src="<?= BASE_URL ?>/MVC/public/js/copyright.js"></script>

<footer class="mainFooter" >
	<div class="footer-newsletter" >
		<div class="container-fluid" >
			<div class="wrapbox-newsletter">

				<div class="newsletter-block newsletter-widthAuto">
					<div class="newsletter-title">
<h3>Đăng ký nhận tin</h3>					</div>				
					<div class="newsletter-content newsletter-form">
						<form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post">
<input name="form_type" type="hidden" value="customer">
<input name="utf8" type="hidden" value="✓">

						<div class="form-group input-group">
							<input type="hidden" id="newsletter-tags" name="contact[tags]" value="Đăng kí nhận tin">     
							<input required="" type="email" name="contact[email]" class="form-control newsletter-input" id="newsletter-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Nhập email của bạn" aria-label="Email Address">
							<span class="input-group-btn"><button type="submit" class="button dark newsletter-btn">Đăng ký</button></span>
						</div>
						<div class="sitebox-recaptcha d-none">
							This site is protected by reCAPTCHA and the Google
							<a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> 
							and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
						</div>	

<input id="49d53d8d98f94daea3116378728081f9" name="g-recaptcha-response" type="hidden"><noscript data-src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></noscript><noscript>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('49d53d8d98f94daea3116378728081f9').value = token;});});</noscript></form>
						<p class="newsletter-error"></p>
					</div>
				</div>
				
				<div class="newsletter-block newsletter-social d-none d-md-flex">
					<div class="newsletter-title">
						<h3>Kết nối với chúng tôi</h3>
					</div>
					<div class="newsletter-content">
						<ul class="footerNav-social">											
<li><a href="https://www.facebook.com/wegocoffeevn" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li><li><a href="https://www.instagram.com/wegocoffee/" target="_blank" rel="noopener" title="Instagram" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-container">
		<div class="footer-expand-collapsed ">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-lg-3 col-md-12 col-12 widget-footer">
						<h4 class="title-footer">Về Ola Store</h4>
						<div class="content-footer block-collapse row">
							<div class="col-lg-12 col-md-12 col-12">
								<p>Công ty Cổ Phần Ola Store</p>
								<div class="address-footer">
									<ul>
<li class="contact-1"><i class="fa fa-map-marker" aria-hidden="true"></i> 470 Đ. Trần Đại Nghĩa, Khu đô thị, Ngũ Hành Sơn, Đà Nẵng 550000</li><li class="contact-4"><i class="fa fa-envelope" aria-hidden="true"></i> olastorehelp@gmail.com</li>									</ul>
								</div>
								<ul class="footerNav-social d-md-none">											
<li><a href="#" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li><li><a href="#" target="_blank" rel="noopener" title="Instagram" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>								</ul>
								
								
								
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-3 col-md-12 col-12 widget-footer">
						<h4 class="title-footer">Hỗ trợ khách hàng</h4>
						<div class="content-footer block-collapse">				
							<ul class="footerNav-link">
								
								<li class="item">
									<a href="#" title="Liên hệ">Liên hệ</a>
								</li>
								
								<li class="item">
									<a href="#" title="Hệ Thống Cửa Hàng">Hệ Thống Cửa Hàng</a>
								</li>
								
								<li class="item">
									<a href="#" title="Câu Hỏi Thường Gặp">Câu Hỏi Thường Gặp</a>
								</li>
								
								<li class="item">
									<a href="#" title="Hướng Dẫn Mua Hàng">Hướng Dẫn Mua Hàng</a>
								</li>
									
							</ul>			
						</div>
					</div>
					
					
					<div class="col-lg-3 col-md-12 col-12 widget-footer">
						<h4 class="title-footer">Chính Sách</h4>
						<div class="content-footer block-collapse">				
							<ul class="footerNav-link">
								
								<li class="item">
									<a href="#" title="Chính Sách Bảo Hành">Chính Sách Bảo Hành</a>
								</li>
								
								<li class="item">
									<a href="#" title="Chính Sách Thanh Toán">Chính Sách Thanh Toán</a>
								</li>
								
								<li class="item">
									<a href="#" title="Chính Sách Xử Lí Khiếu Nại">Chính Sách Xử Lí Khiếu Nại</a>
								</li>
								
								<li class="item">
									<a href="#" title="Chính Sách Đổi Trả Và Hoàn Tiền">Chính Sách Đổi Trả Và Hoàn Tiền</a>
								</li>
								
								<li class="item">
									<a href="#" title="Chính Sách Vận Chuyển Và Giao Nhận">Chính Sách Vận Chuyển Và Giao Nhận</a>
								</li>
									
							</ul>			
						</div>
					</div>
					
					
					<div class="col-lg-3 col-md-12 col-12 widget-footer">
						<h4 class="title-footer">Liên Kết</h4>
						<div class="content-footer block-collapse">				
							<ul class="footerNav-link">
								
								<li class="item">
									<a href="#" title="Điều Khoản Dịch Vụ">Điều Khoản Dịch Vụ</a>
								</li>
								
								<li class="item">
									<a href="#" title="Điều Khoản Bảo Mật">Điều Khoản Bảo Mật</a>
								</li>
									
							</ul>			
						</div>
					</div>
					
				</div>
			</div>
			<div class="footer-copyright text-center">
				<div class="container">
					<p>Copyright © 2023 <a href="#"> Ola Store</a>. 
						<a target="_blank" href="#" rel="noreferrer"></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>