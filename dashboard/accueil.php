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
	width: 32%;
	padding: 0 10px;
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

	.row .column .card h3{
		font-size: 3rem;
		color:var(--black); 
	}


	/* Style the counter cards */
	.card {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	padding: 16px;
	text-align: center;
	background-color: #ffba3b;
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
						
						<h2 class="panel-title">Welcome to your Admin Panel of <span class="name"><?php echo $_SESSION['name']; ?></span> !</h2> <br>
					</header>
					<br>
					<div class="row">
						<div class="column">
							<div class="card">
							<div class="box">
									<div class="card">
									<?php 
										$res_id = $_SESSION['id'];
										$select_products = mysqli_query($conn, "SELECT * FROM `booking_details` where res_id = '$res_id'") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Bookings</h3>
							</div>
						</div>

						<div class="column">
							<div class="card">
							<div class="box">
									<div class="card">
									<?php 
										$res_id = $_SESSION['id'];
										$select_products = mysqli_query($conn, "SELECT * FROM `menu_item` where res_id = '$res_id'") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Menu Item</h3>
							</div>
						</div>
						
						<div class="column">
							<div class="card">
								<div class="box">
									<div class="card">
									<?php 
										$res_id = $_SESSION['id'];
										$select_products = mysqli_query($conn, "SELECT * FROM `restaurant_tables` where res_id = '$res_id'") or die('query failed');
										$number_of_products = mysqli_num_rows($select_products);
									?>
									<h3><?php echo $number_of_products; ?></h3>
									</div>
								</div>
							<h3>Total Persons</h3>
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