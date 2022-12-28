<?php require_once 'process_message.php' ?>

<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>PBD Consulting</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	<body>

      <?php require 'header.php' ?>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Lucid</h1>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa-bug"></span>
							<h3>Application Security</h3>
							<p>Protecting Applications<br />From External Threats</p>
						</div>


						<div>
							<span class="icon fa-camera"></span>
							<h3>Application Development</h3>
							<p>Programming Software Solutions</p>
						</div>


						<div>
							<span class="icon fa-user"></span>
							<h3>Penetration Testing</h3>
							<p>Finding Vulnerabilities<br /> Through Ethical Hacking</p>
						</div>

					</div>

					<footer>
						<a href="#footer" class="button">Get Started</a>
					</footer>
				</div>
			</section>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<div class="image round">
								<img src="images/code.jpg" alt="Pic 01" />
							</div>
							<header>
								<h3>Comprehensive<br /> Software <br /> Solutions</h3>
							</header>
							<p>Today’s business model, regardless of industry, depends<br />on solid, well built Software Solutions in order to <br />meet business objectives and obtain gainful ROI.</p>
							<footer>
								<a href="software.php" class="button">Learn More</a>
							</footer>
						</article>
						<article>
							<div class="image round">
								<img src="images/sec2.secops.jpg" alt="Pic 02" />
							</div>
							<header>
								<h3>Comprehensive<br /> Security <br /> Solutions</h3>
							</header>
                     <p>With the ever growing threat of cyber attacks and<br />breaches, ensuring that your information security posture<br />is strong is more important than ever before.</p> 
							<footer>
								<a href="security.php" class="button">Learn More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>


      <?php require 'footer.php' ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
