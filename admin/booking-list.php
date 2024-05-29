<!-- booking-list.php -->
<?php include 'template/header.php';
if (!isset($_SESSION['isLoggedIn'])) {
	echo '<script>window.location="login.php"</script>';
}

?>

<body>
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
					<h2>User</h2>
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="accueil.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>User</span></li>
							<li><span>Manage Users</span></li>
						</ol>
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>
				<!-- start: page -->
				<section class="panel">
					<header class="panel-heading">
						<h2 class="panel-title">All Users</h2>
						
					</header>
					<div class="panel-body">
						<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" data-plugin-options='{"searchPlaceholder": "Search"}'>
							<thead>
								<tr>
									<th>No.</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Phone</th>
									<th>E-Mail</th>
									<th>Password</th>
									<th class="hidden-phone">Status</th>
									<th class="hidden-phone">View</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$count = 1;
								include 'dbCon.php';
								$con = connect();
								$res_id = $_SESSION['id'];
								$sql = "SELECT * FROM `rc_info` where role = 2;";
								$result = $con->query($sql);
								foreach ($result as $r) {
								?>
									<tr class="gradeX">
										<td class="center hidden-phone"><?php echo $count; ?></td>
										<td><?php echo $r['first_name']; ?></td>
										<td><?php echo $r['rc_name']; ?></td>
										<td><?php echo $r['phone']; ?></td>
										<td><?php echo $r['email']; ?></td>
										<td><?php echo $r['password']; ?></td>
										
										
										<td class="center hidden-phone">
											
											<a href="user_manage.php?menu_id=<?php echo $r['id'];?>&status=<?php echo $r['isActive'];  ?>" class="btn btn-danger btn-sm" onclick="if (!Done()) return false; "><?php echo $r['isActive'] == 1 ? "deactive" :  "active" ?> </a>
										</td>
										<td class="center hidden-phone">
											<a href="user_update.php?menu_id=<?php echo $r['id']; ?>" class="btn btn-warning btn-block btn-sm" onclick="if (!Done()) return false; ">View</a>
										</td>
									</tr>
								<?php $count++;
								} ?>
							</tbody>
						</table>
					</div>
				</section>
				<!-- end: page -->
			</section>
		</div>
		<?php include 'template/right-bar.php'; ?>
	</section>
	
	<?php include 'template/script-res.php'; ?>
</body>

</html>