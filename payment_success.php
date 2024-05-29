<?php

session_start();
include_once 'dbCon.php';
$con = connect();
$bdinsert = false;
	$u_id = $_SESSION['id'];
	$res_id = $_POST['res_id'];
	$reservation_name = $_POST['reservation_name'];
	$reservation_firstname = $_POST['reservation_firstname'];
	$reservation_phone = $_POST['reservation_phone'];
	$reservation_email = $_POST['reservation_email'];
	$reservation_date = $_POST['reservation_date'];
	$reservation_time = $_POST['reservation_time'];

	date_default_timezone_set("Europe/Paris");
	$make_time = date("h:i:sa");
	$make_date = date("Y-m-d");
	$booking_id = uniqid();

	$iquery = "INSERT INTO `booking_details`(`booking_id`,`res_id`,`c_id`,`make_date`, `make_time`, `name`, `first_name`,`phone`, `email`, `booking_date`, `booking_time`) 
				VALUES ('$booking_id','$res_id','$u_id','$make_date','$make_time','$reservation_name','$reservation_firstname','$reservation_phone','$reservation_email','$reservation_date','$reservation_time');";
	if ($con->query($iquery) === TRUE) {
		$bdinsert = true;
	} else {
		echo "Error: " . $iquery . "<br>" . $con->error;
	}

	$cinsert = false;
	if ($bdinsert == true) {
		// for ($q = 0; $q < count($_POST["chair"]); $q++) {
			$c_id = $_POST['chair'];
			$table_no = "";
			$sql5 = "SELECT * FROM `restaurant_personne` WHERE id = '$c_id';";
			$result5 = $con->query($sql5);
			foreach ($result5 as $r5) {
				$table_no = $r5['table_no'];
			}
			$ciQuery = "INSERT INTO `booking_table`(`booking_id`, `table_id`, `table_no`) 
						VALUES ('$booking_id','$c_id','$table_no');";
			if ($con->query($ciQuery) === TRUE) {
				$cinsert = true;
			} else {
				echo "Error: " . $ciQuery . "<br>" . $con->error;
			}
		// }
	}

	if ($bdinsert == true && $cinsert == true) {
		echo '<script>
                    swal({
                        title: "Thank you !",
                        text: "The restaurant will send you a Confirmation Email soon.",
                        icon: "success",
                        button: "ok",
                    }).then(function() {
                        window.location = "accueil.php";
                    });
                    </script>';
	} else {
		echo "Error: " . $iquery . "<br>" . $con->error;
		echo "Error: " . $ciQuery . "<br>" . $con->error;
		echo "Error: " . $iquery . "<br>" . $con->error;
	}

    echo "ddd";

?>