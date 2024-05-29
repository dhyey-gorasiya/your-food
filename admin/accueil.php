<!-- accueil.php -->
<?php include 'template/header.php';
if (!isset($_SESSION['isLoggedIn'])) {
	echo '<script>window.location="login.php"</script>';
}
?>
<?php

include 'config.php';
?>

<body>
	<style>
	* {
	box-sizing: border-box;
	}

	body {
	font-family: Arial, Helvetica, sans-serif;
	}

	/* Float four columns side by side */
	.column {
	float: left;
	width: 25%;
	padding: 0 10px 20px;
	}

	.dot {
	float: left;
	width: 50%;
	padding: 0 10px 20px;
	}

	/* Remove extra left and right margins, due to padding */
	.row {margin: 0 -5px;}

	/* Clear floats after the columns */
	.row:after {
	content: "";
	display: table;
	clear: both;
	}

	/* Responsive columns */
	@media screen and (max-width: 600px) {
	.column {
		width: 100%;
		display: block;
		margin-bottom: 20px;
	}
	}

	@media screen and (max-width: 600px) {
	.dot {
		width: 100%;
		display: block;
		margin-bottom: 20px;
	}
	}

	.row .column .card h3{
		font-size: 3rem;
		color:var(--black); 
	}

	.row .dot .card h3{
		font-size: 3rem;
		color:var(--black); 
	}


	/* Style the counter cards */
	.card {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	padding: 16px;
	text-align: center;
	background-color: #f1f1f1;
	}
	</style>
	
	<section class="body">
		<!-- start: header -->
		<?php include 'template/top-bar.php'; ?>
		<!-- end: header -->
		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<?php include 'template/left-bar.php'; ?>
			<!-- end: sidebar -->
			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Dashboard</h2>
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="accueil.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Dashboard</span></li>
							
						</ol>
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>
				<!-- start: page -->
				<section class="panel">
					<header class="panel-heading">
						
						<h2 class="panel-title">Welcome to your Admin Panel !</h2> <br>
						
					</header>
					<br>
					<div class="row">
						<div class="column">
							<div class="card">
							<div class="box">
									<div class="card">
									<?php 
										$select_products = mysqli_query($conn, "SELECT * FROM `rc_info` where role = 2") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Users</h3>
							</div>
						</div>
						<div class="column">
							<div class="card">
							<div class="box">
									<div class="card">
									<?php 
										$select_products = mysqli_query($conn, "SELECT * FROM `rc_info` where role = 1") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Restaurants</h3>
							</div>
						</div>
						<div class="column">
							<div class="card">
								<div class="box">
									<div class="card">
									<?php 
										$select_products = mysqli_query($conn, "SELECT * FROM `locations`") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Citys</h3>
							</div>
						</div>
						<div class="column">
							<div class="card">
							<div class="box">
									<div class="card">
									<?php 
										$select_products = mysqli_query($conn, "SELECT * FROM `categories`") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Categorys</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="dot">
							<div class="card">
							<div class="box">
									<div class="card">
									<?php 
										$select_products = mysqli_query($conn, "SELECT * FROM `booking_details`") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Bookings</h3>
							</div>
						</div>
						<div class="dot">
							<div class="card">
							<div class="box">
									<div class="card">
									<?php 
										$select_products = mysqli_query($conn, "SELECT * FROM `booking_details`") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
										$number_of_products *= 50;
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Payments</h3>
							</div>
						</div>
					</div>
				</section>
				<!-- end: page -->
			</section>
		</div>

	<?php include 'template/right-bar.php'; ?>
	</section>
	<script type="text/javascript">
		function Done() {
			return confirm("Are you sure?");
		}
	</script>

	<?php include 'template/script-res.php'; ?>
</body>

</html>