<!-- select-menu.php -->
<?php
if (isset($_POST['selectChair'])) {
	include 'dbCon.php';
	$con = connect();

	$res_id = $_POST['res_id'];
	$reservation_name = $_POST['reservation_name'];
	$reservation_firstname = $_POST['reservation_firstname'];
	$reservation_phone = $_POST['reservation_phone'];
	$reservation_email = $_POST['reservation_email'];
	$reservation_date = $_POST['reservation_date'];
	$reservation_time = $_POST['reservation_time'];
	$chair = $_POST["chair"];

	echo $chair;


	include 'template/header.php'; ?>

	<link rel="stylesheet" href="css/css/card.css">

	<body>

		<?php include 'template/nav-bar.php'; ?>
		<!-- END nav -->
		<style>
			.color-span {
				font-weight: 500;
				color: #ffb03b;
			}

			.color-span-title {
				font-weight: 700;
				color: grey;
				font-family: inherit;
			}
		</style>

		<section class="ftco-section" style="margin-top: 10em;">
			<div class="container">
				<div class="booking-form-w3layouts">
					<h2 class="sub-heading-agileits pb-2">Confirm your reservation</h2>
					<div class="block-9 mt-5 mb-4">
						<div class="">
							<h2 class="h4 mb-4" style="color: grey;">Reservation summary</h2>
							<div class="d-flex ftco-animate">
								<div class="col-md-12 flex-column">
									<div class="row d-block flex-row">
										<div class="col mb-2 d-flex py-4 border" style="background: white;">
											<div class="align-self-center">
												<p class="mb-0"><span class="color-span-title"><i class="fas fa-user-tag fa-lg fa-fw mr-4" aria-hidden="true"></i> Last Name :</span> <span class="color-span"><?php echo $reservation_name; ?></span></p>
											</div>
										</div>
										<div class="col mb-2 d-flex py-4 border" style="background: white;">
											<div class="align-self-center">
												<p class="mb-0"><span class="color-span-title"><i class="fas fa-user fa-lg fa-fw mr-4" aria-hidden="true"></i> First Name : </span> <span class="color-span"><?php echo $reservation_firstname; ?></span></p>
											</div>
										</div>
										<div class="col mb-2 d-flex py-4 border" style="background: white;">
											<div class="align-self-center">
												<p class="mb-0"><span class="color-span-title"><i class="fas fa-phone-square-alt fa-lg fa-fw mr-4" aria-hidden="true"></i> Phone : </span> <span class="color-span"><?php echo $reservation_phone; ?></span></p>
											</div>
										</div>
										<div class="col mb-2 d-flex py-4 border" style="background: white;">
											<div class="align-self-center">
												<p class="mb-0"><span class="color-span-title"><i class="far fa-envelope fa-lg fa-fw mr-4" aria-hidden="true"></i> Mail : </span> <span class="color-span"><?php echo $reservation_email; ?></span></p>
											</div>
										</div>
										<div class="col mb-2 d-flex py-4 border" style="background: white;">
											<div class="align-self-center">
												<p class="mb-0"><span class="color-span-title"><i class="fas fa-calendar-alt fa-lg fa-fw mr-4" aria-hidden="true"></i> Date : </span> <span class="color-span"><?php echo date("d/m/Y", strtotime($reservation_date)); ?></span></p>
											</div>
										</div>
										<div class="col mb-2 d-flex py-4 border" style="background: white;">
											<div class="align-self-center">
												<p class="mb-0"><span class="color-span-title"><i class="fas fa-clock fa-lg fa-fw mr-4" aria-hidden="true"></i> Hour : </span> <span class="color-span"><?php echo $reservation_time; ?></span></p>
											</div>
										</div>
										<div class="col mb-2 d-flex py-4 border" style="background: white;">
											<div class="align-self-center">
												<p class="mb-0"><span class="color-span-title"><i class="fas fa-utensils fa-lg fa-fw mr-4" aria-hidden="true"></i> Table : </span>
													<?php 
													
														$c_id = $_POST['chair'];
														$sql5 = "SELECT * FROM `restaurant_personne` WHERE id = '$c_id';";
														$result5 = $con->query($sql5);
														foreach ($result5 as $r5) {
													?>
															<span class="color-span"><?php echo $r5['table_no']; ?></span>
													<?php }
													 ?>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<form action="manage-insert.php" method="POST" id="payment_form" onsubmit="return false;">
						<div class="col-lg-12" style="text-align: center;">
							<input type="hidden" name="res_id" value="<?php echo $res_id; ?>" id="res_id">
							<input type="hidden" name="reservation_name" value="<?php echo $reservation_name; ?>" id="reservation_name">
							<input type="hidden" name="reservation_firstname" value="<?php echo $reservation_firstname; ?>" id="reservation_firstname"> 
							<input type="hidden" name="reservation_phone" value="<?php echo $reservation_phone; ?>"  id="reservation_phone">
							<input type="hidden" name="reservation_email" value="<?php echo $reservation_email; ?>"  id="reservation_email">
							<input type="hidden" name="reservation_date" value="<?php echo $reservation_date; ?>" id="reservation_date">
							<input type="hidden" name="reservation_time" value="<?php echo $reservation_time; ?>" id="reservation_time">

							<?php 
							// for ($s = 0; $s < count($_POST["chair"]); $s++) {
								$chr_id = $_POST['chair']; ?>
								<input type="hidden" name="chair" value="<?php echo $chr_id; ?>" id="chair">
							<!-- <?php } ?> -->

							<button value="Book" class="btn btn-warning" onclick="MakePayment()">Book</button>
						</div>
						
					</form>
					
				</div>
			</div>
		</section>

		<?php include 'template/instagram.php'; ?>

		<?php include 'template/footer.php'; ?>

		<?php include 'template/bootstrap.php'; ?>

		<?php include 'template/script.php'; ?>

		
		<script type="text/javascript">
			// loadUrl
			const loadUrl = (src) => {
				return new Promise((resolve) => {
					const script = document.createElement("script");
					script.src = src;

					script.onload = () => {
						resolve(true);
					};

					script.onerror = () => {
						resolve(false);
					};

					document.body.appendChild(script);
				});
			  };

			const MakePayment = async() => {
				
				const src = await loadUrl("https://checkout.razorpay.com/v1/checkout.js");
				if (!src) {
					alert("your Offline !");
					return;
				}
				
					let form = document.getElementById("payment_form");
						let res_id = document.getElementById("res_id").value;
						let reservation_name = document.getElementById("reservation_name").value;
						let reservation_firstname = document.getElementById("reservation_firstname").value;
						let reservation_phone = document.getElementById("reservation_phone").value;
						let reservation_email = document.getElementById("reservation_email").value;
						let reservation_date = document.getElementById("reservation_date").value;
						let reservation_time = document.getElementById("reservation_time").value;
						let chair = document.getElementById("chair").value;
				var options = {
					key: "rzp_test_UTtACvJG9YAyXK", // Enter the Key ID generated from the Dashboard
					amount: 50*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
					currency: "INR",
					name: "Your Food",
					description: "Checkout Online Payment",
					image:
					"https://i.ibb.co/JrwXSFw/Your-Food-1.png",
					// order_id: "6394309440c7d50b8ee5d22f", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
					handler: function (response) {
					

						let obj = {
							"reservation_name":reservation_name,
							"res_id":res_id,
							"reservation_firstname":reservation_firstname,
							"reservation_phone":reservation_phone,
							"reservation_email":reservation_email,
							"reservation_date":reservation_date,
							"reservation_time":reservation_time,
							"chair":chair
						}

						const xmlhttp = new XMLHttpRequest();

						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								swal({
									title: "Thank you !",
									text: "The restaurant will send you a Confirmation Email soon.",
									icon: "success",
									button: "ok",
								}).then(function() {
									window.location = "accueil.php";
								});
							}
						};
						
						xmlhttp.open("POST", "payment_success.php",true);
						xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xmlhttp.send(`res_id=${res_id}&reservation_name=${reservation_name}&reservation_firstname=${reservation_firstname}&reservation_phone=${reservation_phone}&reservation_email=${reservation_email}&reservation_date=${reservation_date}&reservation_time=${reservation_time}&chair=${chair}`);
						
					},
					prefill: {
						name: reservation_name,
						email:reservation_email,
						contact: reservation_phone,
					},
					theme: {
						color: "#ffb03b",
					}
				}

				const payMentObject = new window.Razorpay(options);
				payMentObject.open();
				payMentObject.on("payment.failed", function (response) {
						setPaymentError((prev) => {
						return {
							...prev,
							reason: response.error.reason,
						};
					});
				});

				return true;
			}
			
		</script>
	</body>
	</html>
