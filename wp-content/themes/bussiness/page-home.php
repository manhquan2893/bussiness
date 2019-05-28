<?php get_header(); ?>
<div id="banner">
	<header>
		<div class="container">
			<div id="topbar">
				<div id="logo" class="hide-mobile">
					<div id="menu-icon">
						<i class="fas fa-bars"></i>
					</div>
					<div id="cc" style="display: none; color: black;">ccccc</div>
					<img src=" <?php echo get_template_directory_uri() . '/images/logo.png'; ?> " alt="">
				</div>
				<div id="contact">
					<div id="left" >
						<ul>
							<li>
								<div class="icon">
									<i class="far fa-clock"></i>
								</div>
								<div class="info">
									<span>7:30 - 16:00</span>
									<p>Monday to Saturday</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<i class="fas fa-phone fa-rotate-90"></i>
								</div>
								<div class="info">
									<span>0966.333.222</span>
									<p>contact@gmail.com</p>
								</div>
							</li>
						</ul>
					</div>	
					<div id="right">
						<ul id="" >
							<li>
								<a href=""><i class="fab fa-facebook-square"></i></a>
							</li>
							<li>
								<a href=""><i class="fab fa-twitter-square	"></i></a>
							</li>
							<li>
								<a href=""><i class="fab fa-youtube"></i></a>
							</li>
						</ul>
					</div>	
					<!-- <div id="reg" >
						<button id="reg-btn">Be our Agent</button>
					</div> -->
				</div>
				<div id="nav">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">Introduction</a></li>
							<li><a href="">Activity</a></li>
							<li><a href="">Recruitment</a></li>
							<li><a href="">Contact</a></li>
							<li id="search-btn"><a href=""><i class="fas fa-search"></i></a></li>
						</ul>
				</div>
			</div>
		</div>
	</header>
	<div id="slider">
		<?php echo do_shortcode( '[metaslider id="32"]' );?>
	</div>
</div>
<div id="about">
	<div class="container">
		<div id="left">
			<h2 id="title">
				ABOUT US
			</h2>
			<p id="info">
				<?php the_field('about_us'); ?>
			</p>
			<div>
				<a href="" class="see-more"><span>See more</span> <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
		<div id="right" class="hide-mobile">
			<?php 
				$image = get_field('image_for_about');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
		</div>
	</div>
</div>
<div id="section1">
	<div class="container">
		<h2 class="section-title">
			BUSINESS CULTURE
		</h2>
		<div id="content">
			<div id="top">
				<div class="box">
					<h4 class="box-title">
						Humand mind
					</h4>
					<p class="box-content">
						 <?php the_field('human_mind'); ?>
					</p>
					<div class="img-wrapper"></div>
					<div class="img">
						<img src=" <?php echo get_template_directory_uri().'/images/human-mind.svg'; ?> " alt="">
					</div>
				</div>
				<div class="box">
					<h4 class="box-title">
						Mind Power
					</h4>
					<p class="box-content">
						 <?php the_field('mind_power'); ?>
					</p>
					<div class="img-wrapper"></div>
					<div class="img">
						<img src=" <?php echo get_template_directory_uri().'/images/mind-power.svg'; ?> " alt="">
					</div>
				</div>
				<div class="box">
					<h4 class="box-title">
						Trust
					</h4>
					<p class="box-content">
						 <?php the_field('trust'); ?>
					</p>
					<div class="img-wrapper"></div>
					<div class="img">
						<img src=" <?php echo get_template_directory_uri().'/images/trust.svg'; ?> " alt="">
					</div>
				</div>
			</div>
			<div id="bottom">
				<div class="box" id="left">
					<h4 class="box-title">
						Streamlined
					</h4>
					<p class="box-content">
						 <?php the_field('streamlined'); ?>
					</p>
					<div class="img-wrapper"></div>
					<div class="img">
						<img src=" <?php echo get_template_directory_uri().'/images/streamlined.svg'; ?> " alt="">
					</div>
				</div>
				<div class="box" id="right">
					<h4 class="box-title">
						Intuitive
					</h4>
					<p class="box-content">
						 <?php the_field('intuitive'); ?>
					</p>
					<div class="img-wrapper"></div>
					<div class="img">
						<img src=" <?php echo get_template_directory_uri().'/images/intuitive.png'; ?> " alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="section2">
	<h2 class="section-title">
		OUR BUSINESS
	</h2>
	<div id="content">
		<div class="container">
			<div class="img">
				<img src=" <?php echo get_template_directory_uri().'/images/cat1-img.png'; ?> " alt="">
			</div>
			<div class="desc" style="margin-left: 30px;">
				<h3 class="title">Sheet Metal Fabrication</h3>
				<p class="info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using. he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				<div>
					<a href="" class="see-more"><span>See more</span> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="desc">
				<h3 class="title">Handmade Production</h3>
				<p class="info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using. he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				<div>
					<a href="" class="see-more"><span>See more</span> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="img reverse-mb-1">
				<img src=" <?php echo get_template_directory_uri().'/images/cat2-img.png'; ?> " alt="">
			</div>
			<div class="img">
				<img src=" <?php echo get_template_directory_uri().'/images/cat3-img.png'; ?> " alt="">
			</div>
			<div class="desc" style="margin-left: 30px;">
				<h3 class="title">Wood Fabrication </h3>
				<p class="info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using. he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				<div>
					<a href="" class="see-more"><span>See more</span> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="desc">
				<h3 class="title">Tools & Equipment </h3>
				<p class="info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using. he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				<div>
					<a href="" class="see-more"><span>See more</span> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="img reverse-mb-2">
				<img src=" <?php echo get_template_directory_uri().'/images/cat4-img.png'; ?> " alt="">
			</div>
		</div>
	</div>
</div>
<div id="section3">
	<div class="container">
		<div class="box">
			<div class="timer" data-from="0" data-to="1254"></div>
			<div class="text">Products</div>
		</div>
		<div class="box">
			<div class="timer" data-from="0" data-to="4689"></div>
			<div class="text">Customers</div>
		</div>
		<div class="box">
			<div class="timer" data-from="0" data-to="2763"></div>
			<div class="text">Countries</div>
		</div>
		<div class="box">
			<div class="timer" data-from="0" data-to="54"></div>
			<div class="text">Factories</div>
		</div>
	</div>
</div>
<div id="section4">
	<div class="container">
		<h2 class="section-title">
			OUR BUSINESS
		</h2>
		<div id="content">
			<div class="box" id="video-box">
				<div id="video">
					<video width="370px" height="210px" poster=    <?php echo get_template_directory_uri()."/images/video-img.png" ; ?>  controls>
					   <source src="" type="video/mp4">
					</video>
				</div>
				<div class="desc">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a ble content </p>
					<h5>Esma ztonga</h5>
					<span><i class="fas fa-map-marker-alt"></i>54 streets Minh Khai, Viet Nam</span>
				</div>
			</div>
			<div class="owl-carousel">
				<div class="box">
					<div class="img">
						<img src=" <?php echo get_template_directory_uri()."/images/section4-img-1.png"; ?> " alt="">
					</div>
					<div class="desc">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a ble content </p>
						<h5>Esma ztonga</h5>
						<span><i class="fas fa-map-marker-alt"></i>54 streets Minh Khai, Viet Nam</span>
					</div>
				</div>
				<div class="box">
					<div class="img">
						<img src=" <?php echo get_template_directory_uri()."/images/section4-img-2.png"; ?> " alt="">
					</div>
					<div class="desc">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a ble content </p>
						<h5>Esma ztonga</h5>
						<span><i class="fas fa-map-marker-alt"></i>54 streets Minh Khai, Viet Nam</span>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="box" id="contact">
			<h3 class="title">
				CONTACT
			</h3>
			<div class="desc">
				<ul>
					<li>
						<div class="icon">
							<i class="fas fa-home"></i>
						</div>
						<div class="info">
							<span>7:30 - 16:00</span>
							<p>Monday to Saturday</p>
						</div>
					</li>
					<li>
						<div class="icon">
							<i class="far fa-clock"></i>
						</div>
						<div class="info">
							<span>7:30 - 16:00</span>
							<p>Monday to Saturday</p>
						</div>
					</li>
					<li>
						<div class="icon">
							<i class="fas fa-phone fa-rotate-90"></i>
						</div>
						<div class="info">
							<span>0966.333.222</span>
							<p>contact@gmail.com</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="box">
			<h3 class="title">
				OUR BUSINESS
			</h3>
			<div class="desc">
				<ul>
					<li>Sheet Metal Fabrication</li>
					<li>Handmade Production</li>
					<li>Wood Fabrication </li>
					<li>Tools & Equipment </li>
				</ul>
			</div>
		</div>
		<div class="box">
			<h3 class="title">
				ABOUT
			</h3>
			<div class="desc">
				<ul>
					<li>Company</li>
					<li>Term</li>
					<li>Clients</li>
					<li>Career </li>
					<li>References</li>
				</ul>
			</div>
		</div>
		<div class="box">
			<h3 class="title">
				SUPPORT
			</h3>
			<div class="desc">
				<ul>
					<li>Hotline</li>
					<li>Pay</li>
					<li>Chat online </li>
					<li>Map </li>
				</ul>
			</div>
		</div>
		<div class="box">
			<h3 class="title">
				FACEBOOK
			</h3>
			<div class="fb-content">
				
			</div>
		</div>
	</div>
</footer>
<div id="godream">
	<div class="container">
		<p>© 2019 - Copyright Vietsky. Design by Godream</p>
	</div>
</div>
<?php get_footer(); ?>
