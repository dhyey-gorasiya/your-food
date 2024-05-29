<!-- booking-list.php -->
<?php
include 'template/header.php';
include 'template/nav-bar.php'; 
if (!isset($_SESSION['isLoggedIn'])) {
	echo '<script>window.location="login.php"</script>';
  }
  
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="css/css/profile.css">

<body>
	<section class="body">
		<!-- start: header -->
	
		<!-- end: header -->
		<div class="inner-wrapper">
			<!-- start: sidebar -->
			
            <br><br><br><br>
			<!-- end: sidebar -->
			<section role="main" class="content-body">
				<header class="page-header">
					
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							
						</ol>
						
					</div>
				</header>
				<!-- start: page -->
				<section class="panel">
					
					<div class="panel-body">
						<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" data-plugin-options='{"searchPlaceholder": "Search"}'>
							<thead>
								<tr>
									<th>N°</th>
									<th>Restaurant Name</th>
									<th>Phone</th>
									<th>E-Mail</th>
									<th>Date</th>
									<th>Hour</th>
									<th class="hidden-phone">Status</th>
									<th class="hidden-phone">Action</th>
									<th class="hidden-phone">Details Tables/persons</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$count = 1;
								include 'dbCon.php';
								$con = connect();
								$c_id = $_SESSION['id'];
								$sql = "SELECT * FROM booking_details as book JOIN rc_info as rc ON rc.id = book.res_id AND  book.c_id = '$c_id'";
								$result = $con->query($sql);
								foreach ($result as $r) {
								?>
									<tr class="gradeX">
										<td class="center hidden-phone"><?php echo $count; ?></td>
										<td><?php echo $r['rc_name']; ?></td>
										<td><?php echo $r['phone']; ?></td>
										<td><?php echo $r['email']; ?></td>
										<td><?php echo $r['booking_date']; ?></td>
										<td><?php echo $r['booking_time']; ?></td>
										<td class="left hidden-phone">
											<?php
											$status = $r['status'];
											if ($status == 0) {
											?>
												<p class="text-danger"><i class="far fa-calendar-times"></i> Cancel</p>
											<?php } else { ?>
												<p class="text-success"><i class="far fa-calendar-check"></i> Confirmed</p>
											<?php } ?>
										</td>
										<td class="center hidden-phone">
											
												<a href="cancel.php?breject_id=<?php echo $r['c_id']; ?>&booking-number=<?php echo $r['booking_id']; ?>" class="btn btn-danger btn-sm btn-block" onclick="if (!Done()) return false; ">Cancel</a>
											
										</td>
										<td class="center hidden-phone">
											<a href="details.php?booking-number=<?php echo $r['booking_id']; ?>" class="btn btn-warning btn-sm btn-block">Details</a>
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
		
	</section>
    <?php include 'template/instagram.php'; ?>

<?php include 'template/footer.php'; ?>

<?php include 'template/bootstrap.php'; ?>

<?php include 'template/script.php'; ?>

	
</body>

</html>