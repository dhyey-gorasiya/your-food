<!-- invoice.php -->
<?php include 'template/header.php';?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="assets/stylesheets/profile.css">


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
					<h2>User Update</h2>
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="accueil.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>User</span></li>
							<li><span>Manage Users</span></li>
							<li><span>User Update</span></li>
						</ol>
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>
				<!-- start: page -->
        <div class="inner-wrapper" style="margin-top: 1em;">
    <!-- start: sidebar -->

    <!-- end: sidebar -->
    <section role="main" class="content-body-align-center">
      <div class="booking-form-w3layouts" style="width: 25%;">
      

        <!-- start: page -->
        <section>
          <?php
          include 'dbCon.php';
          $res_id ="";
          
            $res_id = $_GET['menu_id'];
          

        
          $con = connect();


          $sql = "SELECT * FROM `rc_info` where id = $res_id;";
          $result = $con->query($sql);
          $row =  mysqli_fetch_assoc($result);

        
          ?>
          <div class="container-align-center">
            <div class="">
              <form class="form-horizontal" method="POST" action="<?php echo $_SERVER[ 'PHP_SELF']."?menu_id=$res_id";?>">
                <div class="">
                  <div class="form-inline">
                    <div class="col mb-2 d-flex py-4" style="background: white;">
                      <div class="align-self-center">
                        <p class="mb-0"><span class="color-span-title"><i class="fas fa-user fa-lg fa-fw mr-1" aria-hidden="true"></i> First Name : </span><br> <input type="text" name="first_name" class="form-control" required="" placeholder="first name" value="<?php echo $row['first_name']; ?>"></p>
                      </div>
                    </div>
                    <div class="col mb-2 d-flex py-4" style="background: white;">
                      <div class="align-self-center">
                        <p class="mb-0"><span class="color-span-title"><i class="fas fa-user-tag fa-lg fa-fw mr-1" aria-hidden="true"></i> Last Name : </span><br> <input type="text" name="fullname" class="form-control" required="" placeholder="last name" value="<?php echo $row['rc_name']; ?>"> </p>
                      </div>
                    </div>
                  </div>
                  <div class="form-inline">
                    <div class="col mb-2 d-flex py-4" style="background: white;">
                      <div class="align-self-center">
                        <p class="mb-0"><span class="color-span-title"><i class="fas fa-phone-square-alt fa-lg fa-fw mr-1" aria-hidden="true"></i> Phone : </span><br> <input type="number" name="phone" class="form-control" required="" placeholder="phone" value="<?php echo $row['phone']; ?>"></p>
                      </div>
                    </div>
                    <div class="col mb-2 d-flex py-4" style="background: white;">
                      <div class="align-self-center">
                        <p class="mb-0"><span class="color-span-title"><i class="far fa-envelope fa-lg fa-fw mr-1" aria-hidden="true"></i> Mail : </span><br> <input type="email" name="email" class="form-control" required="" placeholder="Email" value="<?php echo $row['email']; ?>"></p>
                      </div>
                    </div>
                  </div> 
                  <div class="form-inline">
                    <div class="col mb-2 d-flex py-4" style="background: white;">
                      <div class="align-self-center">
                        <p class="mb-0"><span class="color-span-title"><i class="fas fa-lock fa-lg fa-fw mr-1" aria-hidden="true"></i></i> Password :</span><br> <input type="password" name="password" class="form-control" required="" placeholder="Mot de passe" value="<?php echo $row['password']; ?>"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
      <!-- end: page -->
    </section>
  </div>
		<?php include 'template/right-bar.php'; ?>
	</section>

	<!-- Vendor -->
	<script src="assets/vendor/jquery/jquery.js"></script>
	<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>

	<!-- Theme Custom -->
	<script src="assets/javascripts/theme.custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="assets/javascripts/theme.init.js"></script>

	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>