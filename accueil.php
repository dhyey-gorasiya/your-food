<!-- accueil.php -->
<?php include 'dbCon.php'; ?>
<?php include 'template/header.php'; ?>

<body>

	<?php include 'template/nav-bar.php'; ?>
	<?php include 'template/search-header.php'; ?>
	<!-- End Header -->

	<!-- Row Offers -->
	<div class="newmian">
		<div class="content-box-new">
			<div class="fe-box commen">
				<h4>Best For You</h4>
				<div class="title-t">
					<p>Some exoticism ?</p>
					<div class="clear"></div>
				</div>
				<ul>
					<!-- Loop FOR, display each card with database restaurant's infos-->
					<?php
					$role = 1;
					$id = 1;
					$con = connect();
					for ($i = 1; $i < 100; $i++) {
						$sql = "SELECT * FROM `rc_info` WHERE id = $i AND role = $role AND isActive='1';";
						// Include cards template
						echo include 'box.php';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!--  -->
	<!-- Row World food -->
	<div class="newmian">
		<div class="content-box-new">
			<div class="fe-box commen">
				<h4>World food</h4>
				<div class="title-t">
					<p>Some exotisme ?</p>
					<div class="clear"></div>
				</div>
				<ul>
					<?php
					$role = 1;
					$category = 5;
					$con = connect();
					for ($i = 4; $i < 5; $i++) {
						$sql = "SELECT * FROM `rc_info` WHERE category = $category AND isActive='1' ORDER BY id DESC;";
						echo include 'box.php';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!--  -->
	<section class="section-padding ftco-section bg-light">
		<div class="container special-dish">
			<h4 style="text-align: center;">
				<i class="fas fa-head-side-mask"></i> Take care...
			</h4>
			<small style="text-align: center;">
			If the customer is very smart, he or she will be able to achieve the desired result. It is difficult because the times of bearing that great architect are left to assume, to reject the blinded ones that he will achieve, but otherwise, he will seek them less in the time of the body!<br>
			</small>
		</div>
	</section>

	<?php include 'template/instagram.php'; ?>

	<?php include 'template/footer.php'; ?>

	<?php include 'template/bootstrap.php'; ?>

	<?php include 'template/script.php'; ?>

	<script src="dashboard/assets/vendor/jquery/jquery.js"></script>
	<script src="dashboard/assets/vendor/select2/select2.js"></script>
	<script src="dashboard/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="js/owl.carousel.min.js"></script>

</body>

</html>