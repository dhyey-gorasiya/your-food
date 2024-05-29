<!-- terms-conditions.php -->
<?php include 'dbCon.php'; ?>
<?php include 'template/header.php'; ?>

<body>

	<?php include 'template/nav-bar.php'; ?>
	<?php include 'template/search-header.php'; ?>

	<section class="faq-section">
		<div class="container">
			<div class="row">
				<!-- ***** FAQ Start ***** -->
				<div class="col-md-6 offset-md-3">

					<div class="faq-title text-center pb-3">
						<h2>FAQ</h2>
					</div>
				</div>
				<div class="col-md-6 offset-md-3">
					<div class="faq" id="accordion">
						<div class="card">
							<div class="card-header" id="faqHeading-1">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
										<span class="badge">1</span>What is Your Food?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
								<div class="card-body">
									<p>Your Food is an online table reservation service that brings together hundreds of restaurants.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-2">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
										<span class="badge">2</span>In all of India ?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
								<div class="card-body">
									<p>For the moment our partners are only located in india, but don't worry, soon you will find us near you!</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-3">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
										<span class="badge">3</span>How to use the site?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
								<div class="card-body">
									<p>It's simple, just search for a neighborhood or district in the search bar and a list of partner restaurants will appear, choose and book!</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-4">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
										<span class="badge">4</span> And the promotions in all this?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
								<div class="card-body">
									<p>We do not forget you, our partners often offer promotions when booking a table, treat yourself &#128523; !</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-5">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
										<span class="badge">5</span>I am a restaurateur and I would like to become a partner, how do I do this?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
								<div class="card-body">
									<p>First of all welcome to you future partner! You want to offer your restaurant and enjoy a booking service with a personal admin panel, it's very simple to join our list of partners, just go through the registration page, then in register, the "Like restaurant" tab and follow the steps.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-6">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
										<span class="badge">6</span> What do you offer for your partners?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
								<div class="card-body">
									<p>We have a fast, simple and complete reservation system. An admin panel with the possibility of managing/modifying or deleting the number of tables offered, the management of the menus offered by the restaurant, the possibility of accepting or rejecting a reservation with automatic confirmation email, management of the restaurant profile and much more Again ! So do not hesitate and join us!</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-7">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
										<span class="badge">7</span> I have other questions?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
								<div class="card-body">
									<p>Contact Us in This <span><a href="mailto:gdgamingofficial202@gmail.com"> Email </a></span> And we will respond within 48 hours.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'template/instagram.php'; ?>

	<?php include 'template/footer.php'; ?>

	<?php include 'template/script.php'; ?>
</body>