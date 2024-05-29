<!-- invoice.php -->
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
					<h2>Restaurant Update</h2>
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="accueil.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Restaurant</span></li>
							<li><span>Manage Restaurant</span></li>
							<li><span>Restaurant Update</span></li>
						</ol>
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>
				<!-- start: page -->
				<section>
        <?php
          include 'dbCon.php';
          $res_id ="";
          
            $res_id = $_GET['res_id'];
        
          $con = connect();


          $sql = "SELECT * FROM `rc_info` where id = $res_id;";
          $result = $con->query($sql);
          $row =  mysqli_fetch_assoc($result);

        if (isset($_POST['savephoto'])) {
          $targetDirectory = "user-image/";
          // get the file name
          $file_name = $_FILES['image']['name'];
          // get the mime type
          $file_mime_type = $_FILES['image']['type'];
          // get the file size
          $file_size = $_FILES['image']['size'];
          // get the file in temporary
          $file_tmp = $_FILES['image']['tmp_name'];
          // get the file extension, pathinfo($variable_name,FLAG)
          $extension = pathinfo($file_name, PATHINFO_EXTENSION);
          //register as customer
         
        }
        ?>
        <div class="contanier">
          <div class="row">
            <div class="col-lg-3">
              <!--left col-->
              <div class="panel panel-default">
                <div class="panel-body">
                  <div id="image-container " class="stretch">
                    <img class="img-profile" style="height: 250px;width: 250px;border-radius: 10px; border: 2px solid #ffba3b;" title="profile image" data-target="#logomodal" data-toggle="modal" src="<?php echo 'user-image/' . $row['logo']; ?>">
                  </div>
                </div>
                <ul class="list-group">
                  <li class="list-group-item text-muted" style="text-align: center;">Profil Restaurant</li>
                  <li class="list-group-item text-right"><span class="pull-left"><strong>Restaurant</strong></span>
                    <?php echo '<div style="text-transform: capitalize;">' . $row['rc_name'] . '</div>'; ?>
                  </li>
                  
                  <li class="list-group-item text-right"><span class="pull-left"><strong>Open / Close</strong></span>
                    <?php
                    $id = $_SESSION['id'];
                    $con = connect();
                    $sql = "SELECT `opening_res` FROM `rc_info` WHERE id = $id;";
                    $result = $con->query($sql);
                    foreach ($result as $r) {
                    ?>
                      <div class="text-right" style="color: rgb(63, 153, 63); font-weight: 600;" class="opening">Open :<?php echo date('H:i', strtotime($r['opening_res'])); ?> h</div>
                    <?php
                    }
                    ?>
                    <?php
                    $id = $_SESSION['id'];
                    $con = connect();
                    $sql = "SELECT `closing_res` FROM `rc_info` WHERE id = $id;";
                    $result = $con->query($sql);
                    foreach ($result as $r) {
                    ?>
                      <div style="color: rgb(63, 153, 63); font-weight: 600;" class="opening">Close : <?php echo date('H:i', strtotime($r['closing_res'])); ?> h</div>
                    <?php
                    }
                    ?>
                  </li>
                </ul>
                <!-- /.box -->
              </div>
            </div>
            <div class="col-lg-9">
            <form class="form-horizontal" method="POST" action="<?php echo $_SERVER[ 'PHP_SELF']."?res_id=$res_id";?>">
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="Fname">Restaurant Name :</label>
                      <div class="col-md-8">
                        <input type="text" name="fullname" class="form-control" required="" placeholder="Name" value="<?php echo $row['rc_name']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="Lname">E-mail :</label>
                      <div class="col-md-8">
                        <input type="email" name="email" class="form-control" required="" placeholder="Email" value="<?php echo $row['email']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="Lname">WebSite :</label>
                      <div class="col-md-8">
                        <input type="text" name="website" class="form-control" placeholder="Website" value="<?php echo $row['website']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="Mname">Phone :</label>
                      <div class="col-md-8">
                        <input type="text" name="phone" class="form-control" required="" minlength="10" maxlength="10" placeholder="Phone" value="<?php echo $row['phone']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="CustomerAddress">Category :</label>
                      <div class="col-md-8">
                        <select data-plugin-selectTwo class="form-control" name="category" required="">
                          <option value=""> -Select Category- </option>
                          <?php
                          $sql = "SELECT * FROM `categories`;";
                          $result = $con->query($sql);
                          foreach ($result as $r) {
                            if ($row['category'] == $r['id']) {
                              echo  '<option SELECTED value="' . $r['id'] . '">' . $r['category_name'] . '</option>';
                            } else {
                              echo  '<option value="' . $r['id'] . '">' . $r['category_name'] . '</option>';
                            }
                          } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="CustomerAddress">Area :</label>
                      <div class="col-md-8">
                        <select data-plugin-selectTwo class="form-control " name="area" required="">
                          <option value=""> -Select Area- </option>
                          <?php
                          $sql = "SELECT * FROM `locations`;";
                          $result = $con->query($sql);
                          foreach ($result as $r) {
                            if ($row['location'] == $r['id']) {
                              echo  '<option SELECTED value="' . $r['id'] . '">' . $r['location_name'] . '</option>';
                            } else {
                              echo  '<option value="' . $r['id'] . '">' . $r['location_name'] . '</option>';
                            }
                          } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="Gender">Address :</label>
                      <div class="col-md-8">
                        <textarea name="address" id="" cols="30" rows="2" class="form-control" placeholder="Address"><?php echo $row['address']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="CustomerContact">Hours :</label>
                      <div class="col-md-4">
                        <?php
                        if (isset($_POST['save'])) {
                          $id = $_SESSION['id'];
                          $time = $_POST['opening_res'];
                          $sql2 = "INSERT INTO `rc_info` (`id`, `opening_res`) VALUES ('$id', '$time') ON DUPLICATE KEY UPDATE id = $id, opening_res = '$time'";
                          $result2 = $con->query($sql2);
                        }
                        ?>
                        <label for="opening_res">Openning :</label>
                        <?php
                        $id = $_SESSION['id'];
                        $con = connect();
                        $sql = "SELECT `opening_res` FROM `rc_info` WHERE id = $id;";
                        $result = $con->query($sql);
                        foreach ($result as $r) {
                        ?>
                          <input type="time" id="opening_res" name="opening_res" min="04:00" max="03:00" value="<?php echo date('H:i', strtotime($r['opening_res'])); ?>">
                        <?php
                        }
                        ?>
                      </div>
                      <div class="col-md-4">
                        <?php
                        if (isset($_POST['save'])) {
                          $id = $_SESSION['id'];
                          $time = $_POST['closing_res'];
                          $sql2 = "INSERT INTO `rc_info` (`id`, `closing_res`) VALUES ('$id', '$time') ON DUPLICATE KEY UPDATE id = $id, closing_res = '$time'";
                          $result2 = $con->query($sql2);
                        }
                        ?>
                        <label for="closing_res">Close :</label>
                        <?php
                        $id = $_SESSION['id'];
                        $con = connect();
                        $sql = "SELECT `closing_res` FROM `rc_info` WHERE id = $id;";
                        $result = $con->query($sql);
                        foreach ($result as $r) {
                        ?>
                          <input type="time" id="closing_res" name="closing_res" min="04:00" max="03:00" value="<?php echo date('H:i', strtotime($r['closing_res'])); ?>">
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="CustomerContact">Password :</label>
                      <div class="col-md-8">
                        <input type="password" name="password" class="form-control" required="" placeholder="Password" value="<?php echo $row['password']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7">
                      <label class="col-md-4 control-label" for="CustomerContact"></label>
                      
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--/col-sm-9-->
          </div>
          <!--/row-->
        </div>
        <!--/contanier-->
      </section>
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