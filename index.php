<!DOCTYPE HTML>

<html>
	<head>
		<title>Trimancers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body class="homepage">
	<!--Experiment Area -->
		<?php  
		include('smarty/libs/Smarty.class.php');
		// create object
		$smarty = new Smarty;
		// assign some content. This would typically come from
		// a database or other source, but we'll use static
		// values for the purpose of this example.
		$smarty->assign('name', 'george smith');
		$smarty->assign('address', '45th & Harris');
		
		// display it
		$smarty->display('index.tpl');
		?>
		
	
		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
								<!-- Header -->
								<header id="header">
									<div class="inner">
									
										<!-- Logo -->
											<h1><a href="index.php" id="logo">Trimancers</a></h1>
										
										<!-- Nav -->
											<nav id="nav">
												<ul>
													<li class="current_page_item"><a href="index.php">Home</a></li>
													<li>
														<span>Services</span>
														<ul>
															<li><a href="consulting.php">Consulting</a></li>
															<li><a href="#">Magna phasellus</a></li>
															<li>
																<span>Phasellus consequat</span>
																<ul>
																	<li><a href="#">Lorem ipsum dolor</a></li>
																	<li><a href="#">Phasellus consequat</a></li>
																	
																</ul>
															</li>
															<li><a href="#">xyz</a></li>
														</ul>
													</li>
													<li><a href="about-us.php">About Us</a></li>
													<li><a href="http://trimancers.com/wpdir/">Blogs</a></li>
													<li><a href="contact-us.php">Contact Us</a></li>
												</ul>
											</nav>
									
									</div>
								</header>


							<!-- Banner -->
								<div id="banner">
									<h2><strong>Trimancers:</strong> A Consulting startup.<br />
									</h2>
									<p>Does this statement make you want to click the shiny blue button?</p>
									<a href="#" class="button big fa fa-check-circle">Yes it does</a>
								</div>

						</div>
					</div>
				</div>
			</div>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style1">
					<div class="inner">
				
						<!-- Feature 1 -->
							<section class="container box-feature1">
								<div class="row">
									<div class="12u">
										<header class="first major">
											<h2>This is an important heading</h2>
											<?php 
											echo '<p>Hello World...</p>'; 
											?>
											<span class="byline">And this is where we talk about why we’re <strong>pretty awesome</strong> ...</span>
										</header>
									</div>
								</div>
								<div class="row">
									<div class="4u">
										<section>
											<span class="image image-full"><img src="images/pic01.jpg" alt="" /></span>
											<header class="second fa fa-user">
												<h3>OMFG Whats That</h3>
												<span class="byline">Nevermind its just a wall lol</span>
											</header>
										</section>
									</div>
									<div class="4u">
										<section>
											<span class="image image-full"><img src="images/pic02.jpg" alt="" /></span>
											<header class="second fa fa-cog">
												<h3>Really Close Up</h3>
												<span class="byline">This looks pretty harmless</span>
											</header>
										</section>
									</div>
									<div class="4u">
										<section>
											<span class="image image-full"><img src="images/pic03.jpg" alt="" /></span>
											<header class="second fa fa-bar-chart-o">
												<h3>Pretty Blue LEDs</h3>
												<span class="byline">Just so many of them man</span>
											</header>
										</section>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper 
										bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod 
										quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit 
										amet pulvinar. Nam nec turpis.</p>
									</div>
								</div>
							</section>

					</div>
				</div>
				<div class="main-wrapper-style2">
					<div class="inner">
				
						<!-- Feature 2 -->
							<section class="container box-feature2">
								<div class="row">
									<div class="6u">
										<section>
											<header class="major">
												<h2>And this is a subheading</h2>
												<span class="byline">It’s important but clearly not *that* important</span>
											</header>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi 
											consequat etiam.</p>
											<footer>
												<a href="#" class="button medium fa fa-arrow-circle-o-right">Let's do this</a>
											</footer>
										</section>
									</div>
									<div class="6u">
										<section>
											<header class="major">
												<h2>This is also a subheading</h2>
												<span class="byline">And is as less important as the other one</span>
											</header>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi 
											consequat etiam.</p>
											<footer>
												<a href="#" class="button medium alt fa fa-info-circle">Wait, what?</a>
											</footer>
										</section>
									</div>
								</div>
							</section>

						</div>
				</div>
				<div class="main-wrapper-style3">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="8u">

									<!-- Article list -->
										<section class="box-article-list">
											<h2 class="fa fa-file-text-o">From the blog</h2>
											
											<!-- Excerpt -->
												<article class="box-excerpt">
													<a href="#" class="image image-left"><img src="images/pic04.jpg" alt="" /></a>
													<div>
														<header>
															<span class="date">December 20, 2012</span>
															<h3><a href="#">On the eve of the Mayanocalypse</a></h3>
														</header>
														<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus 
														semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis, 
														feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
													</div>
												</article>

											<!-- Excerpt -->
												<article class="box-excerpt">
													<a href="#" class="image image-left"><img src="images/pic05.jpg" alt="" /></a>
													<div>
														<header>
															<span class="date">December 15, 2012</span>
															<h3><a href="#">Life as a self-aware meme</a></h3>
														</header>
														<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus 
														semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis, 
														feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
													</div>
												</article>

											<!-- Excerpt -->
												<article class="box-excerpt">
													<a href="#" class="image image-left"><img src="images/pic06.jpg" alt="" /></a>
													<div>
														<header>
															<span class="date">December 12, 2012</span>
															<h3><a href="#">Facepalm moments in history</a></h3>
														</header>
														<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus 
														semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis, 
														feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
													</div>
												</article>

										</section>
								</div>
								<div class="4u">
								
									<!-- Spotlight -->
										<section class="box-spotlight">
											<h2 class="fa fa-file-text-o">Spotlight</h2>
											<article>
												<a href="#" class="image image-full"><img src="images/pic07.jpg" alt=""></a>
												<header>
													<h3><a href="#">Why staplers matter</a></h3>
													<span class="byline">They hold things together</span>
												</header>
												<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod 
												quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam 
												lorem. Phasellus quam turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed
												et tempus consequat etiam.</p>
												<p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper 
												mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
												<footer>
													<a href="#" class="button alt fa fa-file-o">Continue Reading</a>
												</footer>
											</article>
										</section>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>Filler Links</h2>
									<ul class="style2">
										<li><a href="#">Quam turpis feugiat dolor</a></li>
										<li><a href="#">Amet ornare in hendrerit </a></li>
										<li><a href="#">Semper mod quisturpis nisi</a></li>
										<li><a href="#">Consequat etiam phasellus</a></li>
										<li><a href="#">Amet turpis, feugiat et</a></li>
										<li><a href="#">Ornare hendrerit lectus</a></li>
										<li><a href="#">Semper mod quis et dolore</a></li>
										<li><a href="#">Amet ornare in hendrerit</a></li>
										<li><a href="#">Consequat lorem phasellus</a></li>
										<li><a href="#">Amet turpis, feugiat amet</a></li>
										<li><a href="#">Semper mod quisturpis</a></li>
									</ul>
								</section>
						
						</div>
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>More Filler</h2>
									<ul class="style2">
										<li><a href="#">Quam turpis feugiat dolor</a></li>
										<li><a href="#">Amet ornare in in lectus</a></li>
										<li><a href="#">Semper mod sed tempus nisi</a></li>
										<li><a href="#">Consequat etiam phasellus</a></li>
									</ul>
								</section>
						
							<!-- Links -->
								<section>
									<h2>Even More Filler</h2>
									<ul class="style2">
										<li><a href="#">Quam turpis feugiat dolor</a></li>
										<li><a href="#">Amet ornare hendrerit lectus</a></li>
										<li><a href="#">Semper quisturpis nisi</a></li>
										<li><a href="#">Consequat lorem phasellus</a></li>
									</ul>
								</section>
						
						</div>
						<div class="6u">
						
							<!-- About -->
								<section>
									<h2><strong>ZeroFour</strong> by HTML5 UP</h2>
									<p>Hello! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
									template by <a href="http://n33.co/">n33</a> for <a href="http://html5up.net/">HTML5 UP</a>.
									It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
									licensed so use it for any personal or commercial project (just credit us
									for the design!)</p>
									<a href="http://html5up.net/" class="button alt fa fa-arrow-circle-o-right">More @ HTML5Up.net</a>
								</section>
						
							<!-- Contact -->
								<section>
									<h2>Get in touch</h2>
									<div>
										<div class="row">
											<div class="6u">
												<dl class="contact">
													<dt>Contact Us</dt>
													<dd><a href="http://trimancers.com/contact-us.html">Contact Us</a></dd>
													<dt>WWW</dt>
													<dd><a href="http://www.trimancers.com">Trimancers.com</a></dd>
													<dt>Email</dt>
													<dd><a href="mailto:admin%20-at-%20trimancers.com">admin@trimancer.com</a></dd>
												</dl>
											</div>
											<div class="6u">
												<dl class="contact">
													<dt>Noida</dt>
													<dd>
														Uttar Pradesh<br />
														India<br />
														
													</dd>
													<dt>Phone</dt>
													<dd>(971) 733-3009</dd>
												</dl>
											</div>
										</div>
									</div>
								</section>
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								&copy; Trimancers. All rights reserved | Images: <a href="http://fotogrph.com/">fotogrph</a> 
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>