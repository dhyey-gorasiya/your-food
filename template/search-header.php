<!-- Search-header.php -->
<section>
	<div class="background-header">

	</div>
</section>

<div class="ftco-section-reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-12 reservation">
				<div class="block-17">
					<!--  -->
					<form action="restaurant-list.php" method="POST" class="form-inline justify-content-center form-header">
						
						<div class="form-group mb-2">
						
							<select name="area" class="custom-select mr-sm-2 populate" data-plugin-selectTwo required="">
								<option selected disabled>Choose your City</option>
								<?php
								$con = connect();
								$sql = "SELECT * FROM `locations` WHERE isActive='1';";
								$result = $con->query($sql);
								foreach ($result as $r) {
								?>
									<option value="<?php echo $r['id']; ?>"><?php echo $r['location_name']; ?></option>
								<?php } ?>
							</select>
						</div>
						<input type="submit" class="btn btn-outline-warning mb-2 btn-header" name="find" value="Search" style="margin-left: 20px;">
					</form>
					<!--  -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END -->